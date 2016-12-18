@extends('layouts.app')

@section('content')
<style>
.navbar-fixed-left {
  width: 180px;
  position: fixed;
  border-radius: 0;
  height: 100%;
  top: 0;
  left: 0;
  bottom: auto;
  overflow-y:scroll;
  background-color: #4D545D;
}

.navbar-fixed-left .navbar-nav > li {
  float: none;  /* Cancel default li float: left */
  width: 139px;
}

.navbar-fixed-left + .container {
  padding-left: 160px;
}

/* On using dropdown menu (To right shift popuped) */
.navbar-fixed-left .navbar-nav > li > .dropdown-menu {
  margin-top: -50px;
  margin-left: 140px;


}
.save_button {
    min-width: 170px;
    max-width: 170px;
    background-color: #4D545D;
    border: none;
    color:#e6e6e6;
    /*padding: 15px 32px;*/
    text-align: center;
    /*text-decoration: none;*/
    /*display: inline-block;*/
}
</style>
<?php
  $products = DB::table('products')->orderBy('id')->get();

?>
<div class="navbar navbar-inverse navbar-fixed-left">
  <a class="navbar-brand" href="#">Brand</a>
  <ul class="nav navbar-nav">

   @if ( count($products) > 1 )
     @foreach($products as $product)
     <!-- <strong>{{ $product->productname }}</strong> -->
     <form class="form-group" action="{{ url('/admin/shop_show_product') }}" method="post">
       {{ csrf_field() }}
          <!-- <strong>{{ $product->productname }}</strong> -->
         <input type="hidden" value="{{$product->id}}" name="product_id"\>
         <input type="hidden" value="{{$user_id}}" name="client_id"\>


         <input type="submit" value="{{ $product->productname }}" class="save_button"/>

         <!-- <a type="submit" value="{{ $product->productname }}" role = "button"></a> -->
     </form>


     @endforeach
    @endif
  </ul>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading clearfix ">
                <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Product Description</h4>
                    <form class="form-group" action="{{ url('/admin/cart') }}" method="get">
                      {{ csrf_field() }}
                         <!-- <strong>{{ $product->productname }}</strong> -->
                        <input type="hidden" value="{{$user_id}}" name="client_id"\>
                        <button type="submit" class="btn btn-raised btn-primary pull-right">
                            View Cart
                        </button>


                        <!-- <a type="submit" value="{{ $product->productname }}" role = "button"></a> -->
                    </form>

              </div>

                <div style="color:black" class="panel-body">
                  Select a product at the left side of the screen to see the full description.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
