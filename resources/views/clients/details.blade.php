@extends('clients.layouts.home')
@section('main')
<!--================Blog Area =================-->
<style>
   .blog-info-link {
      line-height: 25px;
   }

   .blog-info-link i {
      color: #979a9d;
   }

   .motels_area,
   .motels_area i {
      color: #1081E0 !important;
      font-size: 18px !important;
      font-weight: bold;
   }

   .motels_price,
   .motels_price i {
      color: #F14C38 !important;
      font-size: 18px !important;
      font-weight: 600 !important;
   }

   .blog_details .card {
      background: #FFD558;
   }

   .blog_details h2 {
      color: #FF0B0B !important;
   }

   .blog_details h2 i {
      color: #FFD558;
   }

   .card-info a {
      padding: 6px 8px;
      border-radius: 4px;
      transition: all 0.3s ease 0s;
      color: #fff;
   }

   .card-info a .zalo {
      width: 25px;
      height: 25px;
      background: url(assets/img/icon-zalo.png) center no-repeat;
      background-size: contain;
      display: inline-block;
      margin-right: 5px;
   }

   .blog_details .card-info .user_phone:hover {
      text-decoration: underline !important;
      -webkit-text-fill-color: #fff !important;
      color: #fff !important;
      background: #28a745 !important;
   }

   .blog_details .card-info .user_zalo:hover {
      text-decoration: underline !important;
      -webkit-text-fill-color: #018EE2 !important;
      color: #018EE2 !important;
      background: #fff !important;
   }

   .blog_details .card-info .user_zalo span:hover {
      -webkit-text-fill-color: #018EE2 !important;
   }

   .table td {
      padding: 0.4rem !important;
   }
</style>
<section class="blog_area single-post-area section-padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 posts-list">
            <div class="single-post">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/img/blog/single_blog_1.png" alt="First slide">
                     </div>
                     <div class="carousel-item">
                        <img class="d-block w-100" src="assets/img/blog/single_blog_2.png" alt="Second slide">
                     </div>

                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                  </a>
               </div>

               <!-- <div class="feature-img">
                     <img class="img-fluid" src="assets/img/blog/single_blog_1.png" alt="">
                  </div> -->
               <div class="blog_details">

                  <div class="row">
                     <div class="col-md-7">
                        <h2>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           {{ $motels[0]->name}}
                           
                        </h2>
                        <ul class="blog-info-link mt-4 ">
                           <li class="motels_area"><i class="fas fa-map-marker-alt"></i>Địa chỉ: {{ $motels[0]->address}}</li>

                        </ul>
                        <ul class="blog-info-link mt-4 mb-4">

                           <li class="motels_price"><i class="fas fa-dollar-sign"></i>500.0000đ/tháng</li>


                        </ul>
                        <ul class="blog-info-link mt-4 mb-4">
                           <li class="ms-4"><i class="fas fa-chart-area"></i>{{ $motels[0]->area}}/m2 </li>
                           <li><i class="fas fa-sort-numeric-down"></i>{{ $motels[0]->room_quantity}} phòng </li>

                        </ul>

                     </div>
                     <div class="col-md-5">
                        <div class="card align-items-center">
                           <div class="card_img text-center my-3" style="width: 100px; height: 100px; ">
                              <img class="" src="assets/img/blog/single_blog_1.png" alt="Card image cap" style="width: 100%; height: 100%;border-radius: 50%; ">

                           </div>
                           <div class="card_body">
                              <h5 class="card-title text-center">{{$users[0]->name}}</h5>

                              <div class="card-info d-flex mb-2 justify-content-between">
                                 <a href="tel:0991231231" class="user_phone bg-success mr-2"><i class="fas fa-phone mr-2"></i>{{$users[0]->phone}}</a>
                                 <a href=" https://chat.zalo.me/?phone={{$users[0]->name}}" class="user_zalo bg-light text-primary d-flex">
                                    <i class="zalo"></i>
                                    <span>Nhắn zalo</span></a>

                              </div>


                           </div>
                        </div>

                     </div>
                  </div>

                  <div class="row mt-3">
                     <h3 class="">Thông tin mô tả</h3>
                     <p class="excert">
                        {{$motels[0]->descreption}}
                     </p>
                     
                  </div>
                  <div class="quote-wrapper">
                     <div class="quotes">
                        <h5 class="mb-2">Đặc điểm tin đăng:</h5>
                        <table class="table table-striped table-borderless">

                           <tbody>
                              <tr>
                                 <td>Nhà trọ:</td>
                                 <td>52 Duy Tân</td>
                              </tr>
                              
                              <tr>
                                 <td>Đối tượng:</td>
                                 <td>Nữ</td>
                              </tr>
                              <tr>
                                 <td>Ngày đăng:</td>
                                 <td>15:12:32 22/05/2022</td>
                              </tr>

                              <tr class="mt-4" style="background:white;">
                                 <td>
                                    <h5>Thông tin liên hệ:</h5>
                                 </td>

                              </tr>
                              <tr>
                                 <td>Chủ trọ:</td>
                                 <td>Nguyên Trần</td>
                              </tr>
                              <tr>
                                 <td>Điện thoại:</td>
                                 <td>0983243234</td>
                              </tr>
                              <tr>
                                 <td>Zalo:</td>
                                 <td>0927362342</td>
                              </tr>

                           </tbody>
                        </table>

                        <h5>Bản đồ:</h5>
                        <p>Địa chỉ: 52 Duy Tân</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.510709589605!2d107.59306051417487!3d16.449657933501125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a142ff2bf65f%3A0xcf77f7367ff61dea!2zNTIgRHV5IFTDom4sIEFuIEPhu7F1LCBUaMOgbmggcGjhu5EgSHXhur8sIFRo4burYSBUaGnDqm4gSHXhur8sIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1653405663150!5m2!1svi!2s"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>

               </div>
            </div>
            <div class="navigation-top">
               <div class="d-sm-flex justify-content-between text-center">
                  <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                     people like this</p>
                  <div class="col-sm-4 text-center my-2 my-sm-0">
                     <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                  </div>
                  <ul class="social-icons">
                     <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                     <li><a href="#"><i class="fab fa-behance"></i></a></li>
                  </ul>
               </div>
               <!-- <div class="navigation-area">
                     <div class="row">
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="assets/img/post/preview.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Prev Post</p>
                              <a href="#">
                                 <h4>Space The Final Frontier</h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Next Post</p>
                              <a href="#">
                                 <h4>Telescopes 101</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="assets/img/post/next.png" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div> -->
            </div>
            <div class="blog-author">
               <div class="media align-items-center">
                  <img src="assets/img/blog/author.png" alt="">
                  <div class="media-body">
                     <a href="#">
                        <h4>Harvard milan</h4>
                     </a>
                     <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                        our dominion twon Second divided from</p>
                  </div>
               </div>
            </div>
            <div class="comments-area">
               <h4>05 Comments</h4>
               <div class="comment-list">
                  <div class="single-comment justify-content-between d-flex">
                     <div class="user justify-content-between d-flex">
                        <div class="thumb">
                           <img src="assets/img/comment/comment_1.png" alt="">
                        </div>
                        <div class="desc">
                           <p class="comment">
                              Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                              Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                           </p>
                           <div class="d-flex justify-content-between">
                              <div class="d-flex align-items-center">
                                 <h5>
                                    <a href="#">Emilly Blunt</a>
                                 </h5>
                                 <p class="date">December 4, 2017 at 3:12 pm </p>
                              </div>
                              <div class="reply-btn">
                                 <a href="#" class="btn-reply text-uppercase">reply</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="comment-list">
                  <div class="single-comment justify-content-between d-flex">
                     <div class="user justify-content-between d-flex">
                        <div class="thumb">
                           <img src="assets/img/comment/comment_2.png" alt="">
                        </div>
                        <div class="desc">
                           <p class="comment">
                              Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                              Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                           </p>
                           <div class="d-flex justify-content-between">
                              <div class="d-flex align-items-center">
                                 <h5>
                                    <a href="#">Emilly Blunt</a>
                                 </h5>
                                 <p class="date">December 4, 2017 at 3:12 pm </p>
                              </div>
                              <div class="reply-btn">
                                 <a href="#" class="btn-reply text-uppercase">reply</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="comment-list">
                  <div class="single-comment justify-content-between d-flex">
                     <div class="user justify-content-between d-flex">
                        <div class="thumb">
                           <img src="assets/img/comment/comment_3.png" alt="">
                        </div>
                        <div class="desc">
                           <p class="comment">
                              Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                              Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                           </p>
                           <div class="d-flex justify-content-between">
                              <div class="d-flex align-items-center">
                                 <h5>
                                    <a href="#">Emilly Blunt</a>
                                 </h5>
                                 <p class="date">December 4, 2017 at 3:12 pm </p>
                              </div>
                              <div class="reply-btn">
                                 <a href="#" class="btn-reply text-uppercase">reply</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="comment-form">
               <h4>Gửi phản hồi</h4>
               <form class="form-contact comment_form" action="#" id="commentForm">
                  <div class="row">
                     <div class="col-12">
                        <div class="form-group">
                           <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                        </div>
                     </div>
                     <!-- <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                           </div>
                        </div> -->
                  </div>
                  <div class="form-group text-center">
                     <button type="submit" class="button button-contactForm btn_1 boxed-btn">Gửi phản hồi</button>
                  </div>
               </form>
            </div>
         </div>
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


               <!-- <aside class="single_sidebar_widget post_category_widget">
                  <h4 class="widget_title">Category</h4>
                  <ul class="list cat-list">
                     <li>
                        <a href="#" class="d-flex">
                           <p>Resaurant food</p>
                           <p>(37)</p>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="d-flex">
                           <p>Travel news</p>
                           <p>(10)</p>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="d-flex">
                           <p>Modern technology</p>
                           <p>(03)</p>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="d-flex">
                           <p>Product</p>
                           <p>(11)</p>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="d-flex">
                           <p>Inspiration</p>
                           <p>(21)</p>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="d-flex">
                           <p>Health Care</p>
                           <p>(21)</p>
                        </a>
                     </li>
                  </ul>
               </aside> -->
               <aside class="single_sidebar_widget popular_post_widget">
                  <h3 class="widget_title">Nhà trọ nổi bật</h3>
                  <div class="media post_item">
                     <img src="assets/img/post/post_1.png" alt="post">
                     <div class="media-body">
                        <a href="single-blog.html">
                           <h3>From life was you fish...</h3>
                        </a>
                        <div class="d-flex justify-content-between align-items-center">
                           <span class="text-success font-weight-bold">700.000đ/tháng</span>
                           <p>4 giờ trước</p>

                        </div>
                     </div>
                  </div>
                  <div class="media post_item">
                     <img src="assets/img/post/post_2.png" alt="post">
                     <div class="media-body">
                        <a href="single-blog.html">
                           <h3>From life was you fish...</h3>
                        </a>
                        <div class="d-flex justify-content-between align-items-center">
                           <span class="text-success font-weight-bold">700.000đ/tháng</span>
                           <p>4 giờ trước</p>

                        </div>
                     </div>
                  </div>
                  <div class="media post_item">
                     <img src="assets/img/post/post_3.png" alt="post">
                     <div class="media-body">
                        <a href="single-blog.html">
                           <h3>From life was you fish...</h3>
                        </a>
                        <div class="d-flex justify-content-between align-items-center">
                           <span class="text-success font-weight-bold">700.000đ/tháng</span>
                           <p>4 giờ trước</p>

                        </div>
                     </div>
                  </div>
                  <div class="media post_item">
                     <img src="assets/img/post/post_4.png" alt="post">
                     <div class="media-body">
                        <a href="single-blog.html">
                           <h3>From life was you fish...</h3>
                        </a>
                        <div class="d-flex justify-content-between align-items-center">
                           <span class="text-success font-weight-bold">700.000đ/tháng</span>
                           <p>4 giờ trước</p>

                        </div>
                     </div>
                  </div>
               </aside>
               <aside class="single_sidebar_widget tag_cloud_widget">
                  <h4 class="widget_title">Tag Clouds</h4>
                  <ul class="list">
                     <li>
                        <a href="#">project</a>
                     </li>
                     <li>
                        <a href="#">love</a>
                     </li>
                     <li>
                        <a href="#">technology</a>
                     </li>
                     <li>
                        <a href="#">travel</a>
                     </li>
                     <li>
                        <a href="#">restaurant</a>
                     </li>
                     <li>
                        <a href="#">life style</a>
                     </li>
                     <li>
                        <a href="#">design</a>
                     </li>
                     <li>
                        <a href="#">illustration</a>
                     </li>
                  </ul>
               </aside>
               <aside class="single_sidebar_widget popular_post_widget">
                  <h3 class="widget_title">Bài đăng nổi bật</h3>
                  <div class="media post_item">
                     <img src="assets/img/post/post_1.png" alt="post">
                     <div class="media-body">
                        <a href="single-blog.html">
                           <h3>From life was you fish...</h3>
                        </a>
                        <div class="d-flex justify-content-between align-items-center">
                           <span class="text-success font-weight-bold">700.000đ/tháng</span>
                           <p>4 giờ trước</p>

                        </div>
                     </div>
                  </div>
                  <div class="media post_item">
                     <img src="assets/img/post/post_2.png" alt="post">
                     <div class="media-body">
                        <a href="single-blog.html">
                           <h3>From life was you fish...</h3>
                        </a>
                        <div class="d-flex justify-content-between align-items-center">
                           <span class="text-success font-weight-bold">700.000đ/tháng</span>
                           <p>4 giờ trước</p>

                        </div>
                     </div>
                  </div>
                  <div class="media post_item">
                     <img src="assets/img/post/post_3.png" alt="post">
                     <div class="media-body">
                        <a href="single-blog.html">
                           <h3>From life was you fish...</h3>
                        </a>
                        <div class="d-flex justify-content-between align-items-center">
                           <span class="text-success font-weight-bold">700.000đ/tháng</span>
                           <p>4 giờ trước</p>

                        </div>
                     </div>
                  </div>
                  <div class="media post_item">
                     <img src="assets/img/post/post_4.png" alt="post">
                     <div class="media-body">
                        <a href="single-blog.html">
                           <h3>From life was you fish...</h3>
                        </a>
                        <div class="d-flex justify-content-between align-items-center">
                           <span class="text-success font-weight-bold">700.000đ/tháng</span>
                           <p>4 giờ trước</p>

                        </div>
                     </div>
                  </div>
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
</section>
<!--================ Blog Area end =================-->

@endsection