@extends('layouts.app')

@section('content')

<div class="container">
  <div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Success!</h3>
  </div>
  <div style="color:black" class="panel-body">
    <p>{{$productname}} has been removed.</p>

    <a href="/products" class="btn btn-raised btn-primary">Back to products</a>
    <a href="/cart/show" class="btn btn-raised btn-primary">Back to cart</a>
  </div>
</div>
</div>
@endsection
