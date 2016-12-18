<?php

namespace App\Http\Controllers;
use App\Products;
use View;
use Form;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view('products/index');
    }

    public function show(Request $request)
    {
      $id = $request->input('id');

    	return View::make('products.show')->with('id', $id);
    }
    public function User(){
      $this->belongsTo(App/User);
    }
}
