@extends('layouts.app')
@section('content')
 
<div class="row">
{{-- @foreach ($products as $product)
    

<div class="col-4">
        <div class="container">
       
        <div class="card">
            <img class="card-img-top  " src="{{asset('storage/'.$product->image)}}" alt="Title">
            <div class="card-body">
                <h4 class="card-title">{{$product->product_name}}</h4>
                <h6 class="card-text text-success">{{$product->prix}}DH</h6>
                <ul class="p-3">
                    @if ($product->stock=='Available')    
                    <li class="text-success">{{$product->stock}}</li>
                    @else
                    <li class="text-danger">{{$product->stock}}</li>
                    @endif
                </ul>
                <div class="card-footer text-muted">
                    
                    <p>{{$product->bio}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach --}}
</div>
@endsection
