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
                            <a href="<?php echo base_url('admin_history_list'); ?>">
                                <button class="btn btn-dark float-right">Exit</button>
                            </a>
                            <h4 class="card-title">Banner Section</h4>
                            <form action="<?php echo base_url('admin_history_add_act'); ?>" method="post" class="forms-sample" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Title</label>
                                    <input type="text" name="hstitle" class="form-control" id="exampleInputUsername1" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">2nd Title</label>
                                    <input type="text" name="hstwotil" class="form-control" id="exampleInputEmail1" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Textarea</label>
                                    <textarea name="hsdesc" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Button Text</label>
                                    <input type="text" name="hsbutton" class="form-control" id="exampleInputEmail1" required>
                                </div>

                                <div class="form-group">
                                    <div class="input-group col-xs-12">
                                        <label for="click">
                                            <i class=" mdi mdi-folder-image iconDevil"></i>
                                            <input id="click" name="user_file" type="file" class="form-control file-upload-info" hidden>
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


