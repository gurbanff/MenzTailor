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
                            <a href="<?php echo base_url('admin_history_add'); ?>" style="float: right">
                                <button class="btn btn-success">Add</button>
                            </a>
                            <h4 class="card-title">Web Site Home - Sections: History</h4>
                            <div class="table-responsive">
                                <table class="table table-striped text-white">
                                    <thead>
                                    <tr>
                                        <th class="text-center"> Title </th>
                                        <th class="text-center"> 2nd Title </th>
                                        <th class="text-left"> Description </th>
                                        <th class="text-left"> Button Text </th>
                                        <th class="text-center"> Operation </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach($select_history_data as $item){ ?>

                                        <tr>
                                            <td class="py-1 text-center">
                                                <?php echo $item['hs_title']; ?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo $item['hs_two_til']; ?>
                                            </td>
                                            <td>
                                                <?php echo substr($item['hs_desc'],0,35)."..."; ?>
                                            </td>
                                            <td class="text-left">
                                                <?php echo $item['hs_button']; ?>
                                            </td>
                                            <td class="text-center">

                                                <a href="<?php echo base_url('admin_history_edit/'.$item['id']); ?>">
                                                    <button class="btn btn-info">Edit</button>
                                                </a>

                                                <a onclick="return confirm('Do you want to delete it?')" href="<?php echo base_url('admin_history_del/'.$item['id']); ?>">
                                                    <button class="btn btn-danger">Del</button>
                                                </a>

                                            </td>
                                        </tr>

                                    </tbody>
                                    <thead>
                                    <tr>
                                        <th class="text-center"> IMG </th>
                                        <th class="text-center"> File Name </th>
                                        <th class="text-left"></th>
                                        <th class="text-left"> File Path </th>
                                        <th class="text-center"></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td class="py-1 text-center">
                                            <?php if($item['user_file']){ ?>

                                            <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('uploads/areahistory/'.$item['user_file']); ?>">
                                            <?php }else{ ?>
                                            <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('public/adminDash/assets/images/myimg/image.jpg'); ?>">

                                            <?php } ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $item['user_file']; ?>
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <?php echo $item['file_ext']; ?>
                                        </td>
                                        <td class="text-right">

<!--                                            <a href="--><?php ////echo base_url(''); ?><!--">-->
<!--                                                <button class="btn btn-info">Edit</button>-->
<!--                                            </a>-->

<!--                                            <a onclick="return confirm('Do you want to delete it?')" href="--><?php ////echo base_url('admin_home_delete/'.$banitem['ban_id']); ?><!--">-->
<!--                                                <button class="btn btn-danger">Del</button>-->
<!--                                            </a>-->

                                        </td>
                                    </tr>

                                    <?php } ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

<!--                <div class="col-lg-6 grid-margin stretch-card">-->
<!--                  <div class="card">-->
<!--                    <div class="card-body">-->
<!--                     <h4 class="card-title">Web Site Home - Sections: History</h4>-->
<!--                        <div class="table-responsive">-->
<!--                      <table class="table">-->
<!--                        <thead>-->
<!--                          <tr>-->
<!--                            <th>Title</th>-->
<!--                            <th></th>-->
<!--                            <th></th>-->
<!--                            <th class="text-center">Operation</th>-->
<!--                          </tr>-->
<!--                        </thead>-->
<!--                        <tbody>-->
<!--                          <tr>-->
<!--                            <td class="text-white">History</td>-->
<!--                            <td></td>-->
<!--                            <td></td>-->
<!--                            <td class="text-center">-->
<!--                                <a href="--><?php ////echo base_url(''); ?><!--">-->
<!--                                    <button class="btn btn-info">Edit</button>-->
<!--                                </a>-->
<!--                            </td>-->
<!--                          </tr>-->
<!---->
<!--                        </tbody>-->
<!--                      </table>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->


            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
</div>
<?php $this->load->view('adminDash/includes/footerstyle'); ?>
