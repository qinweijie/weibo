<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

class UsersController extends BaseController
{
    /**
    * 注册
    */
    public function create(){
         return view('users.create');
    }
}
