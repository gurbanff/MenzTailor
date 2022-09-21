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
                    <style>
                        .iconDevil
                        {
                            display: inline-block;
                            font-size: 40px;
                            width: 10px;
                            text-align: left;
                            color: #0090e7;
                        }
                    </style>
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <a href="<?php echo base_url('admin_clients_offers_list'); ?>">
                                    <button class="btn btn-dark float-right">Exit</button>
                                </a>
                                <h4 class="card-title">Banner Section</h4>
                                <form action="<?php echo base_url('admin_single_off_add_act'); ?>" method="post" class="forms-sample" enctype="multipart/form-data">
                                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 form-group">
                                        <label for="number">Number</label>
                                        <input type="text" maxlength="1" name="offersnum" class="form-control text-center inp" id="number" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Banner Item1</label>
                                        <input type="text" name="offerscap" class="form-control" id="exampleInputUsername1" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Banner Item2</label>
                                        <input type="text" name="offersdes" class="form-control" id="exampleInputEmail1" required>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group col-xs-12">
                                            <label for="click">
                                                <i class=" mdi mdi-folder-image iconDevil"></i>
                                                <input id="click" name="user_one_file" type="file" class="form-control file-upload-info" hidden>
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

<style>
@media screen and (max-width: 1200px) {

    .inp
    {
        width: 50px;
    }
    }
</style>
<?php $this->load->view('adminDash/includes/footerstyle'); ?>


