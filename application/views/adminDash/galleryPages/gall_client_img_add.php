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
                                <a href="<?php echo base_url('admin_gall_client_list'); ?>">
                                    <button class="btn btn-dark float-right">Exit</button>
                                </a>
                                <h4 class="card-title">Gallery Client Image</h4>
                                <form action="<?php echo base_url('admin_gall_client_img_add_act'); ?>" method="post" class="forms-sample" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <div class="input-group col-xs-12">
                                            <label for="click">
                                                <i class="mdi mdi-image-area text-white" style="font-size: 60px;"></i>
                                                <input type="file" name="gall_file" id="click" hidden>
                                            </label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success mr-2" style="float: right">Add</button>

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