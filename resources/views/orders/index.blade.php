@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="/home">Home</a></li>
                <li class="active">Orders</li>
            </ol>
            <div class="panel panel-primary">
                <div class="panel-heading">Orders</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" placeholder="22-Juli-2017" aria-describedby="basic-addon1">
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" placeholder="22-Juli-2017" aria-describedby="basic-addon1">
                                </div>                            
                            </div>
                        </div>
                        <div class="col-md-3">
                            
                        </div>
                        <div class="col-md-3">
                            
                        </div>
                    </div>

                    <button type="button" class="btn btn-success">Search</button>
                    <button type="button" class="btn btn-primary">Add</button>
                </div>

                <!-- List Data -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th width="30%">Name</th>
                            <th width="15%">Phone</th>
                            <th width="10%">Date</th>
                            <th width="15%">Estimate Price</th>
                            <th width="10%">Status</th>
                            <th width="25%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>data</td>
                            <td>data</td>
                            <td align="center">data</td>
                            <td align="right">data</td>
                            <td align="center">data</td>
                            <td align="center">
                                <div class="btn-group btn-group-sm" role="group">
                                    <button type="button" class="btn btn-success"><i class="fa fa-eye"></i></button>
                                    <button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
