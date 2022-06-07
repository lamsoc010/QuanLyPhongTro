@extends('clients.layouts.home')
@section('main')

<style>
    .filter-blog {
        background-color: #FEBB02;
        height: 60px;
        border-radius: 8px;

    }

    .filter-block {
        height: 40px;
        border-radius: 8px;
        cursor: pointer;
        width: 25%;
    }

    .filter-btn {
        width: auto;
    }

    .bg-white {
        background-color: #fff !important;

    }

    .w-20 {
        width: 20% !important;
    }

    .motel-posts-wrapper {
        background-color: #F5F5F5;
        border-radius: 8px;
        padding: 0;
    }

    .motel-posts-block {
        padding: 0;
        background: #FFF9F3;
        /* border-radius: 8px; */
    }

    .motel-posts-item {
        padding: 24px 16px;
        border-top: 1px solid red;
        font-size: 14px !important;

    }

    .motel-posts-item:last-child {
        border-bottom: 1px solid red;

    }

    .motel-posts-title {
        font-size: 15px !important;
        font-weight: 600;
        text-transform: uppercase !important;
        color: #E13427;
    }

    .motel-posts-title i {
        color: #FFC929;
    }

    .motel-posts-title span a {
        color: #E13427;
    }

    .motel-posts-title span:hover a {
        text-decoration: underline;
    }

    .motel-posts-prop {
        margin-top: 6px;
    }

    .motel-posts-desc {
        margin-top: 6px;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        line-clamp: 3;
        -webkit-box-orient: vertical;
    }

    .bd-6 {
        border-radius: 6px !important;
    }

    .motel-posts-all {
        background: #FFF9F3;
        border-radius: 8px;
    }

    .motel-posts-trending {
        background-color: #F5F5F5;
        border-radius: 8px;
    }

    .posts-trending-title {
        border-bottom: 1px solid red;
    }

    .posts-trending-item {
        border-bottom: 1px solid red;
        padding: 20px 0;
    }

    .posts-trending-item:last-child {
        border: none;
    }
    .post_item h6{
        color: #0066D4;

    }
    .post_item h6:hover {
        text-decoration: underline;
    }

    
</style>
<main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">

            <!-- filter -->
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="filter-blog  d-flex justify-content-around align-items-center">

                        <div class="filter-price  filter-block w-20 bg-white d-flex justify-content-between  align-items-center text-dark">


                            <div class="filter-sub w-100">

                                <select class="form-select ">
                                    <option selected value="1"><i class="fas fa-hotel"></i>Phòng trọ, nhà trọ</option>
                                    <option value="2"><i class="fa-solid fa-user-group"></i>Tìm người ở ghép</option>

                                </select>
                            </div>

                        </div>

                        <div class="filter-price filter-block bg-white d-flex justify-content-between  align-items-center text-dark">

                            <span class="flex-grow-1 mx-3"><i class="fas fa-dollar-sign mr-2 "></i>Chọn giá:</span>
                            <div class="filter-sub">
                                <select class="form-select " id="priceMotels">
                                    <option selected value="1000000">Dưới 1 triệu</option>
                                    <option value="2000000">1 - 2 triệu</option>
                                    <option value="2000001">Trên 2 triệu</option>
                                </select>
                            </div>

                        </div>

                        <div class="filter-area filter-block   bg-white  d-flex justify-content-between  align-items-center text-dark">
                            <span class="flex-grow-1 mx-3"><i class="fas fa-chart-area mr-2"></i>Đối tượng:</span>

                            <div class="filter-sub">
                                <select class="form-select " id="personMotels">
                                    <option value="All">Tất Cả</option>
                                    <option select value="Nam">Nam </option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                            </div>
                        </div>
                        <div class="filter-block filter-btn px-5  bg-primary d-flex justify-content-center align-items-center text-white" onclick="searchMotels()">
                            {{-- <a href="{{route('all_motels', ['price' => $priceMotels, 'person' => $personMotels])}}"> --}}
                                <i class="fas fa-search mr-2" ></i>Tìm kiếm
                            {{-- </a> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <!-- post Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>Phòng trọ Huế</strong>
                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                    <li class="news-item">Nơi cung cấp các thông tin phòng trọ</li>
                                    <li class="news-item">Đăng tin cho thuê nhanh chóng</li>
                                    <li class="news-item">Chuyên mục review nhà trọ, tìm người ở ghép</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- post block -->
                <div class="row">

                    <div class="col-lg-8 motel-posts-wrapper">
                        <h4 class="m-3">Dãy trọ mới đăng</h4>
                        <div class="motel-posts-block" id="listMotelsNew">
                            {{-- render danh sách dãy trọ --}}
                        </div>
                        <div class="motel-posts-all py-3 text-center">
                            <a href="/all-motels" class="btn">Xem tất cả</a>
                        </div>
                    </div>
                    <!-- Right content -->
                    <div class="col-lg-4">
                        <div class="motel-posts-trending ml-2 w-100 h-100">

                            <!-- trendding-items -->
                            <h4 class="posts-trending-title p-3">Dãy trọ phổ biến</h4>
                            <aside class="" id="listMotelsMost">
                                {{-- render bài đăng nổi bật --}}

                            </aside>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->


    <!--   Weekly2-News start -->
    <div class="weekly2-news-area  weekly2-pading ">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h4>Bài viết nổi bật</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly2-news-active dot-style d-flex dot-style" id="slidePosts">
                            @foreach ($listPostsMost as $item)
                            @php
                            $hours = floor(abs(strtotime($item->created_at) - strtotime(date('Y-m-d H:i:s'))) / (60*60));
                            if($hours == 0) {
                            $time_diff = 'Vừa mới xong';
                            } else if($hours >= 24) {
                            $time_diff = floor($hours/24).' ngày trước';
                            } else {
                            $time_diff = $hours.'giờ trước';
                            }
                            @endphp
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="{{asset('assets/img/posts/'.$item->image)}}" alt="" style="height: 180px">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">{{$item->nameCategory}}</span>
                                    <div class="d-flex justify-content-between">
                                        <p class="font-weight-bold text-success">{{$item->nameUser}}</p>
                                        <p class="text-muted small lead">{{$time_diff}}</p>
                                    </div>
                                    <h4><a href="{{'/details-post/'.$item->id}}">{{$item->title}}</a></h4>
                                </div>
                            </div>
                            @endforeach
                            {{-- <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="{{asset('assets/img/news/weekly2News1.jpg')}}" alt="">
                        </div>
                        <div class="weekly2-caption">
                            <span class="color1">Tìm người ở ghép</span>
                            <div class="d-flex justify-content-between">
                                <p class="font-weight-bold text-success">1.000.000đ/tháng</p>
                                <p class="text-muted small lead">9 giờ trước</p>
                            </div>
                            <h4><a href="#">Tìm người ở ghép gần trường y dược Huế</a></h4>
                        </div>
                    </div>
                    <div class="weekly2-single">
                        <div class="weekly2-img">
                            <img src="{{asset('assets/img/news/weekly2News1.jpg')}}" alt="">
                        </div>
                        <div class="weekly2-caption">
                            <span class="color1">Tìm người ở ghép</span>
                            <div class="d-flex justify-content-between">
                                <p class="font-weight-bold text-success">1.000.000đ/tháng</p>
                                <p class="text-muted small lead">9 giờ trước</p>
                            </div>
                            <h4><a href="#">Tìm người ở ghép gần trường y dược Huế</a></h4>
                        </div>
                    </div>
                    <div class="weekly2-single">
                        <div class="weekly2-img">
                            <img src="{{asset('assets/img/news/weekly2News1.jpg')}}" alt="">
                        </div>
                        <div class="weekly2-caption">
                            <span class="color1">Tìm người ở ghép</span>
                            <div class="d-flex justify-content-between">
                                <p class="font-weight-bold text-success">1.000.000đ/tháng</p>
                                <p class="text-muted small lead">9 giờ trước</p>
                            </div>
                            <h4><a href="#">Tìm người ở ghép gần trường y dược Huế</a></h4>
                        </div>
                    </div>
                    <div class="weekly2-single">
                        <div class="weekly2-img">
                            <img src="{{asset('assets/img/news/weekly2News1.jpg')}}" alt="">
                        </div>
                        <div class="weekly2-caption">
                            <span class="color1">Tìm người ở ghép</span>
                            <div class="d-flex justify-content-between">
                                <p class="font-weight-bold text-success">1.000.000đ/tháng</p>
                                <p class="text-muted small lead">9 giờ trước</p>
                            </div>
                            <h4><a href="#">Tìm người ở ghép gần trường y dược Huế</a></h4>
                        </div>
                    </div> --}}

                </div>
            </div>
            <div class="col-12">
                <div class="weekly2-news-all text-center mt-5">
                    <a href="/all-posts" class="btn">Xem tất cả</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- End Weekly-News -->


    
</main>

@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>
<script>
    $(document).ready(function() {
        // alert('hello');
        $.ajax({
            url: '/handleIndex',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                console.log(response);
                $('#listMotelsNew').html(listMotelsNew(response.listMotelsNew));
                $('#listMotelsMost').html(listMotelsMost(response.listMotelsMost));
                // $('.slick-track').append(slidePosts(response.listPostsMost));
            }
        })
    })

    function listMotelsNew(listMotelsNew) {
        let html = ``;
        for (let i = 0; i < listMotelsNew.length; i++) {
            let item = listMotelsNew[i];
            // time_diff
            let time_now = moment(new Date());
            let time_created_at = moment(item.created_at);
            let time_diff = time_now.diff(time_created_at, 'hours');
            if (time_diff == 0) {
                time_diff = `<p>Vừa mới xong</p>`;
            } else if (time_diff >= 24) {
                time_diff = `<span>${Math.floor(time_diff/24)} ngày trước</span>`;
            } else {
                time_diff = `<span>${time_diff} giờ trước</span>`;
            }

            // avatar
            let image_avatar = '';
            if (!item.image) {
                image_avatar = `<img style="width:40px; height:40px; border-radius: 50%" src="{{asset('assets/img/users/user.jpg')}}" alt="">`;
            } else {
                image_avatar = `<img style="width:40px; height:40px; border-radius: 50%" src="{{asset('assets/img/users/${item.imageUser}')}}" alt="">`;
            }
            html += `
                    <!-- post-item -->
                    <div class="motel-posts-item d-flex">
                        <img style="min-width:240px; height:180px;border-radius:6px" src="{{asset('assets/img/motels/${item.image}')}}" alt="">
                        <div class="motel-posts-content ml-3">
                            <div class="motel-posts-title d-flex justify-content-between">
                                <span class="mr-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <a href="/details-motel/${item.id}"> ${item.name}</a>
                                </span>
                                <img style="width:25px; height:25px;" src="{{asset('assets/img/hot-post.svg')}}" alt="">
                            </div>
                            <div class="motel-posts-prop d-flex justify-content-between">
                                <span class="font-weight-bold text-success ">${formatPrice(item.min_price)}/tháng</span>
                                <span><i class="fas fa-chart-area mr-1"></i>${item.area}m2</span>
                                <span><i class="fas fa-sort-numeric-down mr-1"></i>${item.address}</span>
                                 ${time_diff}  
                            </div>

                            <div class="motel-posts-desc text-muted">
                                ${item.descreption}
                            </div>

                            <div class="motel-posts-contact mt-2 d-flex justify-content-between align-items-center">
                                <div class="motel-posts-user text-muted">
                                    ${image_avatar}
                                    <span class="ml-1">${item.nameUser}</span>
                                </div>
                                <div class="motel-posts-social d-flex">
                                    <div class="motel-posts-phone">
                                        <a href="tel:${item.phone}" class="bd-6 bg-success mr-2 px-2 py-1"><i class="fas fa-phone mr-2"></i>${item.phone}</a>
                                    </div>
                                    <div class="motel-posts-zalo">
                                        <a href=" https://chat.zalo.me/?phone=${item.phone}" class="bd-6 bg-primary px-2 py-1">Nhắn zalo</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end-post-item -->
                `;
        }
        return html;
    }

    function formatPrice(price) {
        const formatter = new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'VND',
            minimumFractionDigits: 0
        });
        return formatter.format(price);

    }

    function listMotelsMost(listMotelsMost) {
        let html = ``;
        for (let i = 0; i < listMotelsMost.length; i++) {
            let item = listMotelsMost[i];

            let time_now = moment(new Date());
            let time_created_at = moment(item.created_at);
            let time_diff = time_now.diff(time_created_at, 'hours');
            if (time_diff == 0) {
                time_diff = `<p>Vừa mới xong</p>`;
            } else if (time_diff >= 24) {
                time_diff = `<p class="small">${Math.floor(time_diff/24)} ngày trước</p>`;
            } else {
                time_diff = `<p class="small">${time_diff} giờ trước</p>`;
            }

            html += `
                    <!-- trendding-item -->
                    <div class="media post_item">
                        <img src="{{asset('assets/img/motels/${item.image}')}}" alt="post" style="height: 100px; width: 100px">
                        <div class="media-body ml-3 mr-2">
                            <a href="/details/${item.id}"><h6>${item.name}</h6></a>
                            <span>Địa chỉ: ${item.address}</span> <br/>
                            <span>Lượt xem: ${item.views}</span>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="text-success font-weight-bold">${formatPrice(item.min_price)}/tháng</p>
                                ${time_diff}
                            </div>
                        </div>
                    </div>
                    <!--End trendding-item -->
                `;
        }
        return html;
    }

    function slidePosts(listPostsMost) {
        let html = ``;
        for (let i = 0; i < listPostsMost.length; i++) {
            let item = listPostsMost[i];

            let time_now = moment(new Date());
            let time_created_at = moment(item.created_at);
            let time_diff = time_now.diff(time_created_at, 'hours');
            if (time_diff == 0) {
                time_diff = `<p>Vừa mới xong</p>`;
            } else if (time_diff >= 24) {
                time_diff = `<p>${Math.floor(time_diff/24)} ngày trước</p>`;
            } else {
                time_diff = `<p>${time_diff} giờ trước</p>`;
            }

            html += `
                    <div class="weekly-single">
                        <div class="weekly-img">
                            <img src="{{asset('assets/img/posts/${item.imagePost}')}}" alt="">
                        </div>
                        <div class="weekly2-caption">
                            <span class="color1">${item.nameCategory}</span>
                            <div class="d-flex justify-content-between">
                                <p class="font-weight-bold text-success">${item.nameUser}</p>
                                <p class="text-muted small lead">${time_diff}</p>
                            </div>
                            <h4><a href="/details-post/${item.id}">${item.title}</a></h4>
                        </div>
                    </div>
                `;
        }
        return html;
    }
    function searchMotels() {
        // alert("123");
        let priceMotels = $('#priceMotels').val();
        let personMotels = $('#personMotels').val();
        // return redirect()->route('all_motels', ['price' => priceMotels, 'person' => personMotels]);
        window.location.href = `/all-motels/${priceMotels}-${personMotels}`;
    }

</script>

@endsection