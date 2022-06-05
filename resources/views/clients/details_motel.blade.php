@extends('clients.layouts.home')
@section('main')
<!--================Blog Area =================-->
<style>
   .section-padding {
      padding-top: 20px;
   }
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

   .reply-btn {
      border: none;
      outline: none;
      padding: 6px 16px;
      border-radius: 10px;
      transition: all 0.3s ease 0s;
      cursor: pointer;
   }

   .btn-reply-cancel {
      border: 1px solid #ccc !important;
      background-color: white;
      color: #8b8686 !important;
   }

   .btn-reply-cancel:hover {
      text-decoration: underline;

   }

   .btn-reply-add {
      background-color: #FC3F00 !important;

   }

   .btn-reply-add:hover {
      text-decoration: underline;

   }

   .comment-content {
      border-radius: 12px;
      background: #F2F3F5;
      padding: 12px;
      width: fit-content;
   }


   .comment-desc .comment-reply-link {
      padding: 0 18px 0 4px !important;
      color: #FC3F00 !important;
      cursor: pointer;
   }

   .comment-desc .comment-reply-link:hover {
      text-decoration: underline;
   }

   .comment-desc .small {
      line-height: 13px;
   }

   .user-reply-thumb img {
      border-radius: 50%;
   }

   .comment-replied-block {
      border-left: 1px solid #FC3F00;
      padding-left: 15px;
   }


   .comment-reply-box {
      border-bottom: 1px solid #ccc;
      margin: 4px 0 0;
      padding-bottom: 6px;
      padding-left: 0;
   }

   .comment-reply-user {
      background: rgba(29, 191, 175, .3);
      border-radius: 1px;
      padding: 0 4px;
      margin-right: 4px;
   }

   .comment-reply-content {
      border: none;
      outline: none;
      cursor: auto;
      min-width: 60%;
   }
   .titlePosts {
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      line-clamp: 2;
      -webkit-box-orient: vertical;
      margin-bottom: 0 !important;
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
   .breadcrumb-item.active a{
    color: #6c757d;

}
</style>
<section class="blog_area single-post-area section-padding">
   <div class="container">
      <div class="breadcrumb-box pb-0">
         <div class="row">
            <div class="col-lg-12">
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                     <li class="breadcrumb-item"><a href="/all-motels">Cho thuê phòng trọ</a></li>
                     <li class="breadcrumb-item active nameMotelBreadcrumb" aria-current="page"></li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>


      <div class="row">  <div class="col-lg-8 posts-list">
            <div class="single-post">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators" id="carousel-indicators">
                     {{-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> --}}
                  </ol>
                  <div class="carousel-inner" id="carousel-inner">
                     {{-- @foreach ($image_motels as $image)
                        <div class="carousel-item {{ $image_motels[0] == $image ? 'active' : '' }}">
                     <img class="d-block w-100" style="height: 500px;" src="{{ asset('assets/img/motels/'.$image->image) }}" alt="Second slide">
                  </div>
                  @endforeach --}}
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
               {{-- render --}}
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

         </div>
         <!-- <div class="blog-author">
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
            </div> -->

         <div class="comments-area">
            {{-- render comment --}}
            <div id="countComment"></div>
            <div class="comment_list"></div>

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
            {{-- <aside class="single_sidebar_widget post_category_widget">
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
               </aside>  --}}
            <aside class="single_sidebar_widget popular_post_widget" id="motelsMost">
               {{-- render nhà trọ nổi bật --}}
            </aside>
            <aside class="single_sidebar_widget tag_cloud_widget">
               <h4 class="widget_title">Tag Clouds</h4>
               <ul class="list">
                  <li>
                     <a href="#">project</a>
                  </li>
               </ul>
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
</section>
<!--================ Blog Area end =================-->
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
   $(document).ready(function() {
      let url = document.location.href;

      // get id in url
      let id = url.split('/').pop();
      $.ajax({
         url: '/handleDetailsMotel/' + id,
         type: 'GET',
         dataType: 'json',
         success: function(response) {
            // console.log(response.listComments);
            $('#carousel-indicators').html(carousel_indicators(response.image_motels));
            $('#carousel-inner').html(carousel_inner(response.image_motels));
            // $('#information_blog_details').html(information_blog_details(response.motel));
            $('.blog_details').html(blog_details(response.motel));
            $('.comment_list').html(comments_area1(response.listComments, response.listReplyComments, id));
            $('#countComment').html(countComment(response.listComments.length, id));
            $('#motelsMost').html(motels_Most(response.listMotelsMost));
            $('#postsMost').html(posts_Most(response.listPostsMost));


            $('.nameMotelBreadcrumb').html(`${response.motel.name}`);
         }
      });
   });

   function formatPrice(price) {
      const formatter = new Intl.NumberFormat('en-US', {
         style: 'currency',
         currency: 'VND',
         minimumFractionDigits: 0
      });
      return formatter.format(price);

   }

   function carousel_indicators(image_motels) {
      let html = '';
      for (let i = 0; i < image_motels.length; i++) {
         html += `
               <li data-target="#carouselExampleIndicators" data-slide-to="${i}" class="${i == 0 ? 'active' : ''}"></li>
            `;
      }
      return html;
   }

   function carousel_inner(image_motels) {
      let html = '';
      for (let i = 0; i < image_motels.length; i++) {
         html += `
               <div class="carousel-item ${i == 0 ? 'active' : ''}">
                  <img class="d-block w-100" src="{{asset('assets/img/motels/')}}/${image_motels[i].image}" alt="First slide" style="height:500px">
               </div>
            `;
      }
      return html;
   }

   function information_blog_details(motel) {
      let html = '';
      let image_avatar = '';
      if (!motel.image_avatar) {
         image_avatar = `<img class="" src="{{asset('assets/img/users/user.jpg')}}" alt="Card image cap" style="width: 100%; height: 100%;border-radius: 50%; ">`;
      } else {
         image_avatar = `<img class="" src="{{asset('assets/img/users/${motel.imageUser}')}}" alt="Card image cap" style="width: 100%; height: 100%;border-radius: 50%; ">`;
      }
      html += `
            <div class="col-md-7" >
               <h2>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  ${motel.name}
               </h2>
               <ul class="blog-info-link mt-4 ">
                  <li class="motels_area"><i class="fas fa-map-marker-alt"></i>Địa chỉ: ${motel.address}</li>
               </ul>
               <ul class="blog-info-link mt-4 mb-4">
                  <li class="motels_price"><i class="fas fa-dollar-sign"></i>Giá từ: ${formatPrice(motel.min_price)} - ${formatPrice(motel.max_price)}/tháng</li>
               </ul>
               <ul class="blog-info-link mt-4 mb-4">
                  <li class="ms-4"><i class="fas fa-chart-area"></i>${motel.area}/m2 </li>
                  <li><i class="fas fa-sort-numeric-down"></i>${motel.room_quantity} phòng </li>
                  <li class="ms-4"><i class="fas fa-eye"></i>${motel.views} lượt xem </li>
               </ul>
            </div>
            <div class="col-md-5">
               <div class="card align-items-center">
                  <div class="card_img text-center my-3" style="width: 100px; height: 100px; ">
                  ${image_avatar}
                  </div>
                  <div class="card_body">
                     <h5 class="card-title text-center">${motel.nameUser}</h5>
                     <div class="card-info d-flex mb-2 justify-content-between">
                        <a href="tel:${motel.phone}" class="user_phone bg-success mr-2"><i class="fas fa-phone mr-2"></i>${motel.phone}</a>
                        <a href=" https://chat.zalo.me/?phone=${motel.phone}" class="user_zalo bg-light text-primary d-flex">
                           <i class="zalo"></i>
                           <span>Nhắn zalo</span></a>
                     </div>
                  </div>
               </div>
            </div>
         `
      return html;
   }

   function blog_details(motel) {
      let html = '';
      html += `
            <div class="row" id="information_blog_details">
               ${information_blog_details(motel)}
            </div>

            <div class="row mt-3">
               <h3 class="">Thông tin mô tả</h3>
               <p class="excert">
                  ${motel.descreption}
               </p>
            </div>
            <div class="quote-wrapper">
               <div class="quotes">
                  <h5 class="mb-2">Đặc điểm tin đăng:</h5>
                  <table class="table table-striped table-borderless">
                     <tbody>
                        <tr>
                           <td>Nhà trọ:</td>
                           <td>${motel.name}</td>
                        </tr>
                        <tr>
                           <td>Đối tượng:</td>
                           <td>${motel.person}</td>
                        </tr>
                        <tr>
                           <td>Ngày đăng:</td>
                           <td>${motel.created_at}</td>
                        </tr>
                        <tr class="mt-4" style="background:white;">
                           <td>
                              <h5>Thông tin liên hệ:</h5>
                           </td>
                        </tr>
                        <tr>
                           <td>Chủ trọ:</td>
                           <td>${motel.nameUser}</td>
                        </tr>
                        <tr>
                           <td>Điện thoại:</td>
                           <td>${motel.phone}</td>
                        </tr>
                        <tr>
                           <td>Zalo:</td>
                           <td>${motel.phone}</td>
                        </tr>
                     </tbody>
                  </table>

                  <h5>Bản đồ:</h5>
                  <p>Địa chỉ: ${motel.address}</p>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.510709589605!2d107.59306051417487!3d16.449657933501125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a142ff2bf65f%3A0xcf77f7367ff61dea!2zNTIgRHV5IFTDom4sIEFuIEPhu7F1LCBUaMOgbmggcGjhu5EgSHXhur8sIFRo4burYSBUaGnDqm4gSHXhur8sIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1653405663150!5m2!1svi!2s"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
            </div>
         `;
      return html;
   }

   function showReplyComments(itemComment, listReplyComments) {
      let htmlReply = ``;
      for(let i = 0; i < listReplyComments.length; i++) {
         if(listReplyComments[i].idCommentMotels == itemComment.id) {
            let image_avatar = '';
            if (!listReplyComments[i].image) {
               image_avatar = `<img src="{{asset('assets/img/users/user.jpg')}}" alt="" style="height: 70px; width:70px">`;
            } else {
               image_avatar = `<img src="{{asset('assets/img/users/${listReplyComments[i].image}')}}" alt="" style="height: 70px; width:70px">`;
            };
            htmlReply += `
               <!-- comment replied -->
               <div class="comment-replied-block d-flex mt-3">
                  <div class="user-reply-thumb">
                     ${image_avatar}
                  </div>
                  <div class="ml-2 w-100">
                     <div class="comment-content">
                        <h5>
                           ${listReplyComments[i].name}
                        </h5>
                        <p class="mt-2 mb-0">
                           <span class="comment-reply-user mr-1">
                              ${itemComment.name}
                           </span>
                           ${listReplyComments[i].contents}
                        </p>
                     </div>
                     <div class="comment-desc d-flex align-items-center mt-2">
                        <div class="text-muted small ml-3">${listReplyComments[i].created_at}</div>
                     </div>
                  </div>
               </div>
            `;
         }
      }
      return htmlReply;
   }

   // Hiển thị chổ bình luận tổng
   function showCommentBlock(idMotels) {
      let html = ``;
      html += `
         @if(Route::has('login'))
         @auth
         <div>
            <!-- comment reply -->
               <div class="comment-reply-block mt-3 d-flex">
                  <div class="user-reply-thumb">
                     @auth
                     <img src="{{asset('assets/img/users/'.Auth::user()->image)}}" alt="" style="height: 70px; width:70px">
                     @else
                     <img src="{{asset('assets/img/users/user.jpg')}}" alt="" style="height: 70px; width:70px">
                     @endauth
                  </div>
                  <div class="ml-3 w-100">
                     <div class="comment-reply-box ">
                        <input name="contents" id="comment-content" class="comment-reply-content d-inline-block" tabindex="0" contenteditable="true" role="textbox" aria-multiline="true" spellcheck="false" autocapitalize="true" placeholder="Hãy để lại bình luận của bạn tại đây!"></input>
                     </div>
                     <input type="hidden" name="idMotels" value="${idMotels}"></input>
                     <input type="hidden" name="idUser" value="@auth{{Auth::user()->id}}@endauth"></input>
                     <div class="comment-reply-btn d-flex justify-content-end mt-2 mr-2">
                        <!-- <button onclick="handleComment(${idMotels}, @auth{{Auth::user()->id}}@endauth)">Comment</button> -->
                        <button class="reply-btn btn-reply-add" onclick="handleComment()">Comment</button>
                     </div>
                  </div>
               </div>  
         </div>
         @else
            <div class="mb-2"> <a href="{{route('login')}}" style="color: black; font-size: 20px; margin-bottom: 20px; display: block; font-weight: 500"> Hãy đăng nhập và để bình luận của bạn tại đây </a> </div>
         @endauth
         @endif
      `;
      return html;
   }

   // các item comment-list
   function itemComment_area(itemComment, listReplyComments) {
      itemComment = JSON.parse(itemComment);
      let html = ``;
      let image_avatar = '';
      if (!itemComment.image) {
         image_avatar = `<img src="{{asset('assets/img/users/user.jpg')}}" alt="" style="height: 70px; width:70px">`;
      } else {
         image_avatar = `<img src="{{asset('assets/img/users/${itemComment.image}')}}" alt="" style="height: 70px; width:70px">`;
      };
      html += `
         <!-- Cắt từ đây Lãm  -->
         <div class="comment-list">
            <div class="single-comment d-flex">
               <div class="thumb">
                  ${image_avatar}
               </div>
               <div class="comment-block flex-grow-1">
                  <div class="comment-content">
                     <h5>
                        ${itemComment.name}
                     </h5>
                     <p class="mt-2 mb-0">${itemComment.contents}</p>
                  </div>
                  <div class="comment-desc d-flex align-items-center mt-2">
                     <div class="">
                        @if(Route::has('login'))
                        @auth
                        <span onclick="showBoxReplyComment(${itemComment.id})" class="comment-reply-link">Trả lời</span>
                        @else 
                        <a href="{{ route('login') }}" class="comment-reply-link">Trả lời</a>
                        @endauth
                        @endif
                     </div>
                     <div class="text-muted small">${itemComment.created_at}</div>
                  </div>
                  <!-- comment reply -->
                  <div class="comment-reply-block-${itemComment.id} d-none   mt-3">
                     <div class="user-reply-thumb">
                        @auth
                        <img src="{{asset('assets/img/users/'.Auth::user()->image)}}" alt="" style="height: 70px; width:70px">
                        @else
                        <img src="{{asset('assets/img/users/user.jpg')}}" alt="" style="height: 70px; width:70px">
                        @endauth
                     </div>
                     <div class="ml-3 w-100">
                        <div class="comment-reply-box ">
                           <span class="comment-reply-user mr-2">
                              ${itemComment.name}
                           </span>
                           <div id="comment-reply-content-${itemComment.id}" class="comment-reply-content d-inline-block" tabindex="0" contenteditable="true" role="textbox" aria-multiline="true" spellcheck="false" autocapitalize="true"></div>
                        </div>
                        <div class="comment-reply-btn d-flex justify-content-end mt-2 mr-2">
                           <button onclick="hideBoxReplyComment(${itemComment.id})" class="reply-btn btn-reply-cancel mr-2">Huỷ</button>
                           <button class="reply-btn btn-reply-add" onclick="handleReplyComment(${itemComment.id}, '${itemComment.name}', @auth {{Auth::user()->id}} @endauth)" id="replyComment-${itemComment.id}">Trả lời</button>
                        </div>
                     </div>
                  </div>
                  <div id="showShowHideBlockReplyComment-${itemComment.id}">
                     ${showShowHideBlockReplyComment(itemComment.id, listReplyComments)}
                  </div>
                  <div id="block-reply-${itemComment.id}" style="display: none">
                     ${showReplyComments(itemComment, listReplyComments)}
                  </div>
                  
               </div>

            </div>
         </div>
         <!-- end  đây Lãm  -->
      `;
      return html;
   }
   function countComment(countListComment, idMotels) {
      let html = `
         <h4>${countListComment} Comments</h4>
         ${showCommentBlock(idMotels)}
      `;
      return html;
   }
   // Render dữ liệU của comment
   function comments_area1(listComments, listReplyComments, idMotels) {
      let html = ``;
      for(let i = 0; i < listComments.length; i++) {
         let itemComment = listComments[i];
         html += `
            ${itemComment_area(JSON.stringify(itemComment), listReplyComments)}
         `;
      }
      return html;
   }

   function motels_Most(listMotelsMost) {
      let html = `<h3 class="widget_title">Nhà trọ nổi bật</h3>`;
      for (let i = 0; i < listMotelsMost.length; i++) {
         let item = listMotelsMost[i];
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
                  <img src="{{asset('assets/img/motels/${item.image}')}}" style="height: 90px; width: 90px" alt="post">
                  <div class="media-body">
                     <a href="/details-motel/${item.id}">
                        <h3>${item.name}</h3>
                     </a>
                     <span>Địa chỉ: ${item.address}</span> <br/>
                     <span>Lượt xem: ${item.views}</span>
                     <div class="d-flex justify-content-between align-items-center">
                        <p class="text-success font-weight-bold">${formatPrice(item.min_price)} /tháng</p>
                        ${time_diff}

                     </div>
                  </div>
               </div>
            `;
      }
      return html;
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
                     <span>Lượt xem: ${item.views}</span>
                     <div class="d-flex justify-content-between align-items-center">
                        <p class="text-success font-weight-bold">${item.name}</p>
                        ${time_diff}
                     </div>
                  </div>
               </div>
            `;
      }
      console.log(html);
      return html;
   }

   function setEndOfContenteditable(contentEditableElement) {
      var range, selection;
      if (document.createRange) {
         range = document.createRange();
         range.selectNodeContents(contentEditableElement[0]);
         range.collapse(false);
         selection = window.getSelection();
         selection.removeAllRanges();
         selection.addRange(range);

      }
   }

   // Hiển thị và xử lý hide show reply comment
   function showShowHideBlockReplyComment(idItemComment, listReplyComments) {
      let html = ``;
      let count = 0;
      for(let i = 0; i < listReplyComments.length; i++) {
         let item = listReplyComments[i];
         if(item.idCommentMotels == idItemComment) {
            count++;
         }
      }
      if(count == 0) {
         return html;
      } else {
         html += `
            <a id="showHideBlockReplyComments-${idItemComment}" 
            onclick="showHideBlockReplyComments(${idItemComment}, ${count})" 
            style="cursor:pointer; padding-left: 4px">
               Xem ${count} câu trả lời 
               <i class="fas fa-caret-down ml-1"></i>   
            </a>
         `;
      }
      return html;
   }

   function showHideBlockReplyComments(idItemComment, count) {
      let status = $(`#block-reply-${idItemComment}`).css('display');
      if(status == 'none') {
         $(`#block-reply-${idItemComment}`).show();
         $(`#showHideBlockReplyComments-${idItemComment}`).html(`Ẩn ${count} câu trả lời <i class="fas fa-caret-up ml-1"></i>`);
      } else if(status == 'block') {
         $(`#block-reply-${idItemComment}`).hide();
         $(`#showHideBlockReplyComments-${idItemComment}`).html(`Xem ${count} câu trả lời <i class="fas fa-caret-down ml-1"></i>`);
      }
   }

   function showBoxReplyComment(idItemComment) {
      $(document).ready(function() {
         $(`.comment-reply-block-${idItemComment}`).addClass('d-flex');
         var a = $(`.comment-reply-content`);
         setEndOfContenteditable(a)
      });
   }

   function hideBoxReplyComment(idItemComment) {
      $(document).ready(function() {
         $(`.comment-reply-block-${idItemComment}`).removeClass('d-flex');
         $(`#comment-reply-content-${idItemComment}`).html('');
      });
   }

   function addpendReplyComment(itemComment, replyComment) {
      let image_avatar = '';
      if (!replyComment.image) {
         image_avatar = `<img src="{{asset('assets/img/users/user.jpg')}}" alt="" style="height: 70px; width:70px">`;
      } else {
         image_avatar = `<img src="{{asset('assets/img/users/${replyComment.image}')}}" alt="" style="height: 70px; width:70px">`;
      };
      return `
         <!-- comment replied -->
         <div class="comment-replied-block d-flex mt-3">
            <div class="user-reply-thumb">
               @auth
               <img src="{{asset('assets/img/users/'.Auth::user()->image)}}" alt="" style="height: 70px; width:70px">
               @endauth
            </div>
            <div class="ml-2 w-100">
               <div class="comment-content">
                  <h5>
                     @auth
                     {{Auth::user()->name}}
                     @endauth
                  </h5>
                  <p class="mt-2 mb-0">
                     <span class="comment-reply-user mr-1">
                     ${itemComment.name}
                     </span>
                     ${replyComment.contents}
                  </p>
               </div>
               <div class="comment-desc d-flex align-items-center mt-2">
                  <div class="text-muted small ml-3">${replyComment.created_at}</div>
               </div>
            </div>
         </div>
      `;
   }

   function handleReplyComment(idCommentMotels, name, idUser) {
      $(document).ready(function() {
         let contents = $(`#comment-reply-content-${idCommentMotels}`).html();
         if(contents == '') {
            alert('Bạn chưa nhập nội dung bình luận');
            return;
         }
         let itemComment = {
            id: idCommentMotels,
            name: name
         }
         $.ajax({
            url: '/handleReplyCommentMotels',
            type: 'get',
            data: {
               contents: contents,
               idCommentMotels: itemComment.id,
               idUser: idUser
            },
            dataType: 'json',
            success: function(response) {
               // console.log(response.replyComment);
               $(`#block-reply-${idCommentMotels}`).append(addpendReplyComment(itemComment, response.replyComment));
               $(`#showShowHideBlockReplyComment-${idCommentMotels}`).html(showShowHideBlockReplyComment(idCommentMotels, response.listReplyComments));
               hideBoxReplyComment(idCommentMotels);
            }
         });
      });
   }

   function handleComment() {
      $(document).ready(function() {
            let contents = $('#comment-content').val();
            let idMotels = $('input[name="idMotels"]').val();
            let idUser = $('input[name="idUser"]').val();
            // alert(idUser);
            if(contents == '') {
               alert('Bạn chưa nhập nội dung bình luận');
               return;
            }
            $.ajax({
               url: '/handleCommentMotels',
               type: 'get',
               data: {
                  contents: contents,
                  idMotels: idMotels,
                  idUser: idUser
               },
               dataType: 'json',
               success: function(response) {
                  console.log(response.itemComment);
                  console.log(response.listReplyComments);
                  $('.comment_list').prepend(itemComment_area(JSON.stringify(response.itemComment), response.listReplyComments));
                  $('#countComment').html(countComment(response.countListComment, response.itemComment.idMotels));
                  $('#comment-content').val('');
               }
            });
      });
   }
</script>
@endsection