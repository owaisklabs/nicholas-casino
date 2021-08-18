@extends('admin.layouts.master')

@section('content_header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0 text-dark"><i class="nav-icon fa fa-question-circle"></i> Enquiry Managment</h1>
  </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<!-- fancybox styles -->
<style>
/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}
/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}
/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}
.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}
input:checked + .slider {
  background-color: #2196F3;
}
input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}
input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}
</style>

<!-- see more (description) -->
<style>
div.text-container {
  margin: 0 auto;
  width: 75%;    
}
.hideContent {
  overflow: hidden;
  line-height: 1em;
  height: 2em;
}
.showContent {
  line-height: 1em;
  height: auto;
}
.showContent{
  height: auto;
}
h1 {
  font-size: 24px;        
}
p {
  padding: 10px 0;
}

.show-more {
  padding: 10px 0;
  text-align: center;
}
</style>

@endsection

@section('content_body')
<!-- Index view -->
<div class="row">
  <div class="col-md-12 col-sm-12">
    <div class="card">
      <div class="card-header">
       <form action="" class="form-wrapper">
        <div class="row">
          <!-- search bar -->
          <div class="topnav col-md-4">
            <input name="query" class="form-control" id="search_content" type="text" placeholder="Search..">
          </div>
          <!-- search button-->
          <button type="submit" class="btn btn-primary col-md-0 justify-content-start" id="search_button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
      <div class="card-tools">
            <!-- <button class="btn btn-success" id="add_item" data-toggle="modal" data-target="#addBrandModal">
                <i class="fas fa-plus"></i>
              </button> -->
            </div>
            <!-- search bar -->

          </div>

          <!-- /.card-header -->
          <div class="card-body">
            <div class="col-md-12 col-sm-12" style="overflow-x:auto;">
              <table id="example1" class="table table-bordered table-striped dataTable dtr-inline " role="grid" aria-describedby="example1_info">
                <thead>
                  <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Id</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Name</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Email</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Contanct #</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Message</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @if(count($contact_detail) > 0)
                  @foreach($contact_detail as $value)
                  <tr role="row" class="odd">
                    <!-- id -->
                    <td class="{{'id'.$value->id}}">{{$value->id}}</td>

                    <!-- name -->
                    <td class="{{'name'.$value->id}}">{{$value->name}}</td>

                    <!-- email -->
                    <td class="{{'email'.$value->id}}">{{$value->email}}</td>

                    <!-- number -->
                    <td class="{{'contact_no'.$value->id}}">{{$value->contact_no}}</td>

                    <!-- msg -->
                    <td class="{{'message'.$value->id}}">{{$value->message}}</td>

                    <!-- actions -->
                    <td width="100">
                      <!-- Detail -->
                      <a href="#" class="viewContactButton" data-id="{{$value->id}}" data-route="{{route('contact_detail.show',$value->id)}}">
                        <i class="fas fa-eye green ml-1"></i>
                      </a>
                      <!-- Edit -->
                      <!-- <a href="#" class="editButton" data-id="{{$value->id}}">
                        <i class="fas fa-edit blue ml-1"></i>
                      </a> -->
                      <!-- Delete -->
                      <a href="#" class="OpenDelete" data-id="{{$value->id}}">
                        <i class="fas fa-trash red ml-1"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                  @else
                  <tr><td colspan="4"><h6 align="center">No Contact(s) found</h6></td></tr>
                  @endif
                </tbody>
                <tfoot>

                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
      <!-- Delete Customer Modal -->
      <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="deleteLabel">Delete Enquiry</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">
              <h5>Are You Sure ?</h5>
              <input type="hidden" name="id" id="ID">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button id="deleteButton" type="button" class="btn btn-danger">Yes</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Profile view -->
      <div class="modal fade" id="viewContactModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Contact View</h5>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="card-body" style="overflow-x:auto;">
              <table class="table table-bordered table-striped">
                <input type="hidden" name="id" id="ID">
                <tbody id="table_row_wrapper">
                  <tr role="row" class="odd">
                    <td class="">Name</td>
                    <td class="name"></td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="">Email</td>
                    <td class="email"></td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="">Contact No</td>
                    <td class="contact_no"></td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="">Message</td>
                    <td class="message"></td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="">created On</td>
                    <td class="created_at"></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary" data-dismiss="modal" style="float: right;">Close</button>
            </div>
          </div>
        </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
      <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
      <script>
        $(document).ready(function(){
          // persistent active sidebar
          var element = $('li a[href*="'+ window.location.pathname +'"]');
          element.parent().addClass('menu-open');
          // global vars
          var contact_view = "";
          function fetch_user(id){
            $.ajax({
              url: '<?php echo(route("contact_detail.show", 0)); ?>',
              type: 'GET',
              data: {id: id},
              dataType: 'JSON',
              async: false,
              success: function (data) {
                contact_view = data.contact_view;
              }
            });
          }
           //*** View Profile ***//
           $('.viewContactButton').on('click', function(){
            var id = $(this).data('id');
            fetch_user(id);

            $('#viewContactModal .name').html(contact_view.name ? contact_view.name : '');
            $('#viewContactModal .email').html(contact_view.email ? contact_view.email : '');
            $('#viewContactModal .contact_no').html(contact_view.contact_no ? contact_view.contact_no : '');
            $('#viewContactModal .message').html(contact_view.message ? contact_view.message : '');
            $('#viewContactModal .created_at').html(contact_view.created_at ? new Date(contact_view.created_at).toDateString() : '');
            $('#viewContactModal').modal('show');
          });  

           $('.OpenDelete').on('click',function(){
            $('#delete').modal('show');
            $('#ID').val($(this).data('id'));
          });

           $('#deleteButton').on('click',function(){
            $.ajax({
              type : 'DELETE',
              url : 'contact_detail/'+$('#ID').val(),
              data : {
                "_token": "{{ csrf_token() }}",
              },
              success: function(data) {
                if(data.message == 'success'){
                  $('#delete').modal('hide');
                  toastr.success('Enquiry Deleted Successfully', 'Success');
                  location.reload();
                }
              }
            });
          });

         });
       </script>
       @endsection('content_body')