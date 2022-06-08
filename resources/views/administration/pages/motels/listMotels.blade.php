@section('style')
<!-- CodeMirror -->
<link rel="stylesheet" href="{{asset('AdminPTH/plugins/codemirror/codemirror.css')}}">
<link rel="stylesheet" href="{{asset('AdminPTH/plugins/codemirror/theme/monokai.css')}}">
<!-- SimpleMDE -->
<link rel="stylesheet" href="{{asset('AdminPTH/plugins/simplemde/simplemde.min.css')}}">
<!-- Datatable -->
<link rel="stylesheet" href="{{asset('AdminPTH/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminPTH/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminPTH/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminPTH/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">

@endsection

@extends('administration.layouts.layout')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper pt-2">

  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">Quản lý dãy trọ</h3>
  
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <div class="col-md-2">
                <label>Giá:</label>
              </div>
              <div class="col-md">
                <select class="form-control select2"  name="price" id="price">
                  <option selected="selected" value="" >--tất cả--</option>
                  <option value="0">Dưới 500.000 vnđ</option>
                  <option value="500000">Từ 500.000 - 1.000.000 vnđ</option>
                  <option value="1000000">Từ 1.000.000 - 1.500.000 vnđ</option>
                  <option value="1500000">Từ 1.500.000 - 2.000.000 vnđ</option>
                  <option value="2000000">Trên 2.000.000 vnđ</option>
                </select>
              </div>
           
            </div>
            <!-- /.form-group -->
            <div class="form-group row">
              <div class="col-md-2">
                <label>Trạng thái:</label>
              </div>
              <div class="col-md">
                <select class="form-control select2" id="status" name='status'>
                  <option selected="selected" value="" >--tất cả--</option>
                  <option value="Còn phòng">Còn phòng</option>
                  <option value="Hết phòng">Hết phòng</option>
                </select>
              </div>
           
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="form-group row">
              <div class="col-md-2">
                <label>Phân loại:</label>
              </div>
              <div class="col-md">
                <select class="form-control select2"  name="sex" id="sex">
                  <option selected="selected" value="" >--tất cả--</option>
                  <option value="Nam">Nam</option>
                  <option value="Nữ">Nữ</option>
                </select>
              </div>
           
            </div>
            <!-- /.form-group -->
            <div class="form-group row">
              <div class="col-md-2">
                <label>Tên trọ: </label>
              </div>
              <div class="col-md">
                <select class="form-control select2" id="nameMotels" name="nameMotels" style="width: 100%;">
                  <option selected="selected" value="">--tất cả--</option>
  
                </select>
              </div>
             
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <button type="button" class="btn btn-outline-warning"  data-toggle="modal" data-target="#modal-motels"> <i class="fas fa-door-open mr-2"></i> Thêm dãy trọ</button>
  
      </div>
    
    </div>
    <!-- /.card -->
    {{-- button --}}
   
  </div>
  {{-- </section>  --}}

{{-- dataTable --}}
<section class="content">
  <div class="container-fluid">
  <div class="row">
    <div class="col-12">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tabMotels" class="table table-bordered table-striped" style="width:100%">
                    <thead>
                        <th> Id</th>
                        <th> STT</th>
                        <th> Tên trọ</th>
                        <th> Chủ trọ</th>
                        <th> Giá TB</th>
                        <th> Tổng phòng </th>
                        <th> Tổng diện tích</th>
                        <th> Địa chỉ</th>
                        <th> Trạng thái</th>
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
</section>
</div>

<!-- Modal create motels-->
<div class="modal fade" id="modal-motels" data-backdrop="static">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Thêm dãy trọ</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form action=""  method="post" id="create-motels" enctype="multipart/form-data">
                  @csrf
                  <div class=" card-body">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="name">Tên dãy trọ</label><span class="text-danger">*</span>
                                  <input id="name" type="text" class="form-control" name="name" placeholder="Enter name">
                                  
                                  <span class="form-message"></span>
                              </div>
                              <div class="form-group">
                                  <label for="area">Diện tích trung bình mỗi phòng </label><span class="text-danger">*</span>
                                  <input id="area" type="number" class="form-control" name="area" placeholder="Enter area">
                                  <span class="form-message"></span>
                                  <span id="message" class="text-danger"></span>
                              </div>
                              <div class="form-group">
                                  <label for="min_pri">Giá phòng thấp nhất</label><span class="text-danger">*</span>
                                  <input id="min_pri" type="number" class="form-control" name="min_pri" placeholder="Enter min price">
                                  <span class="form-message"></span>
                                  <span id="message" class="text-danger"></span>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="address">Địa chỉ</label><span class="text-danger">*</span>
                                  <input id="address" type="text" class="form-control" name="address" placeholder="Enter Address">                                    
                                  <span class="form-message"></span>

                              </div>
                              <div class="form-group">
                                  <label for="quantity">Tổng số phòng</label><span class="text-danger">*</span>
                                  <input id="quantity"  type="number"  name="quantity" class="form-control" placeholder="Enter quantity">                                 
                                  <span class="form-message"></span>
                              </div>
                              <div class="form-group">
                                  <label for="max_pri"> Giá phòng cao nhất</label><span class="text-danger">*</span>
                                  <input id="max_pri" type="number" class="form-control" name="max_pri" placeholder="Enter max price">
                                  <span class="form-message"></span>
                                  <span id="message" class="text-danger"></span>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              {{-- choose file --}}
                              <label for="sex"> Chọn ảnh</label><span class="text-danger">*</span>
                              <div class="input-group mb-3">
                                  
                                  <input id="file-input" type="file" name="file" class="form-control"  multiple>
                                  <span class="text-danger" id="image-input-error"></span>
                                  <div id="preview"></div>
                              </div>
                              {{-- <div id="preview"></div> --}}
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="person"> Đối tượng cho thuế</label><span class="text-danger">*</span>
                                  <select class="form-control select2"  name="person" id="person">
                                      <option selected="selected" value="All" >--tất cả--</option>
                                      <option value="Nam">Nam</option>
                                      <option value="Nữ">Nữ</option>
                                    </select>
                                  <span class="form-message"></span>
                                  <span id="message" class="text-danger"></span>
                              </div>
                          </div>
                      </div>    
                      <div class="form-group">
                          <label for="descreption">Mô tả </label>
                          <textarea class="form-control" id="descreption" name="descreption" rows="4"></textarea>

                           <span class="form-message"></span>
                      </div>
                                               
                          
                      <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
                          <button type="submit"  class=" form-submit btn btn-primary" >Lưu</button>
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
  <!-- /.content-wrapper -->
  @endsection

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

   <script src="{{asset('AdminPTH/plugins/sweetalert2/sweetalert2.min.js')}}"></script>

  <!-- jQuery -->
  <script> 
    var filterInp = null;
    var nameMotels = null;
    var sex = null ;
    var price = null;
     $(document).ready(function(){
      var idHost = "{{Auth::user()->id}}";
       // cấu hình message
       var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
    //    datatable
      var table =   $("#tabMotels").DataTable({
            processing: true, 
            serverSide: true, 
            filter: true, 
            orderMulti: false,
            ajax: {
                url:  "{{asset('administration/motels/getList')}}",
                data: function(data){
                  var price = $('#price').val();
                  var nameMotels = $('#nameMotels').val();
                  var sex = $('#sex').val();
                  var status = $('#status').val();
                  data.idHost = idHost;
                  data.searchByPrice= price;
                  data.searchBynameMotels= nameMotels;
                  data.searchBySex = sex;
                  data.searchByStatus= status;
                }
            },
            columnDefs: [{
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
            { "data": null  },
            { "data": "name", "name": "name" },
            { "data": "nameUser", "name": "nameUser"  },
            { "data": "min_price","name": "min_price" },
            { "data": "room_quantity", "name": "room_quantity"  },
            { "data": "area", "name": "area"  },
            { "data": "address","name": "address" },
            { "data": "status", "name": "status"  },
            {
                data: null,
                render: function(data, type, row) {
                    return `<button type="button" class="btn btn-primary"   data-toggle="modal" data-target="#modal-edit">Sửa </button>`;
                }
            },
            ],
        });

        table.on( 'order.dt search.dt', function () {
            table.column(1, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
    
        // set data to tagName: select -> option
        $.ajax({
                type: "GET",
                url:  "{{asset('administration/motels/getAllNameMotels')}}",
                data: {
                  idHost: idHost
                },
                success: function (data) {
                  // console.log("get data success");
                //  $("select[name='nameMotels'").html('');
                  $.each(data, function(key, value){
                      $("select[name='nameMotels']").append(
                         `<option value="${value.name}">${value.name}</option>`
                      );
                  });
                },
                error: function (data, textStatus, errorThrown) {
                  console.log("get data fail");
                },
            });


            //bộ lọc
            $('#price').change(function(){
                table.draw();
             });
             $('#nameMotels').change(function(){
                table.draw();
             });
             $('#sex').change(function(){
                table.draw();
             });
             $('#status').change(function(){
                table.draw();
             });
             $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#create-motels').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);
            // phòng
            formData.append('id', idHost);
            formData.append('status', "Còn phòng");
            // lượt view mới đầu tiên
            formData.append('views', 0);

            // ajax
            $.ajax({
                type:'POST',
                url: "{{asset('administration/motels/createMotel')}}",
                data: formData,
                contentType: false,
                processData: false,
                // response message
                success: function (data) {
                        // ẩn modal
                        $('div#modal-motels').modal('hide');
                        // reload data in table
                        $('#tabMotels').DataTable().ajax.reload();
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
        });
        // $('#create-motels').validate({
        //     rules: {
        //         name: {
        //             required: true,
        //         },
        //         area: {
        //             required: true,
                   
        //         },
        //         address: {
        //             required: true,
        //         },
        //         min_pri: {
        //             required: true,
        //         },
        //         quantity: {
        //             required: true,
        //         },
        //         max_pri: {
        //             required: true,
        //         },
        //         person: {
        //             required: true,
        //         },
        //         descreption: {
        //             required: true,
        //         },

        //     },
        //     messages: {
        //         name: {
        //             required: "Vui lòng nhập tên",
        //         },
        //         area: {
        //             required: "Vui lòng nhập diện tích",
        //         },
        //         address: {
        //             required: "Vui lòng nhập địa chỉ",
        //         },
        //         min_pri: {
        //             required: "Vui lòng nhập giá thấp nhất",
        //         },
        //         quantity: {
        //             required: "Vui lòng nhập số phòng",
        //         },
        //         max_pri: {
        //             required: "Vui lòng nhập giá cao nhất",
        //         },
        //         person: {
        //             required: "Vui lòng nhập số người",
        //         },
        //         descreption: {
        //             required: "Vui lòng nhập mô tả",
        //         },
                
        //     },
        //     errorElement: 'span',
        //     errorPlacement: function (error, element) {
        //     error.addClass('invalid-feedback');
        //     element.closest('.form-group').append(error);
        //     },
        //     highlight: function (element, errorClass, validClass) {
        //     $(element).addClass('is-invalid');
        //     },
        //     unhighlight: function (element, errorClass, validClass) {
        //     $(element).removeClass('is-invalid');
        //     }
        // });

      })
     
  </script>
  @endsection