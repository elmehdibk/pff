@extends('layouts/app')
@section('content')
@foreach ($orders as $order)
    @if ($order->user_id == auth()->user()->id)
        @if ($order->delivered)    
        <div class="alert alert-success" role="alert">
            <strong>{{$order->product_name}}</strong> delevred
        </div>
        @else
        <div class="alert alert-danger" role="alert">
            <strong>{{$order->product_name}}</strong> not delevred
        </div>
        @endif
        
    @endif
    
@endforeach
@endsection