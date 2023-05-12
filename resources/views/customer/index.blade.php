@extends('layouts.master')
@section('main')
 
<div class="row">
@foreach ($products as $product)
    

<div class="col-4">
        <div class="container">
       
        <div class="card m-3">
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
               
                <div>
                    {{-- <form action="{{route('customers.show',$product)}}" method="GET">
                   
                                <button type="submit" class="btn btn-primary ">voir plus</button>

                </form>  --}}
                {{-- <a href="{{route('customers.show',$product->id)}}" class="btn btn-primary ">voir plus</a> --}}
                <a name="" id="" class="btn btn-info" href="{{route('customers.show',$product->id)}}" role="button">Show</a>
                </div>
            
            </div>           
            </div>

    </div>
</div>
@endforeach

@endsection


