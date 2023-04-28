<?php

class UserPagesController extends CI_Controller
{
    ///Start Blog Banner

    public function blog_banner_list()
    {
        $data['select_blog_data'] = $this->db->order_by('id', 'DESC')->get('blog_banner')->result_array();
        $this->load->view('adminDash/blogPages/blog_banner_list', $data);
    }

    public function blog_banner_add()
    {
        $this->load->view('adminDash/blogPages/blog_banner_add');
    }

    public function blog_banner_add_act()
    {
        $title = $_POST['title'];

        if (!empty($title)) {
            $config['upload_path'] = './uploads/blogimg/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('blog_file')) {
                $img = $this->upload->data('file_name');

                $data = [
                    'title'       => $title,
                    'blog_file'   => $img
                ];

                $data = $this->security->xss_clean($data);

                $this->db->insert('blog_banner', $data);
                redirect(base_url('admin_blog_banner_list'));
            } else {
                $data = [
                    'title'       => $title,
                ];

                $data = $this->security->xss_clean($data);

                $this->db->insert('gall_banner', $data);
                redirect(base_url('admin_blog_banner_list'));
            }
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function blog_banner_del($id)
    {
        $id = $this->security->xss_clean($id);
        $this->db->where('id', $id)->delete('blog_banner');
        redirect(base_url('admin_blog_banner_list'));
    }

    public function blog_banner_edit($id)
    {
        $id = $this->security->xss_clean($id);
        $data['select_blog_upt'] = $this->db->where('id', $id)->get('blog_banner')->row_array();
        $this->load->view('adminDash/blogPages/blog_banner_edit', $data);
    }

    public function blog_banner_edit_act($id)
    {
        $title = $_POST['title'];

        if (!empty($title)) {
            $config['upload_path'] = './uploads/blogimg/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('blog_file')) {
                $img = $this->upload->data('file_name');

                $data = [
                    'title'       => $title,
                    'blog_file'   => $img
                ];

                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);

                $this->db->where('id', $id)->update('blog_banner', $data);
                redirect(base_url('admin_blog_banner_list'));
            } else {
                $data = [
                    'title'       => $title,
                ];

                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);

                $this->db->where('id', $id)->update('blog_banner', $data);
                redirect(base_url('admin_blog_banner_list'));
            }
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    ///End Blog Banner

    ///Start BLog Area

    public function blog_area_list()
    {
        $data['select_blog_data'] = $this->db->order_by('id', 'DESC')->get('blog_area')->result_array();
        $this->load->view('adminDash/blogPages/blog_area_list', $data);
    }

    public function blog_area_add()
    {
        $this->load->view('adminDash/blogPages/blog_area_add');
    }

    public function blog_area_add_act()
    {
        $title      = $_POST['title'];
        $desc       = $_POST['description'];
        $user       = $_POST['blog_user'];
        $comm       = $_POST['blog_comment'];
        $date       = $_POST['s_date'];
        $mon        = $_POST['s_monday'];


        if (!empty($title) && !empty($desc) && !empty($user) && !empty($comm) && !empty($date) && !empty($mon)) {
            $config['upload_path']          = './uploads/blogarea/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('blog_file')) {
                $img = $this->upload->data('file_name');

                $data = [
                    "title"         => $title,
                    "description"   => $desc,
                    "blog_user"     => $user,
                    "blog_comment"  => $comm,
                    "s_date"        => $date,
                    's_monday'      => $mon,
                    'blog_file'     => $img
                ];

                $data = $this->security->xss_clean($data);

                $this->db->insert('blog_area', $data);
                redirect(base_url('admin_blog_area_list'));
            } else {
                $data = [
                    "title"         => $title,
                    "description"   => $desc,
                    "blog_user"     => $user,
                    "blog_comment"  => $comm,
                    "s_date"        => $date,
                    's_monday'      => $mon
                ];

                $data = $this->security->xss_clean($data);

                $this->db->insert('blog_area', $data);
                redirect(base_url('admin_blog_area_list'));
            }
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function blog_area_del($id)
    {
        $id = $this->security->xss_clean($id);
        $this->db->where('id', $id)->delete('blog_area');
        redirect(base_url('admin_blog_area_list'));
    }

    public function blog_area_edit($id)
    {
        $id = $this->security->xss_clean($id);
        $data['select_blog_upt'] = $this->db->where('id', $id)->get('blog_area')->row_array();
        $this->load->view('adminDash/blogPages/blog_area_edit', $data);
    }

    public function blog_area_edit_act($id)
    {
        $title      = $_POST['title'];
        $desc       = $_POST['description'];
        $user       = $_POST['blog_user'];
        $comm       = $_POST['blog_comment'];
        $date       = $_POST['s_date'];
        $mon        = $_POST['s_monday'];


        if (!empty($title) && !empty($desc) && !empty($user) && !empty($comm) && !empty($date) && !empty($mon)) {
            $config['upload_path']          = './uploads/blogarea/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('blog_file')) {
                $img = $this->upload->data('file_name');

                $data = [
                    "title"         => $title,
                    "description"   => $desc,
                    "blog_user"     => $user,
                    "blog_comment"  => $comm,
                    "s_date"        => $date,
                    's_monday'      => $mon,
                    'blog_file'     => $img
                ];

                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);

                $this->db->where('id', $id)->update('blog_area', $data);
                redirect(base_url('admin_blog_area_list'));
            } else {
                $data = [
                    "title"         => $title,
                    "description"   => $desc,
                    "blog_user"     => $user,
                    "blog_comment"  => $comm,
                    "s_date"        => $date,
                    's_monday'      => $mon
                ];

                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);

                $this->db->where('id', $id)->update('blog_area', $data);
                redirect(base_url('admin_blog_area_list'));
            }
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    ///End Blog Area

    ///Start Category


    public function blog_category_icon()
    {
        $this->load->view('adminDash/blogPages/blogcategory/blog_category_icon');
    }

    public function blog_category()
    {
        $data['select_cate_title_data'] = $this->db->order_by('id', 'ASC')->get('blog_cate_title')->result_array();
        $data['select_blog_data'] = $this->db->order_by('id', 'ASC')->get('blog_cate')->result_array();
        $this->load->view('adminDash/blogPages/blogcategory/blog_category', $data);
    }

    public function blog_cate_title_add()
    {
        $this->load->view('adminDash/blogPages/blogcategory/blog_cate_title_add');
    }

    public function blog_cate_title_add_act()
    {
        $title = $_POST['title'];

        if (!empty($title)) {
            $data = [
                'title' => $title
            ];

            $data = $this->security->xss_clean($data);

            $this->db->insert('blog_cate_title', $data);
            redirect(base_url('admin_blog_category'));
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function blog_cate_title_del($id)
    {
        $id = $this->security->xss_clean($id);
        $this->db->where('id', $id)->delete('blog_cate_title');
        redirect(base_url('admin_blog_category'));
    }

    public function blog_cate_title_edit($id)
    {
        $id = $this->security->xss_clean($id);
        $data['select_cate_tit_upt'] = $this->db->where('id', $id)->get('blog_cate_title')->row_array();
        $this->load->view('adminDash/blogPages/blogcategory/blog_cate_title_edit', $data);
    }

    public function blog_cate_title_edit_act($id)
    {
        $title = $_POST['title'];

        if (!empty($title)) {
            $data = [
                'title' => $title
            ];

            $id = $this->security->xss_clean($id);
            $data = $this->security->xss_clean($data);

            $this->db->where('id', $id)->update('blog_cate_title', $data);
            redirect(base_url('admin_blog_category'));
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function blog_category_add()
    {
        $this->load->view('adminDash/blogPages/blogcategory/blog_cate_add');
    }

    public function blog_category_add_act()
    {
        $title      = $_POST['title'];
        $desc       = $_POST['description'];
        $link       = $_POST['link'];
        $icon       = $_POST['icon'];

        if (!empty($title) && !empty($desc) && !empty($icon) && !empty($link)) {
            $data = [
                "title"         => $title,
                "description"   => $desc,
                "icon"          => $icon,
                "linked"        => $link
            ];

            $data = $this->security->xss_clean($data);

            $this->db->insert('blog_cate', $data);
            redirect(base_url('admin_blog_category'));
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function blog_category_del($id)
    {
        $id = $this->security->xss_clean($id);
        $this->db->where('id', $id)->delete('blog_cate');
        redirect(base_url('admin_blog_category'));
    }

    public function blog_category_edit($id)
    {
        $id = $this->security->xss_clean($id);
        $data['select_blog_upt'] = $this->db->where('id', $id)->get('blog_cate')->row_array();
        $this->load->view('adminDash/blogPages/blogcategory/blog_cate_edit', $data);
    }

    public function blog_category_edit_act($id)
    {
        $title      = $_POST['title'];
        $desc       = $_POST['description'];
        $link       = $_POST['link'];
        $icon       = $_POST['icon'];

        if (!empty($title) && !empty($desc) && !empty($icon) && !empty($link)) {
            $data = [
                "title"         => $title,
                "description"   => $desc,
                "icon"          => $icon,
                "linked"        => $link
            ];

            $id = $this->security->xss_clean($id);
            $data = $this->security->xss_clean($data);

            $this->db->where('id', $id)->update('blog_cate', $data);
            redirect(base_url('admin_blog_category'));
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    ///End Category

    ///Start Single Blog

    public function single_blog_list()
    {
        $data['select_blog_data'] = $this->db->order_by('id', 'desc')->get('single_blog_title')->result_array();
        $this->load->view('adminDash/blogPages/single_blog_list', $data);
    }

    public function single_blog_add()
    {
        $this->load->view('adminDash/blogPages/single_blog_add');
    }

    public function single_blog_add_act()
    {
        $title = $_POST['title'];

        if (!empty($title)) {
            $config['upload_path'] = './uploads/singleblogimg/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('blog_file')) {
                $img = $this->upload->data('file_name');

                $data = [
                    'title'       => $title,
                    'blog_file'   => $img,
                ];

                $data = $this->security->xss_clean($data);

//                $this->db->set('date', 'NOW()', FALSE);
                $this->db->insert('single_blog_title', $data);
                redirect(base_url('admin_single_blog_list'));
            } else {
                $data = [
                    'title'       => $title,
                ];

                $data = $this->security->xss_clean($data);

//                $this->db->set('date', mdate("%d-%m-%Y %t:%r"));
                $this->db->insert('single_blog_title', $data);
                redirect(base_url('admin_single_blog_list'));
            }
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function single_blog_del($id)
    {
        $id = $this->security->xss_clean($id);
        $this->db->where('id', $id)->delete('single_blog_title');
        redirect(base_url('admin_single_blog_list'));
    }

    public function single_blog_edit($id)
    {
        $id = $this->security->xss_clean($id);
        $data['select_blog_upt'] = $this->db->where('id', $id)->get('single_blog_title')->row_array();
        $this->load->view('adminDash/blogPages/single_blog_edit', $data);
    }

    public function single_blog_edit_act($id)
    {
        $title = $_POST['title'];

        if (!empty($title)) {
            $config['upload_path'] = './uploads/singleblogimg/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('blog_file')) {
                $img = $this->upload->data('file_name');

                $data = [
                    'title'       => $title,
                    'blog_file'   => $img,
                ];

                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);

                $this->db->where('id', $id)->update('single_blog_title', $data);
                redirect(base_url('admin_single_blog_list'));
            } else {
                $data = [
                    'title'       => $title,
                ];

                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);

                $this->db->where('id', $id)->update('single_blog_title', $data);
                redirect(base_url('admin_single_blog_list'));
            }
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    //  public function comment_add_act()
    // {
    //     $name       = $_POST['name'];
    //     $comm       = $_POST['comment'];
    //     $news_id    = $_POST['news_id'];
    //     $date       = date("F j, Y, H:m");
    //
    //     if(!empty($name) && !empty($comm) && !empty($news_id) && !empty($date)) {
    //
    //         $data = [
    //             'name'     => $name,
    //             'comment'  => $comm,
    //             'news_id'  => $news_id,
    //             'date'     => $date,
    //         ];
    //
    //         $this->session->set_flashdata('CommentSucc', 'Your comment was sent successfully!');
    //         $this->db->insert('single_message',$data)
    //
    //     }else{
    //         $this->session->set_flashdata('CommentError', 'Please fill out all fields!');
    //     }
    //     redirect($_SERVER['HTTP_REFERER']);
    //
    // }
    //
    // public function add_user_comment_act(){
    //
    //     $comment   = $_POST['comment'];
    //     $name = $_SESSION['user_data']['user_username'];
    //     $email = $_SESSION['user_data']['user_email'];
    //     $news_id   = $_POST['news_id'];
    //     $date = date("F j, Y, H:m");
    //     $type = 'user';
    //     $img = $_SESSION['user_data']['user_img'];
    //
    //
    //
    //     if (!empty($comment) && !empty($name) && !empty($email) && !empty($news_id) && !empty($date) && !empty($type)){
    //
    //         $data = [
    //             'comment'  => $comment,
    //             'comment_name'  => $name,
    //             'comment_email'  => $email,
    //             'news_id'  => $news_id,
    //             'comment_date'  => $date,
    //             'comment_type'  => $type,
    //             'comment_user_img'  => $img,
    //         ];
    //
    //         $this->session->set_flashdata('CommentSucc','Your comment was sent successfully!');
    //         $this->db->insert('comments', $data);
    //
    //
    //     }else{
    //         $this->session->set_flashdata('CommentError','Please fill out all fields!');
    //     }
    //
    //     redirect($_SERVER['HTTP_REFERER']);
    // }
    ///End Single Blog

    ///Contact Section
    public function con_banner_list()
    {
        $data['select_con_data'] = $this->db->get('con_banner')->result_array();
        $this->load->view('adminDash/contactPages/con_banner_list', $data);
    }

    public function con_banner_add()
    {
        $this->load->view('adminDash/contactPages/con_banner_add');
    }

    public function con_banner_add_act()
    {
        $title = $_POST['title'];

        if (!empty($title)) {
            $config['upload_path'] = './uploads/contact/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('con_file')) {
                $img = $this->upload->data('file_name');

                $data = [
                    'title'       => $title,
                    'con_file'   => $img
                ];

                $data = $this->security->xss_clean($data);

                $this->db->insert('con_banner', $data);
                redirect(base_url('admin_con_banner_list'));
            } else {
                $data = [
                    'title'       => $title,
                ];

                $data = $this->security->xss_clean($data);

                $this->db->insert('con_banner', $data);
                redirect(base_url('admin_con_banner_list'));
            }
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function con_banner_del($id)
    {
        $id = $this->security->xss_clean($id);
        $this->db->where('id', $id)->delete('con_banner');
        redirect(base_url('admin_con_banner_list'));
    }

    public function con_banner_edit($id)
    {
        $id = $this->security->xss_clean($id);
        $data['select_con_upt'] = $this->db->where('id', $id)->get('con_banner')->row_array();
        $this->load->view('adminDash/contactPages/con_banner_edit', $data);
    }

    public function con_banner_edit_act($id)
    {
        $title = $_POST['title'];

        if (!empty($title)) {
            $config['upload_path'] = './uploads/contact/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('con_file')) {
                $img = $this->upload->data('file_name');

                $data = [
                    'title'       => $title,
                    'con_file'   => $img
                ];

                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);

                $this->db->where('id', $id)->update('con_banner', $data);
                redirect(base_url('admin_con_banner_list'));
            } else {
                $data = [
                    'title'       => $title,
                ];

                $id = $this->security->xss_clean($id);
                $data = $this->security->xss_clean($data);

                $this->db->where('id', $id)->update('con_banner', $data);
                redirect(base_url('admin_con_banner_list'));
            }
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function cont_location_list()
    {
        $data['select_cont_data'] = $this->db->get('con_location')->result_array();
        $this->load->view('adminDash/contactPages/cont_location_list', $data);
    }

    public function cont_location_add()
    {
        $this->load->view('adminDash/contactPages/cont_location_add');
    }

    public function cont_location_add_act()
    {
        $name      = $_POST['country'];
        $loca      = $_POST['location'];

        if (!empty($name) && !empty($loca)) {
            $data = [
                "country"      => $name,
                "location"     => $loca
            ];

            $data = $this->security->xss_clean($data);

            $this->db->insert('con_location', $data);
            redirect(base_url('admin_cont_location_list'));
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function cont_location_del($id)
    {
        $id = $this->security->xss_clean($id);
        $this->db->where('id', $id)->delete('con_location');
        redirect(base_url('admin_cont_location_list'));
    }

    public function cont_location_edit($id)
    {
        $id = $this->security->xss_clean($id);
        $data['select_cont_upt'] = $this->db->where('id', $id)->get('con_location')->row_array();
        $this->load->view('adminDash/contactPages/cont_location_edit', $data);
    }

    public function cont_location_edit_act($id)
    {
        $name      = $_POST['country'];
        $loca      = $_POST['location'];

        if (!empty($name) && !empty($loca)) {
            $data = [
                "country"      => $name,
                "location"     => $loca
            ];

            $id = $this->security->xss_clean($id);
            $data = $this->security->xss_clean($data);

            $this->db->where('id', $id)->update('con_location', $data);
            redirect(base_url('admin_cont_location_list'));
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function con_mail_list()
    {
        $data['select_conms_data'] = $this->db->get('cont_title')->result_array();
        $data['select_contit_data'] = $this->db->order_by('id','DESC')->get('cont_message')->result_array();
        $this->load->view('adminDash/contactPages/con_mail_list', $data);
    }

    public function con_mail_add()
    {
        $this->load->view('adminDash/contactPages/con_mail_add');
    }

    public function con_mail_add_act()
    {
        $title      = $_POST['title'];

        if (!empty($title)) {
            $data = [
                "title"     => $title
            ];

            $data = $this->security->xss_clean($data);

            $this->db->insert('cont_title', $data);
            redirect(base_url('admin_con_mail_list'));
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function con_mail_del($id)
    {
        $id = $this->security->xss_clean($id);
        $this->db->where('id', $id)->delete('cont_title');
        redirect(base_url('admin_con_mail_list'));
    }

    public function con_mail_edit($id)
    {
        $id = $this->security->xss_clean($id);
        $data['select_conms_upt'] = $this->db->where('id', $id)->get('cont_title')->row_array();
        $this->load->view('adminDash/contactPages/con_mail_edit', $data);
    }

    public function con_mail_edit_act($id)
    {
        $title      = $_POST['title'];

        if (!empty($title)) {
            $data = [
                "title"     => $title
            ];

            $id = $this->security->xss_clean($id);
            $data = $this->security->xss_clean($data);

            $this->db->where('id', $id)->update('cont_title', $data);
            redirect(base_url('admin_con_mail_list'));
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function cont_mess_add_act()
    {
        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $message    = $_POST['message'];

        if (!empty($name) && !empty($email) && !empty($message)) {
            $data = [
                "name"       => $name,
                "email"      => $email,
                "message"    => $message,
            ];

            $data = $this->security->xss_clean($data);

            $this->session->set_flashdata('CommentSucc', 'Your comment was sent successfully!');
            $this->db->insert('cont_message', $data);
        } else {
            $this->session->set_flashdata('CommentError', 'Please fill out all fields!');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function con_mail_view($id)
    {
        $id = $this->security->xss_clean($id);
        //$data['select_mail_view'] = $this->db->get('cont_message')->result_array();
        $data['select_mail_view'] = $this->db->where('id',$id)->get('cont_message')->row_array();
        $this->load->view('adminDash/contactPages/con_mail_view', $data);
    }

    public function con_cont_list()
    {
        $data['select_cons_data'] = $this->db->get('cont_address')->result_array();
        $this->load->view('adminDash/contactPages/con_cont_list', $data);
    }

    public function con_cont_edit($id)
    {
        $id = $this->security->xss_clean($id);
        $data['select_cons_upt'] = $this->db->where('id', $id)->get('cont_address')->row_array();
        $this->load->view('adminDash/contactPages/con_cont_edit', $data);
    }

    public function con_cont_edit_act($id)
    {
        $add_icon   = $_POST['address_icon'];
        $address    = $_POST['address'];
        $add_desc   = $_POST['add_desc'];
        $ph_icon    = $_POST['phone_icon'];
        $phone      = $_POST['phone'];
        $ph_desc    = $_POST['ph_desc'];
        $e_icon     = $_POST['email_icon'];
        $email      = $_POST['email'];
        $e_desc     = $_POST['e_desc'];

        if (!empty($add_icon) && !empty($address) && !empty($add_desc) && !empty($ph_icon) && !empty($phone) && !empty($ph_desc) && !empty($e_icon) && !empty($email) && !empty($e_desc)) {
            $data = [
                'address_icon'  => $add_icon,
                'address'       => $address,
                'add_desc'      => $add_desc,
                'phone_icon'    => $ph_icon,
                'phone'         => $phone,
                'ph_desc'       => $ph_desc,
                'email_icon'    => $e_icon,
                'email'         => $email,
                'e_desc'        => $e_desc
            ];

            $data = $this->security->xss_clean($data);

            $this->db->where('id', $id)->update('cont_address', $data);
            redirect(base_url('admin_con_cont_list'));
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    ///Contact Section
}
