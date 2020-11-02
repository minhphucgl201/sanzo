<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin.php?act=home" class="brand-link">
      <img src="../view/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
     <span class="brand-text font-weight-light"> Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../view/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Phúc Đụt</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Danh mục
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?act=addnewcatalog" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm danh mục</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin.php?act=qldm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lí danh mục</p>
                </a>
              </li>
            </ul>
          </li>          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Sản phẩm
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="admin.php?act=addnewproduct" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm sản phẩm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin.php?act=qlsp" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lí sản phẩm</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?act=thongke" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thống kê</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-sliders-h"></i>
              <p>
                Quản lí blog
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?act=addnewblog" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin.php?act=blog" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lí blog</p>
                </a>
              </li>
            </ul>
          </li>
          
           
          
          <li class="nav-header">EXAMPLES</li>
        
          <li class="nav-header">MISCELLANEOUS</li>
    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>