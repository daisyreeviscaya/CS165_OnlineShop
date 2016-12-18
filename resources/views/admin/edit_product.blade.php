@extends('layouts.app')

<?php
  $product = DB::table('products')->where('id', $product_id)->get()->first();
 ?>

@section('content')
<div style="color:black" class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Courses</div>
                <div class="panel-body">
                  <form class="form-horizontal" action="{{ url('/admin/update_product') }}" method="post" >
                    {{csrf_field()}}

                      <div class="form-group">
                          <label for="productname" class="col-md-4 control-label">Product Name</label>

                          <div class="col-md-6">
                            {{Form::text('productname', $product->productname,['class' => 'form-control'])}}
                              @if ($errors->has('productname'))

                                  <span class="help-block">
                                      <strong>{{ $errors->first('productname') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="description" class="col-md-4 control-label">Description</label>

                          <div class="col-md-6">
                            {{Form::text('description', $product->description,['class' => 'form-control'])}}

                              @if ($errors->has('description'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('description') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="price" class="col-md-4 control-label">Price</label>

                          <div class="col-md-6">
                            {{Form::text('price', $product->price,['class' => 'form-control'])}}

                              @if ($errors->has('price'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('price') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="quantity" class="col-md-4 control-label">Quantity</label>

                          <div class="col-md-6">
                            {{Form::text('quantity', $product->quantity,['class' => 'form-control'])}}

                              @if ($errors->has('quantity'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('quantity') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>



                      <div class="form-group">
                          <div class="col-md-8 col-md-offset-4">
                              <input type="hidden" value="{{$product->id}}" name="id"\>
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
