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
                            <form action="<?php echo base_url('admin_history_edit_act/'.$select_history_upt['id']); ?>" method="post" class="forms-sample" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Title</label>
                                    <input type="text" name="hstitle" class="form-control" id="exampleInputUsername1" value="<?php echo $select_history_upt['hs_title']; ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">2nd Title</label>
                                    <input type="text" name="hstwotil" class="form-control" id="exampleInputEmail1" value="<?php echo $select_history_upt['hs_two_til']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Textarea</label>
                                    <textarea name="hsdesc" class="form-control" id="exampleTextarea1" rows="4"><?php echo $select_history_upt['hs_desc']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Button Text</label>
                                    <input type="text" name="hsbutton" class="form-control" id="exampleInputEmail1" value="<?php echo $select_history_upt['hs_button']; ?>" required>
                                </div>

                                <div class="form-group" style="float: left; margin-right: 50px;">
                                    <div class="input-group col-xs-12">
                                        <label for="click">
                                            <i class=" mdi mdi-folder-image iconDevil"></i>
                                            <input id="click" name="user_file" type="file" class="form-control file-upload-info" hidden>
                                        </label>
                                    </div>
                                </div>
                                <?php if($select_history_upt['user_file']){ ?>
                                    <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('uploads/areahistory/'.$select_history_upt['user_file']); ?>">
                                <?php }else{ ?>
                                    <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('uploads/noimage.jpg');?>" alt="Not Found">
                                <?php } ?>
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


