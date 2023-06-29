@extends('layouts.app')

@section('content')
@if (session()->has('success'))

    <div class="alert alert-success" role="alert">
        <strong>{{session('success')}}</strong>
    </div>
    
    
@endif

<div class="container mt-5">

    <div class="table-responsive ">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Client</th>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Paid</th>
                    <th>Delivered</th>
                    <th>Check</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>{{ $order->product_name }}</td>
                        <td>{{ $order->qty }}</td>
                        <td>{{ $order->price }} DH</td>
                        <td>{{ $order->total }} DH</td>
                        <td>
                            @if($order->paid)
                                <i class="fa fa-check text-success"></i>
                            @else
                                <i class="fa fa-times text-danger"></i>
                            @endif
                        </td>
                        <td>
                            @if($order->delivered)
                                <i class="fa fa-check text-success"></i>
                            @else
                                <i class="fa fa-times text-danger"></i>
                            @endif
                        </td>
                        <td class="d-flex flex-row justify-content-center align-items-center">
                            <form method="POST" action="{{ route("orders.updateP",$order->id) }}">
                                @csrf
                                @method("PUT")
                                <button class="btn btn-sm btn-success">
                                    <i class="fas fa-money-bill-wave"></i>                                </button>
                            </form>
                            <form method="POST" action="{{ route("orders.updateD",$order->id) }}">
                                @csrf
                                @method("PUT")
                                <button class="btn btn-sm btn-success">
                                    <i class="fa fa-truck" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form id="{{ $order->id }}" method="POST" action="{{ route("orders.destroy",$order->id) }}">
                                @csrf
                                @method("DELETE")
                                <button
                                onclick="event.preventDefault();
                                   if(confirm('Do you really want to delete the order {{ $order->id  }} ?'))
                                    document.getElementById({{ $order->id }}).submit();
                                "
                                class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
        
    </div>
</div>



@endsection