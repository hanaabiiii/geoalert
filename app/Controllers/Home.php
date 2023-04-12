<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('sample');
    }

    public function open()
    {
        return view('dashboard');
    }

    public function home()
    {
        return view('main');
    }

    public function admin_register()
    {
        return view('admin_register');
    }

    public function employee_register()
    {
        return view('employee_register');
    }

    public function user_login()
    {
        return view('login_page');
    }
}
