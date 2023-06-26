@extends('layouts.app')
@section('content')
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
    <div class="card-body">
        <i class="fa fa-users " aria-hidden="true"></i>
      
    </div>

    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
    <div class="card-body">
        <i class="fa fa-shopping-basket" aria-hidden="true"></i>{{$products->count()}}
    </div>
</div>      
    
@endsection