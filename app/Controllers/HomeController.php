<?php

namespace App\Controllers;

use Hope\Http\Controller;

class HomeController extends Controller
{
    public function ping()
    {
        return ['status' => true, 'data' => 'pong'];
    }
}