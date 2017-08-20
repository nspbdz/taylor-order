@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="/home">Home</a></li>
                <li><a href="/orders">Orders</a></li>
                <li class="active">Show</li>
            </ol>
            <div class="panel panel-primary">
                <div class="panel-heading">Show Orders</div>

                <div class="panel-body">
                    <p><strong>Order Id</strong> : #{{ $order->id }}</p>
                    <p><strong>Name</strong> : {{ $order->name }}</p>
                    <p><strong>Address</strong> : {{ $order->address }}</p>
                    <p><strong>Phone</strong> : {{ $order->phone }}</p>
                    <p><strong>Description</strong> : {{ $order->description }}</p>
                    <p><strong>Image 1</strong> : {{ $order->image_1 }}</p>
                    <p><strong>Image 2</strong> : {{ $order->image_2 }}</p>
                    <p><strong>Image 3</strong> : {{ $order->image_3 }}</p>
                    <p><strong>Image 4</strong> : {{ $order->image_4 }}</p>
                    <p><strong>Estimate Price</strong> : Rp. {{ number_format($order->estimate_price,0,',','.') }}</p>
                    <p><strong>Estimate Done</strong> : {{ date('d-m-Y', strtotime($order->estimate_done)) }}</p>
                    <p><strong>Down Payment</strong> : Rp. {{ number_format($order->down_payment,0,',','.') }}</p>
                    <br>
                    <button class="btn btn-primary" onclick="window.location.href = '/orders'">Done</button>
                </div>
        	</div>
        </div>
    </div>
</div>
@endsection
