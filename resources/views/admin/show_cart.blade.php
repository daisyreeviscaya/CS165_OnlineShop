@extends('products.index')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User's Cart</div>

                <div style="color:black"class="panel-body">
                    <?php
                        use App\Cart;
                        $cart_id = DB::table('carts')->max('id');
                        if (!is_null($cart_id)) {
                          // $cart = DB::table('carts')->where('id',$cart_id )->get();
                          $cart = Cart::find($cart_id);
                          $cart_status = $cart->status;
                          $orders = DB::table('orderdetails')->where('cart_id',$cart_id )->get();
                        }


                    ?>
                    @if(is_null($cart_id) )
                      <div class="col-md-4">
                        User's cart is empty.
                      </div>
                      <div class="col-md-4">
                        <a  href = "{{url('/admin/shop')}}" type="submit"  class="btn btn-primary pull-right" role = "button">
                            Start Shopping
                        </a>
                      </div>
                    @elseif($cart_status == "sold")
                      <div class="col-md-4">
                        User's cart is empty.
                      </div>
                      <div class="col-md-4">
                        <a  href = "{{url('/admin/shop')}}" type="submit"  class="btn btn-primary pull-right" role = "button">
                            Start Shopping
                        </a>
                      </div>
                    @else
                        <div class="row">
                          <div class="col-md-4">
                            <strong> Product </strong>
                          </div>
                          <div class="col-md-4">
                            <strong>Quantity</strong>
                          </div>
                        </div>
                        @foreach ($orders as $order)
                          <vr>
                           <div class="row">
                             <div class="col-md-4">
                               {{$order->product_name}}
                             </div>
                             <div class="col-md-4">
                               {{$order->quantity}}
                             </div>
                             <div class="col-md-4">
                              <form class="form-horizontal" action="{{ url('/admin/cart_remove') }}" method="post" >
                      {{csrf_field()}}
                                <input type="hidden" value="{{$client_id}}" name="client_id"\>
                                <input type="hidden" value="{{$order->cart_id}}" name="cart_id"\>
                                <input type="hidden" value="{{$order->id}}" name="order_id"\>
                                <input type="hidden" value="{{$order->product_id}}" name="product_id"\>
                                <button type="submit" class="btn btn-raised btn-danger">
                                    Remove from Cart
                                </button>
                              </form>
                             </div>
                           </div>
                        @endforeach
                        <br>
                        <div class="row">
                          <div class="col-md-4">
                            <form class="form-horizontal" action="{{ url('/admin/push_cart') }}" method="post" >
                              {{csrf_field()}}
                              <input type="hidden" value="{{$client_id}}" name="client_id"\>
                              <input type="hidden" value="{{$order->cart_id}}" name="cart_id"\>
                              <button type="submit" class="btn btn-raised btn-primary pull-right">
                                  Push Cart
                              </button>
                            </form>
                          </div>
                          <div class="col-md-2">
                            <form class="form-horizontal" action="{{ url('/admin/cart_cancel') }}" method="post" >
                    {{csrf_field()}}
                              <input type="hidden" value="{{$client_id}}" name="client_id"\>
                              <input type="hidden" value="{{$order->cart_id}}" name="cart_id"\>
                              <button type="submit" class="btn btn-raised btn-danger pull-left">
                                  Cancel Order
                              </button>
                            </form>
                          </div>
                          <div class="col-md-4">
                            <a href="/admin/shop" class="btn btn-raised btn-success pull-left">Continue Shopping</a>
                          </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
