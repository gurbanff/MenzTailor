<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <?php foreach($select_cont_bann as $item) { ?>
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url('uploads/contact/'.$item['con_file']); ?>">
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

<!-- ================ contact section start ================= -->
<section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <?php foreach ($select_cont_lock as $item) { ?>
                <p>
                    <?php echo $item['location']; ?>
                </p>
                <?php }?>
                <script>
                    function initMap() {
                        var uluru = {
                            lat: -25.363,
                            lng: 131.044
                        };
                        var grayStyles = [{
                                featureType: "all",
                                stylers: [{
                                        saturation: -90
                                    },
                                    {
                                        lightness: 50
                                    }
                                ]
                            },
                            {
                                elementType: 'labels.text.fill',
                                stylers: [{
                                    color: '#ccdee9'
                                }]
                            }
                        ];
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: {
                                lat: -31.197,
                                lng: 150.744
                            },
                            zoom: 9,
                            styles: grayStyles,
                            scrollwheel: false
                        });
                    }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                </script>

            </div>


            <div class="row">
                <div class="col-12">
                    <?php foreach($select_cont_db as $item){ ?>
                    <h2 class="contact-title">
                        <?php echo $item['title']; ?>
                    </h2>
                    <?php } ?>
                </div>
                <!-- <div class="col-lg-8">
                    <form class="form-contact contact_form" action="<?php echo base_url('admin_cont_mess_add_act'); ?>" method="post" enctype='multipart/form-data' id="contactForm">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Enter Email address">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="boxed-btn">Send</button>
                        </div>
                    </form>
                </div> -->
                <div class="comment-form col-lg-8">
                    <form class="form-contact comment_form" action="<?php echo base_url('admin_cont_mess_add_act'); ?>" method="post" enctype='multipart/form-data' id="commentForm">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="name" type="text" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                </div>
                            </div>
                            <!--<div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                </div>
                            </div>-->
                        </div>
                        <div class="form-group">
                            <button type="submit" name="post_comment" class="button button-contactForm btn_1 boxed-btn">Send</button>
                        </div>
                    </form>
                </div>
                <?php foreach ($select_cons_db as $item) { ?>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="<?php echo $item['address_icon']; ?>"></i></span>
                        <div class="media-body">
                            <h3>
                                <?php echo $item['address']; ?>
                            </h3>
                            <p>
                                <?php echo $item['add_desc']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="<?php echo $item['phone_icon']; ?>"></i></span>
                        <div class="media-body">
                            <h3>
                                <?php echo $item['phone']; ?>
                            </h3>
                            <p>
                                <?php echo $item['ph_desc']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="<?php echo $item['email_icon']; ?>"></i></span>
                        <div class="media-body">
                            <h3>
                                <?php echo $item['email']; ?>
                            </h3>
                            <p><?php echo $item['e_desc']; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
<!-- ================ contact section end ================= -->
