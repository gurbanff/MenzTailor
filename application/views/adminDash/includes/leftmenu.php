<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo"><img src="<?php echo base_url('public/adminDash/'); ?>assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini"><img src="<?php echo base_url('public/adminDash/'); ?>assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="<?php echo base_url('public/adminDash/'); ?>assets/images/faces/me.jpg" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">
                            Gurbanff
                        </h5>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="<?php echo base_url('Dashboard'); ?>">
              <span class="menu-icon">
<!--                <i class="mdi mdi-speedometer"></i>-->
                  <i class="mdi mdi-crown"></i>
              </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <!--Home Nav-->
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-home"></i>
              </span>
                <span class="menu-title">Home</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Home_Edit'); ?>"><i class="mdi mdi-border-color" style="margin-right: 10px; margin-top: 5px"></i> Banner </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin_clients_offers_list'); ?>"><i class="mdi mdi-border-color" style="margin-right: 10px; margin-top: 5px"></i> Clients Offers </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin_history_list'); ?>"><i class="mdi mdi-border-color" style="margin-right: 10px; margin-top: 5px"></i> History </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin_client_feed_list'); ?>"><i class="mdi mdi-border-color" style="margin-right: 10px; margin-top: 5px"></i> Client Feedback </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin_visit_tailor_list'); ?>"><i class="mdi mdi-border-color" style="margin-right: 10px; margin-top: 5px"></i> Visit Tailor </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin_testimonial_list'); ?>"><i class="mdi mdi-border-color" style="margin-right: 10px; margin-top: 5px"></i> Testimonial Area </a></li>
                </ul>
            </div>
        </li>
        <!--Gallery Nav-->
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#gallery" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-image"></i>
              </span>
                <span class="menu-title">Gallery</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="gallery">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin_gall_banner_list'); ?>"><i class="mdi mdi-border-color" style="margin-right: 10px; margin-top: 5px"></i> Banner </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin_gall_client_list'); ?>"><i class="mdi mdi-border-color" style="margin-right: 10px; margin-top: 5px"></i> Gallery Client </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin_gall_photos_list'); ?>"><i class="mdi mdi-border-color" style="margin-right: 10px; margin-top: 5px"></i> Gallery Photos </a></li>
                </ul>
            </div>
        </li>
        <!--Blog Nav-->
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#blog" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-blogger"></i>
              </span>
                <span class="menu-title">Blog</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="blog">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin_blog_banner_list'); ?>"><i class="mdi mdi-border-color" style="margin-right: 10px; margin-top: 5px"></i> Banner </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin_blog_area_list'); ?>"><i class="mdi mdi-border-color" style="margin-right: 10px; margin-top: 5px"></i> Blog Area </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin_blog_category'); ?>"><i class="mdi mdi-border-color" style="margin-right: 10px; margin-top: 5px"></i> Blog Category </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin_single_blog_list'); ?>"><i class="mdi mdi-border-color" style="margin-right: 10px; margin-top: 5px"></i> Single Blog </a></li>
                </ul>
            </div>
        </li>
        <!-- Contact Nav -->
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#contact" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-contact-mail"></i>
              </span>
                <span class="menu-title">Contact</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="contact">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin_con_banner_list'); ?>"><i class="mdi mdi-border-color" style="margin-right: 10px; margin-top: 5px"></i> Banner </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin_cont_location_list'); ?>"><i class="mdi mdi-border-color" style="margin-right: 10px; margin-top: 5px"></i> Location </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin_con_mail_list'); ?>"><i class="mdi mdi-border-color" style="margin-right: 10px; margin-top: 5px"></i> Inbox </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin_con_cont_list'); ?>"><i class="mdi mdi-border-color" style="margin-right: 10px; margin-top: 5px"></i> Contact </a></li>
                </ul>
            </div>
        </li>

    </ul>
</nav>
