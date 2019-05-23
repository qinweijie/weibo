<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class TestController extends Controller
{

    public function test(){
        $ratio=DB::table('qc_goods_category')->where('id',1)->first(['id', 'cat_name']);
        //$ratio=DB::select("select * from qc_goods_category");
        var_dump($ratio);
    }


}
