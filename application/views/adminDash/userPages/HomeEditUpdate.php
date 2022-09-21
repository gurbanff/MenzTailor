<?php $this->load->view('adminDash/includes/bodyUp'); ?>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <?php $this->load->view('adminDash/includes/leftmenu'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <?php $this->load->view('adminDash/includes/nav'); ?>
            <!-- partial -->
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
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <a href="<?php echo base_url('Home_Edit'); ?>">
                                    <button class="btn btn-dark float-right">Exit</button>
                                </a>
                                <h4 class="card-title">Banner Section</h4>
                                <form action="<?php echo base_url('EditUpdate/'.$select_single_news['ban_id']); ?>" method="post" class="forms-sample" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Banner Item1</label>
                                        <input type="text" name="ban_hero_caption" class="form-control" id="exampleInputUsername1" value="<?php echo $select_single_news['ban_hero_caption']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Banner Item2</label>
                                        <input type="text" name="ban_span" class="form-control" id="exampleInputEmail1" value="<?php echo $select_single_news['ban_span']; ?>" required>
                                    </div>
                                    <div class="form-group" style="float: left; margin-right: 50px;">
<!--                                        <label for="click"></label>-->
<!--                                        <input type="file" name="img" class="file-upload-default">-->
                                        <div class="input-group col-xs-12">
                                            <label for="click">
                                                <i class=" mdi mdi-folder-image iconDevil"></i>
                                                <input id="click" name="user_file" type="file" class="form-control file-upload-info" hidden>
                                            </label>
                                        </div>
                                    </div>

                                    <?php foreach ($select_banner_data as $getFile) { ?>
                                        <?php if($getFile['ban_file']){ ?>
                                            <img style="float: left;object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('uploads/homebannerimg/banner1nd/'.$getFile['ban_file']); ?>">
                                        <?php }else{ ?>
                                            <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('public/adminDash/assets/images/myimg/image.jpg'); ?>">
                                        <?php } ?>
                                    <?php } ?>

                                    <button type="submit" class="btn btn-success mr-2" style="float: right; margin-top: 45px;">Update</button>
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