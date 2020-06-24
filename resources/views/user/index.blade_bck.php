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
                      <th>User Id</th>
                      <th>User Name</th>
                      <th>Description</th>
                      <th>Status</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Access Profile</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($data_users as $data)
                      <tr class="data-row">     
                        <th class="align-middle userusid">{{$data->userusid}}</th>
                        <th class="align-middle userusnm">{{$data->userusnm}}</th>
                        <th class="align-middle userusdsc">{{$data->userusdsc}}</th>  
                        <th class="align-middle userstat" style="display: none" >{{$data->userstat}}</th> 
                        @if ($data->userstat == 1)      
                        <th class="align-middle userstat1"> Aktif </th> 
                        @else
                        <th class="align-middle userstat1"> Blocked </th> 
                        @endif
                        <th class="align-middle usersdat">{{$data->usersdat}}</th> 
                        <th class="align-middle useredat">{{$data->useredat}}</th> 
                        <th class="align-middle useracprof" style="display: none" >{{$data->useracprof}}</th> 
                        @if ($data->useracprof == 1)      
                        <th class="align-middle useracprof1"> Administrator </th> 
                        @else
                        <th class="align-middle useracprof1"> User </th> 
                        @endif
                        <th><!--
                          <div class="btn-group">
                            <button type="button" class="btn btn-info" id="edit-item" data-item-id="{{$data->id}}">
                              <i class="fa fa-edit"></I>
                            </button>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#delete-modal">
                              <i class="fa fa-trash"></i>
                            </button>
                          </div>-->
                          <div class="btn-group">
                            <a href="/user/{{$data->id}}/edit" class="btn btn-warning"><i class="fa fa-edit"></I></a>
                            <a href="/user/{{$data->id}}/delete" class="btn btn-danger" onclick="return confirm('Are you sure to deleted ?')"><i class="fa fa-trash"></I></a>
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

    <!-- Modal Edit-->
    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form name="userform" id="userform">
              {{csrf_field()}}
              <div class="form-row" style="display: none">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">ID</label>
                  <input type="text" name="id" class="form-control" id="modal-input-id" required autofocus>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail4">User ID</label>
                  <input type="text" name="userusid" class="form-control" id="modal-input-userusid" required autofocus>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Password</label>
                  <input name="password" type="password" class="form-control" id="modal-input-userpasw">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">User Name</label>
                  <input name="userusnm" type="text" class="form-control" id="modal-input-userusnm">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">User Description</label>
                  <input name="userusdsc" type="text" class="form-control" id="modal-input-userusdsc">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Start Date</label>
                  <div class="input-group date" id="reservationdate3" data-target-input="nearest">
                        <input type="text" name="usersdat" class="form-control datetimepicker-input" data-target="#reservationdate3" id="modal-input-usersdat">
                        <div class="input-group-append" data-target="#reservationdate3" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>             
             
                <div class="form-group col-md-6">
                  <label for="inputPassword4">End Date</label>
                  <div class="input-group date" id="reservationdate4" data-target-input="nearest">
                        <input type="text" name="useredat" class="form-control datetimepicker-input" data-target="#reservationdate4" id="modal-input-useredat">
                        <div class="input-group-append" data-target="#reservationdate4" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="exampleFormControlSelect1">User Status</label>
                  <select class="form-control" name="userstat" id="modal-input-userstat" >
                    <option value="1">Aktif</option>
                    <option value="2">Blocked</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleFormControlSelect1">User Profile</label>
                  <select class="form-control" name="useracprof" id="modal-input-useracprof" >
                    <option value="1">Administrator</option>
                    <option value="2">User</option>
                  </select>
                </div>
              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="saveBtn" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>


<script>
    $(document).ready(function() {
  /**
   * for showing edit item popup
   */

  $(document).on('click', "#edit-item", function() {
    $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

    var options = {
      'backdrop': 'static'
    };
    $('#edit-modal').modal(options)
  })

  // on modal show
  $('#edit-modal').on('show.bs.modal', function() {
    var el = $(".edit-item-trigger-clicked"); // See how its usefull right here? 
    var row = el.closest(".data-row");

    // get the data
    var id = el.data('item-id');
    var userusid = row.children(".userusid").text();
    var userusnm = row.children(".userusnm").text();
    var userusdsc = row.children(".userusdsc").text();
    var userstat = row.children(".userstat").text();
    var usersdat = row.children(".usersdat").text();
    var useredat = row.children(".useredat").text();
    var useracprof = row.children(".useracprof").text();

    // fill the data in the input fields
    $("#modal-input-id").val(id);
    $("#modal-input-userusid").val(userusid);
    $("#modal-input-userusnm").val(userusnm);
    $("#modal-input-userusdsc").val(userusdsc);
    $("#modal-input-userstat").val(userstat);
    $("#modal-input-usersdat").val(usersdat);
    $("#modal-input-useredat").val(useredat);
    $("#modal-input-useracprof").val(useracprof);

  })

  // on modal hide
  $('#edit-modal').on('hide.bs.modal', function() {
    $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
    $("#edit-form").trigger("reset");
  })
})

    /* Edit customer */
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');

        $.ajax({
          data: $('#userform').serialize(),
          url: "",
          type: "POST",
          dataType: 'json',
          success: function (data) {


              $('#userform').trigger("reset");
              $('#edit-modal').modal('hide');
              table.draw();

          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });

</script>
@endsection