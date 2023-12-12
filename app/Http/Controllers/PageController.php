<?php
namespace App\Http\Controllers;


class PageController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function home()
    {
        return view('home');
    }

    public function services()
    {
        return view('services');
    }

}
