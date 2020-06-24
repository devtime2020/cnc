@extends('layouts.master')

@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Users</h1>
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
        <form action="/user/{{$user->id}}/update" method="POST">
              {{csrf_field()}}
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Name</label>
                  <input name="name" type="text" class="form-control" value="{{$user->name}}" >
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">User Description</label>
                  <input name="userdesc" type="text" class="form-control" value="{{$user->userdesc}}">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Start Date</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" value="{{$user->usersdat}}" name="usersdat" class="form-control datetimepicker-input" data-target="#reservationdate">
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>             
             
                <div class="form-group col-md-6">
                  <label for="inputPassword4">End Date</label>
                  <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                        <input type="text" name="useredat" class="form-control datetimepicker-input" data-target="#reservationdate2" value="{{$user->useredat}}">
                        <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="exampleFormControlSelect1">User Status</label>
                  <select class="form-control" name="userstat">
                    <option value="1" @if($user->userstat == "1") selected @endif>Aktif</option>
                    <option value="2" @if($user->userstat == "2") selected @endif>Blocked</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleFormControlSelect1">User Profile</label>
                  <select class="form-control" name="userprof">
                    <option value="1" @if($user->userprof == "1") selected @endif>Administrator</option>
                    <option value="2" @if($user->userprof == "2") selected @endif>User</option>
                  </select>
                </div>
              </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-warning">Update</button>
            </form>
    </section>
@endsection