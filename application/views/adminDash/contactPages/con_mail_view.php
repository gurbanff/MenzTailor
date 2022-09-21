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

                <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                      <a href="<?php echo base_url('admin_con_mail_list'); ?>">
                          <button class="btn btn-dark float-right">Exit</button>
                      </a>
                    <h4 class="card-title">Address</h4>
                    <div class="row">
                      <div class="col-md-6">
                          <?php foreach($select_mail_view as $item) { ?>
                        <address>
                          <p class="font-weight-bold">
                              <img style="width: 50px; height: 50px;" src="<?php echo base_url('public/adminDash/') ?>assets/images/faces-clipart/149071.png" alt="image" />
                          </p>
                        </address>
                      </div>
                      <div class="col-md-6">
                        <address class="text-primary">
                          <p class="font-weight-bold"> Name </p>
                          <p class="mb-2">
                              <?php echo $item['name']; ?>
                          </p>
                          <p class="font-weight-bold"> E-mail </p>
                          <p>
                              <?php echo $item['email']; ?>
                          </p>
                        </address>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">Lead</h4>
                    <p class="lead">
                        <?php echo $item['message']; ?>
                    </p>
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
