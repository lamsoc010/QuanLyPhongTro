@section('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('AdminPTH/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminPTH/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminPTH/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    {{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css"> --}}
@endsection
@extends('admin.layouts.layout')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="tabUsers" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                            <th> ID</th>
                                <th> Họ & tên</th>
                                <th> Email </th>
                                <th> Số điện thoại</th>
                                <th> Địa chỉ</th>
                                <th> Ngày sinh</th>
                                {{-- <th> Chi tiết</th>
                                <th>Sửa</th> --}}
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
    <!-- jQuery -->
 {{-- <script src="//code.jquery.com/jquery.js"></script>
 <!-- DataTables -->
 <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
 <!-- Bootstrap JavaScript -->
 <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>     --}}
    <script>
    // $(function() {
    //     $("#tabUsers").DataTable({  
    //         "responsive": true,
    //         "lengthChange": false,
    //         "autoWidth": false,
    //         "buttons": ["copy", "csv", "excel", "pdf", "print"]
    //     }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    // });
    </script>



@*message*@
<!-- SweetAlert2 -->
{{-- <script src="~/adminLTE/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="~/js/modal.js"></script>

<script src="~/adminLTE/plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="~/adminLTE/plugins/jquery-validation/additional-methods.min.js"></script> --}}
<script>

    $(document).ready(function(){
       
        $("#tabUsers").DataTable({
            processing: true, 
            serverSide: true, 
            filter: true, 
            orderMulti: false,
           
            // "ajax":{
            //      url: "/Users/getListUsers",
            //      type: "POST",
            //      dataType: "json",
            // },
            ajax: {
                url:  "{{asset('admin/users/getList')}}",
                // type: 'get',
                // dataType: "json",
            },
            // "columnDefs": [{
            //     "targets": [0],
            //     "visible": false,
            //     "searchable": false
            // }],
           
            columns: [
            // { "data": "id", "name": "id"  },
            { "data": "name", "name": "name" },
            { "data": "email", "name": "email"  },
            { "data": "phone","name": "phone" },
            { "data": "address", "name": "address"  },
            { "data": "birthday","name": "birthday"  },
   
            // {
            //     "render": function(data, type, full, meta) {
            //         var myUrl = '@Url.Action("Details")/'+full.id;
            //         return `<button type="button" class="btn btn-primary" data-toggle="ajax-modal" onclick=EditUser("${myUrl}") data-target="#modal-create" data-url=\"'+myUrl+'\">Chi tiết </button>`;
            //     }
            // },
            // {
            //     data: null,
            //     render: function(data, type, row) {
            //         var myUrl = '@Url.Action("Edit")/'+row.id;
            //         return `<button type="button" class="btn btn-primary" data-toggle="ajax-modal" onclick=EditUser("${myUrl}") data-target="#modal-create" data-url=\"'+myUrl+'\">Sửa </button>`;
            //     }
            // },
            ],
        })
    })
    
    // hiện thị modal edit
    // var ShowModal = $("#ShowModal");
    // function EditUser(url){
    //     var decodeUrl = decodeURIComponent(url);
    //     $.get(decodeUrl).done(function (data) {
    //         ShowModal.html(data);
    //         ShowModal.find('.modal').modal('show');
    //     })
    // }
    //  // lưu thông tin trong form edit khi button save
    // ShowModal.on('click', '[data-save="modal"]', function (event) {
    //     event.preventDefault();

    //     var Toast = Swal.mixin({
    //         toast: true,
    //         position: 'top-end',
    //         showConfirmButton: false,
    //         timer: 3000
    //     });

    //     var form = $(this).parents('.modal').find('form');
    //     var actionUrl = form.attr('action');
    //     var sendData = form.serialize();

    //     $.post(actionUrl, sendData).done(function (data) {
           
    //         Toast.fire({
    //             icon: 'success',
    //             title: "Thông tin được lưu lại thành công"
    //         })
    //         ShowModal.find('.modal').modal('hide')
    //       $('#example1').DataTable().ajax.reload();
    //     })
    // })
   
    // //var inputs = document.getElementsByClassName('form-control form-control-sm').addEventListener("keyup", ()=>{
    // //    console.log('aaaaa')
    // //});
    // document.addEventListener("keyup", ()=>{
    //     console.log("aa")
    // })
</script>

 
@endsection