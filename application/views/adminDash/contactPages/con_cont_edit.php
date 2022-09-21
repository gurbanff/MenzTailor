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
                            <a href="<?php echo base_url('admin_con_cont_list'); ?>">
                                <button class="btn btn-dark float-right">Exit</button>
                            </a>
                            <h4 class="card-title">Banner Section</h4>
                            <form action="<?php echo base_url('admin_con_cont_edit_act/'.$select_cons_upt['id']); ?>" method="post" class="forms-sample" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Address Icon</label>
                                    <input type="text" name="address_icon" class="form-control" id="exampleInputUsername1" value="<?php echo $select_cons_upt['address_icon']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Address</label>
                                    <input type="text" name="address" class="form-control" id="exampleInputUsername1" value="<?php echo $select_cons_upt['address']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address Description</label>
                                    <input type="text" name="add_desc" class="form-control" id="exampleInputEmail1" value="<?php echo $select_cons_upt['add_desc']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Phone Icon</label>
                                    <input type="text" name="phone_icon" class="form-control" id="exampleInputUsername1" value="<?php echo $select_cons_upt['phone_icon']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone</label>
                                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" value="<?php echo $select_cons_upt['phone']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Description</label>
                                    <input type="text" name="ph_desc" class="form-control" id="exampleInputEmail1" value="<?php echo $select_cons_upt['ph_desc']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Email Icon</label>
                                    <input type="text" name="email_icon" class="form-control" id="exampleInputUsername1" value="<?php echo $select_cons_upt['email_icon']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $select_cons_upt['email']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email Description</label>
                                    <input type="text" name="e_desc" class="form-control" id="exampleInputEmail1" value="<?php echo $select_cons_upt['e_desc']; ?>" required>
                                </div>

                                <br>
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
