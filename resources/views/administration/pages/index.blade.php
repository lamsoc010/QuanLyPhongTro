@section('style')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
@endsection

@extends('administration.layouts.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3 class="total-user">150</h3>
      
                      <p>Thành viên</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="/admin/users/listUser" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3 class="total-motels">53
                        <!-- <sup style="font-size: 20px">%</sup> -->
                      </h3>
      
                      <p>Nhà trọ</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="/admin/motels/listMotels" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3 class="total-posts">44</h3>
      
                      <p>Bài đăng</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    <a href="/admin/posts/listPosts" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>65</h3>
      
                      <p>Lượt view</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
              </div>
       
       
            </div><!-- /.container-fluid -->


            <!-- filter -->

            <div class="filter-container">

            </div>
            <!-- end filter -->
            <div class="row">
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header border-0">
                      <div class="d-flex justify-content-between">
                        <h3 class="card-title">Online Store Visitors</h3>
                        <a href="javascript:void(0);">View Report</a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex">
                        <p class="d-flex flex-column">
                          <span class="text-bold text-lg">820</span>
                          <span>Visitors Over Time</span>
                        </p>
                        <p class="ml-auto d-flex flex-column text-right">
                          <span class="text-success">
                            <i class="fas fa-arrow-up"></i> 12.5%
                          </span>
                          <span class="text-muted">Since last week</span>
                        </p>
                      </div>
                      <!-- /.d-flex -->
      
                      <div class="position-relative mb-4">
                        <canvas id="visitors-chart" height="200"></canvas>
                      </div>
      
                      <div class="d-flex flex-row justify-content-end">
                        <span class="mr-2">
                          <i class="fas fa-square text-primary"></i> This Week
                        </span>
      
                        <span>
                          <i class="fas fa-square text-gray"></i> Last Week
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- /.card -->
      
                  <div class="card">
                    <div class="card-header border-0">
                      <h3 class="card-title">Products</h3>
                      <div class="card-tools">
                        <a href="#" class="btn btn-tool btn-sm">
                          <i class="fas fa-download"></i>
                        </a>
                        <a href="#" class="btn btn-tool btn-sm">
                          <i class="fas fa-bars"></i>
                        </a>
                      </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                      <table class="table table-striped table-valign-middle">
                        <thead>
                        <tr>
                          <th>Product</th>
                          <th>Price</th>
                          <th>Sales</th>
                          <th>More</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>
                            <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                            Some Product
                          </td>
                          <td>$13 USD</td>
                          <td>
                            <small class="text-success mr-1">
                              <i class="fas fa-arrow-up"></i>
                              12%
                            </small>
                            12,000 Sold
                          </td>
                          <td>
                            <a href="#" class="text-muted">
                              <i class="fas fa-search"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                            Another Product
                          </td>
                          <td>$29 USD</td>
                          <td>
                            <small class="text-warning mr-1">
                              <i class="fas fa-arrow-down"></i>
                              0.5%
                            </small>
                            123,234 Sold
                          </td>
                          <td>
                            <a href="#" class="text-muted">
                              <i class="fas fa-search"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                            Amazing Product
                          </td>
                          <td>$1,230 USD</td>
                          <td>
                            <small class="text-danger mr-1">
                              <i class="fas fa-arrow-down"></i>
                              3%
                            </small>
                            198 Sold
                          </td>
                          <td>
                            <a href="#" class="text-muted">
                              <i class="fas fa-search"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                            Perfect Item
                            <span class="badge bg-danger">NEW</span>
                          </td>
                          <td>$199 USD</td>
                          <td>
                            <small class="text-success mr-1">
                              <i class="fas fa-arrow-up"></i>
                              63%
                            </small>
                            87 Sold
                          </td>
                          <td>
                            <a href="#" class="text-muted">
                              <i class="fas fa-search"></i>
                            </a>
                          </td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header border-0">
                      <div class="d-flex justify-content-between">
                        <h3 class="card-title">Sales</h3>
                        <a href="javascript:void(0);">View Report</a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex">
                        <p class="d-flex flex-column">
                          <span class="text-bold text-lg">$18,230.00</span>
                          <span>Sales Over Time</span>
                        </p>
                        <p class="ml-auto d-flex flex-column text-right">
                          <span class="text-success">
                            <i class="fas fa-arrow-up"></i> 33.1%
                          </span>
                          <span class="text-muted">Since last month</span>
                        </p>
                      </div>
                      <!-- /.d-flex -->
      
                      <div class="position-relative mb-4">
                        <canvas id="sales-chart" height="200"></canvas>
                      </div>
      
                      <div class="d-flex flex-row justify-content-end">
                        <span class="mr-2">
                          <i class="fas fa-square text-primary"></i> This year
                        </span>
      
                        <span>
                          <i class="fas fa-square text-gray"></i> Last year
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- /.card -->
      
                  <div class="card">
                    <div class="card-header border-0">
                      <h3 class="card-title">Online Store Overview</h3>
                      <div class="card-tools">
                        <a href="#" class="btn btn-sm btn-tool">
                          <i class="fas fa-download"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-tool">
                          <i class="fas fa-bars"></i>
                        </a>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                        <p class="text-success text-xl">
                          <i class="ion ion-ios-refresh-empty"></i>
                        </p>
                        <p class="d-flex flex-column text-right">
                          <span class="font-weight-bold">
                            <i class="ion ion-android-arrow-up text-success"></i> 12%
                          </span>
                          <span class="text-muted">CONVERSION RATE</span>
                        </p>
                      </div>
                      <!-- /.d-flex -->
                      <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                        <p class="text-warning text-xl">
                          <i class="ion ion-ios-cart-outline"></i>
                        </p>
                        <p class="d-flex flex-column text-right">
                          <span class="font-weight-bold">
                            <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                          </span>
                          <span class="text-muted">SALES RATE</span>
                        </p>
                      </div>
                      <!-- /.d-flex -->
                      <div class="d-flex justify-content-between align-items-center mb-0">
                        <p class="text-danger text-xl">
                          <i class="ion ion-ios-people-outline"></i>
                        </p>
                        <p class="d-flex flex-column text-right">
                          <span class="font-weight-bold">
                            <i class="ion ion-android-arrow-down text-danger"></i> 1%
                          </span>
                          <span class="text-muted">REGISTRATION RATE</span>
                        </p>
                      </div>
                      <!-- /.d-flex -->
                    </div>
                  </div>
                </div>
                <!-- /.col-md-6 -->
              </div>
    </div>

</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('AdminPTH/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('AdminPTH/dist/js/pages/dashboard3.js')}}"></script>
<script>
  $(document).ready(function () {
    let user = {
      id: '{{Auth::user()->id}}',
      name: '{{Auth::user()->name}}',
      email: '{{Auth::user()->email}}',
      image: '{{Auth::user()->avatar}}',
      phone: '{{Auth::user()->phone}}',
      role: '{{Auth::user()->role}}',
      address: '{{Auth::user()->address}}',
      created_at: '{{Auth::user()->created_at}}',
      updated_at: '{{Auth::user()->updated_at}}',
    };
    // console.log(user);
    localStorage.setItem('users', JSON.stringify(user));
  })
</script>
@endsection