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
                            <a href="<?php echo base_url('admin_visit_tailor_add'); ?>" style="float: right">
                                <button class="btn btn-success">Add</button>
                            </a>
                            <h4 class="card-title">Web Site Home - Sections: Visit Tailor</h4>
                            <div class="table-responsive">
                                <table class="table table-striped text-white">
                                    <thead>
                                    <tr>
                                        <th> Banner 1nd Text </th>
                                        <th> Banner 2nd Text </th>
                                        <th style="text-align: center"></th>
                                        <th></th>
<!--                                        <th class="text-center"> Operation </th>-->
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach($select_visit_data as $item){ ?>

                                        <tr>
                                            <td class="py-1">
                                                <?php echo $item['title']; ?>
                                            </td>
                                            <td>
                                                <?php echo $item['ndtitle']; ?>
                                            </td>
                                            <td class="text-center"></td>
                                            <td></td>
                                            <td class="text-center">

                                                <a href="<?php echo base_url('admin_visit_tailor_edit/'.$item['id']); ?>">
                                                    <button class="btn btn-info">Edit</button>
                                                </a>

                                                <a href="<?php echo base_url('admin_visit_tailor_del/'.$item['id']); ?>" onclick="return confirm('Do you want to delete it?')">
                                                    <button class="btn btn-danger">Del</button>
                                                </a>

                                            </td>
                                        </tr>

                                    <tr>
                                        <td class="py-1">
                                            <?php echo $item['loca']; ?>
                                        </td>
                                        <td>
                                            <?php echo $item['email']; ?>
                                        </td>
                                        <td class="text-center">

                                        </td>
                                        <td>

                                        </td>
                                        <td class="text-center"></td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: left">
                                            <?php echo $item['desc']; ?>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: left">
                                            <?php echo $item['date']; ?>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: left">
                                            <?php echo $item['nddate']; ?>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Icons -->

                <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                        <a href="<?php echo base_url('admin_visit_tailor_icon_add'); ?>" style="float: right">
                            <button class="btn btn-success">Add</button>
                        </a>
                      <h4 class="card-title">Visit Tailor Section: Icons</h4>
                      <div class="table-responsive">
                        <table class="table table-dark">
                          <thead>
                            <tr>
                              <th> Links </th>
                              <th></th>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php foreach($select_visit_icon_db as $item){ ?>
                            <tr>
                              <td style="color: #fff; font-size: 14px;">
                                  <?php echo $item['title']; ?>
                              </td>
                              <td style="color: #fff; font-size: 14px;">
                                  <?php echo substr($item['icon_https'],0,50)."..."; ?>
                              </td>
                              <td style="color: #fff; font-size: 14px;"></td>
                              <td style="color: #fff; font-size: 14px;"></td>
                              <td style="text-align: right;">
                                  <a href="<?php echo base_url('admin_visit_tailor_icon_edit/'.$item['id']); ?>">
                                      <button class="btn btn-info">Edit</button>
                                  </a>
                                  <a onclick="return confirm('Do you want to delete it?')" href="<?php echo base_url('admin_visit_tailor_icon_del/'.$item['id']); ?>">
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
                            <a href="<?php echo base_url('admin_visit_offers_add'); ?>" style="float: right">
                                <button class="btn btn-success">Add</button>
                            </a>
                            <h4 class="card-title">Web Site Home - Sections: Visit Tailor</h4>
                            <div class="table-responsive">
                                <table class="table table-striped text-white">
                                    <thead>
                                    <tr>
                                        <th> Title </th>
                                        <th> Title 2nd </th>
                                        <th style="text-align: center"> IMG </th>
                                        <th></th>
                                        <th class="text-center"> Operation </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach($select_visit_item as $and){ ?>

                                        <tr>
                                            <td class="py-1">
                                                <?php echo $and['hpercent']; ?>
                                            </td>
                                            <td>
                                                <?php echo $and['visit_button']; ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?php if($and['user_file']){ ?>
                                                    <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('uploads/visitimg/'.$and['user_file']); ?>">
                                                <?php }else{ ?>
                                                    <img style="object-fit: cover; width: 40px; height: 40px;" src="https://thumbs.dreamstime.com/b/no-image-available-icon-flat-vector-no-image-available-icon-flat-vector-illustration-132482953.jpg">
                                                <?php } ?>
                                            </td>
                                            <td></td>
                                            <td class="text-center">

                                                <a href="<?php echo base_url('admin_visit_offers_edit/'.$and['id']); ?>">
                                                    <button class="btn btn-info">Edit</button>
                                                </a>

                                                <a onclick="return confirm('Do you want to delete it?')" href="<?php echo base_url('admin_visit_offers_del/'.$and['id']); ?>">
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
