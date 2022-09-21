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
                            <a href="<?php echo base_url('admin_con_mail_add'); ?>" style="float: right">
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

                                    <?php foreach($select_conms_data as $item){ ?>

                                        <tr>
                                            <td class="py-1" style="text-align: left">
                                                <?php echo $item['title']; ?>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">

                                                <a href="<?php echo base_url('admin_con_mail_edit/'.$item['id']); ?>">
                                                    <button class="btn btn-info">Edit</button>
                                                </a>

                                                <a onclick="return confirm('Do you want to delete it?')" href="<?php echo base_url('admin_con_mail_del/'.$item['id']); ?>">
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

                    <!-- Send Message -->
                <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Email Inbox</h4>
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th> User </th>
                              <th> Name </th>
                              <th> Email </th>
                              <th> Message </th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                             <?php foreach($select_contit_data as $item){ ?>
                                <tr>
                                  <td class="py-1">
                                    <img src="<?php echo base_url('public/adminDash/') ?>assets/images/faces-clipart/149071.png" alt="image" />
                                  </td>
                                  <td>
                                      <?php echo $item['name']; ?>
                                  </td>
                                  <td>
                                      <?php echo $item['email']; ?>
                                  </td>
                                  <td>
                                      <?php echo substr($item['message'],0,30)."..."; ?>
                                  </td>
                                  <td>

                                      <a href="<?php echo base_url('admin_con_mail_view/'.$item['id']); ?>">
                                          <button class="btn btn-success">View</button>
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
