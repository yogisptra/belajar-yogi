@extends('layouts.master')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
			<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
                <a href="{{route('product.create')}}" class="btn btn-primary float-right mb-2"><i class="fas fa-plus"></i> Product</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Subcategory</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
           </div>
       </div>
   </div>
</section>
@endsection
