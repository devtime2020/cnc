@extends('layouts.master')

@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Parameter - Detail</h1>
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
                      <th>Entry</th>
                      <th>Short Description</th>
                      <th>Long Description</th>
                      <th>Comment</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($data_paramd as $data)
                        <tr>    
                          <th>{{$data->pardtbid}}</th>
                          <th>{{$data->pardtabent}}</th>
                          <th>{{$data->pardsdesc}}</th>            
                          <th>{{$data->pardldesc}}</th> 
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
            <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/user/create" method="POST">
              {{csrf_field()}}
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">User ID</label>
                  <input name="userusid" type="text" class="form-control" >
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Password</label>
                  <input name="userpasw" type="password" class="form-control">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">User Name</label>
                  <input name="userusnm" type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">User Description</label>
                  <input name="userusdsc" type="text" class="form-control">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Start Date</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="usersdat" class="form-control datetimepicker-input" data-target="#reservationdate">
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>             
             
                <div class="form-group col-md-6">
                  <label for="inputPassword4">End Date</label>
                  <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                        <input type="text" name="useredat" class="form-control datetimepicker-input" data-target="#reservationdate2">
                        <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="exampleFormControlSelect1">User Status</label>
                  <select class="form-control" name="userstat" >
                    <option value="1">Aktif</option>
                    <option value="2">Blocked</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleFormControlSelect1">User Profile</label>
                  <select class="form-control" name="useracprof" >
                    <option value="1">Administrator</option>
                    <option value="2">User</option>
                  </select>
                </div>
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