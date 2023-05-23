@extends('layouts.app')
@section('page')
    Index
@endsection
@section('content')
@if (session()->has('success'))

    <div class="alert alert-success" role="alert">
        <strong>{{session('success')}}</strong>
    </div>
    
    
@endif    
<div class="col-4      ">
    
</div>
   
<div class="container">
    
    <div class="row" id="allCards">
    @foreach ($products as $product)    
    <div class="col-sm-6 col-lg-4 col-md-4 col-xl-3 col-xxl-3    " >
            {{-- <div class="container" id="cardsSize" > --}}
           
            <div class="card card-sm " id="product" >
                @if ($product->old_prix>$product->prix) 
                <div class="position-relative">
                    <img class="card-img-top"  src="{{asset('storage/'.$product->image)}}" alt="Title">
                    <h4 class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger " style="font-size:12px;">SOLD</h4>
            </div>
                

                @else
                <img class="card-img-top" src="{{asset('storage/'.$product->image)}}" alt="Title">
                
                @endif

                <div class="card-body">
                    <h4 class="card-title">{{$product->product_name}}</h4>
                    <h6 class="card-text text-success fs-5">{{$product->prix}}DH</h6>
                    
                    @if ($product->old_prix)
                    <i class="card-text text-secondary" style="text-decoration:line-through;">{{$product->old_prix}}DH</i>
                    @endif

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
                    <div class="mt-3 " >
                        <a name="" id="buttons" class="btn btn-info btn-sm" href="{{route('products.show',$product->id)}}" role="button">Show</a>
                        <a name="" id="buttons" class="btn btn-warning btn-sm" href="{{route('products.edit',$product->id)}}"  role="button">Update</a>
                        
                        
                        
                        
                        
                        {{-- </div> --}}
                        
                        <div style="display:inline-table;" >
    
                            <form action="{{route('products.destroy',$product->id)}}" method="post" >
                                @method('DELETE')
                                @csrf
                              
                                 <button type="submit" class="btn btn-danger btn-sm" id="delete">Delete</button>
                                </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    @endforeach
    </div>
</div>

@endsection
