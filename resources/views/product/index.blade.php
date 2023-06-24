@extends('layouts.app')
@section('page')
    Index
@endsection
@section('content')
@if (session()->has('success'))
<div class="container-sm">
    <div class="alert alert-success" role="alert">
        <strong>{{session('success')}}</strong>
    </div>
</div>
    
    
@endif   

   
<div class="container-sm">
    
        <div class="card">
            <div class="card-header">
                <h4><i class="fa fa-filter" aria-hidden="true"></i>FILTER</h4>
            </div>
            <div class="card-body">
              
                <div class="list-group">
                    <a href="{{route('products.index')}}" class="list-group-item list-group-item-action text-light bg-success"> <h5>All</h5></a>
                    <a href="{{route('products.index','Gainer')}}" class="list-group-item list-group-item-action ">Gainer</a>
                    <a href="{{route('products.index','Whey')}}" class="list-group-item list-group-item-action ">Whey</a>
                    <a href="{{route('products.index','BCAA')}}" class="list-group-item list-group-item-action ">BCAA</a>
                    <a href="{{route('products.index','EAA')}}" class="list-group-item list-group-item-action ">EAA</a>
                    <a href="{{route('products.index','Creatine')}}" class="list-group-item list-group-item-action ">Creatine</a>
                    <a href="{{route('products.index','Pre-Workout')}}" class="list-group-item list-group-item-action ">Pre-Workout</a>
                    <a href="{{route('products.index','Protein Bar')}}" class="list-group-item list-group-item-action ">Protein Bar</a>
                    <a href="{{route('products.index','Shakers')}}" class="list-group-item list-group-item-action ">Shakers</a>
                    <a href="{{route('products.index','Other Products')}}" class="list-group-item list-group-item-action ">Other Products</a>
                </div>
                                        
            </div>
            
            </div>        
        
      
    </div>
    

        
<div class="container-sm mt-3" style="position: relative;">
    <div class="table-responsive">
        <table class="table table-secondary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">PRODUCT NAME</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">OLD PRICE</th>
                    <th scope="col">DESCREPTION</th>
                    <th scope="col">STOCK</th>
                    <th scope="col">TYPE</th>
                    <th scope="col">SDU</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    
                <tr class="">
                    <td scope="row">{{$product->id}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->prix}}</td>
                    <td>{{$product->old_prix}}</td>
                    <td>{{$product->bio}}</td>
                    <td>{{$product->stock}}</td>
                    <td>{{$product->type}}</td>
                    <td><a  id="buttons" class="btn btn-light btn-sm" href="{{route('products.show',$product->id)}}" role="button"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        {{-- <form action="{{route('products.destroy',$product->id)}}" method="post" > 
                            @method('DELETE')
                            @csrf
                            
                            <button type="submit" class="btn btn-danger btn-sm" id="delete">Delete</button>
                        </form> --}}
                        {{-- <a  href="{{ route('products.destroy', ['id' => $product->id]) }}" class="btn btn-light btn-sm">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a> --}}
                        <a  id="buttons" class="btn btn-light btn-sm" href="{{route('products.verification',$product->id)}}"  role="button"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        <a  id="buttons" class="btn btn-light btn-sm" href="{{route('products.edit',$product->id)}}"  role="button"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        
        
</div>

@endsection
