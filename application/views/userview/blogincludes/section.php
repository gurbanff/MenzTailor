<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <?php foreach($select_blog_db as $item){ ?>

        <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url('uploads/blogimg/'.$item['blog_file']); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap">
                            <h2>
                                <?php echo $item['title']; ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>
</div>
<!-- slider Area End-->
<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <?php foreach($select_blog_area_db as $item){ ?>
                    <article class="blog_item">
                        <div class="blog_item_img">

                            <?php if($item['blog_file']){ ?>
                                <img width="750px" height="375px" src="<?php echo base_url('uploads/blogarea/'.$item['blog_file']); ?>" alt="">
                            <?php }else{ ?>
                                <img style="width: 750px; height: 375px;" src="<?php echo base_url('uploads/noimage.jpg'); ?>" alt="Error">
                            <?php } ?>
                            <a href="<?php echo base_url('Single_Blog/'.$item['id']); ?>" class="blog_item_date">
                                <h3>
                                    <?php echo $item['s_date']; ?>
                                </h3>
                                <p>
                                    <?php echo $item['s_monday']; ?>
                                </p>
                            </a>
                        </div>

                        <div class="blog_details" id="title">
                            <a class="d-inline-block" href="<?php echo base_url('Single_Blog/'.$item['id']); ?>">
                                <h2>
                                    <?php echo $item['title']; ?>
                                </h2>
                            </a>
                            <p>
                                <?php echo $item['description']; ?>
                            </p>
                            <ul class="blog-info-link">
                                <li><a href="<?php echo base_url('Single_Blog/'.$item['id']); ?>"><i class="fa fa-user"></i>
                                        <?php echo $item['blog_user']; ?>
                                </a></li>
                                <li><a href="<?php echo base_url('Single_Blog/'.$item['id']); ?>"><i class="fa fa-comments"></i>
                                        <?php echo $item['blog_comment']; ?>
                                </a></li>
                            </ul>
                        </div>
                    </article>
                    <?php } ?>

                    <!--<nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>-->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <!--<aside class="single_sidebar_widget search_widget">
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Search Keyword'
                                           onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = 'Search Keyword'">
                                    <div class="input-group-append">
                                        <button class="btns" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                        </form>
                    </aside>-->

                    <aside class="single_sidebar_widget post_category_widget">
                        <?php foreach($select_blog_cate_title_db as $item){ ?>
                        <h4 class="widget_title">
                            <?php echo $item['title']; ?>
                        </h4>
                        <?php } ?>
                        <ul class="list cat-list">
                            <?php foreach($select_blog_cate_db as $item){ ?>
                            <li>
                                <a href="<?php echo $item['linked']; ?>" class="d-flex">
                                    <p><?php echo $item['title']; ?></p>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </aside>

                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Post</h3>
                        <?php foreach($select_side_item as $item){ ?>
                        <div class="media post_item">
                            <?php if($item['blog_file']){ ?>
                                <img width="80" height="80" src="<?php echo base_url('uploads/blogarea/'.$item['blog_file']); ?>" style="object-fit: cover">
                            <?php }else{ ?>
                                <img style="width: 80px; height: 80px;" src="<?php echo base_url('uploads/noimage.jpg'); ?>" alt="Error">
                            <?php } ?>
                            <div class="media-body">
                                <a href="#title">
                                    <h3>
                                        <?php echo substr($item['title'],0,20)."..."; ?>
                                    </h3>
                                </a>
                                <p>
                                    <?php echo $item['s_monday']; ?>
                                    <?php echo $item['s_date']; ?>
                                </p>
                            </div>
                        </div>
                        <?php } ?>
                    </aside>

                    <!--<aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>

                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Subscribe</button>
                        </form>
                    </aside>-->
                </div>
            </div>
        </div>
    </div>
</section>
