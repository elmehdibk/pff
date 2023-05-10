@extends('layouts.app')
@section('page')
    Add
@endsection
@section('content')
    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Post a picture of the product</label>
          <input type="file" class="form-control" name="image"  placeholder="" aria-describedby="fileHelpId">
          
        </div>
        
        @error('product_name')
              
                <p class="alert-heading text-danger">{{$message}}</p>

          @enderror

        <div class="mb-3">
            <label for="" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="product_name" >
          </div>

          @error('prix')
              
                <p class="alert-heading text-danger">{{$message}}</p>

          @enderror
          <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input type="text" class="form-control" name="prix" >
          </div>

          @error('old_prix')
              
          <p class="alert-heading text-danger">{{$message}}</p>

    @enderror

          <div class="mb-3">
            <label for="" class="form-label">Old Price</label>
            <input type="text" class="form-control"  name="old_prix" >
          </div>

          @error('bio')
              
                <p class="alert-heading text-danger">{{$message}}</p>

          @enderror
          
          <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <textarea class="form-control" name="bio" id="" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Type of this product</label>
            <select class="form-select form-select-lg" name="type" >
                <option selected>Gainer</option>
                <option >Whey</option>
                <option >BCAA</option>
                <option >EAA</option>
                <option >Creatine</option>
                <option >Pre-Workout</option>
                <option >Protein Bar</option>
                <option >Shakers</option>
                <option >Other Products</option>
                
            </select>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">This product is</label>
            <select class="form-select form-select-lg" name="stock" >
                <option selected>Available</option>
                <option >Unavailable</option>
                
            </select>
          </div>

          <div class="d-grid">
              <button type="submit"  class="btn btn-primary">Add</button>
          </div>

    </form>
@endsection