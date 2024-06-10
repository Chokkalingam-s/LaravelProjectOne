@extends('layouts.app')
@section('main')

    <h5><i class="bi bi-plus-square-fill"></i> Add New Product</h5>    
    <hr />
    <nav class="my-3">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Add New Product</li>
      </ol>
    </nav>

    <div class="col-md-8">
      <form action="store" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="row mb-3">
          <div class="col-md-12">
                 <label for="name" class="form-label">Name</label>
                 <input type="text" class="form-control 
                 @if($errors->has('name')){{ 'is-invalid' }} @endif" 
                 id="name" name="name" placeholder="Enter Product Name" value="{{ old('name') }}"  >

                 <div class="invalid-feedback">
                    @if($errors->has('name'))
                        {{ $errors->first('name') }}
                    @endif
                 </div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
              <label for="mrp" class="form-label">M.R.P</label>
              <input type="text" class="form-control @if($errors->has('mrp')){{ 'is-invalid' }} @endif" id="mrp" name="mrp" placeholder="Enter M.R.P" value="{{ old('mrp') }}" >
              <div class="invalid-feedback">
                @if($errors->has('mrp'))
                    {{ $errors->first('mrp') }}
                @endif
             </div>
            </div>
          <div class="col-md-6">
              <label for="price" class="form-label">Selling Price</label>
              <input type="text" class="form-control @if($errors->has('price')){{ 'is-invalid' }} @endif" id="price" name="price" placeholder="Enter Selling Price" value="{{ old('price') }}"  >
                <div class="invalid-feedback">
                    @if($errors->has('price'))
                        {{ $errors->first('price') }}
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-md-12">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control @if($errors->has('description')){{ 'is-invalid' }} @endif" id="description" style="resize: none; height: 150px;" name="description"  placeholder="Enter Product Description" value="{{ old('description') }}"  ></textarea>
              <div class="invalid-feedback">
                @if($errors->has('description'))
                    {{ $errors->first('description') }}
                @endif
            </div>
        </div>

        <div class="row mb-3">
           <div class="col-md-12">
              <label for="image" class="form-label">Product Image</label>
              <input type="file" class="form-control @if($errors->has('image')){{ 'is-invalid' }} @endif" id="image" name="image" value="{{ old('image') }}"  >
              <div class="invalid-feedback">
                @if($errors->has('image'))
                    {{ $errors->first('image') }}
                @endif
              </div>
            </div>
        </div>

        <div class="row">
          <div class="col-md-12">
              <button type="submit" class="btn btn-success">Add Product</button>
              <button type="reset" class="btn btn-danger">Clear All</button>
          </div>
        </div>
    </div>
    
    @endsection