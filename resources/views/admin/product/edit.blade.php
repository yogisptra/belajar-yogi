@extends('layouts.master')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit Product</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="{{route('product.update', $product)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="card-body">
              <div class="form-group">
                <label for="Title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="" value="{{$product -> title}}">
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="Brand">Brand</label>
                <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand" name="brand" placeholder="" value="{{$product -> brand}}">
                @error('brand')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
              <!-- /. tools -->
              
              <div class="form-group">
                <label>--Select SubCategory--</label>
                <select class="form-control" name="subcategory_id">
               @foreach($subcategories as $subcategory)
               	<option value="{{$subcategory->id}}" {{$product->subcategory_id == $subcategory->id ? 'selected' : ""}} >{{$subcategory->parent}}
               	</option>
               @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>--Select category--</label>
                <select class="form-control @error('subcategory_id') is-invalid @enderror" name="category_id">
       		   @foreach($categories as $category)
               	<option value="{{$category->id}}" {{$product->category_id == $category->id ? 'selected' : ""}} >{{$category->name}}
               	</option>
               @endforeachÍ
                </select>
              </div>
              <!-- /.card-header -->  
              <div class="form-group"> 
                <label>Descriptions</label>
                  <textarea class="textarea @error('description') is-invalid @enderror" placeholder="Place some text here" name="description"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                  @error('description')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                  </textarea>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection