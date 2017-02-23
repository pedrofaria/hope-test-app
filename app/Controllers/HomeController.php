<?php

namespace App\Controllers;

use Hope\Http\Controller;

class HomeController extends Controller
{
    public function ping()
    {
        return ['status' => true, 'data' => 'pong', 'time' => date('Y-m-d H:i:s', time())];
    }

    public function name($name)
    {
        return ['name' => 'My name is '. $name];
    }
}