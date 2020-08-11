@extends('layouts.master')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit Category</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="{{route('subcategory.update', $subcategory)}}" method="POST">

          	@csrf
            @method('PUT')
            <div class="card-body">
              <div class="form-group">
                <label for="Parent">Parent</label>
                <input type="text" class="form-control" id="parent" name="parent" value="{{$subcategory->parent}}">
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