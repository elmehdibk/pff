@extends('layouts.app')
@section('content')
<h1 class="text-center text-info mt-5">INFORMATION</h1>
<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col" >
            <div class="card bg-dark text-white">
                <img src="{{asset('storage/order/customer.png')}}" class="card-img" style="width:55%;" alt="Stony Beach"/>
                <div class="card-img-overlay">
                  <h5 class="card-title">ORDERS</h5>
                    <h6>{{$orders}}</h6>  
                </div>
              </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white">
                <img src="{{asset('storage/order/people.png')}}" class="card-img w-50" alt="Stony Beach"/>
                <div class="card-img-overlay">
                  <h5 class="card-title">CUSTOMERS</h5>
                  <h6>{{$users}}</h6>
                  
                </div>
              </div>
        </div>

        <div class="col">
            <div class="card bg-dark text-white">
                <img src="{{asset('storage/order/money.png')}}" class="card-img w-50" alt="Stony Beach"/>
                <div class="card-img-overlay">
                  <h5 class="card-title">TOTAL EARNINGS</h5>
                  <h6>{{$sum}}DH</h6>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection