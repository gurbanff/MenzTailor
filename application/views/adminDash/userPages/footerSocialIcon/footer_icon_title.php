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
                                    <h4 class="card-title">Social Section: Title</h4>
                                    <form action="<?php echo base_url('admin_footer_icon_title_act/'.$select_icon_title_upt['id']); ?>" method="post" class="forms-sample" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Links Title</label>
                                            <input type="text" name="title" class="form-control" id="exampleInputUsername1" value="<?php echo $select_icon_title_upt['title']; ?>" required>
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
