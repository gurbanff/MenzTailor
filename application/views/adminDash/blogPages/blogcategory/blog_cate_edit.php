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
                    .arrow
                    {
                        display: block;
                        float: left;
                        line-height: 2;
                    }
                </style>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <a href="<?php echo base_url('admin_blog_category'); ?>">
                                <button class="btn btn-dark float-right">Exit</button>
                            </a>
                            <h4 class="card-title">Banner Section</h4>
                            <form action="<?php echo base_url('admin_blog_category_edit_act/'.$select_blog_upt['id']); ?>" method="post" class="forms-sample" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputUsername1" value="<?php echo $select_blog_upt['title']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Description</label>
                                    <textarea name="description" class="form-control" id="exampleTextarea1" rows="4"><?php echo $select_blog_upt['description']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-primary text-white">Link</span>
                                        </div>
                                        <textarea name="link" class="form-control" id="exampleTextarea1" rows="3"><?php echo $select_blog_upt['linked']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-primary text-white">Icon</span>
                                        </div>
                                        <input name="icon" type="text" class="form-control" value="<?php echo $select_blog_upt['icon']; ?>" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success mr-2" style="float: right">Update</button>
                                <br><br>
                            </form>
                            <h6 class="arrow">Select Icon</h6>
                            <i class="mdi mdi-arrow-right" style="margin-left: 5px; line-height: 2; float: left;"></i>
                            <div class="input-group-prepend" style="display: block; margin-left: 50px;">
                                <a href="<?php echo base_url('admin_blog_category_icon'); ?>" target="_blank">
                                    <button type="submit" class="btn btn-primary" style="float: left; margin-left: 10px;">Icon</button>
                                </a>
                            </div>
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


