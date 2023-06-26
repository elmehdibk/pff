@extends('layouts.app')
@section('content')
@if (session()->has('success'))

<div class="alert alert-success" role="alert">
    <strong>{{session('success')}}</strong>
</div>


@endif    



<section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10">
  
          <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
            
          </div>
  @foreach ($items as $item)
                <div class="card rounded-3 mb-4">
            <div class="card-body p-4">
              <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-2 col-lg-2 col-xl-2">
                  <img
                    src="{{asset('storage/'.$item->associatedModel->image)}}"
                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                  <p class="lead fw-normal mb-2">{{$item->name}}</p>
                  <p><span class="text-muted">Type: </span>{{$item->associatedModel->type}} </p>
                </div>
                <form  class="col-md-3 col-lg-3 col-xl-2 d-flex" action="{{route('update.cart',$item->associatedModel->id)}}" method="post">
                    @csrf
                    @method('PUT')
                
                  <button class="btn btn-link px-2" type="submit"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="fas fa-minus"></i>
                  </button>
  
                  <input id="form1" min="0" name="qty" id="qty" value="{{$item->quantity}}" type="number"
                    class="form-control form-control-sm" />
  
                  <button class="btn btn-link px-2" type="submit"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus"></i>
                  </button>
                 
                 
            </form>
                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                  <h5 class="mb-0">{{$item->quantity*$item->price}} DH</h5>
                </div>
                <form action="{{route('remove.cart',$item->associatedModel->id)}}" method="post" class="col-md-1 col-lg-1 col-xl-1 text-end">
                  @csrf
                  @method('DELETE')
                <div >
                  <button type="submit" class=" btn-ronded btn btn-outlin btn-danger"><i class="fas fa-trash fa-lg"></i></button>
                </div>
                </form>
              </div>

            </div>
          </div>
  
          @endforeach

      
  
          <div class="card mb-4">
            <div class="card-body p-4 d-flex flex-row">
              <div class="form-outline flex-fill">
               
                <b >TOTALE</b>
              </div>
              <b class=" ms-3">{{ Cart::getSubtotal()}}.00DH</b>
            </div>
          </div>


     

          <form action="{{route('getOrder')}}" method="post">
            @csrf    
             <div class="card mb-4 ">
            <div class="card-body p-4 d-flex flex-row " >
              <div class="form-outline flex-fill">
                <label class='text-info' for="form1">Adress</label>
                <input type="text" id="form1"  name="adress" required class="form-control form-control-lg border" />
              </div>
              <div class="form-outline flex-fill "> 
                  <label class="text-info" for="form1">Number Phone</label>
                <input type="text" id="form1" required name="phone" class="form-control form-control-lg border" />
             
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <button type="submit" class="btn btn-warning btn-block btn-lg">Proceed to Pay</button>
            </div>
          </div>
          </form> 


        </div>
      </div>
    </div>
  </section>
  @endsection