<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use DB;
use Form;
use App\User;
use App\Products;
use App\Cart;
use App\Orderdetails;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function show_users(){ //parang products/index
      return view('admin/users');
    }
    public function show_products(){ //parang products/index
      return view('admin/products');
    }
    public function show(Request $request){//parang products/show
        $client_id = $request->input('client_id');
        return View::make('admin/show')->with('client_id', $client_id);
    }

    public function make_admin(Request $request){
        $client_id = $request->input('client_id');
        $user = User::find($client_id);
        $user->isAdmin = 1;
        $user->save();
        return View::make('admin/successful')->with('transaction', 1); //tramsaction 1 pag make_admin
    }

    public function delete(Request $request){
      $client_id = $request->input('client_id');
      $user = User::find($client_id);
      $user->delete();
      return View::make('admin/successful')->with('transaction', 2); //transaction 2 pag delete
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function shop(Request $request){
      $user_id = $request->input('client_id');
      return  view('admin/shop')->with('user_id', $user_id);
    }
    public function shop_show_product(Request $request){
      $user_id = $request->input('client_id');
      $product_id = $request->input('product_id');
      return  view('admin/shop_show_product')->with(['user_id' => $user_id, 'product_id' => $product_id]);
    }

    public function cart(Request $request){
        $client_id = $request->input('client_id');
        return View::make('admin/show_cart')->with('client_id', $client_id);
    }

    public function cart_add(Request $request)
    {
      $user_id = $request->input('user_id');
      $product_id = $request->input('product_id');
      $num_row = Cart::count();

      if ($num_row == 0) {
        Cart::create([
            'user_id' => $user_id,
            'status' => 'on_process', //update timestamp and status nito once na mag checkout
        ]);
      }else{
        $cart_id = DB::table('carts')->max('id');
        $this_cart = DB::table('carts')->where('id', DB::table('carts')->max('id'))->get()->first();
        if ($this_cart->status == "sold") {
          Cart::create([
              'user_id' => $user_id,
              'status' => 'on_process', //update timestamp and status nito once na mag checkout
          ]);
        }
      }



      $cart_id = DB::table('carts')->max('id');
      //$cart = Cart::find($cart_id);
      $product = Products::find($product_id);
      //$ids = DB::table('orderdetails')->select('product_id')->get();
      //$ids->toarray();
      Orderdetails::create([
        'cart_id' => $cart_id,
        'product_id' => $product_id,
        'product_name' => $product->productname,//tanggalin this
        'product_description' => $product->description,//and this
        'quantity' => 1,
        'product_price' => $product->price,
      ]);


      $product->quantity = $product->quantity - 1;
      $product->save();
      return View::make('admin/added')->with(['product'=> $product, 'transaction' => 1]);
    }

    public function cart_remove(Request $request){
      $order_id = $request->input('order_id');
      $cart_id = $request->input('cart_id');
      $product_id = $request->input('product_id');
      //$num_row = Orderdetails::where('cart_id', $cart_id)->count();
      $num_row = DB::table('orderdetails')->where('cart_id', $cart_id)->get()->count();
      if ($num_row <= 1){
        $cart = Cart::find($cart_id);
        $cart->delete();
      }

      $order = Orderdetails::find($order_id);
      $order->delete();


      $product = Products::find($product_id);
      $product->quantity = $product->quantity+1;
      $product->save();
      return View::make('admin/added')->with(['product'=> $product, 'transaction' => 2]);
    }

    public function cart_cancel(Request $request){
      $cart_id = $request->input('cart_id');
      $cart = Cart::find($cart_id);
      $cart->delete();
      $orders = Orderdetails::where('cart_id', $cart_id)->get();
      foreach ($orders as $order) {
        $product = Products::find($order->product_id);
        $product->quantity +=1;
        $product->save();
      }
      $orders = Orderdetails::where('cart_id', $cart_id)->delete();
      //$orders = DB::table('orderdetails')->where('cart_id', $cart_id)->get();

      return view('admin/successful')->with('transaction', 6);
    }

    public function cart_push(Request $request){
      $cart_id = $request->input('cart_id');
      $cart = Cart::find($cart_id);
      $cart->status = "sold";
      $cart->save();
      return view('admin/successful')->with('transaction', 7);

    }

    public function view_order_history(Request $request){
      $id = $request->input('client_id');
      return  View::make('admin/history')->with('user_id', $id);
    }

    public function create_product(){
      return view('admin/create_product');
    }
    public function edit_product(Request $request){
      $product_id = $request->input('id');
      return view('admin/edit_product')->with('product_id', $product_id);
    }

    public function update_product(Request $request){

      $product_id = $request->input('id');
      $product = Products::find($product_id);
      $product->productname = $request->input('productname');
      $product->description = $request->input('description');
      $product->price = $request->input('price');
      $product->quantity = $request->input('quantity');
      $product->save();
      return View::make('admin/successful')->with('transaction', 5);
    }


    public function store_product(Request $request){
      Products::create([
          'productname' => $request->input('productname'),
          'description' => $request->input('description'),
          'price' => $request->input('price'),
          'quantity' => $request->input('quantity'),

      ]);
      return View::make('admin/successful')->with('transaction', 3);

    }

    public function delete_product(Request $request){
        $product_id = $request->input('id');
        $product = Products::find($product_id);
        $product->delete();
        return View::make('admin/successful')->with('transaction', 4);

    }
    public function show_product(Request $request){
      $product_id = $request->input('id');
      return View::make('admin/show_product')->with('product_id', $product_id);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view_profile($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
