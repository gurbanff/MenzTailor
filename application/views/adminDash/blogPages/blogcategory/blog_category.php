<?php $this->load->view('adminDash/includes/bodyUp'); ?>
<div class="container-scroller">
    <?php $this->load->view('adminDash/includes/leftmenu'); ?>
    <div class="container-fluid page-body-wrapper">
        <?php $this->load->view('adminDash/includes/nav'); ?>
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <a href="<?php echo base_url('admin_blog_cate_title_add'); ?>" style="float: right">
                                <button class="btn btn-success">Add</button>
                            </a>
                            <h4 class="card-title">Web Site Gallery - Sections: Banner</h4>
                            <div class="table-responsive">
                                <table class="table table-striped text-white">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th> Title </th>
                                        <th></th>
                                        <th></th>
                                        <th class="text-center"> Operation </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach($select_cate_title_data as $item){ ?>

                                        <tr>
                                            <td></td>
                                            <td class="py-1">
                                                <?php echo $item['title']; ?>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">

                                                <a href="<?php echo base_url('admin_blog_cate_title_edit/'.$item['id']); ?>">
                                                    <button class="btn btn-info">Edit</button>
                                                </a>

                                                <a onclick="return confirm('Do you want to delete it?')" href="<?php echo base_url('admin_blog_cate_title_del/'.$item['id']); ?>">
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


                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <a href="<?php echo base_url('admin_blog_category_add'); ?>" style="float: right">
                                <button class="btn btn-success" style="width: 120px">Add</button>
                            </a>
                            <h4 class="card-title mb-1">Blog Category List</h4>
                            <br>

                            <div class="d-flex flex-row justify-content-between">

                                <p class="text-white mb-1" style="width: 95%;text-align: right">Operation</p>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="preview-list">
                                        <?php foreach($select_blog_data as $item){ ?>


                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-primary">
                                                    <i class="<?php echo $item['icon']; ?>"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">
                                                        <?php echo $item['title']; ?>
                                                    </h6>
                                                    <p class="text-muted mb-0">
                                                        <?php echo $item['description']; ?>
                                                    </p>
                                                </div>
                                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                    <a href="<?php echo base_url('admin_blog_category_edit/'.$item['id']); ?>">
                                                        <button class="btn btn-info">Edit</button>
                                                    </a>
                                                    <a onclick="return confirm('Do you want to delete it?')" href="<?php echo base_url('admin_blog_category_del/'.$item['id']); ?>">
                                                        <button class="btn btn-danger">Del</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<?php $this->load->view('adminDash/includes/footerstyle'); ?>
