<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * product controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $products = Product::all();
        //$products = app('db')->select("SELECT * FROM cou");

        return response()->json($products);

        //return "hello";
    }

    //
}
