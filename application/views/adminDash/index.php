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

                <div class="col-lg-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Nav Section</h4>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th></th>
                              <th></th>
                              <th>Nav</th>
                              <th>Section</th>
                            </tr>
                          </thead>
                          <tbody>

                            <?php foreach($select_all_news as $item){ ?>
                                <tr>
                                    <td class="py-1" style="text-align: left; color: #fff;">
                                        <?php echo $item['nav_home']; ?>
                                    </td>
                                    <td class="py-1" style="text-align: left; color: #fff;">
                                        <?php echo $item['nav_gallery']; ?>
                                    </td>
                                    <td class="py-1" style="text-align: left; color: #fff;">
                                        <?php echo $item['nav_blog']; ?>
                                    </td>
                                    <td class="py-1" style="text-align: left; color: #fff;">
                                        <?php echo $item['nav_contact']; ?>
                                    </td>
                                    <td class="py-1" style="text-align: left; color: #fff;">
                                        <?php echo $item['nav_visitus']; ?>
                                    </td>
                                    <td class="text-center">

                                        <a href="<?php echo base_url('admin_news_edit/'.$item['nav_id']); ?>">
                                            <button class="btn btn-info">Edit</button>
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

                <!-- Footer Section Title -->

                <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Footer Section Title</h4>
                      <div class="table-responsive">
                        <table class="table table-dark">
                          <thead>
                            <tr>
                              <th> Title </th>
                              <th></th>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php foreach($select_footer_title as $item){ ?>
                            <tr>
                              <td style="color: #fff; font-size: 16px;">
                                  <?php echo $item['title']; ?>
                              </td>
                              <td>  </td>
                              <td>  </td>
                              <td style="text-align: right;">
                                  <a href="<?php echo base_url('admin_footer_title_edit/'.$item['id']); ?>">
                                      <button class="btn btn-info">Edit</button>
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

                <!-- Footer Contact -->
                <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Footer Section: Contact</h4>
                      <div class="table-responsive">
                        <table class="table table-dark">
                          <thead>
                            <tr>
                              <th> Title </th>
                              <th> Description </th>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php foreach ($select_contact_db as $item) { ?>
                            <tr>
                              <td style="color: #fff; font-size: 14px;">
                                  <?php echo $item['title']; ?>
                              </td>
                              <td style="color: #fff; font-size: 14px;">
                                  <?php echo substr($item['desc'],0,50)."..."; ?>
                              </td>
                              <td></td>
                              <td style="text-align: right;">
                                  <a href="<?php echo base_url('admin_footer_contact_edit/'.$item['id']); ?>">
                                      <button class="btn btn-info">Edit</button>
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

                <!-- Footer Links -->

                <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Footer Section: Links</h4>
                      <div class="table-responsive">
                        <table class="table table-dark">
                          <thead>
                            <tr>
                              <th> Title </th>
                              <th></th>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php foreach($select_link_s_db as $item){ ?>
                            <tr>
                              <td style="color: #fff; font-size: 14px;">
                                  <?php echo $item['title']; ?>
                              </td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td style="text-align: right;">
                                  <a href="<?php echo base_url('admin_footer_link_title_edit/'.$item['id']); ?>">
                                      <button class="btn btn-info">Edit</button>
                                  </a>
                              </td>
                            </tr>
                              <?php } ?>
                              <?php foreach($select_link_sec_db as $item){ ?>
                            <tr>
                              <td style="color: #fff; font-size: 14px;">
                                  <?php echo $item['home']; ?>
                              </td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td style="text-align: right;">
                                  <a href="<?php echo base_url('admin_footer_links_edit/'.$item['id']); ?>">
                                      <button class="btn btn-info">Edit</button>
                                  </a>
                              </td>
                            </tr>
                            <tr>
                              <td style="color: #fff; font-size: 14px;">
                                  <?php echo $item['gallery']; ?>
                              </td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td style="text-align: right;">
                                  <a href="<?php echo base_url('admin_footer_links_edit/'.$item['id']); ?>">
                                      <button class="btn btn-info">Edit</button>
                                  </a>
                              </td>
                            </tr><tr>
                              <td style="color: #fff; font-size: 14px;">
                                  <?php echo $item['blog']; ?>
                              </td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td style="text-align: right;">
                                  <a href="<?php echo base_url('admin_footer_links_edit/'.$item['id']); ?>">
                                      <button class="btn btn-info">Edit</button>
                                  </a>
                              </td>
                            </tr>
                            <tr>
                              <td style="color: #fff; font-size: 14px;">
                                  <?php echo $item['contact']; ?>
                              </td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td style="text-align: right;">
                                  <a href="<?php echo base_url('admin_footer_links_edit/'.$item['id']); ?>">
                                      <button class="btn btn-info">Edit</button>
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

                <!-- Footer Social -->
                <!-- Footer Title -->

                <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Footer Section: Social Title</h4>
                      <div class="table-responsive">
                        <table class="table table-dark">
                          <thead>
                            <tr>
                              <th> Social Title </th>
                              <th></th>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php foreach($select_icon_Title_db as $item){ ?>
                            <tr>
                              <td style="color: #fff; font-size: 14px;">
                                  <?php echo $item['title']; ?>
                              </td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td style="text-align: right;">
                                  <a href="<?php echo base_url('admin_footer_icon_title/'.$item['id']); ?>">
                                      <button class="btn btn-info">Edit</button>
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

                <!-- Footer Icons -->

                <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Footer Section: Social</h4>
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
                              <?php foreach($select_icon_db as $item){ ?>
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
                                  <a href="<?php echo base_url('admin_footer_face_edit/'.$item['id']); ?>">
                                      <button class="btn btn-info">Edit</button>
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
