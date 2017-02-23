# hope-test-app
Test Application using [Hope MicroFramework](https://github.com/pedrofaria/hope)

## Instalation with Docker

Initialize the app.

`$ docker-compose up -d`

Install vendor libraries.

`$ docker-compose exec php composer install`

## Endpoints

For this test app, there is two endpoints (you can check at config/routes.php).

* /
* /ping

