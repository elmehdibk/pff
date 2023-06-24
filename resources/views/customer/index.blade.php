
@extends('layouts.master')
@section('main')
 

@if(session('success'))
         <div class="alert alert-success">
           {{ session('success') }}
         </div> 
@endif

<div class="text-center container py-5">
      <h4 class="mt-4 mb-5"><strong>PRODUITS POPULAIRES</strong></h4>
      <div class="container">
      <div class="row">
        @foreach ($customers as $product)
        <div class="col-4">
          <div class="card">
            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
             data-mdb-ripple-color="light">
              <img src="{{asset('storage/'.$product->image)}}"
                class="w-100" />
              <a href="{{route('customers.show',$product->id)}}">

                <div class="mask">
                  <div class="d-flex justify-content-start align-items-end h-100">
                    <h5>
                      @if ($product->stock=='Available')    
                      <span class="badge bg-success ms-2">{{$product->stock}}</span></h5>
                @else
                <span class="badge bg-danger ms-2">{{$product->stock}}</span></h5>
                @endif
                  </div>

                </div>

                <div class="hover-overlay">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </div>

              </a>
            </div>
            <div class="card-body">
              <a href="" class="text-reset">
                <h5 class="card-title mb-3">{{$product->product_name}}</h5>
              </a>
              <a href="" class="text-reset">
                <p>{{$product->type}}</p>
              </a>
              <h6 class="mb-3">{{$product->prix}}DH</h6>
            </div>
          </div>
        </div>
        @endforeach
      </div> 
     </div> 
     @endsection