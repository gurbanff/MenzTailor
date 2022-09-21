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
                            <a href="<?php echo base_url('admin_cont_location_add'); ?>" style="float: right">
                                <button class="btn btn-success">Add</button>
                            </a>
                            <h4 class="card-title">Web Site Contact - Sections: Google Map</h4>
                            <div class="table-responsive">
                                <table class="table table-striped text-white">
                                    <thead>
                                    <tr>
                                        <th> Country Name </th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th class="text-center"> Operation </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach($select_cont_data as $item){ ?>

                                        <tr>
                                            <td class="py-1">
                                                <?php echo $item['country']; ?>
                                            </td>
                                            <td></td>
                                            <td style="text-align: center;"></td>
                                            <td></td>
                                            <td class="text-center">

                                                <a href="<?php echo base_url('admin_cont_location_edit/'.$item['id']); ?>">
                                                    <button class="btn btn-info">Edit</button>
                                                </a>

                                                <a onclick="return confirm('Do you want to delete it?')" href="<?php echo base_url('admin_cont_location_del/'.$item['id']); ?>">
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
