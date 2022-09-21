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
                                <a href="<?php echo base_url('admin_clients_offers_add'); ?>" style="float: right">
                                    <button class="btn btn-success">Add</button>
                                </a>
                                <h4 class="card-title">Web Site Home - Sections: Clients Offers</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped text-white">
                                        <thead>
                                            <tr>
                                                <th> Banner 1nd Text </th>
                                                <th> Banner 2nd Text </th>
                                                <th style="text-align: center"></th>
                                                <th></th>
                                                <th class="text-center"> Operation </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach($select_clients_data as $item){ ?>

                                            <tr>
                                                <td class="py-1">
                                                    <?php echo $item['fade_in_up']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $item['fade_in_down']; ?>
                                                </td>
                                                <td class="text-center"></td>
                                                <td></td>
                                                <td class="text-center">

                                                    <a href="<?php echo base_url('admin_clients_offers_upt/'.$item['id']); ?>">
                                                        <button class="btn btn-info">Edit</button>
                                                    </a>

                                                    <a href="<?php echo base_url('admin_clients_offers_del/'.$item['id']); ?>" onclick="return confirm('Do you want to delete it?')">
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

                    <!--Section Two Start-->
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <a href="<?php echo base_url('admin_single_off_add'); ?>" style="float: right">
                                    <button class="btn btn-success">Add</button>
                                </a>
                                <h4 class="card-title">Web Site Home - Sections: Banner</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped text-white">
                                        <thead>
                                        <tr>
                                            <th class="text-center"> Number </th>
                                            <th> Banner 1nd Text </th>
                                            <th> Banner 2nd Text </th>
                                            <th> IMG </th>
                                            <th class="text-center"> Operation </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach($select_single_data as $singitem){ ?>

                                            <tr>
                                                <td class="py-1 text-center">
                                                    <?php echo $singitem['offers_num']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $singitem['offers_cap']; ?>
                                                </td>
                                                <td>
                                                    <?php echo substr($singitem['offers_des'],0,35)."..."; ?>
                                                </td>
                                                <td>
                                                    <?php if($singitem['file']){ ?>
                                                    <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('uploads/clientsoffers/'.$singitem['file']); ?>">
                                                    <?php }else{ ?>
                                                    <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('public/adminDash/assets/images/myimg/image.jpg'); ?>">
                                                    <?php } ?>
                                                </td>
                                                <td class="text-center">

                                                    <a href="<?php echo base_url('admin_single_off_upt/'.$singitem['id']); ?>">
                                                        <button class="btn btn-info">Edit</button>
                                                    </a>

                                                    <a onclick="return confirm('Do you want to delete it?')" href="<?php echo base_url('admin_single_off_del/'.$singitem['id']); ?>">
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
