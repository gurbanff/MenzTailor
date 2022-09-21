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
                            <a href="<?php echo base_url('admin_con_mail_list'); ?>">
                                <button class="btn btn-dark float-right">Exit</button>
                            </a>
                            <h4 class="card-title">Message Section: Title</h4>
                            <form action="<?php echo base_url('admin_con_mail_add_act'); ?>" method="post" class="forms-sample">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputUsername1" required>
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
