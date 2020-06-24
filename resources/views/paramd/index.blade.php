@extends('layouts.master')

@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Parameter - Detail</h1>
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
                          <th>{{$data->pardcomm}}</th> 
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

    </section>
    <!-- /.content -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Parameter - Detail</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/paramd/create/{{$param_h->parhtbid}}" method="POST">
              {{csrf_field()}}
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Param Parent</label>
                  <input name="parhtabnm" type="text" class="form-control" value="{{$param_h->parhtabnm}}" readonly>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Entry</label>
                  <input name="pardtabent" type="text" class="form-control">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Short Desc</label>
                  <input name="pardsdesc" type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Long Desc</label>
                  <input name="pardldesc" type="text" class="form-control">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="inputEmail4">Parvan 1</label>
                  <input name="pardvan1" type="text" class="form-control">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputPassword4">Parvan 2</label>
                  <input name="pardvan2" type="text" class="form-control">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputEmail4">Parvan 3</label>
                  <input name="pardvan3" type="text" class="form-control">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputPassword4">Parvan 4</label>
                  <input name="pardvan4" type="text" class="form-control">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputEmail4">Pardvac 1</label>
                  <input name="pardvac1" type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputEmail4">Pardvac 2</label>
                  <input name="pardvac2" type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputEmail4">Pardvac 3</label>
                  <input name="pardvac3" type="text" class="form-control">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputEmail4">Par Date 1</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="parddate1" class="form-control datetimepicker-input" data-target="#reservationdate">
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>             
             
                <div class="form-group col-md-4">
                  <label for="inputPassword4">Par Date 2</label>
                  <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                        <input type="text" name="parddate2" class="form-control datetimepicker-input" data-target="#reservationdate2">
                        <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>

                <div class="form-group col-md-4">
                  <label for="inputPassword4">Par Date 3</label>
                  <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                        <input type="text" name="parddate3" class="form-control datetimepicker-input" data-target="#reservationdate2">
                        <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
              </div>
                 <div class="form-group">
                  <label for="exampleFormControlTextarea1">Comment</label>
                  <textarea class="form-control" name="pardcomm" id="exampleFormControlTextarea1" rows="3"></textarea>
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