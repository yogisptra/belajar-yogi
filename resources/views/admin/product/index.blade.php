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
                    <th>Title</th>
                    <th>Brand</th>
                    <th>Category</th>
                    <th>Subcategory</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($product as $produk)  
                    <tr>
                      <td>{{ $produk -> title }}</td>
                      <td>{{ $produk -> brand }}</td>
                      <td>{{ $produk -> category -> name }}</td>
                      <td>{{ $produk -> subcategory -> parent }}</td>
                      <td>{{ $produk -> description }}</td>
                      <td class="py-0 align-middle">
                        <div class="btn-group btn-group-sm">
                          <a href="{{route('product.edit', $produk->id)}}" class="btn btn-info"><i class="fas fa-pen"></i></a>
                          <form action="{{ route('product.destroy' , $produk->id)}}" method="POST">
                            <input name="_method" type="hidden" value="DELETE">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Apakah Anda yakin untuk menghapus!')"><i class="fas fa-trash"></i>
                            </button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  @endforeach 
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
