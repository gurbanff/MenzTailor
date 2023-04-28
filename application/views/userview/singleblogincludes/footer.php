<footer>
    <div class="footer-area fix">
        <!-- Footer Caption -->
        <div class="footer-caption wow fadeInRight" data-wow-delay=".6s">
            <div class="footer-tittle">
                <?php foreach($select_footer_db as $item){ ?>
                <h3>
                    <?php echo $item['title'] ?>
                </h3>
            <?php } ?>
            </div>
            <div class="footer-menu ">
                <div class="single-menu">
                    <div class="single-menu1">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <?php foreach($foo_contact_db as $item){ ?>
                                <h4>
                                    <?php echo $item['title']; ?>
                                </h4>
                                <div class="footer-pera">
                                    <p>
                                        <?php echo $item['desc']; ?>
                                    </p>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="single-menu2">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <?php foreach($select_link_s_db as $item){ ?>
                                <h4>
                                    <?php echo $item['title']; ?>
                                </h4>
                                <?php } ?>
                                <?php foreach($select_links_db as $item){ ?>
                                <ul>
                                    <li><a href="<?php echo $item['home_link']; ?>">
                                        <?php echo $item['home']; ?>
                                    </a></li>
                                    <li><a href="<?php echo $item['gallery_link']; ?>">
                                        <?php echo $item['gallery']; ?>
                                    </a></li>
                                    <li><a href="<?php echo $item['blog_link']; ?>">
                                        <?php echo $item['blog']; ?>
                                    </a></li>
                                    <li><a href="<?php echo $item['contact_link']; ?>">
                                        <?php echo $item['contact']; ?>
                                    </a></li>
                                </ul>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="single-menu3">
                        <div class="single-footer-caption">
                            <div class="footer-tittle">
                                <?php foreach($select_icon_title_db as $item){ ?>
                                <h4>
                                    <?php echo $item['title']; ?>
                                </h4>
                                <?php } ?>
                                <!-- Social -->
                                <div class="footer-social">
                                    <?php foreach($select_icon_db as $item){ ?>
                                    <a href="<?php echo $item['icon_https']; ?>">
                                        <i class="<?php echo $item['icon']; ?>"></i>
                                    </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright pt-40">
                <p><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="<?php echo base_url(); ?>">Lucifer</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></p>
            </div>
        </div>
    </div>
</footer>
