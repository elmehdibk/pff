@extends('layouts.app')
@section('page')
    Gainer
@endsection
@section('content')
<div class="alert alert-info text-center" role="alert">
    <h1><strong>GAINERS</strong></h1>
</div>

    <div class="table-responsive">
        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col">Picture</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Old Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                @if ($product->type=='Gainer')    
                <tr class="">
                    <td scope="row">
                    
                     @if ($product->old_prix>$product->prix) 
                     <div class="position-relative w-25">
                        <img style="object-fit: contain; width:50px;" src="{{asset('storage/'.$product->image)}}" class="position-relative" width="90px" height="90px" alt="image desc">
                         <h4 class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger ">SOLD</h4>
                     </div>
                     
                         
                     @else
                     <img style="object-fit: contain; width:50px" src="{{asset('storage/'.$product->image)}}" width="90px" height="90px"  alt="image desc">
                     
                     @endif
                    </td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->prix}}DH</td>
                    <td>
                    @if ($product->old_prix)    
                    {{$product->old_prix}}DH
                    @endif
                    </td>
                </tr>
                @endif    
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection