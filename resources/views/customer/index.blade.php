@extends('layouts.master')
@section('main')
 

@foreach ($customer as $customers)
    

<div class="col-4">
        <div class="container">
       
        <div class="card" style="width: 18rem;">
            <img class="card-img-top  " src="{{asset('storage/'.$customers->image)}}" alt="Title">
            <div class="card-body">
                <h4 class="card-title">{{$customers->product_name}}</h4>
                <h6 class="card-text text-success">{{$customers->prix}}DH</h6>
                <ul class="p-3">
                    @if ($customers->stock=='Available')    
                    <li class="text-success">{{$customers->stock}}</li>
                    @else
                    <li class="text-danger">{{$customers->stock}}</li>
                    @endif
                </ul>
                <a href="#" class="btn btn-danger">add to cart</a>
              
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection


