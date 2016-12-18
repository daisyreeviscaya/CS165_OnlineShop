@extends('layouts.app')

@section('content')

<div class="container">
  <div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Success!</h3>
  </div>
  <div style="color:black" class="panel-body">
    @if ($transaction == 1)
      <p>Congratulations! Your order {{$product->productname}} has been added to the cart.</p>
    @elseif($transaction == 2)
      <p>Congratulations! Your order {{$product->productname}} has been removed from the cart.</p>
    @endif
    <a href="/admin/shop" class="btn btn-raised btn-primary">Back to products</a>
    <a href="/admin/cart" class="btn btn-raised btn-primary">Back to cart</a>
  </div>
</div>
</div>
@endsection
