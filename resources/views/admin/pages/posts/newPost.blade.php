@section('style')
<!-- CodeMirror -->
<link rel="stylesheet" href="{{asset('AdminPTH/plugins/codemirror/codemirror.css')}}">
<link rel="stylesheet" href="{{asset('AdminPTH/plugins/codemirror/theme/monokai.css')}}">
<!-- SimpleMDE -->
@endsection

@extends('admin.layouts.layout')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
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
                  <input class="form-control" type="text" placeholder="Title">
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
              <textarea id="summernote">
                {{-- Place <em>some</em> <u>text</u> <strong>here</strong> --}}
              </textarea>

             
              {{-- choose file --}}
              <div class="chooseFile">
                {{-- <input type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label> --}}
                <input id="file-input" type="file" class="custom-file-input" multiple>
                <label class="custom-file-label" for="file-input">Chọn ảnh</label>
                <div id="preview"></div>
              </div>
              <div class="col-12 pt-2">
                <button type="button" class="btn btn-primary" onclick="AddPost()">Đăng bài</button>
              </div>
            </div>
            
          </div>
        </div>
        <!-- /.col-->
      </div>

      {{--  --}}
  
    </section>
    <!-- /.content -->

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
    // $('#summernote1').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  });
  // upload multiple image\
  function previewImages() {

var preview = document.querySelector('#preview');

if (this.files) {
    [].forEach.call(this.files, readAndPreview);
}

function readAndPreview(file) {

    // Make sure `file.name` matches our extensions criteria
    if (!/\.(jpe?g|png|gif|jfif)$/i.test(file.name)) {
        return alert(file.name + " is not an image");
    } // else...

    var reader = new FileReader();

    reader.addEventListener("load", function () {
        var image = new Image();
        image.height = 100;
        image.title = file.name;
        image.src = this.result;
        preview.appendChild(image);
    });
    reader.readAsDataURL(file);
}

}
  document.querySelector('#file-input').addEventListener("change", previewImages);
</script>

<script>
  $(document).ready(function(){
    // set data to tagName: select -> option
    $.ajax({
      type: "GET",
      url:  "{{asset('admin/posts/getAllNameCategory')}}",
      success: function (data) {
        $.each(data, function(key, value){
            $("select[name='category']").append(
                `<option value="${value.name}">${value.name}</option>`
            );
        });
      },
      error: function (data, textStatus, errorThrown) {
        console.log("get data fail");
      },
    });
  });

  // add post
  function AddPost(){
    var title = $('input[name="title"]').val();
    var category = $('select[name="category"]').val();
    var content = $('#summernote').summernote('code');
    var image = $('#preview').html();
    var data = {
      title: title,
      category: category,
      content: content,
      image: image,
    };
    $.ajax({
      type: "POST",
      url:  "{{asset('admin/posts/create')}}",
      data: data,
      success: function (data) {
        alert('Thêm bài viết thành công');
        window.location.href = "{{asset('admin/posts')}}";
      },
      error: function (data, textStatus, errorThrown) {
        console.log("get data fail");
      },
    });
  }
</script>
  @endsection