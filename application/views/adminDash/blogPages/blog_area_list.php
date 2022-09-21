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
                            <a href="<?php echo base_url('admin_blog_area_add'); ?>" style="float: right">
                                <button class="btn btn-success">Add</button>
                            </a>
                            <h4 class="card-title">Web Site Home - Sections: History</h4>
                            <div class="table-responsive">
                                <table class="table table-striped text-white">
                                    <thead>
                                    <tr>
                                        <th class="text-center"> Title </th>
                                        <th class="text-center"> 2nd Title </th>
                                        <th class="text-left"> Blog Info </th>
                                        <th class="text-left">  Blog Info </th>
                                        <th class="text-center"> Operation </th>
                                    </tr>
                                    </thead>
                                    <?php foreach($select_blog_data as $item){ ?>
                                    <tbody>

                                    <tr>
                                        <td class="py-1 text-center">
                                            <?php echo substr($item['title'],0,25)."..."; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo substr($item['description'],0,25)."..."; ?>
                                        </td>
                                        <td>
                                            <?php echo substr($item['blog_user'],0,15).""; ?>
                                        </td>
                                        <td class="text-left">
                                            <?php echo substr($item['blog_comment'],0,15).""; ?>
                                        </td>
                                        <td class="text-center">

                                            <a href="<?php echo base_url('admin_blog_area_edit/'.$item['id']); ?>">
                                                <button class="btn btn-info">Edit</button>
                                            </a>

                                            <a onclick="return confirm('Do you want to delete it?')" href="<?php echo base_url('admin_blog_area_del/'.$item['id']); ?>">
                                                <button class="btn btn-danger">Del</button>
                                            </a>

                                        </td>
                                    </tr>

                                    </tbody>
                                    <thead>
                                    <tr>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Monday</th>
                                        <th class="text-left"> IMG </th>
                                        <th class="text-left"></th>
                                        <th class="text-center"></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td class="py-1 text-center">
                                            <?php echo $item['s_date']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $item['s_monday']; ?>
                                        </td>
                                        <td>
                                            <?php if($item['blog_file']){ ?>

                                            <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('uploads/blogarea/'.$item['blog_file']); ?>">
                                            <?php }else{ ?>
                                            <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('public/adminDash/assets/images/myimg/image.jpg'); ?>">

                                            <?php } ?>
                                        </td>
                                        <td></td>
                                        <td class="text-right"></td>
                                    </tr>


                                    </tbody>
                                    <?php } ?>
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
