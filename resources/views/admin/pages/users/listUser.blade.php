@section('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('AdminPTH/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminPTH/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminPTH/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
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
    <button type="button" class="btn btn-primary" data-toggle="ajax-modal"
            data-target="#modal-create" data-url="@Url.Action("Create")">
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
    <script>
    // $(function() {
    //     $("#example1").DataTable({  
    //         "responsive": true,
    //         "lengthChange": false,
    //         "autoWidth": false,
    //         "buttons": ["copy", "csv", "excel", "pdf", "print"]
    //     }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    // });
    </script>



@*message*@
<!-- SweetAlert2 -->
<script src="{{asset('AdminPTH/plugins/sweetalert2/sweetalert2.min.js')}}"></script>


<script src="{{asset('AdminPTH/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
  <script src="{{asset('AdminPTH/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script>

    $(document).ready(function(){
       
        $("#example1").DataTable({
            processing: true, 
            serverSide: true, 
            filter: true, 
            orderMulti: false,
            // frtip
            dom: 'Blfrtip',
            buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
            ajax: {
                url:  "{{asset('admin/users/getList')}}",
                // type: 'get',
                // dataType: "json",
            },
            "columnDefs": [{
                "targets": [0],
                "visible": false,
                "searchable": false
            }],
           
            columns: [
            { "data": "id", "name": "id"  },
            { "data": "name", "name": "name" },
            { "data": "email", "name": "email"  },
            { "data": "phone","name": "phone" },
            { "data": "address", "name": "address"  },
            {
                "render": function(data, type, full, meta) {
                    var myUrl = '{{asset('admin/users/details')}}/'+full.id;
                    return `<button type="button" class="btn btn-primary" data-toggle="ajax-modal" onclick=EditUser("${myUrl}") data-target="#modal-create" data-url=\"'+myUrl+'\">Chi tiết </button>`;
                }
            },
            {
                data: null,
                render: function(data, type, row) {
                    var myUrl = '{{asset('admin/users/edit')}}/'+row.id;
                    return `<button type="button" class="btn btn-primary" data-toggle="ajax-modal" onclick=EditUser("${myUrl}") data-target="#modal-create" data-url=\"'+myUrl+'\">Sửa </button>`;
                }
            },
            ],
        })
    })
    
    // hiện thị modal edit
    var ShowModal = $("#ShowModal");
    function EditUser(url){
        var decodeUrl = decodeURIComponent(url);
        $.get(decodeUrl).done(function (data) {
            ShowModal.html(data);
            ShowModal.find('.modal').modal('show');
        })
    }
     // lưu thông tin trong form edit khi button save
    ShowModal.on('click', '[data-save="modal"]', function (event) {
        event.preventDefault();

        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        var form = $(this).parents('.modal').find('form');
        var actionUrl = form.attr('action');
        var sendData = form.serialize();

        $.post(actionUrl, sendData).done(function (data) {
           
            Toast.fire({
                icon: 'success',
                title: "Thông tin được lưu lại thành công"
            })
            ShowModal.find('.modal').modal('hide')
          $('#example1').DataTable().ajax.reload();
        })
    })
   
    //var inputs = document.getElementsByClassName('form-control form-control-sm').addEventListener("keyup", ()=>{
    //    console.log('aaaaa')
    //});
    document.addEventListener("keyup", ()=>{
        console.log("aa")
    })
</script>

 
@endsection