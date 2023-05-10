@extends('layouts.app')
@section('page')
    Show
@endsection
@section('content')
<div class="d-flex justify-content-center w-70">
    <img src="{{asset('storage/'.$product->image)}}" class="img-fluid rounded-top " alt="">
</div>

@endsection