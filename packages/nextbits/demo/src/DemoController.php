<?php

namespace Nextbits\Demo;

use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    public function login()
    {
        $data = [];
        return view('demo::login', $data);
    }

    public function register()
    {
        $data = ["test_value" => "Testing"];
        return view('demo::register', $data);
    }
}
