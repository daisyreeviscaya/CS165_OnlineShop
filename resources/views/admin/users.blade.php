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
  $users= DB::table('users')->orderBy('id')->get();
?>
<div class="navbar navbar-inverse navbar-fixed-left">
  <a class="navbar-brand" href="#">Brand</a>
  <ul class="nav navbar-nav">

    @if ( count($users) > 1 )
      @foreach($users as $user)

      @if ($user->id != Auth::id())
      <form class="form-group" action="{{ url('/admin/show') }}" method="post">
        {{ csrf_field() }}

          <input type="hidden" value="{{$user->id}}" name="client_id"\>

          <input type="submit" value="{{ $user->username }}" class="save_button"/>


      </form>
      @endif


      @endforeach
     @endif
  </ul>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading clearfix ">
                <h4 class="panel-title pull-left" style="padding-top: 7.5px;">User Profile</h4>


              </div>

                <div style="color:black" class="panel-body">
                  Select a user from the left side of the screen to see the available functionalities.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
