@section('style')
<!-- CodeMirror -->
<link rel="stylesheet" href="{{asset('plugins/codemirror/codemirror.css')}}">
<link rel="stylesheet" href="{{asset('plugins/codemirror/theme/monokai.css')}}">
<!-- SimpleMDE -->
<link rel="stylesheet" href="{{asset('plugins/simplemde/simplemde.min.css')}}">
@endsection

@extends('../../layouts/layout')
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
              <textarea id="summernote">
                Place <em>some</em> <u>text</u> <strong>here</strong>
              </textarea>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  @endsection

  @section('scripts')
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- CodeMirror -->
<script src="{{asset('plugins/codemirror/codemirror.js')}}"></script>
<script src="{{asset('plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{asset('plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{asset('plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>

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