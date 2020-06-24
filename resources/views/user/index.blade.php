@extends('layouts.master')

@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users</h1>
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
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalAdd">
            Add
          </button>
                <div class="card-tools">
                  <form class="form-inline md-form mr-auto mb-4" method="GET" action="/user">
                    <input name="cari" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                  </form>
                </div>
              </div>
              <!-- /.card-header -->
               <div class="card-body p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Profile</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($data_users as $data)
                      <tr class="data-row">     
                        <th class="align-middle name">{{$data->name}}</th>
                        <th class="align-middle userdesc">{{$data->userdesc}}</th>
                        <th class="align-middle email">{{$data->email}}</th>
                        <th class="align-middle userstat">{{$data->userstat}}</th>
                        <th class="align-middle usersdat">{{$data->usersdat}}</th>
                        <th class="align-middle useredat">{{$data->useredat}}</th>
                        <th class="align-middle userprof">{{$data->pardsdesc}}</th>
                        <th>
                          <div class="btn-group">
                            <a href="/user/{{$data->id}}/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></I></a>
                            <a href="/user/{{$data->id}}/delete" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to deleted ?')"><i class="fa fa-trash"></I></a>
                          </div>
                        </th>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
      <!-- Modal Add-->
    <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <label for="inputEmail4">Name</label>
                  <input name="name" type="text" class="form-control" >
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Name Description</label>
                  <input name="usersdesc" type="text" class="form-control" >
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Email</label>
                  <input name="email" type="email" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Password</label>
                  <input name="password" type="password" class="form-control">
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
                  <select class="form-control" name="userprof" >
                    <option value="1">Administrator</option>
                    <option value="2">User</option>
                  </select>
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

    </section>
    <!-- /.content -->
@endsection