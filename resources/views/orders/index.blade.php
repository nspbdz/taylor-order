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
                <div class="panel-heading">List Orders</div>

                <div class="panel-body">
                <button class="btn btn-primary" onClick="window.location.href = '/orders/create';">Create Order</button>
                <!-- List Data -->

                @if ($orders->count())
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
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->phone }}</td>
                            <td align="center">{{ date('d-m-Y', strtotime($order->created_at)) }}</td>
                            <td align="right">Rp. {{ number_format($order->estimate_price,0,',','.') }}</td>
                            <td align="center">{{ $order->status }}</td>
                            <td align="center">
                                <div class="btn-group btn-group-sm" role="group">
                                    <button type="button" class="btn btn-success" onClick="window.location.href = '/orders/{{ $order-> id }}';"><i class="fa fa-eye"></i></button>
                                    <button type="button" class="btn btn-warning" onClick="window.location.href = '/orders/{{ $order->id }}/edit';"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-danger" onClick="var form = document.getElementById('deleteForm'); form.action = '/orders/{{ $order->id }}'; form.submit();"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                @else
                <p class="text-center">There are no orders.</p>
                @endif
                
                <!-- Delete Form -->
                <form id="deleteForm" method="POST">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="DELETE">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
