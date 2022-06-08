<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Phòng trọ Huế </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/ticker-style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @yield('style')

    <style>
        .header-area .header-top {
            padding: 12px 0px !important;
        }

        .header-area .header-top .header-info-right .header-social li a {
            font-size: 14px !important;
        }

        .logo h3 {
            color: #0067B1;
        }

        .logo h2 {
            color: #FF0B0B;
        }

        .logo span {
            font-size: 18px !important;
            color: #B7B7B7;
        }

        .logo-title {
            font-size: 13px;
            color: #007BFF;
            transform: translateY(-10px);
        }

        .user-title {
            position: relative;
        }

        .user-title:hover .block-info-user {
            transform: rotateX(0);
            opacity: 1;
        }

        .block-info-user {
            position: absolute;
            top: 36px;
            left: 0;
            background: #fff;
            opacity: 0;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transform: rotateX(-90deg);
            transform-origin: top left;
            transition: all 0.4s ease-in-out;
            z-index: 100;

        }

        .block-info-user li {
            width: 100%;
            display: inline-block;
            cursor: pointer;
            font-size: 13px !important;
            padding: 8px 4px;
            border-bottom: 1px solid #eee;
        }

        .block-info-user li a {
            color: #333 !important;
            transition: all 0.4s ease-in-out;
        }

        .block-info-user li a:hover {
            color: #fc3f00 !important;
        }

        .block-info-user li:last-child {

            border: none;
        }
    </style>
</head>

<body>
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li><img src="{{asset('assets/img/icon/header_icon1.png')}}" alt="">30ºc, Sunny </li>
                                        <li><img src="{{asset('assets/img/icon/header_icon1.png')}}" alt="">Thursday, 8th June, 2022</li>
                                    </ul>
                                </div>
                                <div class="header-info-right d-flex justify-content-center align-items-center">
                                    <ul class="header-social">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>

                                    </ul>

                                    @if (Route::has('login'))
                                    @auth
                                    <ul class="header-social user-title">


                                        <li class="user-name"><a href="{{ route('administration.home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Xin chào, {{ Auth::user()->name }} <i class="fas fa-caret-down ml-1"></i></a></li>
                                        <div class="block-info-user">
                                            <li><a><i class="fas fa-user mr-1"></i> Thông tin cá nhân</a></li>
                                            <li><a><i class="fas fa-home mr-1"></i> Quản lý dãy trọ</a></li>
                                            <li><a><i class="fas fa-newspaper mr-1"></i> Quản lý bài đăng</a></li>
                                            <li><a><i class="fas fa-key mr-1"></i> Đổi mật khẩu</a></li>
                                            <li>
                                                <form method="POST" action="{{route('logout')}}">
                                                    @csrf
                                                    @method('POST')
                                                    <a onclick="event.preventDefault(); this.closest('form').submit();"><i class="fas fa-sign-out-alt mr-1"></i> Đăng xuất</a>
                                                </form>
                                            </li>
                                        </div>

                                    </ul>
                                    @else
                                    <ul class="header-social">
                                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                                        @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                        @endif

                                    </ul>

                                    @endauth
                                    @endif




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-mid d-none d-md-block">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3 pt-4">
                                <div class="logo d-flex justify-content-start align-items-center">
                                    <!-- <a href="/"><img src="{{asset('assets/img/logo/logo.png')}}" alt=""></a> -->
                                    <h3 class="m-0">PHONGTRO</h3>
                                    <h2 class="m-0">HUE</h2>
                                    <span class="mt-2">.com</span>
                                </div>
                                <p class="logo-title">Kênh thông tin phòng trọ số 1 Huế</p>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="{{asset('assets/img/hero/header_card.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                <div class="sticky-logo">
                                    <a href="index.html"><img src="{{asset('assets/img/logo/logo.png')}}" alt=""></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{route('home')}}">Trang chủ</a></li>
                                            <li><a href="/all-motels">Cho thuê phòng trọ</a></li>
                                            <li><a href="/all-posts">Bài viết</a></li>
                                            <li><a href="{{route('latest_news')}}">Liên hệ</a></li>
                                            <li><a href="{{route('contact')}}">Hướng dẫn</a></li>
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="{{route('element')}}">Element</a></li>
                                                    <li><a href="{{route('blog')}}">Blog</a></li>
                                                    <li><a href="{{route('blog_details')}}">Blog Details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag"></i>
                                    <div class="search-box">
                                        <form action="#">
                                            <input type="text" placeholder="Search">

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>