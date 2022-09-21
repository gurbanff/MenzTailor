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
                            <a href="<?php echo base_url('admin_client_feed_add'); ?>" style="float: right">
                                <button class="btn btn-success">Add</button>
                            </a>
                            <h4 class="card-title">Web Site Home - Sections: Client Feedback</h4>
                            <div class="table-responsive">
                                <table class="table table-striped text-white">
                                    <thead>
                                    <tr>
                                        <th> Title </th>
                                        <th> Title 2nd </th>
                                        <th></th>
                                        <th></th>
                                        <th class="text-center"> Operation </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach($select_feed_data as $item){ ?>

                                        <tr>
                                            <td class="py-1">
                                                <?php echo $item['h_one_title']; ?>
                                            </td>
                                            <td>
                                                <?php echo $item['h_two_title']; ?>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">

                                                <a href="<?php echo base_url('admin_client_feed_edit/'.$item['id']); ?>">
                                                    <button class="btn btn-info">Edit</button>
                                                </a>

                                                <a onclick="return confirm('Do you want to delete it?')" href="<?php echo base_url('admin_client_feed_del/'.$item['id']); ?>">
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
                            <a href="<?php echo base_url('admin_c_feed_img_add'); ?>" style="float: right">
                                <button class="btn btn-success">Add</button>
                            </a>
                            <h4 class="card-title">Web Site Home - Sections: Client Feedback Image</h4>
                            <div class="table-responsive">
                                <table class="table table-striped text-white">
                                    <thead>
                                    <tr>
                                        <th> IMG </th>
                                        <th> File Name </th>
                                        <th style="text-align: center"> File Ext </th>
                                        <th></th>
                                        <th class="text-center"> Operation </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach($select_feed_img as $file){ ?>

                                        <tr>
                                            <td class="py-1">
                                                <?php if($file['file']){ ?>
                                                    <img style="object-fit: cover; width: 50px; height: 50px;" src="<?php echo base_url('uploads/clientfeedback/'.$file['file']); ?>">
                                                <?php }else{ ?>
                                                    <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('public/adminDash/assets/images/myimg/image.jpg'); ?>">
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <?php echo $file['file']; ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?php echo $file['file_ext']; ?>
                                            </td>
                                            <td>

                                            </td>
                                            <td class="text-center">

                                                <a href="<?php echo base_url('admin_c_feed_img_edit/'.$file['id']); ?>">
                                                    <button class="btn btn-info">Edit</button>
                                                </a>

                                                <a onclick="return confirm('Do you want to delete it?')" href="<?php echo base_url('admin_c_feed_img_del/'.$file['id']); ?>">
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
