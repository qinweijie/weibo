<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

class StaticPagesController extends BaseController
{
    public function home()
    {
        return view('static_pages/home');
    }

    public function help()
    {
        return view('static_pages/help');
    }

    public function about()
    {
        return view('static_pages/about');
    }
}
