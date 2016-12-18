@extends('layouts.app')

@section('content')
<div style = "color:black" class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update profile information</div>
                <div class="panel-body">
                  <form class="form-horizontal" action="{{ url('/profile/store') }}" method="post" >
                    {{csrf_field()}}

                      <div class="form-group">
                          <label for="name" class="col-md-4 control-label">Firstname</label>

                          <div class="col-md-6">
                            {{Form::text('firstname', Auth::user()->firstname,['class' => 'form-control'])}}

                              @if ($errors->has('firstname'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('firstname') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="name" class="col-md-4 control-label">Lastname</label>

                          <div class="col-md-6">
                            {{Form::text('lastname', Auth::user()->lastname,['class' => 'form-control'])}}

                              @if ($errors->has('lastname'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('lastname') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="email" class="col-md-4 control-label">Email address</label>

                          <div class="col-md-6">
                            {{Form::text('email', Auth::user()->email,['class' => 'form-control'])}}

                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="contactNumber" class="col-md-4 control-label">Contact Number</label>

                          <div class="col-md-6">
                            {{Form::text('contactnumber', Auth::user()->contactnumber,['class' => 'form-control'])}}

                              @if ($errors->has('contactnumber'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('contactnumber') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="address" class="col-md-4 control-label">Address</label>

                          <div class="col-md-6">
                            {{Form::text('address', Auth::user()->address,['class' => 'form-control'])}}

                              @if ($errors->has('address'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('address') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-8 col-md-offset-4">
                              <button type="submit" class="btn btn-raised btn-primary">
                                  Save Changes
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
@endsection
