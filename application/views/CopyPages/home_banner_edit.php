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
                                <h4 class="card-title">Banner 2nd Section</h4>
                                <form action="<?php echo base_url('Home_Banner_Edit_Act'); ?>" method="post" class="forms-sample">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Banner 2nd Item1</label>
                                        <input type="text" name="hero_caption" class="form-control" id="exampleInputUsername1" value="<?php echo $select_ban_hero['hero_caption']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Banner 2nd Item2</label>
                                        <input type="text" name="hero_span" class="form-control" id="exampleInputEmail1" value="<?php echo $select_ban_hero['hero_span']; ?>">
                                    </div>

                                    <a href="<?php echo base_url('Home_Edit'); ?>">
                                        <button class="btn btn-dark float-right">Exit</button>
                                    </a>
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