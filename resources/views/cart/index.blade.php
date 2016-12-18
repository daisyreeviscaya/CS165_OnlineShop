@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Order History</div>

                <div style="color:black" class="panel-body">
                    <?php
                      //$cart_id = DB::table('carts')->select('id')->where('user_id', Auth::id())->where('status', 'sold')->get()->first();
                      $carts = DB::table('carts')->where('user_id', Auth::id())->where('status', 'sold')->get();
                      $cart_counter = 0;
                      //$orders = DB::table('orderdetails')->where('cart_id', $cart_id)->orderBy('created_at','desc')->get()->first();

                    ?>

                    @if ($carts->count() == 0)
                          It seems like you haven't ordered anything yet.
                    @else
                        @foreach($carts as $cart)

                            <?php

                                $cart_counter +=1;
                                $orders = DB::table('orderdetails')->where('cart_id', $cart->id)->get();


                             ?>
                             <strong>Order Number {{$cart_counter}}</strong>
                             @foreach($orders as $order)
                              <?php
                                  $product = DB::table('products')->where('id', $order->product_id)->get()->first();
                               ?>
                               <div class="row">
                                 <div class="col-md-4">
                                   <strong> Product </strong>
                                 </div>
                                 <div class="col-md-8">
                                   {{$product->productname}}
                                 </div>
                               </div>

                               <div class="row">
                                 <div class="col-md-4">
                                   <strong> Description </strong>
                                 </div>
                                 <div class="col-md-8">
                                   {{$product->description}}
                                 </div>
                               </div>

                               <div class="row">
                                 <div class="col-md-4">
                                   <strong> Quantity </strong>
                                 </div>
                                 <div class="col-md-8">
                                   {{$order->quantity}}
                                 </div>
                               </div>

                               <div class="row">
                                 <div class="col-md-4">
                                   <strong> Price </strong>
                                 </div>
                                 <div class="col-md-8">
                                   {{$product->price}}
                                 </div>
                               </div>



                                <br>
                             @endforeach
                             <div class="row">
                               <div class="col-md-4">
                                 <strong> Time Ordered </strong>
                               </div>
                               <div class="col-md-8">
                                 {{$order->created_at}}
                               </div>
                             </div>
                             <br>
                           <hr/>

                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
