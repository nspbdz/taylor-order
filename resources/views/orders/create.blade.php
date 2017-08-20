@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="/home">Home</a></li>
                <li><a href="/orders">Orders</a></li>
                <li class="active">Create</li>
            </ol>
            <div class="panel panel-primary">
                <div class="panel-heading">Create Orders</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/orders">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" class="form-control" id="inputName" value="{{ old('name') }}" placeholder="Name" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress" class="col-sm-2 control-label">Address</label>
                            <div class="col-sm-6">
                                <textarea name="address" class="form-control" id="inputAddress" placeholder="Address" required>{{ old('address') }}</textarea>
                                @if ($errors->has('address'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPhone" class="col-sm-2 control-label">Phone</label>
                            <div class="col-sm-3">
                                <input type="tel" name="phone" class="form-control" id="inputPhone" value="{{ old('phone') }}" placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription" class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-6">
                                <textarea name="description" class="form-control" id="inputDescription" placeholder="Description" required>{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputImage1" class="col-sm-2 control-label">Image 1</label>
                            <div class="col-sm-3">
                                <input type="file" name="image_1" class="form-control" id="inputImage1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputImage2" class="col-sm-2 control-label">Image 2</label>
                            <div class="col-sm-3">
                                <input type="file" name="image_2" class="form-control" id="inputImage2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputImage3" class="col-sm-2 control-label">Image 3</label>
                            <div class="col-sm-3">
                                <input type="file" name="image_3" class="form-control" id="inputImage3">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputImage4" class="col-sm-2 control-label">Image 4</label>
                            <div class="col-sm-3">
                                <input type="file" name="image_4" class="form-control" id="inputImage4">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEstimatePrice" class="col-sm-2 control-label">Estimate Price</label>
                            <div class="col-sm-4">
                                <input type="number" name="estimate_price" class="form-control" id="inputEstimatePrice" style="text-align: right;" value="{{ old('estimate_price') }}" placeholder="Estimate Price">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEstimateDone" class="col-sm-2 control-label">Estimate Done</label>
                            <div class="col-sm-3">
                                <input type="date" name="estimate_done" class="form-control" id="inputEstimateDone" value="{{ old('estimate_done') }}" placeholder="Estimate Done" required>
                                @if ($errors->has('estimate_done'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('estimate_done') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDownPayment" class="col-sm-2 control-label">Down Payment</label>
                            <div class="col-sm-4">
                                <input type="number" name="down_payment" class="form-control" id="inputDownPayment" style="text-align: right;" value="{{ old('down_payment') }}" placeholder="Down Payment">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            	<input type="hidden" name="id">
                            	<input type="hidden" name="created_by" value="{{ $user }}">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-danger" onclick="window.location.href='/orders';">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
        	</div>
        </div>
    </div>
</div>
@endsection
