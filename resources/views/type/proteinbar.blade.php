@extends('layouts.app')
@section('page')
    Protein Bar
@endsection
@section('content')
<div class="alert alert-info text-center" role="alert">
    <h1><strong>PROTEIN BAR</strong></h1>
</div>

    <div class="table-responsive">
        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col">Picture</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Old Price</th>
                    <th scope="col">Update/Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                @if ($product->type=='Protein Bar')    
                <tr class="">
                    <td scope="row">
                    
                     @if ($product->old_prix>$product->prix) 
                     <div class=" w-25">
                        <div style="height: 50px; width:50px; position-relative;">
                            <img style="object-fit: contain; width:100%;height:100%"  src="{{asset('storage/'.$product->image)}}" class="position-relative"  alt="image desc">
                             <h4 style="left:38px;" class="position-absolute badge rounded-pill bg-danger ">SOLD</h4>
                        </div>
                     </div>
                     
                         
                     @else
                     {{-- <img style="object-fit: contain; width:50px" src="{{asset('storage/'.$product->image)}}" width="90px" height="90px"  alt="image desc"> --}}
                     <img style="object-fit: contain; width:50px" src="{{asset('storage/'.$product->image)}}" width="90px" height="50px"  alt="image desc">
                     
                     @endif
                    </td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->prix}}DH</td>
                    <td>
                    @if ($product->old_prix)    
                    {{$product->old_prix}}DH
                    @endif
                    </td>

                    <td>
                        <div class="">
                            <a name="" class="btn btn-warning btn-sm" href="{{route('products.edit',$product->id)}}"  role="button">Update</a>
                            <form id="button"  action="{{route('products.destroy',$product->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm " >Delete</button>
                                
                            </form>
                        </div>
                    </td>
                </tr>
                @endif    
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection