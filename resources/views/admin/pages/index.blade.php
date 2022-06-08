@section('style')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
@endsection

@extends('admin.layouts.layout')
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
              <h3 class="total-users">150</h3>

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
              <h3 class="total-views">65</h3>

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
              <h3 class="card-title">Online Page Visitors</h3>
              <a href="javascript:void(0);">View Report</a>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex">
              <p class="d-flex flex-column">
                <span class="text-bold text-lg total-views"></span>
                <span>Lượt views</span>
              </p>
              <p class="ml-auto d-flex flex-column text-right">
                <span class="text-success">
                  <i class="fas fa-arrow-up"></i> 12.5%
                </span>
                <span class="text-muted">Since last year</span>
              </p>
            </div>
            <!-- /.d-flex -->

            <div class="position-relative mb-4">
              <canvas id="views-chart" height="200"></canvas>
            </div>

            <div class="d-flex flex-row justify-content-end">
              <span class="mr-2">
                <i class="fas fa-square text-primary"></i> Views
              </span>

             
            </div>
          </div>
        </div>
        <!-- /.card -->

       
        <!-- /.card -->
      </div>
      <!-- /.col-md-6 -->
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title">Lượt đăng bài</h3>
              <a href="javascript:void(0);">Total posts Report</a>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex">
              <p class="d-flex flex-column">
                <span class="text-bold text-lg total-motels"></span>
                <span>Tổng nhà trọ</span>
              </p>
              <p class="ml-auto d-flex flex-column text-right">
                <span class="text-success  total-posts">
                  <!-- <i class="fas fa-arrow-up"></i>  -->
                </span>
                <span class="text-muted">Tổng bài đăng</span>
              </p>
            </div>
            <!-- /.d-flex -->

            <div class="position-relative mb-4">
              <canvas id="quantity-chart" height="200"></canvas>
            </div>

            <div class="d-flex flex-row justify-content-end">
              <span class="mr-2">
                <i class="fas fa-square text-primary"></i> Motels
              </span>

              <span>
                <i class="fas fa-square text-gray"></i> Posts
              </span>
            </div>
          </div>
        </div>
        <!-- /.card -->


      </div>
      <!-- /.col-md-6 -->
    </div>
  </div>

</div>
@endsection

@section('scripts')

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('AdminPTH/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('AdminPTH/dist/js/pages/dashboard3.js')}}"></script>
<script>
  $(document).ready(function() {

    $.ajax({

      url: "{{asset('admin/handleAdminIndex')}}",
      type: 'GET',
      dataType: 'json',
      success: function(response) {
        console.log(response);
        $('.total-users').html(`${response.totalUsers[0].total}`);
        $('.total-motels').html(`${response.totalMotels[0].totalMotels}`);
        $('.total-posts').html(`${response.totalPosts[0].totalPosts}`);

        var totalViews = Number(response.totalPosts[0].totalViewPosts) + Number(response.totalMotels[0].totalViewMotels);
        $('.total-views').html(`${totalViews}`);

        chart(response.MotelInMonth, response.PostInMonth);
      }
    });

  });




  function chart(dataMotels, dataPosts) {
    'use strict'

    var ticksStyle = {
      fontColor: '#495057',
      fontStyle: 'bold'
    }

    var mode = 'index'
    var intersect = true

    //get month
    var monthArr = [];
    dataMotels.forEach((value, key) => {
      monthArr.push(`Tháng  ${value.month}`);
    });
    console.log(monthArr);

    var quanMotels = [];
    dataMotels.forEach((value, key) => {
      quanMotels.push(value.motelsQuantity);
    });

    var quanPosts = [];
    dataPosts.forEach((value, key) => {
      quanPosts.push(value.postsQuantity);
    });

    var $quantityChart = $('#quantity-chart')
    // eslint-disable-next-line no-unused-vars
    var quantityChart = new Chart($quantityChart, {
      type: 'bar',
      data: {
        labels: [...monthArr],
        datasets: [{
            backgroundColor: '#007bff',
            borderColor: '#007bff',
            data: [...quanMotels]
          },
          {
          backgroundColor: '#6C757D',
            borderColor: '#6C757D',
            data: [...quanPosts]}
        ],
        

      },
      options: {
        maintainAspectRatio: false,
        tooltips: {
          mode: mode,
          intersect: intersect
        },
        hover: {
          mode: mode,
          intersect: intersect
        },
        legend: {
          display: false
        },
        scales: {
          yAxes: [{
            // display: false,
            gridLines: {
              display: true,
              lineWidth: '4px',
              color: 'rgba(0, 0, 0, .2)',
              zeroLineColor: 'transparent'
            },
            ticks: $.extend({
              beginAtZero: true,
              suggestedMax: 2
            }, ticksStyle)
          }],
          xAxes: [{
            display: true,
            gridLines: {
              display: false
            },
            ticks: ticksStyle
          }]
        }
      }
    })




    //get views
    var views = [];
    dataMotels.forEach((value, key) => {
      dataPosts.map(function(value2, key2) {
        if (value.month == value2.month) {
          views.push(Number(value2.views) + Number(value.views));
        }
      });
    })

    var $viewChart = $('#views-chart')
    // eslint-disable-next-line no-unused-vars

    var viewChart = new Chart($viewChart, {
      data: {
        labels: [...monthArr],
        datasets: [{
            type: 'line',
            data: [...views],
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            pointBorderColor: '#007bff',
            pointBackgroundColor: '#007bff',
            fill: false
            // pointHoverBackgroundColor: '#007bff',
            // pointHoverBorderColor    : '#007bff'
          },

        ]
      },
      options: {
        maintainAspectRatio: false,
        tooltips: {
          mode: mode,
          intersect: intersect
        },
        hover: {
          mode: mode,
          intersect: intersect
        },
        legend: {
          display: false
        },
        scales: {
          yAxes: [{
            // display: false,
            gridLines: {
              display: true,
              lineWidth: '8px',
              color: 'rgba(0, 0, 0, .2)',
              zeroLineColor: 'transparent'
            },
            ticks: $.extend({
              beginAtZero: true,
              suggestedMax: 50
            }, ticksStyle)
          }],
          xAxes: [{
            display: true,
            gridLines: {
              display: false
            },
            ticks: ticksStyle
          }]
        }
      }
    })
  }
</script>
@endsection