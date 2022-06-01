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
@endsection

@extends('admin.layouts.layout')
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
        <button onclick="filterData()" id="filterData">tra cứu</button>
  
      </div>
    
    </div>
    <!-- /.card -->
    {{-- button --}}
   
    </div>
  </section>

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
</section>
</div>
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
  <!-- jQuery -->
  <script> 
    var filterInp = null;
    var nameMotels = null;
    var sex = null ;
    var price = null;
     $(document).ready(function(){
    //    datatable
      var table =   $("#tabMotels").DataTable({
            processing: true, 
            serverSide: true, 
            filter: true, 
            orderMulti: false,
            // dom: 'Blfrtip',
            // buttons: [
            // 'copy', 'csv', 'excel', 'pdf', 'print'
            // ],
            ajax: {
                url:  "{{asset('admin/motels/getList')}}",
                data: function(data){
                  var price = $('#price').val();
                  var nameMotels = $('#nameMotels').val();
                  var sex = $('#sex').val();
                  var status = $('#status').val();
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
                "render": function(data, type, full, meta) {
                    // var myUrl = '{{asset('admin/users/details')}}/'+full.id;
                    return `<button type="button" class="btn btn-primary" data-toggle="modal"   data-target="#modal-details" >Chi tiết </button>`;
                }
            },
            {
                data: null,
                render: function(data, type, row) {
                    // var myUrl = '{{asset('admin/users/edit')}}/'+row.id;
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
                url:  "{{asset('admin/motels/getAllNameMotels')}}",
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
      })
     
      function  filterData(){
        var price = $('#price :selected').val();
        var nameMotels = $('#nameMotels :selected').val();
        var sex = $('#sex :selected').val();
        var status = $('#status :selected').val();
      }
  </script>
  @endsection