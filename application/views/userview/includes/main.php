
<main>

    <!-- slider Area Start-->

    <div class="slider-area ">
        <div class="slider-active">
        <?php foreach ($select_banner as $ban){ ?>

            <?php if($ban['ban_file']){ ?>
                <div class="single-slider slider-height d-flex align-items-center" data-background="<?php echo base_url('uploads/homebannerimg/banner1nd/'.$ban['ban_file']); ?>">
            <?php } ?>
            <?php #else{} ?>
               <!-- <img src="https://thumbs.dreamstime.com/b/no-image-available-icon-flat-vector-no-image-available-icon-flat-vector-illustration-132482953.jpg" alt=""> -->

                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-10">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".4s" ><?php echo $ban['ban_hero_caption']; ?></h1>
                                <span data-animation="fadeInUp" data-delay=".8s" ><?php echo $ban['ban_span']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--            <div class="single-slider slider-height d-flex align-items-center" data-background="--><?php //echo base_url('public/user/'); ?><!--assets/img/hero/h1_hero.jpg">-->
<!--                <div class="container">-->
<!--                    <div class="row">-->
<!--                        <div class="col-xl-8 col-lg-8 col-md-10">-->
<!--                            <div class="hero__caption">-->
<!---->
<!--                                --><?php //foreach($select_hero_main as $heroBan){ ?>
<!---->
<!--                                <h1 data-animation="fadeInUp" data-delay=".4s">--><?php //echo $heroBan['hero_caption']; ?><!--</h1>-->
<!--                                <span  data-animation="fadeInUp" data-delay=".8s">--><?php //echo $heroBan['hero_span']; ?><!--</span>-->
<!---->
<!--                                --><?php //} ?>
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

        <?php } ?>
        </div>
    </div>

    <!-- slider Area End-->
    <!-- Clients Offers Start -->
    <div class="clients-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-100">
                        <?php foreach($select_clients as $item){ ?>

                        <span class=" wow fadeInUp" data-wow-delay=".2s">
                            <?php echo $item['fade_in_up']; ?>
                        </span>
                        <h2 class=" wow fadeInUp" data-wow-delay=".3s">
                                <?php echo $item['fade_in_down']; ?>
                        </h2>

                        <?php } ?>
                    </div>
                </div>
            </div>


            <div class="row">

                <?php foreach($select_single_db as $db){ ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-offers mb-50 wow fadeInUp" data-wow-delay=".2s" >
                            <div class="offers-img">
                                <?php if($db['file']){ ?>
                                    <img src="<?php echo base_url('uploads/clientsoffers/'.$db['file']); ?>" alt="">
                                <?php } ?>
                            </div>
                            <div class="offers-cap">
                                <span>
                                    <?php echo $db['offers_num']; ?>
                                </span>
                                <h3><a href="<?php echo base_url('Contact'); ?>">
                                    <?php echo $db['offers_cap']; ?>
                                </a></h3>
                                <p>
                                    <?php echo $db['offers_des']; ?>
                                </p>
                                <a href="<?php echo base_url('Contact'); ?>"><i class="ti-arrow-top-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>


                <!--<div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-offers mb-50 wow fadeInUp" data-wow-delay=".4s">
                        <div class="offers-img">
                            <img src="<?php /*echo base_url('public/user/'); */?>assets/img/gallery/offers2.jpg" alt="">
                        </div>
                        <div class="offers-cap">
                            <span>2</span>
                            <h3><a href="<?php /*echo base_url('Services'); */?>">Premioum Style  Cutting-out</a></h3>
                            <p>Aorem Epsum Solor sit amet, consectetur adipiscing elited dsfo eiusmod tecsmpor </p>
                            <a href="<?php /*echo base_url('Services'); */?>"><i class="ti-arrow-top-right"></i></a>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
    <!-- Clients Offers End -->
    <div class="history-video-area fix">
        <div class="container">
            <div class="row">

                <?php foreach($select_history_db as $item){ ?>

                <div class="col-lg-6">
                    <div class="video-bg wow fadeInLeft" data-wow-delay=".2s">
                        <img src="<?php echo base_url('uploads/areahistory/'.$item['user_file']); ?>" alt="">
<!--                        <img src="--><?php //echo base_url('public/user/'); ?><!--assets/img/gallery/videobg.jpg" alt="">-->
                        <div class="video-icon">
                            <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=1aP-TXUpNoU" tabindex="0"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Section Tittle 03 -->
                    <div class="section-tittle03 section-tittle02 wow fadeInRight" data-wow-delay=".9s">
                        <h2>
                            <?php echo $item['hs_title']; ?>
                        </h2>
                    </div>
                    <div class="video-history-cap wow fadeInRight" data-wow-delay=".2s">
                        <h3>
                            <?php echo $item['hs_two_til']; ?>
                        </h3>
                        <p>
                            <?php echo $item['hs_desc']; ?>
                        </p>
                        <a href="<?php echo base_url('About'); ?>" class="btn">
                            <?php echo $item['hs_button']; ?>
                        </a>
                    </div>
                </div>

                <?php } ?>

            </div>
        </div>
    </div>
    <!-- Video Area End> -->
    <!-- Clients testimonial Start  -->
    <div class="clients-testimonial testimonial-padding1">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <?php foreach($select_feedbk_db as $feedb){ ?>

                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-100">
                        <span class="wow fadeInUp" data-wow-delay=".2s">
                            <?php echo $feedb['h_one_title']; ?>
                        </span>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">
                            <?php echo $feedb['h_two_title']; ?>
                        </h2>
                    </div>
                </div>

            <?php } ?>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="clients-speech-active dot-style">

                        <?php foreach($select_feedimg_db as $filedb){ ?>
                        <div class="single-clients-speech">
                            <img width="1170px" height="654px" src="<?php echo base_url('uploads/clientfeedback/'.$filedb['file']); ?>" alt="">
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Clients testimonial End  -->
    <!-- Visit Our Tailor Start -->
    <div class="visit-tailor-area fix">

        <?php foreach($select_visit_db as $visitData) ?>

        <!-- left Contents -->
        <div class="tailor-details text-center wow fadeInLeft" data-wow-delay=".2s">
            <span>
                <?php echo $visitData['title']; ?>
            </span>
            <h3>
                <?php echo $visitData['ndtitle']; ?>
            </h3>
            <p><?php echo $visitData['loca']; ?><br> <?php echo $visitData['email']; ?></p>
            <ul>
                <li>
                    <?php echo $visitData['desc']; ?>
                </li>
                <li>
                    <?php echo $visitData['date']; ?>
                </li>
                <li>
                    <?php echo $visitData['nddate']; ?>
                </li>
            </ul>
            <!--Social-->
            <div class="visit-social">
                <?php foreach ($select_visit_i_db as $item) { ?>
                <a href="<?php echo $item['icon_https'] ?>">
                    <i class="<?php echo $item['icon']; ?>"></i>
                </a>
                <?php } ?>
            </div>
        </div>
        <!--Right Contents  -->
                <?php foreach($select_off_db as $item){ ?>

        <div class="tailor-offers wow fadeInRight" data-wow-delay=".2s" data-background="<?php echo base_url('uploads/visitimg/'.$item['user_file']); ?>">
            <div class="offers text-center">

                <h3>
                    <?php echo $item['hpercent']; ?>
                </h3>
                <a href="#" class="btn btn-black">
                    <?php echo $item['visit_button']; ?>
                </a>

                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Visit Our Tailor End -->
    <!-- Testimonial Start -->
    <div class="testimonial-area testimonial-padding2">
        <div class="container">
            <!-- Section Tittle 02 -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle02  wow fadeInUp" data-wow-delay=".2s">
                        <?php foreach($select_tt_db as $item){ ?>
                        <h2>
                            <?php echo $item['title']; ?>
                        </h2>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="h1-testimonial-active dot-style wow fadeInUp" data-wow-delay=".5s">
                        <?php foreach($select_testi_db as $testi){ ?>
                        <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <img src="<?php echo base_url('uploads/testimonial_img/'.$testi['user_file']); ?>" alt="">
                                        <p>
                                            <?php echo $testi['description']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <!-- Single Testimonial -->

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

</main>
