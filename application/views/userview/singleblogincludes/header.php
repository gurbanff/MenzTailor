<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="<?php echo base_url('public/user/'); ?>assets/img/logo/logo.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start-->
<header>
    <!-- Header Start -->
    <div class="header-area header-sticky">
        <div class="header-wrapper  d-flex flex-wrap align-items-center justify-content-between">
            <!-- Logo -->
            <div class="logo">
                <a href="index.php"><img src="<?php echo base_url('public/user/'); ?>assets/img/logo/logo.png" alt=""></a>
            </div>
            <!-- Main-menu -->
            <div class="main-menu d-none d-lg-block">
                <nav>
                    <?php foreach($select_all_item as $item){ ?>
                    <ul id="navigation">
                        <li>
                            <a href="<?php echo base_url(); ?>">
                                <?php echo $item['nav_home']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Gallery'); ?>">
                                <?php echo $item['nav_gallery']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Blog'); ?>">
                                <?php echo $item['nav_blog']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Contact'); ?>">
                                <?php echo $item['nav_contact']; ?>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Header-btn -->
            <div class="d-none d-xl-block">
                <a href="#" class="btn btn2">
                    <?php echo $item['nav_visitus']; ?>
                </a>
            </div>
            <?php } ?>
            <!-- Mobile Menu -->
            <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>