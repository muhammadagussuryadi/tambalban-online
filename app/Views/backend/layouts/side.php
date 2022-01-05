<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="main-sidebar app-sidebar sidebar-scroll">
  <div class="main-sidebar-header">
    <a class="desktop-logo logo-light active" href="#" class="text-center mx-auto"><img src="<?php echo base_url();?>/assets/img/brand/logo.png" class="main-logo"></a>
    <a class="desktop-logo icon-logo active"href="#"><img src="<?php echo base_url();?>/assets/img/brand/favicon.png" class="logo-icon"></a>
    <a class="desktop-logo logo-dark active" href="#"><img src="<?php echo base_url();?>/assets/img/brand/logo-white.png" class="main-logo dark-theme" alt="logo"></a>
    <a class="logo-icon mobile-logo icon-dark active" href="#"><img src="<?php echo base_url();?>/assets/img/brand/favicon-white.png" class="logo-icon dark-theme" alt="logo"></a>
  </div><!-- /logo -->
  <div class="main-sidebar-loggedin">
    <div class="app-sidebar__user">
      <div class="dropdown user-pro-body text-center">
        <div class="user-pic">
          <img src="<?php echo base_url();?>/assets/img/faces/6.jpg" alt="user-img" class="rounded-circle mCS_img_loaded">
        </div>
        <div class="user-info">
          <h6 class=" mb-0 text-dark"><?php echo session()->login_session['name']; ?></h6>
          <span class="text-muted app-sidebar__user-name text-sm">Administrator</span>
        </div>
      </div>
    </div>
  </div>
  <div class="sidebar-navs">
    <ul class="nav  nav-pills-circle">
      <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Notification">
        <a class="nav-link text-center m-2">
          <i class="fe fe-bell"></i>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Profile">
        <a class="nav-link text-center m-2">
          <i class="fe fe-user"></i>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout">
        <a href="/logout" class="nav-link text-center m-2">
          <i class="fe fe-power"></i>
        </a>
      </li>
    </ul>
  </div>
  <div class="main-sidebar-body">
    <ul class="side-menu ">
      <li class="slide">
        <a class="side-menu__item" href="dashboard"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Dashboard</span></a>
      </li>
      <li class="slide">
        <a class="side-menu__item" href="user-pengguna"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">User Pengguna</span></a>
      </li>
      <li class="slide">
        <a class="side-menu__item" href="bengkel"><i class="side-menu__icon fe fe-settings"></i><span class="side-menu__label">Bengkel</span></a>
      </li>
      <li class="slide">
        <a class="side-menu__item" href="administrator"><i class="side-menu__icon fe fe-user-check"></i><span class="side-menu__label">Administrator</span></a>
      </li>
    </ul>
  </div>
</aside>