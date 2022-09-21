<!--<header>
             Header Start
        <div class="header-area header-sticky">
                <div class="header-wrapper  d-flex flex-wrap align-items-center justify-content-between">
                     Logo
                    <div class="logo">
                        <a href="index.php"><img src="<?php /*echo base_url('public/user/'); */?>assets/img/logo/logo.png" alt=""></a>
                    </div>
                     Main-menu
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="services.php">Services</a></li>
                                <li><a href="about.php">History</a></li>
                                <li><a href="gellary.php">Gallery</a></li>
                                <li><a href="blog.php">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="single-blog.php">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul class="submenu">
                                        <li><a href="elements.php">Element</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                     Header-btn
                    <div class="d-none d-xl-block">
                        <a href="#" class="btn btn2">Visit Us</a>
                    </div>
                     Mobile Menu
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
        </div>
             Header End
        </header>-->


<main>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <?php foreach($select_gall_item as $item){ ?>

        <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url('uploads/gallbanner/'.$item['gall_file']); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap">
                            <h2>Gallery</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>
    </div>
    <!-- slider Area End-->
    <!-- Clients testimonial Start  -->
    <div class="clients-testimonial testimonial-padding01 fix">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-100">
                        <?php foreach($select_gall_client_db as $item){ ?>

                        <span class="wow fadeInUp" data-wow-delay=".2s">
                            <?php echo $item['title']; ?>
                        </span>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">
                            <?php echo $item['secondary_title']; ?>
                        </h2>

                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row">

                    <div class="col-xl-12">
                        <div class="clients-speech-active dot-style">
                            <?php foreach($select_gall_clit_img_db as $item){ ?>

                                <div class="single-clients-speech">
                                    <?php if($item['client_img']){ ?>
                                        <img style="width: 1170px; height: 654px;" src="<?php echo base_url('uploads/gallclient/'.$item['client_img']); ?>" alt="">
                                    <?php }else{ ?>
                                        <img style="width: 1170px; height: 654px;" src="<?php echo base_url('uploads/noimage.jpg/'); ?>" alt="Error">
                                    <?php } ?>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!--Clients testimonial End  -->
    <!-- Testimonial Start -->
    <div class="testimonial-area testimonial-padding3">
        <div class="container">

            <!-- Section Tittle 02 -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle02  wow fadeInUp" data-wow-delay=".2s">

                        <?php foreach($select_gall_photos_ttl_db as $item){ ?>
                            <h2>
                                <?php echo $item['title']; ?>
                            </h2>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="h1-testimonial-active dot-style wow fadeInUp" data-wow-delay=".5s">
                         <!--Single Testimonial-->
                        <div class="single-testimonial text-center">
                             <!--Testimonial Content-->
                            <div class="testimonial-caption">
                                <div class="testimonial-top-cap">
                                    <!--<img style="width: 300px; height: 300px;" src="<?php /*echo base_url('public/user/'); */?>assets/img/blog/blog_1.png" alt="">-->
                                    <?php foreach($select_gall_photos_db as $item){ ?>

                                            <?php if($item['gall_file']){ ?>
                                                <img style="width: 230px; height: 230px;" src="<?php echo base_url('uploads/gallphotos/'.$item['gall_file']); ?>" alt="">
                                            <?php }else{ ?>
                                                <img style="width: 300px; height: 300px;" src="<?php echo base_url('uploads/noimage.jpg/'); ?>" alt="Error">
                                            <?php } ?>

                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                         <!--Single Testimonial-->
                        <!--<div class="single-testimonial text-center">
                             Testimonial Content
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <img src="<?php /*echo base_url('public/user/'); */?>assets/img/icon/testimonial.png" alt="">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
</main>