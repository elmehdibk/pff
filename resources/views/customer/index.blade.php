@extends('layouts.app')
@section('content')
 


<div class="row">
    <div class="alert alert-secondary mt-5 text-center" role="alert">
        <strong>welcom {{auth()->user()->name}}</strong>
    </div>
        
  
@foreach ($customers as $customer)
    

<div class="col-4">
        <div class="container">
       
        <div class="card">
            <img class="card-img-top  " src="{{asset('storage/'.$customer->image)}}" alt="Title">
            <div class="card-body">
                <h4 class="card-title">{{$customer->product_name}}</h4>
                <h6 class="card-text text-success">{{$customer->prix}}DH</h6>
                <ul class="p-3">
                    @if ($customer->stock=='Available')    
                    <li class="text-success">{{$customer->stock}}</li>
                    @else
                    <li class="text-danger">{{$customer->stock}}</li>
                    @endif
                </ul>
                <div class="card-footer text-muted">
                    
                    <p>{{$customer->bio}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
</div>
@endsection
