@extends('layouts.app')

@section('content')

<div class="container">
  <div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Success!</h3>
  </div>
  <div style="color:black" class="panel-body">
    <p> Your profile has been updated!</p>
    <a href="/profile" class="btn btn-raised btn-primary">Back to profile</a>
  </div>
</div>
</div>
@endsection
