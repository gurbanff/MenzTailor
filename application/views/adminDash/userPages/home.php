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




                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <a href="<?php echo base_url('Home_Page_Edit'); ?>" style="float: right">
                                    <button class="btn btn-success">Add</button>
                                </a>
                                <h4 class="card-title">Web Site Home - Sections: Banner</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped text-white">
                                        <thead>
                                        <tr>
                                            <th> Banner 1nd Text </th>
                                            <th> Banner 2nd Text </th>
                                            <th> IMG </th>
                                            <th></th>
                                            <th class="text-center"> Operation </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach($select_banner_data as $banitem){ ?>

                                        <tr>
                                            <td class="py-1">
                                                <?php echo $banitem['ban_hero_caption']; ?>
                                            </td>
                                            <td>
                                                <?php echo $banitem['ban_span']; ?>
                                            </td>
                                            <td>
                                                <?php if($banitem['ban_file']){ ?>
                                                    <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('uploads/homebannerimg/banner1nd/'.$banitem['ban_file']); ?>">
                                                <?php }else{ ?>
                                                    <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('public/adminDash/assets/images/myimg/image.jpg'); ?>">
                                                <?php } ?>
                                            </td>
                                            <td></td>
                                            <td class="text-center">

                                                <a href="<?php echo base_url('HomeUpdate/'.$banitem['ban_id']); ?>">
                                                    <button class="btn btn-info">Edit</button>
                                                </a>

                                                <a onclick="return confirm('Do you want to delete it?')" href="<?php echo base_url('admin_home_delete/'.$banitem['ban_id']); ?>">
                                                    <button class="btn btn-danger">Del</button>
                                                </a>

                                            </td>
                                        </tr>

                                        <?php } ?>

                                        </tbody>
                                    </table>
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
