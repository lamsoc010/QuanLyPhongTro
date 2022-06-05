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

   .comment-block .reply-btn {
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

   .breadcrumb-item.active a {
      color: #6c757d;

   }

   .motel-posts-trending {
      background: #fbf9ff;
      margin-bottom: 20px;
      border-radius: 6px;
   }
    .post-trending-title {
      border-bottom: 1px solid red;
   }

   #listChuyenMuc a {
      color: rgba(0, 0, 0, 0.8) !important;
      transition: all 0.3s ease-in-out;
   }

   #listChuyenMuc a:hover {
      /* color: #0062CC!important; */
      text-decoration: underline;
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
                     <li class="breadcrumb-item"><a href="/all-posts">Bài viết</a></li>
                     <li class="breadcrumb-item active namePostBreadcrumb" aria-current="page"></li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>


      <div class="row">
         <div class="col-lg-8 posts-list">
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

            <div class="motel-posts-trending  w-100 ">

               <!-- trendding-items -->
               <h5 class="posts-trending-title p-4 widget_title mb-0">Chuyên mục bài viết</h5>
               <aside class="pb-2" id="listChuyenMuc">
                  {{-- render chuyen muc --}}

               </aside>

            </div>

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

      let id = url.split('/').pop();
      $.ajax({
         url: '/handleDetailsPost/' + id,
         type: 'GET',
         dataType: 'json',
         success: function(response) {
            console.log(response);
            $('#carousel-indicators').html(carousel_indicators(response.image_posts));
            $('#carousel-inner').html(carousel_inner(response.image_posts));
            $('.blog_details').html(blog_details(response.post));
            // $('.comments-area').html(comments_area(response.listComments));
            $('#motelsMost').html(motels_Most(response.listMotelsMost));
            $('#postsMost').html(posts_Most(response.listPostsMost));
            $('.comment_list').html(comments_area1(response.listComments, response.listReplyComments, id));
            $('#countComment').html(countComment(response.listComments.length, id));
            $('.namePostBreadcrumb').html(`${response.post.nameCategory}`);
            $('#listChuyenMuc').html(renderListCategory(response.listCategory));
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

   function carousel_indicators(image_posts) {
      let html = '';
      for (let i = 0; i < image_posts.length; i++) {
         html += `
               <li data-target="#carouselExampleIndicators" data-slide-to="${i}" class="${i == 0 ? 'active' : ''}"></li>
            `;
      }
      return html;
   }

   function carousel_inner(image_posts) {
      let html = '';
      for (let i = 0; i < image_posts.length; i++) {
         html += `
               <div class="carousel-item ${i == 0 ? 'active' : ''}">
                  <img class="d-block w-100" src="{{asset('assets/img/posts/')}}/${image_posts[i].image}" alt="First slide" style="height:500px">
               </div>
            `;
      }
      return html;
   }

   function information_blog_details(post) {
      let html = '';
      let image_avatar = '';
      if (!post.image_avatar) {
         image_avatar = `<img class="" src="{{asset('assets/img/users/user.jpg')}}" alt="Card image cap" style="width: 100%; height: 100%;border-radius: 50%; ">`;
      } else {
         image_avatar = `<img class="" src="{{asset('assets/img/users/${image_posts.imageUser}')}}" alt="Card image cap" style="width: 100%; height: 100%;border-radius: 50%; ">`;
      }
      html += `
            <div class="col-md-12" >
               <h1>
                 
                  ${post.title}
               </h1>
               <ul class="blog-info-link mt-4 ">
                  <li class="motels_area"><i class="fas fa-user"></i> ${post.nameUser}</li>
               </ul>
               <ul class="blog-info-link mt-4 mb-4">
                  <li class="ms-4"><i class="fas fa-clock"></i> ${post.created_at}</li>
               </ul>
            </div>
           
         `
      return html;
   }

   function blog_details(post) {
      let html = '';
      html += `
            <div class="row" id="information_blog_details">
               ${information_blog_details(post)}
            </div>

            <div class="row mt-3">
               <h5 class="">Chi tiết bài viết:</h5>
               <p class="excert">
                  ${post.content}
               </p>
            </div>
          
         `;
      return html;
   }

   // Bình luận
   function showReplyComments(itemComment, listReplyComments) {
      let htmlReply = ``;
      for(let i = 0; i < listReplyComments.length; i++) {
         if(listReplyComments[i].idCommentPosts == itemComment.id) {
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
   function showCommentBlock(idPosts) {
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
                     <input type="hidden" name="idPosts" value="${idPosts}"></input>
                     <input type="hidden" name="idUser" value="@auth{{Auth::user()->id}}@endauth"></input>
                     <div class="comment-reply-btn d-flex justify-content-end mt-2 mr-2">
                        <!-- <button onclick="handleComment(${idPosts}, @auth{{Auth::user()->id}}@endauth)">Comment</button> -->
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

   function countComment(countListComment, idPosts) {
      let html = `
         <h4>${countListComment} Comments</h4>
         ${showCommentBlock(idPosts)}
      `;
      return html;
   }

   // Render dữ liệU của comment
   function comments_area1(listComments, listReplyComments, idPosts) {
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
         if(item.idCommentPosts == idItemComment) {
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

   function handleReplyComment(idCommentPosts, name, idUser) {
      $(document).ready(function() {
         let contents = $(`#comment-reply-content-${idCommentPosts}`).html();
         if(contents == '') {
            alert('Bạn chưa nhập nội dung bình luận');
            return;
         }
         let itemComment = {
            id: idCommentPosts,
            name: name
         }
         $.ajax({
            url: '/handleReplyCommentPosts',
            type: 'get',
            data: {
               contents: contents,
               idCommentPosts: itemComment.id,
               idUser: idUser
            },
            dataType: 'json',
            success: function(response) {
               // console.log(response.replyComment);
               $(`#block-reply-${idCommentPosts}`).append(addpendReplyComment(itemComment, response.replyComment));
               $(`#showShowHideBlockReplyComment-${idCommentPosts}`).html(showShowHideBlockReplyComment(idCommentPosts, response.listReplyComments));
               hideBoxReplyComment(idCommentPosts);
            }
         });
      });
   }

   function handleComment() {
      $(document).ready(function() {
            let contents = $('#comment-content').val();
            let idPosts = $('input[name="idPosts"]').val();
            let idUser = $('input[name="idUser"]').val();
            // alert(idUser);
            if(contents == '') {
               alert('Bạn chưa nhập nội dung bình luận');
               return;
            }
            $.ajax({
               url: '/handleCommentPosts',
               type: 'get',
               data: {
                  contents: contents,
                  idPosts: idPosts,
                  idUser: idUser
               },
               dataType: 'json',
               success: function(response) {
                  console.log(response.itemComment);
                  console.log(response.listReplyComments);
                  $('.comment_list').prepend(itemComment_area(JSON.stringify(response.itemComment), response.listReplyComments));
                  $('#countComment').html(countComment(response.countListComment, response.itemComment.idPosts));
                  $('#comment-content').val('');
               }
            });
      });
   }

   function renderListCategory(listCategory) {
      let html = ``;
      for (let i = 0; i < listCategory.length; i++) {
         let item = listCategory[i];
         html += `
                    <li class="nav-item">
                        <a class="nav-link " href="/category/${item.id}">
                        <i class="fas fa-angle-right mr-2"></i>
                        ${item.name}  (${item.total})</a>
                    </li>
                `;
      }
      return html;
   }
</script>
@endsection