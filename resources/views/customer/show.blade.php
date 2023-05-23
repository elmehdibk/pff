@extends('layouts.master')


{{-- <div class="card m-3">
    <div class="card m-3">
        <img class="card-img-top w-25 mx-auto  " src="{{asset('storage/'.$customer->image)}}" alt="Title">
        <div class="card-body text-center">
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
            <div>
        <div>
</div> --}}

@section('main')
<section class="py-5">
    <div class="container">
      <div class="row gx-5">
        <aside class="col-lg-6">
          <div class="border rounded-4 mb-3 d-flex justify-content-center">
           
              <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit img-fluid" src="{{asset('storage/'.$customer->image)}}"/>
            
          </div>
        
          <!-- thumbs-wrap.// -->
          <!-- gallery-wrap .end// -->
        </aside>
        <main class="col-lg-6 ">
          <div class="ps-lg-3 p-5">
            <h4 class="title text-danger fw-bolder">
                {{$customer->product_name}}
            </h4>
           
  
            <div class="mb-3">
              <span class="h5 fw-bolder"> {{$customer->prix}} DH</span>
             
            </div>
            <hr>
            <p>
                {{$customer->bio}}
            </p>
  
            <div class="row">
              <dt class="col-3">Type:</dt>
              <dd class="col-9"> {{$customer->type}} </dd>
  
        
            </div>
            <br>
              @if ($customer->stock=='Available')    
              <h5 class="text-success">{{$customer->stock}}</h5>
              @else
              <h5 class="text-danger">{{$customer->stock}}</h5>
              @endif
          
  
            <hr />
  
           
              <!-- col.// -->
              <div class="col-md-4 col-6 mb-3">
                <div class="form-outline">
                  <label class="form-label" for="typeNumber">Quantite</label>
                  <input type="number" value="1" id="typeNumber" class="form-control" />
                  
          
                </div>    
              </div> 
            <a href="#" class="btn btn-warning shadow-0"> Buy now </a>
            <a href="#" class="btn btn-primary shadow-0">     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
              Add to cart </a>
              </div>
            </div>
           
          </div>
        </main>
      </div>
    </div>
  </section>
  @endsection