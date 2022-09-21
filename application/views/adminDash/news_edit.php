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

                <div class="col-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <h4 class="card-title">Web Site Home - Sections: Navbar</h4>
                              <p class="card-description">Elements</p>
                              <form action="<?php echo base_url('admin_news_edit_act/'.$select_single_news['nav_id']); ?>" method="post" class="forms-sample">
                                  <div class="form-group">
                                      <label for="exampleInputName1">NavItem 1</label>
                                      <input type="text" name="home" class="form-control" id="exampleInputName1" value="<?php echo $select_single_news['nav_home']; ?>">
                                  </div>

                                  <div class="form-group">
                                      <label for="exampleInputName1">NavItem 2</label>
                                      <input type="text" name="gallery" class="form-control" id="exampleInputName1" value="<?php echo $select_single_news['nav_gallery']; ?>">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputName1">NavItem 3</label>
                                      <input type="text" name="blog" class="form-control" id="exampleInputName1" value="<?php echo $select_single_news['nav_blog']; ?>">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputName1">NavItem 4</label>
                                      <input type="text" name="contact" class="form-control" id="exampleInputName1" value="<?php echo $select_single_news['nav_contact']; ?>">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputName1">NavItem 5</label>
                                      <input type="text" name="visitus" class="form-control" id="exampleInputName1" value="<?php echo $select_single_news['nav_visitus']; ?>">
                                  </div>


                                  <a href="<?php echo base_url('Dashboard'); ?>">
                                      <button class="btn btn-dark float-right">Back</button>
                                  </a>

                                  <button type="submit" class="btn btn-success mr-2 float-right">Update</button>
                              </form>
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