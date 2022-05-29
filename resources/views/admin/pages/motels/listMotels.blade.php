@section('style')
<!-- CodeMirror -->
<link rel="stylesheet" href="{{asset('AdminPTH/plugins/codemirror/codemirror.css')}}">
<link rel="stylesheet" href="{{asset('AdminPTH/plugins/codemirror/theme/monokai.css')}}">
<!-- SimpleMDE -->
<link rel="stylesheet" href="{{asset('AdminPTH/plugins/simplemde/simplemde.min.css')}}">
@endsection

@extends('admin.layouts.layout')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper pt-2">
 <section class="content">
  <div class="container-fluid">
  <!-- SELECT2 EXAMPLE -->
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
          <div class="form-group">
            <label>Từ ngày: </label>
              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
              </div>
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label>Trạng thái</label>
            <select class="form-control select2" style="width: 100%;">
              <option selected="selected">--tất cả--</option>
              <option>Còn phòng</option>
              <option>Hết phòng</option>
            </select>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Đến ngày:</label>
              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
              </div>
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label>Dãy trọ</label>
            <select class="form-control select2" style="width: 100%;">
              <option selected="selected">--tất cả--</option>
              <option>Alaska</option>
              <option>California</option>
              <option>Delaware</option>
              <option>Tennessee</option>
              <option>Texas</option>
              <option>Washington</option>
            </select>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <button>tra cứu</button>

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
                <table id="example1" class="table table-bordered table-striped" style="width:100%">
                    <thead>
                        <th> Id</th>
                        <th> STT</th>
                        <th> Tên dãy trọ</th>
                        <th> Chủ trọ</th>
                        <th> Giá trung bình</th>
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
<!-- Summernote -->
<script src="{{asset('AdminPTH/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- CodeMirror -->
<script src="{{asset('AdminPTH/plugins/codemirror/codemirror.js')}}"></script>
<script src="{{asset('AdminPTH/plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{asset('AdminPTH/plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{asset('AdminPTH/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>

<!-- Page specific script -->
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
  @endsection