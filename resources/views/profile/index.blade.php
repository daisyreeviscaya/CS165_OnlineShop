@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading clearfix ">
                <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Profile</h4>
                    <a  href = "{{ url('/profile/update') }}" type="submit"  class="btn btn-primary pull-right" role = "button">
                        Update My Profile
                    </a>
              </div>
              <div style="color:black" class="panel-body">
                    <?php  $user = DB::table('users')->where('id', Auth::id())->get()->first() ?>

                        <div class="row">
                          <div class="col-md-4">
                            <strong> Name </strong>
                          </div>
                          <div class="col-md-8">
                            {{$user->firstname}} {{$user->lastname}}
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-4">
                            <strong> Username</strong>
                          </div>
                          <div class="col-md-8">
                             {{$user->username}}
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <strong> Email </strong>
                          </div>
                          <div class="col-md-8">
                            {{$user->email }}
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                             <strong>Contact Number</strong>
                          </div>
                          <div class="col-md-8">
                             {{$user->contactnumber }}
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <strong> Address </strong>
                          </div>
                          <div class="col-md-8">
                            {{$user->address}}
                          </div>
                        </div>

              </div>
            </div>
        </div>
    </div>
</div>
@endsection
