@extends('layouts.app')
@section('page')
    Update
@endsection
@section('content')
    <div class="container auth">
      <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header"><h5>Update Product</h5></div>
                      <div class="p-3">
                        <form  action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                          @method('PUT')
                          @csrf
                          <div class="mb-3">
                            <label for="" class="form-label">Post a picture of the product</label>  
                            <input type="file" class="form-control w-75"  name="image"   aria-describedby="fileHelpId">
                          </div >
                            
                          
                          
                          @error('product_name')
                                
                                  <p class="alert-heading text-danger">{{$message}}</p>
    
                            @enderror
    
                          <div class="mb-3">
                              <label for="" class="form-label">Product Name</label>
                              <input type="text" value="{{old('product_name',$product->product_name)}}" class="form-control" name="product_name" >
                            </div>
    
                            @error('prix')
                                
                                  <p class="alert-heading text-danger">{{$message}}</p>
    
                            @enderror
                            <div class="mb-3">
                              <label for="" class="form-label">Price</label>
                              <input type="text" class="form-control" value="{{old('prix',$product->prix)}}" name="prix" >
                            </div>
    
                            @error('old_prix')
                                
                            <p class="alert-heading text-danger">{{$message}}</p>
    
                      @enderror
    
                            <div class="mb-3">
                              <label for="" class="form-label">Old Price</label>
                              <input type="text" class="form-control" value="{{old('old_prix',$product->old_prix)}}" name="old_prix" >
                            </div>
    
                            @error('bio')
                                
                                  <p class="alert-heading text-danger">{{$message}}</p>
    
                            @enderror
                            
                            <div class="mb-3">
                              <label for="" class="form-label">Description</label>
                              <textarea class="form-control"  name="bio" id="" rows="3">{{old('bio',$product->bio)}}</textarea>
                            </div>
    
                            <div class="mb-3">
                              <label for="" class="form-label">Type of this product</label>
                              <select class="form-select form-select-lg w-75"   name="type" >
                                <option {{old('type',$product->type)=="Gainer"?"selected":""}} >Gainer</option>
                                <option {{old('type',$product->type)=="Whey"?"selected":""}} >Whey</option>
                                <option {{old('type',$product->type)=="BCAA"?"selected":""}}>BCAA</option>
                                <option {{old('type',$product->type)=="EAA"?"selected":""}}>EAA</option>
                                <option {{old('type',$product->type)=="Creatine"?"selected":""}}>Creatine</option>
                                <option {{old('type',$product->type)=="Pre-Workout"?"selected":""}}>Pre-Workout</option>
                                <option {{old('type',$product->type)=="Protein Bar"?"selected":""}}>Protein Bar</option>
                                <option {{old('type',$product->type)=="Shakers"?"selected":""}}>Shakers</option>
                                <option {{old('type',$product->type)=="Other Products"?"selected":""}}>Other Products</option>
                                  
                              </select>
                            </div>
    
                            <div class="mb-3">
                              <label for="" class="form-label">This product is</label>
                              <select class="form-select form-select-lg w-75"  name="stock" >
                                  <option {{old('type',$product->stock)=="Available"?"selected":""}}>Available</option>
                                  <option {{old('type',$product->stock)=="Unavailable"?"selected":""}}>Unavailable</option>
                                  
                              </select>
                            </div>
    
                            <div class="d-grid">
                                <button type="submit"  class="btn btn-primary w-75 mx-auto">Update</button>
                            </div>
    
                      </form>
    
              </div>
            </div>
          </div>
        </div>
       </div>
@endsection