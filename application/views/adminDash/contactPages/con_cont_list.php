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
                            <h4 class="card-title">Web Site Contact - Sections: Address</h4>
                            <div class="table-responsive">
                                <table class="table table-striped text-white">
                                    <thead>
                                    <tr>
                                        <th class="text-center"> Address </th>
                                        <th class="text-center"> Phone Number </th>
                                        <th class="text-left"> E-mail </th>
                                        <th class="text-left"></th>
                                        <th class="text-center"> Operation </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach($select_cons_data as $item){ ?>

                                        <tr>
                                            <td class="py-1 text-center">
                                                <?php echo $item['address']; ?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo $item['phone']; ?>
                                            </td>
                                            <td>
                                                <?php echo $item['email']; ?>
                                            </td>
                                            <td class="text-left"></td>
                                            <td class="text-center">

                                                <a href="<?php echo base_url('admin_con_cont_edit/'.$item['id']); ?>">
                                                    <button class="btn btn-info">Edit</button>
                                                </a>

                                            </td>
                                        </tr>

                                    </tbody>
                                    <thead>
                                    <tr>
                                        <th class="text-center"> Description </th>
                                        <th class="text-center"> Description </th>
                                        <th class="text-left"> Description </th>
                                        <th class="text-left"></th>
                                        <th class="text-center"></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td class="py-1 text-center">
                                            <?php echo $item['add_desc']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $item['ph_desc']; ?>
                                        </td>
                                        <td>
                                            <?php echo $item['e_desc']; ?>
                                        </td>
                                        <td></td>
                                        <td class="text-right"></td>
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
