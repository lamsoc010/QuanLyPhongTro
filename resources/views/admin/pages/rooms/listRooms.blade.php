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
        <h3 class="card-title">Quản lý phòng trọ</h3>
  
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
           <!-- /.row -->
           <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Expandable Table</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body">
                  <table class="table table-bordered table-hover" id="tabRooms"  style="width:100%">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Mã phòng</th>
                        <th>Diện tích </th>
                        <th>Giá</th>
                        <th>Số người tối đa</th>
                        <th>Trạng thái</th>
                      </tr>
                    </thead>
                    {{-- <tbody>
                      <tr data-widget="expandable-table" aria-expanded="false">
                        <td>183</td>
                        <td>John Doe</td>
                        <td>11-7-2014</td>
                        <td>Approved</td>
                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                      </tr>
                      <tr class="expandable-body">
                        <td colspan="5">
                          <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                          </p>
                        </td>
                      </tr>
                     
                    </tbody> --}}
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
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
     $(document).ready(function(){
        var table =   $("#tabRooms").DataTable({
            processing: true, 
            serverSide: true, 
            filter: true, 
            orderMulti: false,

            // createdRow: function( row, data, dataIndex ) {
            //      $(row).attr('id', 'someID');
            //  },

            
        });
     });
</script>
@endsection