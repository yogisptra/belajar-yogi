@extends('layouts.master')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="{{route('subcategory.store')}}" method="POST">
          	@csrf
            <div class="card-body">
              <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="parent" placeholder="Enter Name">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
               <div class="form-group">
                <label>--Select Category--</label>
                <select class="form-control" name="category_id">
                	<option>Pilih Category</option>
                	@foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
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