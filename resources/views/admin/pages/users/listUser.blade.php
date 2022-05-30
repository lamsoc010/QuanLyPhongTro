@section('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('AdminPTH/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminPTH/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminPTH/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/validate.css')}}">
      <!-- SweetAlert2 -->
      <link rel="stylesheet" href="{{asset('AdminPTH/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <style>
        div#example1_length {
    display: contents;
}
div#example1_filter {
    display: contents;
    position: static;
    margin-left: 1000px;
    right: absolute;
    /* top: 8px; */
    right: 16px;
    /* font-size: 18px; */
}
div.dataTables_wrapper div.dataTables_filter label {
    font-weight: normal;
    white-space: nowrap;
    text-align: left;
    /* text-align: right; */
    /* padding-left: inherit; */
    padding-left: 520px;
}
    </style>
@endsection
@extends('admin.layouts.layout')
@section('content')

<section class="content px-4">
<div class="create-new-user d-flex align-items-end flex-column  pb-1 pt-1">
    <!--<button type="button" class="btn btn-primary " data-toggle="modal"
    data-target="#modal-create" >
        Thêm người dùng
    </button>-->
    <div id="PlaceHolderHere"></div>
    <div id="ShowModal"></div>
    <button type="button" class="btn btn-primary" data-toggle="modal"
            data-target="#modal-create">
        Thêm người dùng
    </button>
</div>
<div class="content-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                            <th> Id</th>
                            <th> STT</th>
                            <th> Họ & tên</th>
                            <th> Email </th>
                            <th> Số điện thoại</th>
                            <th> Địa chỉ</th>
                            <th> Chi tiết</th>
                            <th>Sửa</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</div>
</div>


<!-- Modal create-->
<div class="modal fade" id="modal-create" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thêm người dùng</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action=""  id="create-user">
                    <div class=" card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Họ & tên</label>
                                    <input id="name" type="text" class="form-control" name="name" placeholder="Enter name">
                                    
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <label for="email">Địa chỉ Email</label>
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Enter email">
                                    <span class="form-message"></span>
                                    <span id="message" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Số điện thoại</label>
                                    <input id="phone" type="text" class="form-control" name="phone" placeholder="Enter Phone">                                    
                                    <span class="form-message"></span>

                                </div>
                                <div class="form-group">
                                    <label for="birthday">Ngày sinh</label>
                                    <input id="birthday"  type="date" value="2022-05-25" name="birthday" class="form-control" placeholder="Enter Birthday">                                 
                                    <span class="form-message"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Address">Địa chỉ </label>
                            <input for="Address" type="text" class="form-control" name="address" placeholder="Enter Address">
                            
                            <span class="form-message"></span>
                        </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
                            <button  class=" form-submit btn btn-primary" >Lưu</button>
                        </div>
                    </div>
                </form>
              
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /Modal create-->

{{-- modal details  --}}
<div class="modal fade" id="modal-details" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            {{-- header --}}
            <div class="modal-header">
                <h4 class="modal-title">Thông tin người dùng</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
           {{-- body --}}
            <div class="modal-body">
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4 class="dt-name"></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3 pb-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Họ & tên</h6>
                                    </div>
                                    <div class="dt-name col-sm-9 text-secondary">
                                       
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="dt-email col-sm-9 text-secondary">
                                        
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Số điện thoại</h6>
                                    </div>
                                    <div class="dt-phone col-sm-9 text-secondary">
                                       
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Địa chỉ</h6>
                                    </div>
                                    <div class="dt-address col-sm-9 text-secondary">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
{{-- /modal-details --}}

{{-- modal edit --}}
<div class="modal fade" id="modal-edit"  data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thay đổi thông tin người dùng</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form asp-action="Edit" id="edit-user">
                    <div class=" card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ed-name">Họ & tên</label>
                                    <input id="ed-name" type="text" class="form-control" name="name" placeholder="Enter name">
                                    
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <label for="ed-email">Địa chỉ Email</label>
                                    <input id="ed-email" type="email" class="form-control" name="email" placeholder="Enter email">
                                    <span class="form-message"></span>
                                    <span id="message" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ed-phone">Số điện thoại</label>
                                    <input id="ed-phone" type="text" class="form-control" name="phone" placeholder="Enter Phone">                                    
                                    <span class="form-message"></span>

                                </div>
                                <div class="form-group">
                                    <label for="ed-birthday">Ngày sinh</label>
                                    <input id="ed-birthday"  type="date" value="2022-05-25" name="birthday" class="form-control" placeholder="Enter Birthday">                                 
                                    <span class="form-message"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ed-address">Địa chỉ </label>
                            <input id="ed-address" type="text" class="form-control" name="address" placeholder="Enter Address">
                            
                            <span class="form-message"></span>
                        </div>
                    
                    </div>
                </form>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
                <button type="button" onclick="editUser()" class="btn btn-primary" data-save="modal">Lưu thay đổi</button>
            </div>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
{{-- /modal-edit --}}
@endsection
    <!-- /.row -->

@section('scripts')
    <!-- DataTables  & ../plugins -->
    <script src="{{asset('AdminPTH/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('AdminPTH/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('AdminPTH/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('AdminPTH/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('AdminPTH/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('AdminPTH/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('AdminPTH/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('AdminPTH/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('AdminPTH/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('AdminPTH/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('AdminPTH/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('AdminPTH/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
@*message*@
<!-- SweetAlert2 -->
<script src="{{asset('AdminPTH/plugins/sweetalert2/sweetalert2.min.js')}}"></script>


<script src="{{asset('AdminPTH/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
  <script src="{{asset('AdminPTH/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script>

    $(document).ready(function(){
       
    //    datatable
     var table =   $("#example1").DataTable({
            processing: true, 
            serverSide: true, 
            filter: true, 
            orderMulti: false,
            dom: 'Blfrtip',
            buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            ajax: {
                url:  "{{asset('admin/users/getList')}}",
               

            },
            "columnDefs": [
                {
                "targets": [0],
                "visible": false,
                "searchable": false
                },
                {
                searchable: false,
                orderable: false,
                targets: 1,
                },

        ],
            columns: [
            { "data": "id", "name": "id"  },
            { "data": null},
            { "data": "name", "name": "name" },
            { "data": "email", "name": "email"  },
            { "data": "phone","name": "phone" },
            { "data": "address", "name": "address"  },
            {
                "render": function(data, type, full, meta) {
                    var myUrl = '{{asset('admin/users/details')}}/'+full.id;
                    return `<button type="button" class="btn btn-primary" data-toggle="modal" onclick=Details("${myUrl}")  data-target="#modal-details" >Chi tiết </button>`;
                }
            },
            {
                data: null,
                render: function(data, type, row) {
                    var myUrl = '{{asset('admin/users/edit')}}/'+row.id;
                    return `<button type="button" class="btn btn-primary" onclick=Edit("${myUrl}")  data-toggle="modal" data-target="#modal-edit">Sửa </button>`;
                }
            },
            ],
        });
        table.on( 'order.dt search.dt', function () {
            table.column(1, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
      // xử lý -  gửi data sau khi thông qua được validate
      $.validator.setDefaults({
        submitHandler: function (form) {
            // cấu hình message
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            var actionUrl ="{{asset('admin/users/create')}}";    
            $.ajax({
                type: "POST",
                url: actionUrl,
                data: { 
                    name: form.name.value,
                    email: form.email.value,
                    phone: form.phone.value,
                    address: form.address.value,
                    birthday: form.birthday.value,
                    password: Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 7),
                    role: '1',
                    _token: '{{csrf_token()}}'
                },
                success: function (data) {
                    // ẩn modal
                    $('div#modal-create').modal('hide');
                    // reload data in table
                    $('#example1').DataTable().ajax.reload();
                    // show message
                    Toast.fire({
                        icon: 'success',
                        title: "Thông tin được lưu lại thành công"
                    })
                    // xóa các biểu mẫu sau khi lưu
                    form.reset();
                },
                error: function (data, textStatus, errorThrown) {
                    $('#message').html('Email đã tồn tại');
                },
            });
        }
      });
      $('#create-user').validate({
        rules: {
          name: {
            required: true,
          },
          email: {
            required: true,
            email: true,
          },
          phone: {
            required: true,
            phoneUK: true,
           
          },
          address: {
            required: true,
          },
        },
        messages: {
          email: {
            required: "Vui lòng nhập địa chỉ email",
            email: "Trường này là email"
          },
          name: {
            required: "Vui lòng nhập Họ $ tên",
          },
          phone: {
            required: "Vui lòng nhập số điện thoại",
            phoneUS: "Trường này là số điện thoại"
          },
          address: {
            required: "Vui lòng nhập địa chỉ",
          },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    })
   

    // show modal details
    function Details(url) {
        $.ajax({
            url: url,
            type: 'GET',
            success: function (data) {
            console.log(data);
                 $('.dt-name').html(data[0].name);
                 $('.dt-email').html(data[0].email);
                 $('.dt-address').html(data[0].address);
                 $('.dt-phone').html(data[0].phone);
               
               // $('#modal-details').find('.modal-body').html(data);
            }
        });
    }

    var urlEdit ="";
    // show modal edit
    function Edit(url){
        $.ajax({
            url: url,
            type: 'GET',
            success: function (data) {
                $('#ed-name').val(data[0].name);
                $('#ed-email').val(data[0].email);
                $('#ed-phone').val(data[0].phone);
                $('#ed-address').val(data[0].address);
                $('#ed-birthday').val(data[0].birthday);
            }
        });
        urlEdit = url;
    }

    function editUser(){
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        var actionUrl =urlEdit;
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: { 
                id: $('#ed-id').val(),
                name: $('#ed-name').val(),
                email: $('#ed-email').val(),
                phone: $('#ed-phone').val(),
                address: $('#ed-address').val(),
                birthday: $('#ed-birthday').val(),
                _token: '{{csrf_token()}}'
            },
            success: function (data) {
                // ẩn modal
                $('div#modal-edit').modal('hide');
                // reload data in table
                $('#example1').DataTable().ajax.reload();
                // show message
                Toast.fire({
                    icon: 'success',
                    title: "Thông tin được lưu lại thành công"
                })
                // xóa các biểu mẫu sau khi lưu
                $('#ed-name').val('');
                $('#ed-email').val('');
                $('#ed-phone').val('');
                $('#ed-address').val('');
                $('#ed-birthday').val('');
            },
            error: function (data, textStatus, errorThrown) {
                $('#message').html('Email đã tồn tại');
            },
        });
    }

</script>
@endsection