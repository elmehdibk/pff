@extends('layouts.app')
@section('page')
    Show
@endsection

@section('content')
<section class="py-5">
    <div class="container">
      <div class="row gx-5">
        <aside class="col-lg-6">
          <div class="border rounded-4 mb-3 d-flex justify-content-center">
           
              <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit img-fluid" src="{{asset('storage/'.$product->image)}}"/>
            
          </div>
        
          <!-- thumbs-wrap.// -->
          <!-- gallery-wrap .end// -->
        </aside>
        <main class="col-lg-6 ">
          <div class="ps-lg-3 p-5">
            <h4 class="title text-danger fw-bolder">
                {{$product->product_name}}
            </h4>
           
  
            <div class="mb-3">
              <span class="h5 fw-bolder"> {{$product->prix}} DH</span>
             
            </div>
            <hr>
            
  
            <div class="row">
              <dt class="col-3">Type:</dt>
              <dd class="col-9"> {{$product->type}} </dd>
  
        
            </div>
            <br>
              @if ($product->stock=='Available')    
              <h5 class="text-success">{{$product->stock}}</h5>
              @else
              <h5 class="text-danger">{{$product->stock}}</h5>
              @endif
          
  
            <hr />
            
                <p>
                    {{$product->bio}}
                </p>
            
    </div>
  </section>
  @endsection
