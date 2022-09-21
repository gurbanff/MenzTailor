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
                <style>
                    .iconDevil
                    {
                        display: inline-block;
                        font-size: 40px;
                        width: 10px;
                        text-align: left;
                        color: #0090e7;
                    }
                </style>

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <a href="<?php echo base_url('admin_visit_tailor_list'); ?>">
                                <button class="btn btn-dark float-right">Exit</button>
                            </a>
                            <h4 class="card-title">Visit Tailor Section</h4>
                            <form action="<?php echo base_url('admin_visit_tailor_add_act'); ?>" class="forms-sample" method="post">
                                <div class="form-group">
                                    <label for="exampleInputName1">Title</label>
                                    <input name="title" type="text" class="form-control" id="exampleInputName1" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">2nd Title</label>
                                    <input name="ndtitle" type="text" class="form-control" id="exampleInputEmail3" placeholder="2nd Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Location</label>
                                    <input name="loca" type="text" class="form-control" id="exampleInputPassword4" placeholder="Location">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">Email</label>
                                    <input name="email" type="email" class="form-control" id="exampleInputCity1" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Description</label>
                                    <input name="desc" type="text" class="form-control" id="exampleInputPassword4" placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Date Time</label>
                                    <input name="date" type="text" class="form-control" id="exampleInputPassword4" placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Date Time 2nd</label>
                                    <input name="nddate" type="text" class="form-control" id="exampleInputPassword4" placeholder="Description">
                                </div>
                                <button type="submit" class="btn btn-success mr-2" style="display: block; text-align: center; width: 100%;">Add</button>
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