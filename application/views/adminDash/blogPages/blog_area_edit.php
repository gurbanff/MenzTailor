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
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <a href="<?php echo base_url('admin_blog_area_list'); ?>">
                                <button class="btn btn-dark float-right">Exit</button>
                            </a>
                            <h4 class="card-title">Banner Section</h4>
                            <form action="<?php echo base_url('admin_blog_area_edit_act/'.$select_blog_upt['id']); ?>" method="post" class="forms-sample" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputUsername1" value="<?php echo $select_blog_upt['title']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Description</label>
                                    <textarea name="description" class="form-control" id="exampleTextarea1" rows="4"><?php echo $select_blog_upt['description']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Blog User Info</label>
                                    <input type="text" name="blog_user" class="form-control" id="exampleInputEmail1" value="<?php echo $select_blog_upt['blog_user']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Blog Comment Info</label>
                                    <input type="text" name="blog_comment" class="form-control" id="exampleInputEmail1" value="<?php echo $select_blog_upt['blog_comment']; ?>" required>
                                </div>

                                <div class="form-group col-xs-2 col-sm-2 col-md-2 col-lg-3" style="float: left">
                                    <label for="exampleFormControlSelect1">Select Date</label>
                                    <select name="s_date" class="form-control form-control-xs text-white" id="exampleFormControlSelect1">
                                        <option <?php if($select_blog_upt['s_date'] == ""){ echo "SELECTED"; } ?> value="">SELECT</option>
                                        <option <?php if($select_blog_upt['s_date'] == "1"){ echo "SELECTED"; } ?> value="1">1</option>
                                        <option <?php if($select_blog_upt['s_date'] == "2"){ echo "SELECTED"; } ?> value="2">2</option>
                                        <option <?php if($select_blog_upt['s_date'] == "3"){ echo "SELECTED"; } ?> value="3">3</option>
                                        <option <?php if($select_blog_upt['s_date'] == "4"){ echo "SELECTED"; } ?> value="4">4</option>
                                        <option <?php if($select_blog_upt['s_date'] == "5"){ echo "SELECTED"; } ?> value="5">5</option>
                                        <option <?php if($select_blog_upt['s_date'] == "6"){ echo "SELECTED"; } ?> value="6">6</option>
                                        <option <?php if($select_blog_upt['s_date'] == "7"){ echo "SELECTED"; } ?> value="7">7</option>
                                        <option <?php if($select_blog_upt['s_date'] == "8"){ echo "SELECTED"; } ?> value="8">8</option>
                                        <option <?php if($select_blog_upt['s_date'] == "9"){ echo "SELECTED"; } ?> value="9">9</option>
                                        <option <?php if($select_blog_upt['s_date'] == "10"){ echo "SELECTED"; } ?> value="10">10</option>
                                        <option <?php if($select_blog_upt['s_date'] == "11"){ echo "SELECTED"; } ?> value="11">11</option>
                                        <option <?php if($select_blog_upt['s_date'] == "12"){ echo "SELECTED"; } ?> value="12">12</option>
                                        <option <?php if($select_blog_upt['s_date'] == "13"){ echo "SELECTED"; } ?> value="13">13</option>
                                        <option <?php if($select_blog_upt['s_date'] == "14"){ echo "SELECTED"; } ?> value="14">14</option>
                                        <option <?php if($select_blog_upt['s_date'] == "15"){ echo "SELECTED"; } ?> value="15">15</option>
                                        <option <?php if($select_blog_upt['s_date'] == "16"){ echo "SELECTED"; } ?> value="16">16</option>
                                        <option <?php if($select_blog_upt['s_date'] == "17"){ echo "SELECTED"; } ?> value="17">17</option>
                                        <option <?php if($select_blog_upt['s_date'] == "18"){ echo "SELECTED"; } ?> value="18">18</option>
                                        <option <?php if($select_blog_upt['s_date'] == "19"){ echo "SELECTED"; } ?> value="19">19</option>
                                        <option <?php if($select_blog_upt['s_date'] == "20"){ echo "SELECTED"; } ?> value="20">20</option>
                                        <option <?php if($select_blog_upt['s_date'] == "21"){ echo "SELECTED"; } ?> value="21">21</option>
                                        <option <?php if($select_blog_upt['s_date'] == "22"){ echo "SELECTED"; } ?> value="22">22</option>
                                        <option <?php if($select_blog_upt['s_date'] == "23"){ echo "SELECTED"; } ?> value="23">23</option>
                                        <option <?php if($select_blog_upt['s_date'] == "24"){ echo "SELECTED"; } ?> value="24">24</option>
                                        <option <?php if($select_blog_upt['s_date'] == "25"){ echo "SELECTED"; } ?> value="25">25</option>
                                        <option <?php if($select_blog_upt['s_date'] == "26"){ echo "SELECTED"; } ?> value="26">26</option>
                                        <option <?php if($select_blog_upt['s_date'] == "27"){ echo "SELECTED"; } ?> value="27">27</option>
                                        <option <?php if($select_blog_upt['s_date'] == "28"){ echo "SELECTED"; } ?> value="28">28</option>
                                        <option <?php if($select_blog_upt['s_date'] == "29"){ echo "SELECTED"; } ?> value="29">29</option>
                                        <option <?php if($select_blog_upt['s_date'] == "30"){ echo "SELECTED"; } ?> value="30">30</option>
                                        <option <?php if($select_blog_upt['s_date'] == "31"){ echo "SELECTED"; } ?> value="31">31</option>
                                    </select>
                                </div>

                                <div class="form-group col-xs-2 col-sm-2 col-md-2 col-lg-3" style="float: left">
                                    <label for="exampleFormControlSelect1">Select Mon</label>
                                    <select name="s_monday" class="form-control form-control-xs text-white" id="exampleFormControlSelect1">
                                        <option <?php if($select_blog_upt['s_monday'] == ""){ echo "SELECTED"; } ?> value="">SELECT</option>
                                        <option <?php if($select_blog_upt['s_monday'] == "Jan"){ echo "SELECTED"; } ?> value="Jan">Jan</option>
                                        <option <?php if($select_blog_upt['s_monday'] == "Feb"){ echo "SELECTED"; } ?> value="Feb">Feb</option>
                                        <option <?php if($select_blog_upt['s_monday'] == "Mar"){ echo "SELECTED"; } ?> value="Mar">Mar</option>
                                        <option <?php if($select_blog_upt['s_monday'] == "Apr"){ echo "SELECTED"; } ?> value="Apr">Apr</option>
                                        <option <?php if($select_blog_upt['s_monday'] == "May"){ echo "SELECTED"; } ?> value="May">May</option>
                                        <option <?php if($select_blog_upt['s_monday'] == "June"){ echo "SELECTED"; } ?> value="June">June</option>
                                        <option <?php if($select_blog_upt['s_monday'] == "July"){ echo "SELECTED"; } ?> value="July">July</option>
                                        <option <?php if($select_blog_upt['s_monday'] == "Aug"){ echo "SELECTED"; } ?> value="Aug">Aug</option>
                                        <option <?php if($select_blog_upt['s_monday'] == "Sep"){ echo "SELECTED"; } ?> value="Sep">Sep</option>
                                        <option <?php if($select_blog_upt['s_monday'] == "Oct"){ echo "SELECTED"; } ?> value="Oct">Oct</option>
                                        <option <?php if($select_blog_upt['s_monday'] == "Nov"){ echo "SELECTED"; } ?> value="Nov">Nov</option>
                                        <option <?php if($select_blog_upt['s_monday'] == "Dec"){ echo "SELECTED"; } ?> value="Dec">Dec</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="input-group col-xs-12">
                                        <label for="click">
                                            <i class=" mdi mdi-folder-image iconDevil"></i>
                                            <input id="click" name="blog_file" type="file" class="form-control file-upload-info" hidden>
                                        </label>
                                    </div>
                                </div>
                                <?php if($select_blog_upt['blog_file']){ ?>
                                    <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('uploads/blogarea/'.$select_blog_upt['blog_file']); ?>">
                                <?php }else{ ?>
                                    <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('uploads/noimage.jpg');?>" alt="Not Found">
                                <?php } ?>
                                <button type="submit" class="btn btn-success mr-2" style="float: right">Update</button>
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


