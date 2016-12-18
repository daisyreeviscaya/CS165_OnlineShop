<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Cart;
use App\Products;
use App\Orderdetails;
use App\User;
use View;
use DB;
use Form;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$history = DB::table('cart')->get();
        return view('cart/index');

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
    public function show()
    {

        return view("cart/show");
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

    public function add(Request $request)
    {
      $product_id = $request->input('id');
      $num_row = Cart::count();

      if ($num_row == 0) {
        Cart::create([
            'user_id' => Auth::id(),
            'status' => 'on_process', //update timestamp and status nito once na mag checkout
        ]);
      }else{
        $cart_id = DB::table('carts')->max('id');
        $this_cart = DB::table('carts')->where('id', DB::table('carts')->max('id'))->get()->first();
        if ($this_cart->status == "sold") {
          Cart::create([
              'user_id' => Auth::id(),
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
      return View::make('cart/added')->with('product', $product);
    }

    public function remove(Request $request){
      // $user = Users::find(Auth::id()); //NEED TO CREATE ALL FOREIGN KEYS TO EACH TABLE IF NECESSARY
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
      return View::make('cart/remove')->with('productname', $product->productname);
      // Order::destroy($order_id);

    }

    public function push_cart(Request $request)
    {
      $cart_id = $request->input('cart_id');
      $cart = Cart::find($cart_id);
      $cart->status = "sold";
      $cart->save();
      return view('cart/push');
      //update timestamp and status ng cart once na mag checkout
      //before logout, icheck kung status is "sold". else prompt na mabubura yung ginawa niya
    }

    public function cancel(Request $request)
    {
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

      return view('cart/cancel');
    }
}
