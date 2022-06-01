  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
              style="opacity: .8">
          <span class="brand-text font-weigh t-light">AdminPTH</span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar mt-3">
          <!-- Sidebar user panel (optional) -->
          <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                      aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item ">
                      <a href="/admin" class="nav-link ">
                        <i class="fas fa-home mr-2"></i>
                          <p>
                              Trang chủ </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="fas fa-address-book mr-2"></i>
                          <p>
                              Người dùng
                          </p>
                          <i class="fas fa-angle-left right"></i>
                      </a>
                      <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                          <a href="/admin/users/listUser" class="nav-link">
                            <i class="fas fa-users mr-2"></i>
                            <p>Người dùng</p>
                          </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-street-view mr-2"></i>
                              <p>Chủ trọ</p>
                            </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="fas fa-suitcase mr-2"></i>

                          <p>
                              Phòng Trọ
                          </p>
                          <i class="fas fa-angle-left right"></i>
                      </a>
                      <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="fas fa-home mr-2"></i>
                            <p>Phòng trọ</p>
                          </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/motels/listMotels" class="nav-link">
                                <i class="fas fa-door-open mr-2"></i>
                              <p>Dãy trọ</p>
                            </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="fab fa-usps mr-2"></i>
                          <p>
                              Bài viết
                          </p>
                          <i class="fas fa-angle-left right"></i>
                      </a>
                      <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                          <a href="/admin/posts/listPosts" class="nav-link">
                            <i class="fas fa-envelope-open-text mr-2"></i>
                            <p>Bài viết</p>
                          </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/posts/newPost" class="nav-link">
                              <i class="fas fa-user-edit mr-2"></i>
                              <p>Đăng bài</p>
                            </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="fas fa-chart-bar mr-2"></i>
                          <p>
                              Thống kê
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="fas fa-headset mr-2"></i>
                          <p>
                              Liên hệ
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>