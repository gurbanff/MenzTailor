<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <?php foreach ($select_single_title_db as $item) { ?>
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url('uploads/singleblogimg/'.$item['blog_file']); ?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap">
                        <h2>Single Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<!-- slider Area End-->

<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <?php foreach ($select_blog_area_db as $item) { ?>
                            <?php if($item['blog_file']){ ?>
                                <img width="750px" height="375px" src="<?php echo base_url('uploads/blogarea/'.$item['blog_file']); ?>" alt="">
                            <?php }else{ ?>
                                <img style="width: 750px; height: 375px;" src="<?php echo base_url('uploads/noimage.jpg'); ?>" alt="Error">
                            <?php } ?>
                    </div>
                    <div class="blog_details">
                        <h2>
                            <?php echo $item['title']; ?>
                        </h2>

                        <p class="excert">
                            <?php echo $item['description']; ?>
                        </p>
                        <?php } ?>
                    </div>
                </div>
                <!-- <div class="navigation-top">
                    <div class="d-sm-flex justify-content-between text-center">
                        <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                            people like this</p>
                        <div class="col-sm-4 text-center my-2 my-sm-0">
                             <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p>
                        </div>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <div class="navigation-area">
                        <div class="row">
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/preview.png" alt="">
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="#">
                                        <span class="lnr text-white ti-arrow-left"></span>
                                    </a>
                                </div>
                                <div class="detials">
                                    <p>Prev Post</p>
                                    <a href="#">
                                        <h4>Space The Final Frontier</h4>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>Next Post</p>
                                    <a href="#">
                                        <h4>Telescopes 101</h4>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="#">
                                        <span class="lnr text-white ti-arrow-right"></span>
                                    </a>
                                </div>
                                <div class="thumb">
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/next.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--<div class="blog-author">
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
                </div>-->
                
                <div class="comments-area" style="margin-top: 0px!important;">
                    <h4>Comments</h4>
                        <?php if ($select_comments_db){ ?>
                            <?php foreach ($select_comments_db as $comment){ ?>
                                <div class="comment-list">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <?php if ($comment['comment_type'] == 'user'){ ?>
                                                    <img width="70px" height="70px" style="object-fit: cover" src="<?php echo base_url('uploads/user_profile/').$comment['comment_user_img'] ?>">
                                                <?php }else{ ?>
                                                    <img src="<?php echo base_url('uploads/user_profile/comment.png')?>">
                                                <?php } ?>

                                            </div>
                                            <div class="desc">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <h5>
                                                            <a href="#"><?php echo $comment['comment_name'] ?></a>
                                                        </h5>
                                                        <p class="date"><?php echo $comment['comment_date'] ?></p>
                                                    </div>
                                                </div>


                                                <p class="comment">
                                                    <?php echo $comment['comment'] ?>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        <?php }else{ ?>

                            <h3>0 comments yet</h3>
                            <h5>Be the first to comment</h5>

                        <?php } ?>
                </div>

                <div class="comment-form">
                    <?php if (!isset($_SESSION['user_data'])){ ?>
                        <h4>Leave a Reply</h4>

                        <?php if ($this->session->flashdata('CommentSucc')){ ?>
                            <div class="alert alert-success alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <?php echo $this->session->flashdata('CommentSucc')?>
                            </div>
                        <?php }?>

                        <?php if ($this->session->flashdata('CommentError')){ ?>
                            <div class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <?php echo $this->session->flashdata('CommentError')?>
                            </div>
                        <?php }?>

                        <form class="form-contact comment_form" action="<?php echo base_url('Single_Blog'); ?>" id="commentForm" method="POST">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment" required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email" placeholder="Email" required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="news_id" type="text" value="<?php echo $this->uri->segment(2)?>" readonly hidden>
                                    </div>
                                </div>


                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                            </div>

                        </form>
                    <?php }else{ ?>
                        <h4>Leave a Reply</h4>

                        <?php if ($this->session->flashdata('CommentSucc')){ ?>
                            <div class="alert alert-success alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <?php echo $this->session->flashdata('CommentSucc')?>
                            </div>
                        <?php }?>

                        <?php if ($this->session->flashdata('CommentError')){ ?>
                            <div class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <?php echo $this->session->flashdata('CommentError')?>
                            </div>
                        <?php }?>

                        <form class="form-contact comment_form" action="<?php echo base_url('Single_Blog') ?>" id="commentForm" method="POST">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>
                                        <input class="form-control" name="news_id" type="text" value="<?php echo $this->uri->segment(2)?>" hidden>
                                    </label>
                                </div>
                            </div>

                        </form>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
</section>
<!--================ Blog Area end =================-->
