@extends('layouts.app')

@section('content')

<div class="container">
  <div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Success!</h3>
  </div>
  <div style="color:black" class="panel-body">
    @if ($transaction == 1)
    <p>User is now an admin. Let's celebrate!</p>

    @elseif ($transaction == 2)
    <p>User has been deleted. Ouch.</p>

    @elseif ($transaction == 3)
    <p>A new product has been added to the collection.</p>

    @elseif($transaction == 4)
    <p>You successfully deleted a product. It's so sad.</p>

    @elseif($transaction == 5)
    <p>You successfully edited a product.</p>
    @elseif($transaction == 6)
    <p>You successfully cancelled your order.</p>
    @elseif($transaction == 7)
    <p>Thank you for shopping! You successfully bought your order. Be happy!</p>
    @endif


    <a href="/home" class="btn btn-raised btn-primary">Back to home</a>
  </div>
</div>
</div>
@endsection
