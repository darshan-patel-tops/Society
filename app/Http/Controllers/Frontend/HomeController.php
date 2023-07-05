<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function emailcheck()
    {
        $productsData = "hey";
        // echo $productsData;
        json_encode("$productsData");
        // echo "checked";
    }
}
