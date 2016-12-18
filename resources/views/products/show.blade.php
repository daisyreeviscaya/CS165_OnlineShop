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
    color: #e6e6e6;
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
     <form class="form-group" action="{{ url('/products/show') }}" method="post">
       {{ csrf_field() }}
          <!-- <strong>{{ $product->productname }}</strong> -->
         <input type="hidden" value="{{$product->id}}" name="id"\>

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
                    <a  href = "{{url('/cart/show')}}" type="submit"  class="btn btn-primary pull-right" role = "button">
                        View Cart
                    </a>
              </div>

                <div style="color:black" class="panel-body">

                  <?php $prod = DB::table('products')->where('id', $id)->get()->first(); ?>
                   <div class="row">
                      <div class="col-md-8">
                        <strong> Product </strong>
                      </div>
                      <div class="col-md-4">
                        {{$prod->productname}}
                      </div>
                   </div>

                   <div class="row">
                      <div class="col-md-8">
                        <strong> Description </strong>
                      </div>
                      <div class="col-md-4">
                        {{$prod->description}}
                      </div>
                   </div>

                   <div class="row">
                      <div class="col-md-8">
                        <strong> Price </strong>
                      </div>
                      <div class="col-md-4">
                        {{$prod->price}}
                      </div>
                   </div>

                   <div class="row">
                      <div class="col-md-8">
                        <strong> Quantity in stock </strong>
                      </div>
                      <div class="col-md-4">
                        {{$prod->quantity}}
                      </div>
                   </div>

                   @if($prod->quantity > 0)
                     <form class="form-group" action="{{url('/cart/add')}}" method="post">
                       {{ csrf_field() }}
                          <!-- <strong>{{ $product->productname }}</strong> -->
                          <div class="row">
                            <br>
                             <div class="col-md-4"></div>
                               <!-- <div class="form-group"> -->



                                 <div class="col-md-8">
                                   <input type="hidden" value="{{$prod->id}}" name="id"\>
                                   <input type="submit" value="Add to Cart" class="btn btn-raised btn-primary"/>
                              </div>
                              <!-- </div> -->
                            </div>
                          </div>

                         <!-- <a type="submit" value="{{ $product->productname }}" role = "button"></a> -->
                      </form>
                     @else
                     <br>
                     <div class="alert alert-danger">
                        <strong>Sorry!</strong> Product is currently not available.
                      </div>
                     @endif


                     </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
