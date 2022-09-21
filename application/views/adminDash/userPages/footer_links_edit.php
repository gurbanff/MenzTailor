<?php $this->load->view('adminDash/includes/bodyUp'); ?>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <?php $this->load->view('adminDash/includes/leftmenu'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <?php $this->load->view('adminDash/includes/nav'); ?>
            <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <a href="<?php echo base_url('Dashboard'); ?>">
                                        <button class="btn btn-dark float-right">Exit</button>
                                    </a>
                                    <h4 class="card-title">Contact Section</h4>
                                    <form action="<?php echo base_url('admin_footer_links_edit_act/'.$select_links_upt['id']); ?>" method="post" class="forms-sample" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Links Title</label>
                                            <input type="text" name="home" class="form-control" id="exampleInputUsername1" value="<?php echo $select_links_upt['home'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Https</label>
                                            <textarea name="home_link" class="form-control" id="exampleTextarea1" rows="4"><?php echo $select_links_upt['home_link'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Links Title</label>
                                            <input type="text" name="gallery" class="form-control" id="exampleInputUsername1" value="<?php echo $select_links_upt['gallery'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Https</label>
                                            <textarea name="gallery_link" class="form-control" id="exampleTextarea1" rows="4"><?php echo $select_links_upt['gallery_link'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Links Title</label>
                                            <input type="text" name="blog" class="form-control" id="exampleInputUsername1" value="<?php echo $select_links_upt['blog'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Https</label>
                                            <textarea name="blog_link" class="form-control" id="exampleTextarea1" rows="4"><?php echo $select_links_upt['blog_link'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Links Title</label>
                                            <input type="text" name="contact" class="form-control" id="exampleInputUsername1" value="<?php echo $select_links_upt['contact'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Https</label>
                                            <textarea name="contact_link" class="form-control" id="exampleTextarea1" rows="4"><?php echo $select_links_upt['contact_link'] ?></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-success mr-2" style="float: right">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- main-panel ends -->
                </div>
            <!-- page-body-wrapper ends -->
        </div>
    </div>
<?php $this->load->view('adminDash/includes/footerstyle'); ?>
