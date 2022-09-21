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
                <!--Section Two Start-->
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <a href="<?php echo base_url('admin_testimonial_add_title'); ?>" style="float: right">
                                <button class="btn btn-success">Add</button>
                            </a>
                            <h4 class="card-title">Web Site Home - Sections: Testimonial</h4>
                            <div class="table-responsive">
                                <table class="table table-striped text-white">
                                    <thead>
                                    <tr>
                                        <th style="text-align: left"> Title </th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th style="text-align: center"> Operation </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach($select_title_data as $item){ ?>

                                        <tr>
                                            <td class="py-1" style="text-align: left">
                                                <?php echo $item['title']; ?>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">

                                                <a href="<?php echo base_url('admin_testimonial_edit_1/'.$item['id']); ?>">
                                                    <button class="btn btn-info">Edit</button>
                                                </a>

                                                <a onclick="return confirm('Do you want to delete it?')" href="<?php echo base_url('admin_testi_del/'.$item['id']); ?>">
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

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <a href="<?php echo base_url('admin_testimonial_add'); ?>" style="float: right">
                                <button class="btn btn-success">Add</button>
                            </a>
                            <h4 class="card-title">Web Site Home - Sections: Testimonial</h4>
                            <div class="table-responsive">
                                <table class="table table-striped text-white">
                                    <thead>
                                    <tr>
                                        <th style="text-align: left"> Description </th>
                                        <th> IMG </th>
                                        <th></th>
                                        <th></th>
                                        <th class="text-center"> Operation </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach($select_testi_data as $item){ ?>

                                        <tr>
                                            <td>
                                                <?php echo substr($item['description'],0,35)."..."; ?>
                                            </td>
                                            <td>
                                                <?php if($item['user_file']){ ?>
                                                    <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('uploads/testimonial_img/'.$item['user_file']); ?>">
                                                <?php }else{ ?>
                                                    <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('public/adminDash/assets/images/myimg/image.jpg'); ?>">
                                                <?php } ?>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">

                                                <a href="<?php echo base_url('admin_testimonial_edit/'.$item['id']); ?>">
                                                    <button class="btn btn-info">Edit</button>
                                                </a>

                                                <a onclick="return confirm('Do you want to delete it?')" href="<?php echo base_url('admin_testimonial_del/'.$item['id']); ?>">
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
