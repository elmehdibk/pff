@extends('layouts.app')
@section('content')
    <div class="container-sm" style="margin-top: 250px">
        <div class="card ">
            <div class="card-header text-center">
                VERIFICTION
            </div>
            <div class="card-body text-center">
                <a  href="{{ route('products.destroy', ['id' => $product->id]) }}" class="btn btn-danger btn">
                    DELETE
                </a>
               {{-- <a name="" id="" class="btn btn-danger" href="#" role="button"></a> --}}
               <a name="" id="" class="btn btn-secondary" href="{{route('products.index')}}" role="button">CANCLE</a>
            </div>
        </div>
    </div>
@endsection