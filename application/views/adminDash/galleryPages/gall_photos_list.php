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
                            <a href="<?php echo base_url('admin_gall_photo_title_add'); ?>" style="float: right">
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

                                    <?php foreach($select_gall_title as $item){ ?>

                                        <tr>
                                            <td class="py-1" style="text-align: left">
                                                <?php echo $item['title']; ?>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">

                                                <a href="<?php echo base_url('admin_gall_photo_title_edit/'.$item['id']); ?>">
                                                    <button class="btn btn-info">Edit</button>
                                                </a>

                                                <a onclick="return confirm('Do you want to delete it?')" href="<?php echo base_url('admin_gall_photo_title_del/'.$item['id']); ?>">
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
                            <a href="<?php echo base_url('admin_gall_photos_add'); ?>" style="float: right">
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

                                    <?php foreach($select_gall_photos as $file){ ?>

                                        <tr>
                                            <td class="py-1">
                                                <?php if($file['gall_file']){ ?>
                                                    <img style="object-fit: cover; width: 50px; height: 50px;" src="<?php echo base_url('uploads/gallphotos/'.$file['gall_file']); ?>">
                                                <?php }else{ ?>
                                                    <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('public/adminDash/assets/images/myimg/image.jpg'); ?>">
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <?php if(strlen($file['gall_file']) >= 12){ ?>
                                                    <?php echo substr($file['gall_file'],0,12)."..."; ?>
                                                <?php }else{
                                                    echo $file['gall_file'];
                                                } ?>
                                                <?php /*echo $file['gall_file']; */?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?php echo $file['file_ext']; ?>
                                            </td>
                                            <td>

                                            </td>
                                            <td class="text-center">

                                                <a href="<?php echo base_url('admin_gall_photos_edit/'.$file['id']); ?>">
                                                    <button class="btn btn-info">Edit</button>
                                                </a>

                                                <a onclick="return confirm('Do you want to delete it?')" href="<?php echo base_url('admin_gall_photos_del/'.$file['id']); ?>">
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
