@section('style')
<!-- CodeMirror -->
<link rel="stylesheet" href="{{asset('AdminPTH/plugins/codemirror/codemirror.css')}}">
<link rel="stylesheet" href="{{asset('AdminPTH/plugins/codemirror/theme/monokai.css')}}">
<!-- SimpleMDE -->
 <!-- Message -->
 <link rel="stylesheet" href="{{asset('AdminPTH/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
@endsection

@extends('administration.layouts.layout')
@section('content')
<div class="content-wrapper">

    <form method="post" id="upload-image-form" class="p-2" enctype="multipart/form-data" >
      @csrf
        {{-- @csrf
        <div class="form-group">
            <input type="file" name="file" class="form-control" id="image-input">
            <span class="text-danger" id="image-input-error"></span>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-success">Upload</button>
        </div> --}}
        
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Nội dung bài đăng</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                tiêu đề
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <h3>Tiêu đề</h3>
                  <input class="form-control" type="text" name="title" placeholder="Title">
                </div>
                <div class="col-md-6">
                  <div class="col-md">
                    <h3>Thể loại</h3>
                    <select class="form-control select2" id="category" name="category" style="width: 100%;">
                      <option selected="selected" value="">--tất cả--</option>
                    </select>
                  </div>
                </div>
              </div>
             
              {{-- <textarea id="summernote"> --}}
                {{-- Place <em>some</em> <u>text</u> <strong>here</strong> --}}
              {{-- </textarea> --}}
              <h3>Nội dung</h3>
              <textarea id="summernote" name="content">
                {{-- Place <em>some</em> <u>text</u> <strong>here</strong> --}}
              </textarea>

             
              {{-- choose file --}}
              <div class="chooseFile">
                {{-- <input type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label> --}}
                <input id="file-input" type="file" name="file[]" class="custom-file-input" multiple>
                <label class="custom-file-label" for="file-input">Chọn ảnh</label>
                <span class="text-danger" id="image-input-error"></span>
                <div id="preview"></div>
              </div>
              <div class="col-12 pt-2">
                <button type="submit" class="btn btn-primary" >Đăng bài</button>
                {{-- <button type="submit" class="btn btn-primary" id="submit">Submit</button> --}}
              </div>
            </div>
            
          </div>
        </div>
        <!-- /.col-->
      </div>

      {{--  --}}
  
    </section>
    <!-- /.content -->

    </form>

</div>

  @endsection

  @section('scripts')
<!-- Summernote -->
<script src="{{asset('AdminPTH/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- CodeMirror -->
<script src="{{asset('AdminPTH/plugins/codemirror/codemirror.js')}}"></script>
<script src="{{asset('AdminPTH/plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{asset('AdminPTH/plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{asset('AdminPTH/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
<!-- Message -->
<script src="{{asset('AdminPTH/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
{{-- upload image --}}
<script src="{{asset('js/uploadFile.js')}}"></script>
<script>
  var idHost = "{{Auth::user()->id}}";
    $(document).ready(function(){
    // set data to tagName: select -> option
    $.ajax({
      type: "GET",
      url:  "{{asset('administration/posts/getAllNameCategory')}}",
      success: function (data) {
        $.each(data, function(key, value){
            $("select[name='category']").append(
                `<option value="${key}">${value.name}</option>`
            );
        });
      },
      error: function (data, textStatus, errorThrown) {
        console.log("get data fail");
      },
    });
  });

  // cấu hình message
  var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
              });
  // add post
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  $('#upload-image-form').submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    formData.append('idHost', idHost);
    // ban đầu băng bài cho nó hiện thị -- status =1
    formData.append('status', 1);
    // ban đầu lượt xem bằng 0
    formData.append('views', 0);
    //$('#image-input-error').text('');

    $.ajax({
       type:'POST',
       url: "{{asset('administration/posts/create')}}",
        data: formData,
        contentType: false,
        processData: false,
        success: (response) => {
          if (response) {
            this.reset();
            Toast.fire({
              type: 'success',
              title: 'Đăng bài thành công'
            });
            // setTimeout(function(){
            //   window.location.href = "{{asset('admin/posts')}}";
            // }, 3000);
          }
        },
        error: function(response){
           console.log(response);
           //  $('#image-input-error').text(response.responseJSON.errors.file);
        }
    });
  });
</script>
  @endsection