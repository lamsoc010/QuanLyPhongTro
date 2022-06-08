@extends('clients.layouts.home')
@section('main')

<style>
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

    .breadcrumb-box .breadcrumb {
        background: transparent;
        padding-left: 0;
    }

    .breadcrumb-box .breadcrumb a {
        color: #007BFF;
        transition: all 0.3s ease-in-out;
    }

    .breadcrumb-box .breadcrumb a:hover {
        text-decoration: underline;
    }

    .post_item h6 {
        color: #0066D4;

    }

    .post_item h6:hover {
        text-decoration: underline;
    }

    #listChuyenMuc a {
        color: rgba(0,0,0,0.8)!important;
        transition: all 0.3s ease-in-out;   
    }
    #listChuyenMuc a:hover {
        color: #0062CC!important;
        text-decoration: underline;
    }
</style>
<main>
    <!-- Trending Area Start -->
    <div class="trending-area fix mb-5">
        <div class="container">


            <div class="breadcrumb-box  mt-4 pb-0">
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb pb-0">
                                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">Tất cả bài viết</a></li>
                            </ol>
                        </nav>
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
                        <h4 class="m-3">Danh sách bài viết</h4>
                        <div class="motel-posts-block" id="listAllPosts">
                            {{-- render danh sách bài viết--}}
                        </div>
                        <div class="motel-posts-all py-3 text-center">
                            <!-- <a href="#" class="btn">pagi</a> -->
                        </div>
                    </div>
                    <!-- Right content -->
                    <div class="col-lg-4">

                        <div class="motel-posts-trending ml-2 w-100 ">

                            <!-- trendding-items -->
                            <h5 class="posts-trending-title p-3">Chuyên mục bài viết</h5>
                            <aside class="pb-2" id="listChuyenMuc">
                                {{-- render chuyen muc --}}

                            </aside>

                        </div>

                        <div class="motel-posts-trending ml-2 w-100  mt-3">

                            <!-- trendding-items -->
                            <h5 class="posts-trending-title p-3">Dãy trọ phổ biến</h5>
                            <aside class="" id="listMotelsMost">
                                {{-- render dãy trọ nổi bật --}}

                            </aside>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->





</main>

@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>
<script>
    $(document).ready(function() {
        // alert('hello');
        $.ajax({
            url: '/handleAllPosts',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                $('#listAllPosts').html(listAllPosts(response.listAllPosts));
                $('#listMotelsMost').html(listMotelsMost(response.listMotelsMost));
                $('#listChuyenMuc').html(renderListCategory(response.listCategory));
                // console.log(response.countAllMotels);
            }
        })
    })

    function listAllPosts(listAllPosts) {
        let html = ``;
        for (let i = 0; i < listAllPosts.length; i++) {
            let item = listAllPosts[i];
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
            if (!item.imageUser) {
                image_avatar = `<img style="width:40px; height:40px; border-radius: 50%" src="{{asset('assets/img/users/user.jpg')}}" alt="">`;
            } else {
                image_avatar = `<img style="width:40px; height:40px; border-radius: 50%" src="{{asset('assets/img/users/${item.imageUser}')}}" alt="">`;
            }
            html += `
                    <!-- post-item -->
                    <div class="motel-posts-item d-flex">
                        <img style="width:180px; height:180px;border-radius:6px" src="{{asset('assets/img/posts/${item.image}')}}" alt="" >
                        <div class="motel-posts-content ml-3">
                            <div class="motel-posts-title d-flex justify-content-between">
                                <span class="mr-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <a href="/details-post/${item.id}"> ${item.title}</a>
                                </span>
                                <img style="width:25px; height:25px;" src="{{asset('assets/img/hot-post.svg')}}" alt="">
                            </div>
                            <div class="motel-posts-prop d-flex justify-content-between">
                                <span class="font-weight-bold text-success ">${item.nameCategory}</span>
                               
                                 ${time_diff}  
                            </div>

                            <div class="motel-posts-desc text-muted">
                                ${item.content}
                            </div>

                            <div class="motel-posts-contact mt-2 d-flex justify-content-between align-items-center">
                                <div class="motel-posts-user text-muted">
                                    ${image_avatar}
                                    <span class="ml-1">${item.nameUser}</span>
                                </div>
                                <div class="motel-posts-social d-flex">
                                    <div class="motel-posts-phone">
                                        <a href="tel:${item.phoneUser}" class="bd-6 bg-success mr-2 px-2 py-1"><i class="fas fa-phone mr-2"></i>${item.phoneUser}</a>
                                    </div>
                                    <div class="motel-posts-zalo">
                                        <a href="https://chat.zalo.me/?phone=${item.phoneUser}" class="bd-6 bg-primary px-2 py-1">Nhắn zalo</a>
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
                        <img src="{{asset('assets/img/motels/${item.image}')}}" alt="post" style="height: 80px; width: 80px">
                        <div class="media-body ml-3 mr-2">
                            <a href="/details-motel/${item.id}"><h6>${item.name}</h6></a>
                            <span>${item.address}</span>
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

    function renderListCategory(listCategory) {
        let html = ``;
        for (let i = 0; i < listCategory.length; i++) {
            let item = listCategory[i];
            html += `
                    <li class="nav-item">
                        <a class="nav-link" href="/category/${item.id}">
                        <i class="fas fa-angle-right mr-2"></i>
                        ${item.name}  (${item.total})</a>
                    </li>
                `;
        }
        return html;
    }
</script>