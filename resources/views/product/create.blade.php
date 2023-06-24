@extends('layouts.app')
@section('page')
    Add
@endsection
@section('content')
@if (session()->has('success'))

    <div class="alert alert-success" role="alert">
        <strong>{{session('success')}}</strong>
    </div>
    
    
@endif   

<div class="container auth">
  <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header"><h5>Add Product</h5></div>
                  <div class="p-3">
                    <form  action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                        <label for="" class="form-label">Post a picture of the product</label>  
                        <input type="file" class="form-control w-75"   name="image"   aria-describedby="fileHelpId">
                      </div>

                      
                      @error('product_name')
                            
                              <p class="alert-heading text-danger">{{$message}}</p>

                        @enderror

                      <div class="mb-3">
                          <label for="" class="form-label">Product Name</label>
                          <input type="text" class="form-control w-75" name="product_name" >
                        </div>

                        @error('prix')
                            
                              <p class="alert-heading text-danger">{{$message}}</p>

                        @enderror
                        <div class="mb-3">
                          <label for="" class="form-label">Price</label>
                          <input type="text" class="form-control w-75"  name="prix" >
                        </div>

                        @error('old_prix')
                            
                        <p class="alert-heading text-danger">{{$message}}</p>

                  @enderror

                        <div class="mb-3">
                          <label for="" class="form-label">Old Price</label>
                          <input type="text" class="form-control w-75"   name="old_prix" >
                        </div>

                        @error('bio')
                            
                              <p class="alert-heading text-danger">{{$message}}</p>

                        @enderror
                        
                        <div class="mb-3">
                          <label for="" class="form-label">Description</label>
                          <textarea class="form-control w-75" name="bio"  id="" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                          <label for="" class="form-label">Type of this product</label>
                          <select class="form-select form-select-lg w-75"   name="type" >
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
                          <select class="form-select form-select-lg w-75"  name="stock" >
                              <option selected>Available</option>
                              <option >Unavailable</option>
                              
                          </select>
                        </div>

                        <div class="d-grid">
                            <button type="submit"  class="btn btn-primary w-75 mx-auto">Add</button>
                        </div>

                  </form>

          </div>
        </div>
      </div>
    </div>
   </div>
@endsection