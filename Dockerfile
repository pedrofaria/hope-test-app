FROM php:7.0-apache
	
RUN apt-get update && apt-get install -y \
        libmcrypt-dev git zip nodejs \
        && docker-php-ext-install -j$(nproc) mcrypt

RUN { \
		echo '<VirtualHost *:80>'; \
        echo 'ServerAdmin webmaster@localhost'; \
        echo 'DocumentRoot /var/www/html/public'; \
        echo 'ErrorLog ${APACHE_LOG_DIR}/error.log'; \
        echo 'CustomLog ${APACHE_LOG_DIR}/access.log combined'; \
        echo '<Directory "/var/www/html/public">'; \
		echo 'AllowOverride all'; \
		echo '</Directory>'; \
		echo '</VirtualHost>'; \
	} | tee "$APACHE_CONFDIR/sites-available/000-default.conf"

RUN a2enmod rewrite

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
	# && php -r "if (hash_file('SHA384', 'composer-setup.php') === 'e115a8dc7871f15d853148a7fbac7da27d6c0030b848d9b3dc09e2a0388afed865e6a3d6b3c0fad45c48e2b5fc1196ae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
	&& php composer-setup.php \
	&& php -r "unlink('composer-setup.php');" \
	&& mv composer.phar /usr/bin/composer