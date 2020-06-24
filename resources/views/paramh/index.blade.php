@extends('layouts.master')

@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Parameter - Header</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
     @endif
    <!-- Main content -->
    <section class="content">



      <!-- Default box -->
      <div class="card">

        <div class="card-header">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add
          </button>
             
                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
               <div class="card-body p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Comment</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($data_paramh as $data)
                        <tr>    
                          <th>{{$data->parhtbid}}</th>
                          <th>{{$data->parhtabnm}}</th>
                          <th>{{$data->parhtabcom}}</th>  
                          <th><a href="/{{$data->id}}/paramd" class="btn btn-warning btn-warning btn-sm">Detail</th>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Parameter - Header</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/paramh/create" method="POST">
              {{csrf_field()}}
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">ID</label>
                  <input name="parhtbid" type="text" class="form-control" >
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Name</label>
                  <input name="parhtabnm" type="text" class="form-control">
                </div>
              </div>
              
                <div class="form-group">
                  <label for="inputEmail4">Comment</label>
                  <textarea name="parhtabcom" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection