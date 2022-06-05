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
    .post_item h3{
        color: #0066D4;

    }
    .post_item h3:hover {
        color: #0066D4 !important;
        text-decoration: underline;
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
</style>
<main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">

            <!-- filter -->
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="filter-blog  d-flex justify-content-around align-items-center">

                        <!-- <div class="filter-price  filter-block w-20 bg-white d-flex justify-content-between  align-items-center text-dark">


                            <div class="filter-sub w-100">

                                <select class="form-select ">
                                    <option selected value="1"><i class="fas fa-hotel"></i>Phòng trọ, nhà trọ</option>
                                    <option value="2"><i class="fa-solid fa-user-group"></i>Tìm người ở ghép</option>

                                </select>
                            </div>

                        </div> -->

                        <div class="filter-price filter-block bg-white d-flex justify-content-between  align-items-center text-dark">

                            <span class="flex-grow-1 mx-3"><i class="fas fa-dollar-sign mr-2 "></i>Chọn giá:</span>
                            <div class="filter-sub">
                                <select class="form-select ">
                                    <option selected value="1">Dưới 1 triệu</option>
                                    <option value="2">1 - 2 triệu</option>
                                    <option value="3">Trên 2 triệu</option>
                                </select>
                            </div>

                        </div>

                        <div class="filter-area filter-block   bg-white  d-flex justify-content-between  align-items-center text-dark">
                            <span class="flex-grow-1 mx-3"><i class="fas fa-chart-area mr-2"></i>Diện tích:</span>

                            <div class="filter-sub">
                                <select class="form-select ">

                                    <option select value="1">Dưới 15m2</option>
                                    <option value="2">15 - 30m2</option>
                                    <option value="3">Trên 30m2</option>
                                </select>
                            </div>
                        </div>
                        <div class="filter-block filter-btn px-5  bg-primary d-flex justify-content-center align-items-center text-white">
                            <i class="fas fa-search mr-2"></i>Tìm kiếm
                        </div>
                    </div>
                </div>
            </div>

            <div class="breadcrumb-box  mt-4 pb-0">
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">Cho thuê phòng trọ</a></li>
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
                <div class="row mb-5">

                    <div class="col-lg-8 motel-posts-wrapper">
                        <h4 class="m-3">Danh sách dãy trọ</h4>
                        <div class="motel-posts-block" id="listAllMotels">
                            {{-- render danh sách dãy trọ --}}
                        </div>
                        <div class="motel-posts-all py-3 text-center">
                            <a href="#" class="btn">pagination</a>
                        </div>
                    </div>
                    <!-- Right content -->
                    <!-- <div class="col-lg-4">
                        <div class="motel-posts-trending ml-2 w-100 h-100">

                            trendding-items
                            <h4 class="posts-trending-title p-3">Dãy trọ phổ biến</h4>
                            <aside class="" id="listMotelsMost">
                                {{-- render bài đăng nổi bật --}}

                            </aside>

                        </div>

                    </div> -->


                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                            <div class="input-group-append">
                                                <button class="btns" type="button"><i class="ti-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
                                </form>
                            </aside>



                            <aside class="single_sidebar_widget popular_post_widget" id="postsMost">
                                {{-- render bài viếT nổi bật --}}

                            </aside>
                            <aside class="single_sidebar_widget newsletter_widget">
                                <h4 class="widget_title">Newsletter</h4>
                                <form action="#">
                                    <div class="form-group">
                                        <input type="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribe</button>
                                </form>
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
        let url = document.location.href;
        // console.log()
        // get id in url
        $.ajax({
            url: '/handleAllMotels',
            type: 'GET',
            dataType: 'json',
            success: function(response) {

                $('#listAllMotels').html(listAllMotels(response.listAllMotels));
                $('#postsMost').html(posts_Most(response.listPostsMost));
            }
        });
    });

    function listAllMotels(listAllMotels) {
        let html = ``;
        for (let i = 0; i < listAllMotels.length; i++) {
            let item = listAllMotels[i];
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

    function posts_Most(listPostsMost) {
        let html = `<h3 class="widget_title">Bài đăng nổi bật</h3>`;
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
               <div class="media post_item">
                  <img src="{{asset('assets/img/posts/${item.image}')}}" alt="post" style="height: 80px; width: 80px">
                  <div class="media-body">
                     <a href="/details-post/${item.id}">
                        <h3>${item.title}</h3>    
                     </a>
                     <div class="d-flex justify-content-between align-items-center">
                        <p class="text-success font-weight-bold">${item.nameUser}</p>
                        ${time_diff}
                     </div>
                  </div>
               </div>
            `;
        }
        console.log(html);
        return html;
    }
</script>

@endsection