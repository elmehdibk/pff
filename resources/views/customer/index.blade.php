
@extends('layouts.app')
@section('content')
 

@if(session('success'))
         <div class="alert alert-success">
           {{ session('success') }}
         </div> 
@endif



<div class="text-center container py-5">

  <div id="carouselExampleIndicators" class="carousel slide" data-mdb-ride="carousel">
    <div class="carousel-indicators">
      <button
        type="button"
        data-mdb-target="#carouselExampleIndicators"
        data-mdb-slide-to="0"
        class="active"
        aria-current="true"
        aria-label="Slide 1"
      ></button>
      <button
        type="button"
        data-mdb-target="#carouselExampleIndicators"
        data-mdb-slide-to="1"
        aria-label="Slide 2"
      ></button>
      <button
        type="button"
        data-mdb-target="#carouselExampleIndicators"
        data-mdb-slide-to="2"
        aria-label="Slide 3"
      ></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('storage/adds/whey.jpg')}}" class="d-block w-100" alt="Wild Landscape"/>
      </div>
      <div class="carousel-item">
        <img src="{{asset('storage/adds/iso.jpg')}}" class="d-block w-100" alt="Camera"/>
      </div>
      <div class="carousel-item">
        <img src="{{asset('storage/adds/true.png')}}" class="d-block w-125 " alt="Exotic Fruits"/>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
  <h4 class="mt-4 mb-5"><strong>NEW PRODUCTS</strong></h4>
  <div class="row justify-content-center align-items-center g-2">
  @foreach ($New as $N)
    
    <div class="col-4">
      <div class="card">
        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
        data-mdb-ripple-color="light">
        <span class="badge bg-info" style="position: absolute;">NEW</span>
        <img src="{{asset('storage/'.$N->image)}}"
        class="w-100" />
        <a href="{{route('customers.show',$N->id)}}">

            <div class="mask">
              <div class="d-flex justify-content-start align-items-end h-100">
                <h5>
                  @if ($N->stock=='Available')    
                  <span class="badge bg-success ms-2">{{$N->stock}}</span></h5>
            @else
            <span class="badge bg-danger ms-2">{{$N->stock}}</span></h5>
            @endif
              </div>

            </div>

            <div class="hover-overlay">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </div>

          </a>
        </div>

        @if ($N->prix<$N->old_prix)
        <span class="badge bg-warning ms-2">sold</span>
        @endif
        <div class="card-body">
          <a href="" class="text-reset">
            <h5 class="card-title mb-3">{{$N->product_name}}</h5>
          </a>
          <a href="" class="text-reset">
            <p>{{$N->type}}</p>
          </a>
          <h6 class="mb-3">{{$N->prix}}DH</h6>
        </div>
      </div>
    </div>
    @endforeach

  </div>
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

            @if ($product->prix<$product->old_prix)
            <span class="badge bg-warning ms-2">sold</span>
            @endif
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