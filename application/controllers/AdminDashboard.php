<?php


class AdminDashboard extends CI_controller
{

    public function index()
    {
        // $data['select_all_news'] = $this->db->get('navitem')->result_array();
        $data['select_all_news']     = $this->db->order_by('nav_id','DESC')->get('navitem')->result_array();
        $data['select_footer_title'] = $this->db->order_by('id','DESC')->get('footer_title')->result_array();
        $data['select_contact_db']   = $this->db->order_by('id','DESC')->get('footer_desc')->result_array();
        $data['select_link_s_db']    = $this->db->order_by('id','DESC')->get('footer_link_title')->result_array();
        $data['select_link_sec_db']  = $this->db->order_by('id','DESC')->get('footer_links')->result_array();
        $data['select_icon_db']      = $this->db->order_by('id','DESC')->get('footer_icons')->result_array();
        $data['select_icon_Title_db']     = $this->db->order_by('id','DESC')->get('footer_icon_title')->result_array();

        $this->load->view('adminDash/index', $data);
    }


    public function news_add_action()
    {
        $home = $_POST['home'];
        $gallery = $_POST['gallery'];
        $blog = $_POST['blog'];
        $contact = $_POST['contact'];
        $visitus = $_POST['visitus'];


        if (!empty($home) && !empty($gallery) && !empty($blog) && !empty($contact) && !empty($visitus)) {

            $data = [
                "nav_home" => $home,
                "nav_gallery" => $gallery,
                "nav_blog" => $blog,
                "nav_contact" => $contact,
                "nav_visitus" => $visitus
            ];

            $this->db->insert('navitem', $data);

        } else {

            redirect(base_url('Dashboard'));

        }
    }

    public function news_edit($id)
    {
        $data['select_single_news'] = $this->db->where('nav_id', $id)->get('navitem')->row_array();
        $this->load->view('adminDash/news_edit', $data);
    }

    public function news_edit_act($id)
    {
        $home = $_POST['home'];
        $gallery = $_POST['gallery'];
        $blog = $_POST['blog'];
        $contact = $_POST['contact'];
        $visitus = $_POST['visitus'];


        if (!empty($home) && !empty($gallery) && !empty($blog) && !empty($contact) && !empty($visitus)) {

            $data = [
                "nav_home" => $home,
                "nav_gallery" => $gallery,
                "nav_blog" => $blog,
                "nav_contact" => $contact,
                "nav_visitus" => $visitus
            ];

            $this->db->where('nav_id', $id)->update('navitem', $data);
            redirect(base_url('Dashboard'));

//            $this->load->view('userview/includes/header', $data);

        } else {

            redirect($_SERVER['HTTP_REFERER']);

        }
    }

    public function update_nav()
    {
        $data['select_all_nav'] = $this->db->order_by('nav_id', 'DESC')->get('navitem')->result_array();

        $this->load->view("userview/includes/header", $data['select_all_nav']);
    }

    public function footer_section()
    {
        $data['select_footer_section'] = $this->db->order_by('id', 'DESC')->get('footer_title')->result_array();

        $this->load->view("userview/includes/header", $data['select_all_nav']);
    }

    public function footer_title_edit($id)
    {
        $data['select_footer_title_upt'] = $this->db->where('id',$id)->get('footer_title')->row_array();
        $this->load->view('adminDash/userPages/footer_title_edit',$data);
    }

    public function footer_title_edit_act($id)
    {
        $title = $_POST['title'];

        if (!empty($title)) {

            $data = [
                "title" => $title,
            ];

            $this->db->where('id',$id)->update('footer_title', $data);
            redirect(base_url('Dashboard'));

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function footer_contact_edit($id)
    {
        $data['select_contact_foo_upt'] = $this->db->where('id',$id)->get('footer_desc')->row_array();
        $this->load->view('adminDash/userPages/footer_contact_edit',$data);
    }

    public function footer_contact_edit_act($id)
    {
        $title = $_POST['title'];
        $desc  = $_POST['desc'];

        if (!empty($title) && !empty($desc)) {

            $data = [
                "title" => $title,
                "desc"  => $desc,
            ];

            $this->db->where('id',$id)->update('footer_desc', $data);
            redirect(base_url('Dashboard'));

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function footer_link_title_edit($id)
    {
        $data['select_links_upt'] = $this->db->where('id',$id)->get('footer_link_title')->row_array();
        $this->load->view('adminDash/userPages/footer_link_title_edit',$data);
    }

    public function footer_link_title_edit_act($id)
    {
        $title = $_POST['title'];

        if (!empty($title)) {

            $data = [
                "title" => $title
            ];

            $this->db->where('id',$id)->update('footer_link_title',$data);
            redirect(base_url('Dashboard'));

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function footer_links_edit($id)
    {
        $data['select_links_upt'] = $this->db->where('id',$id)->get('footer_links')->row_array();
        $this->load->view('adminDash/userPages/footer_links_edit',$data);
    }

    public function footer_links_edit_act($id)
    {
        $home           = $_POST['home'];
        $home_link      = $_POST['home_link'];
        $gallery        = $_POST['gallery'];
        $gallery_link   = $_POST['gallery_link'];
        $blog           = $_POST['blog'];
        $blog_link      = $_POST['blog_link'];
        $contact        = $_POST['contact'];
        $contact_link   = $_POST['contact_link'];

        if (!empty($home) && !empty($home_link) && !empty($gallery) && !empty($gallery_link) && !empty($blog) && !empty($blog_link) && !empty($contact) && !empty($contact_link)) {

            $data = [
                "home"          => $home,
                "home_link"     => $home_link,
                "gallery"       => $gallery,
                "gallery_link"  => $gallery_link,
                "blog"          => $blog,
                "blog_link"     => $blog_link,
                "contact"       => $contact,
                "contact_link"  => $contact_link,
            ];

            $this->db->where('id',$id)->update('footer_links',$data);
            redirect(base_url('Dashboard'));

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function footer_face_edit($id)
    {
        $data['select_icons_upt'] = $this->db->where('id',$id)->get('footer_icons')->row_array();
        $this->load->view('adminDash/userPages/footerSocialIcon/footer_face_edit',$data);
    }

    public function footer_face_edit_act($id)
    {
        $title       = $_POST['title'];
        $icon        = $_POST['icon'];
        $icon_https  = $_POST['icon_https'];

        if (!empty($title) && !empty($icon) && !empty($icon_https)) {

            $data = [
                "title"         => $title,
                "icon"          => $icon,
                "icon_https"    => $icon_https,
            ];

            $this->db->where('id',$id)->update('footer_icons', $data);
            redirect(base_url('Dashboard'));

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function footer_icon_title($id)
    {
        $data['select_icon_title_upt'] = $this->db->where('id',$id)->get('footer_icon_title')->row_array();
        $this->load->view('adminDash/userPages/footerSocialIcon/footer_icon_title',$data);
    }

    public function footer_icon_title_act($id)
    {
        $title = $_POST['title'];

        if (!empty($title)) {

            $data = [
                "title" => $title,
            ];

            $this->db->where('id',$id)->update('footer_icon_title',$data);
            redirect(base_url('Dashboard'));

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    ///////The userPages/////

    public function home_list_edit()
    {
        $bannerData['select_banner_data'] = $this->db->order_by('ban_id', 'DESC')->get('banner')->result_array();
//        $bannerData['select_twond_data']  = $this->db->get('twondbanner')->result_array();

        $this->load->view('adminDash/userPages/home', $bannerData);
    }

//    The Add Method   //
    public function home_page()
    {
        $this->load->view('adminDash/userPages/home_edit');
    }

    public function home_edit_act()
    {
        $caption = $_POST['ban_hero_caption'];
        $span = $_POST['ban_span'];

        if (!empty($caption) && !empty($span)) {

            // The IMG
            $config['upload_path'] = './uploads/homebannerimg/banner1nd/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';

            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_file')) {

                $img = $this->upload->data("file_name");
                $FileExt = $this->upload->data("file_ext");

                $bannerData = [
                    "ban_hero_caption" => $caption,
                    "ban_span" => $span,
                    "ban_file" => $img,
                    "ban_file_ext" => $FileExt
                ];

                $this->db->insert('banner', $bannerData);
                redirect(base_url('Home_Edit'));

            } else {
                $bannerData = [
                    "ban_hero_caption" => $caption,
                    "ban_span" => $span,
                ];

                $this->db->insert('banner', $bannerData);
                redirect(base_url('Home_Edit'));
            }

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }

    }
//    End Add Method   //

//    The Home Edit Update //
    public function home_edit_update($id)
    {
        $bannerData['select_single_news'] = $this->db->where('ban_id', $id)->get('banner')->row_array();
        $bannerData['select_banner_data'] = $this->db->where('ban_id', $id)->get('banner')->result_array();
        $this->load->view('adminDash/userPages/HomeEditUpdate', $bannerData);
    }

    public function edit_update_act($id)
    {
        $caption = $_POST['ban_hero_caption'];
        $span = $_POST['ban_span'];

        if (!empty($caption) && !empty($span)) {

            // The IMG
            $config['upload_path'] = './uploads/homebannerimg/banner1nd/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
//            $config['max_size']             = 100;
//            $config['max_width']            = 1024;
//            $config['max_height']           = 768;
            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_file')) {

                $img = $this->upload->data("file_name");
                $FileExt = $this->upload->data("file_ext");

                $bannerData = [
                    "ban_hero_caption" => $caption,
                    "ban_span" => $span,
                    "ban_file" => $img,
                    "ban_file_ext" => $FileExt
                ];

                $this->db->where('ban_id', $id)->update('banner', $bannerData);
                redirect(base_url('Home_Edit'));

            } else {
                $bannerData = [
                    "ban_hero_caption" => $caption,
                    "ban_span" => $span,
                ];

                $this->db->where('ban_id', $id)->update('banner', $bannerData);
                redirect(base_url('Home_Edit'));
            }

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
//    End Home Edit Update //

//    The Delete Method   //
    public function home_delete($id)
    {
        $this->db->where('ban_id', $id)->delete('banner');
        redirect(base_url('Home_Edit'));
    }

//////Clients Offers List Start//////
    public function clients_offers_list()
    {
        $data['select_clients_data'] = $this->db->order_by('id', 'DESC')->get('client_offers')->result_array();
        $data['select_single_data'] = $this->db->order_by('id', 'DESC')->get('single_offers')->result_array();
        $this->load->view('adminDash/userPages/clients_offers_list', $data);
    }

    public function clients_offers_add()
    {
        $this->load->view('adminDash/userPages/clients_offers_add');
    }

    public function clients_offers_add_act()
    {
        $titleup = $_POST['fadeinup'];
        $titledown = $_POST['fadeindown'];

        if (!empty($titleup) && !empty($titledown)) {

            $data = [
                "fade_in_up" => $titleup,
                "fade_in_down" => $titledown,
            ];

            $this->db->insert('client_offers', $data);
            redirect(base_url('admin_clients_offers_list'));

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function clients_offers_del($id)
    {
        $this->db->where('id', $id)->delete('client_offers');
        redirect(base_url('admin_clients_offers_list'));
    }

    public function clients_offers_upt($id)
    {
        $data['select_upt_clients'] = $this->db->where('id', $id)->get('client_offers')->row_array();
        $this->load->view('adminDash/userPages/clients_offers_upt', $data);
    }

    public function clients_offers_upt_act($id)
    {
        $titleup = $_POST['fadeinup'];
        $titledown = $_POST['fadeindown'];

        if (!empty($titleup) && !empty($titledown)) {

            $data = [
                "fade_in_up" => $titleup,
                "fade_in_down" => $titledown,
            ];

            $this->db->where('id', $id)->update('client_offers', $data);
            redirect(base_url('admin_clients_offers_list'));

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
//////Clients Offers List End//////

//////Single Offers List Start//////

    public function single_off_add()
    {
        $this->load->view('adminDash/userPages/single_off_add');
    }

    public function single_off_add_act()
    {
        $num = $_POST['offersnum'];
        $cap = $_POST['offerscap'];
        $des = $_POST['offersdes'];

        if (!empty($num) && !empty($cap) && !empty($des)) {

            $config['upload_path'] = './uploads/clientsoffers/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
//            $config['max_size']             = 100;
//            $config['max_width']            = 1024;
//            $config['max_height']           = 768;
            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_one_file')) {

                $image = $this->upload->data("file_name");
                $img_ext = $this->upload->data('file_ext');

                $data = [
                    "offers_num" => $num,
                    "offers_cap" => $cap,
                    "offers_des" => $des,
                    "file" => $image,
                    "file_ext" => $img_ext
                ];

                $this->db->insert('single_offers', $data);
                redirect(base_url('admin_clients_offers_list'));

            } else {
                $data = [
                    "offers_num" => $num,
                    "offers_cap" => $cap,
                    "offers_des" => $des,
                ];

                $this->db->insert('single_offers', $data);
                redirect(base_url('admin_clients_offers_list'));
            }
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function single_off_del($id)
    {
        $this->db->where('id', $id)->delete('single_offers');
        redirect(base_url('admin_clients_offers_list'));
    }

    public function single_off_upt($id)
    {
        $data['select_single_data'] = $this->db->where('id', $id)->get('single_offers')->row_array();
//        $data['select_upt_single']  = $this->db->where('id',$id)->get('single_offers')->row_array();
        $this->load->view('adminDash/userPages/single_off_edit', $data);
    }

    public function single_off_upt_act($id)
    {
        $num = $_POST['offersnum'];
        $cap = $_POST['offerscap'];
        $des = $_POST['offersdes'];

        if (!empty($num) && !empty($cap) && !empty($des)) {
            $config['upload_path'] = './uploads/clientsoffers/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_two_file')) {
                $image = $this->upload->data('file_name');
                $img_ext = $this->upload->data('file_ext');

                $data = [
                    "offers_num" => $num,
                    "offers_cap" => $cap,
                    "offers_des" => $des,
                    "file" => $image,
                    "file_ext" => $img_ext
                ];

                $this->db->where('id', $id)->update('single_offers', $data);
                redirect(base_url('admin_clients_offers_list'));
            } else {
                $data = [
                    "offers_num" => $num,
                    "offers_cap" => $cap,
                    "offers_des" => $des,
                ];

                $this->db->where('id', $id)->update('single_offers', $data);
                redirect(base_url('admin_clients_offers_list'));
            }
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

//////Single Offers List End//////

//////History Section Start//////

    public function history_list()
    {
        $data['select_history_data'] = $this->db->order_by('id', 'DESC')->get('our_history')->result_array();
        $this->load->view('adminDash/userPages/area_history_list', $data);
    }

    public function history_add()
    {
        $this->load->view('adminDash/userPages/area_history_add');
    }

    public function history_add_act()
    {
        $title = $_POST['hstitle'];
        $hstwotil = $_POST['hstwotil'];
        $hsdesc = $_POST['hsdesc'];
        $hsbutton = $_POST['hsbutton'];

        if (!empty($title) && !empty($hstwotil) && !empty($hsdesc) && !empty($hsbutton)) {
            $config['upload_path'] = './uploads/areahistory/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_file')) {

                $img = $this->upload->data('file_name');
                $img_ext = $this->upload->data('file_ext');

                $data = [
                    "hs_title" => $title,
                    "hs_two_til" => $hstwotil,
                    "hs_desc" => $hsdesc,
                    "hs_button" => $hsbutton,
                    "user_file" => $img,
                    "file_ext" => $img_ext
                ];

                $this->db->insert('our_history', $data);
                redirect(base_url('admin_history_list'));

            } else {

                $data = [
                    "hs_title" => $title,
                    "hs_two_til" => $hstwotil,
                    "hs_desc" => $hsdesc,
                    "hs_button" => $hsbutton,
                ];

                $this->db->insert('our_history', $data);
                redirect(base_url('admin_history_list'));

            }

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function history_del($id)
    {
        $this->db->where('id', $id)->delete('our_history');
        redirect(base_url('admin_history_list'));
    }

    public function history_edit($id)
    {
        $data['select_history_upt'] = $this->db->where('id', $id)->get('our_history')->row_array();
        $this->load->view('adminDash/userPages/area_history_edit', $data);
    }

    public function history_edit_act($id)
    {
        $title = $_POST['hstitle'];
        $hstwotil = $_POST['hstwotil'];
        $hsdesc = $_POST['hsdesc'];
        $hsbutton = $_POST['hsbutton'];

        if (!empty($title) && !empty($hstwotil) && !empty($hsdesc) && !empty($hsbutton)) {
            $config['upload_path'] = './uploads/areahistory/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_file')) {

                $img = $this->upload->data('file_name');
                $img_ext = $this->upload->data('file_ext');

                $data = [
                    "hs_title" => $title,
                    "hs_two_til" => $hstwotil,
                    "hs_desc" => $hsdesc,
                    "hs_button" => $hsbutton,
                    "user_file" => $img,
                    "file_ext" => $img_ext
                ];

                $this->db->where('id', $id)->update('our_history', $data);
                redirect(base_url('admin_history_list'));

            } else {

                $data = [
                    "hs_title" => $title,
                    "hs_two_til" => $hstwotil,
                    "hs_desc" => $hsdesc,
                    "hs_button" => $hsbutton,
                ];

                $this->db->where('id', $id)->update('our_history', $data);
                redirect(base_url('admin_history_list'));

            }

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

//////History Section End//////

//////Client Feedback Start///////

    public function client_feed_list()
    {
        $data['select_feed_data'] = $this->db->order_by('id', 'DESC')->get('client_feedback')->result_array();
        $data['select_feed_img'] = $this->db->order_by('id', 'DESC')->get('client_feed_img')->result_array();
        $this->load->view('adminDash/userPages/client_feedback_list', $data);
    }

    public function client_feed_add()
    {
        $this->load->view('adminDash/userPages/client_feed_add');
    }

    public function client_feed_add_act()
    {
        $title    = $_POST['honetitle'];
        $title2nd = $_POST['htwotitle'];

        if (!empty($title) && !empty($title2nd)) {

                $data = [
                    "h_one_title" => $title,
                    "h_two_title" => $title2nd,
                ];

                $this->db->insert('client_feedback', $data);
                redirect(base_url('admin_client_feed_list'));

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function client_feed_del($id)
    {
        $this->db->where('id', $id)->delete('client_feedback');
        redirect(base_url('admin_client_feed_list'));
    }

    public function client_feed_edit($id)
    {
        $data['select_feed_upt'] = $this->db->where('id', $id)->get('client_feedback')->row_array();
        $this->load->view('adminDash/userPages/client_feed_edit', $data);
    }

    public function client_feed_edit_act($id)
    {
        $title    = $_POST['honetitle'];
        $title2nd = $_POST['htwotitle'];

        if (!empty($title) && !empty($title2nd)) {

            $data = [
                "h_one_title" => $title,
                "h_two_title" => $title2nd,
            ];

            $this->db->insert('client_feedback', $data);
            redirect(base_url('admin_client_feed_list'));

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function c_feed_img_add()
    {
        $this->load->view('adminDash/userPages/c_feed_img_add');
    }

    public function c_feed_img_add_act()
    {
        $img = $_POST['user_file'];

        if (!empty($img)) {
            $config['upload_path'] = './uploads/clientfeedback/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_file')) {
                $img     = $this->upload->data('file_name');
                $img_ext = $this->upload->data('file_ext');

                $data = [
                    "file" => $img,
                    "file_ext" => $img_ext
                ];

                $this->db->insert('client_feed_img', $data);
                redirect(base_url('admin_client_feed_list'));
            } else {
                redirect(base_url('admin_c_feed_img_add'));
            }

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function c_feed_img_del($id)
    {
        $this->db->where('id', $id)->delete('client_feed_img');
        redirect(base_url('admin_client_feed_list'));
    }

    public function c_feed_img_edit($id)
    {
        $data['fileUp'] = $this->db->where('id', $id)->get('client_feed_img')->row_array();
        $this->load->view('adminDash/userPages/c_feed_img_edit',$data);
    }

    public function c_feed_img_edit_act($id)
    {
        $config['upload_path']          = './uploads/clientfeedback/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $this->upload->initialize($config);

        if ($this->upload->do_upload('user_file')) {
            $img     = $this->upload->data('file_name');
            $img_ext = $this->upload->data('file_ext');

            $data = [
                "file" => $img,
                "file_ext" => $img_ext
            ];

            $this->db->where('id',$id)->update('client_feed_img', $data);
            redirect(base_url('admin_client_feed_list'));
        }else{

            redirect($_SERVER['HTTP_REFERER']);

        }

    }

//////Client Feedback End//////

//////Visit Tailor Start//////

    public function visit_tailor_list()
    {
        $data['select_visit_data']       = $this->db->order_by('id', 'DESC')->get('visit_tailor')->result_array();
        $data['select_visit_item']       = $this->db->order_by('id', 'DESC')->get('visit_offers')->result_array();
        $data['select_visit_icon_db']    = $this->db->order_by('id', 'DESC')->get('visit_tailor_icons')->result_array();
        $this->load->view('adminDash/userPages/visit_tailor_list',$data);
    }

    public function visit_tailor_add()
    {
        $this->load->view('adminDash/userPages/visit_tailor_add');
    }

    public function visit_tailor_add_act()
    {
        $title        = $_POST['title'];
        $ndtitle      = $_POST['ndtitle'];
        $loca         = $_POST['loca'];
        $email        = $_POST['email'];
        $desc         = $_POST['desc'];
        $date         = $_POST['date'];
        $nddate       = $_POST['nddate'];

        if(!empty($title) && !empty($ndtitle) && !empty($loca) && !empty($email) && !empty($desc) && !empty($date) && !empty($nddate)){

            $data = [
                "title"       => $title,
                "ndtitle"     => $ndtitle,
                "loca"        => $loca,
                "email"       => $email,
                "desc"        => $desc,
                "date"        => $date,
                "nddate"      => $nddate
            ];

            $this->db->insert('visit_tailor',$data);
            redirect(base_url('admin_visit_tailor_list'));

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function visit_tailor_del($id)
    {
        $this->db->where('id',$id)->delete('visit_tailor');
        redirect(base_url('admin_visit_tailor_list'));
    }

    public function visit_tailor_edit($id)
    {
        $data['select_visit_upt'] = $this->db->where('id', $id)->get('visit_tailor')->row_array();
        $this->load->view('adminDash/userPages/visit_tailor_edit',$data);
    }

    public function visit_tailor_edit_act($id)
    {
        $title        = $_POST['title'];
        $ndtitle      = $_POST['ndtitle'];
        $loca         = $_POST['loca'];
        $email        = $_POST['email'];
        $desc         = $_POST['desc'];
        $nddate       = $_POST['nddate'];

        if(!empty($title) && !empty($ndtitle) && !empty($loca) && !empty($email) && !empty($desc) && !empty($date)){

            $data = [
                "title"       => $title,
                "ndtitle"     => $ndtitle,
                "loca"        => $loca,
                "email"       => $email,
                "desc"        => $desc,
                "date"        => $date,
                "nddate"      => $nddate
            ];

            $this->db->where('id',$id)->update('visit_tailor',$data);
            redirect(base_url('admin_visit_tailor_list'));

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }


    }

    public function visit_offers_add()
    {
        $this->load->view('adminDash/userPages/visit_offers_add');
    }

    public function visit_offers_add_act()
    {
        $hpercent    = $_POST['hpercent'];
        $visitbutton = $_POST['visit_button'];

        if (!empty($hpercent) && !empty($visitbutton)) {
            $config['upload_path'] = './uploads/visitimg/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_file')) {

                $img = $this->upload->data('file_name');

                $data = [
                    "hpercent"     => $hpercent,
                    "visit_button" => $visitbutton,
                    "user_file"    => $img
                ];

                $this->db->insert('visit_offers', $data);
                redirect(base_url('admin_visit_tailor_list'));

            } else {

                $data = [
                    "hpercent"     => $hpercent,
                    "visit_button" => $visitbutton
                ];

                $this->db->insert('visit_offers', $data);
                redirect(base_url('admin_visit_tailor_list'));

            }
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function visit_offers_del($id)
    {
        $this->db->where('id',$id)->delete('visit_offers');
        redirect(base_url('admin_visit_tailor_list'));
    }

    public function visit_offers_edit($id)
    {
        $data['select_off_upt'] = $this->db->where('id', $id)->get('visit_offers')->row_array();
        $this->load->view('adminDash/userPages/visit_offers_edit',$data);
    }

    public function visit_offers_edit_act($id)
    {
        $hpercent    = $_POST['hpercent'];
        $visitbutton = $_POST['visit_button'];

        if (!empty($hpercent) && !empty($visitbutton)) {
            $config['upload_path'] = './uploads/visitimg/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('user_file')) {

                $img = $this->upload->data('file_name');

                $data = [
                    "hpercent"     => $hpercent,
                    "visit_button" => $visitbutton,
                    "user_file"    => $img
                ];

                $this->db->where('id',$id)->update('visit_offers', $data);
                redirect(base_url('admin_visit_tailor_list'));

            } else {

                $data = [
                    "hpercent"     => $hpercent,
                    "visit_button" => $visitbutton
                ];

                $this->db->where('id',$id)->update('visit_offers', $data);
                redirect(base_url('admin_visit_tailor_list'));

            }
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function visit_tailor_icon_add()
    {
        $this->load->view('adminDash/userPages/visit_tailor_icons_add');
    }

    public function visit_tailor_icon_add_act()
    {
        $title       = $_POST['title'];
        $icon        = $_POST['icon'];
        $icon_https  = $_POST['icon_https'];

        if (!empty($title) && !empty($icon) && !empty($icon_https)) {

            $data = [
                "title"         => $title,
                "icon"          => $icon,
                "icon_https"    => $icon_https,
            ];

            $this->db->insert('visit_tailor_icons', $data);
            redirect(base_url('admin_visit_tailor_list'));

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function visit_tailor_icon_del($id)
    {
        $this->db->where('id',$id)->delete('visit_tailor_icons');
        redirect(base_url('admin_visit_tailor_list'));
    }

    public function visit_tailor_icon_edit($id)
    {
        $data['select_visit_icons_upt'] = $this->db->where('id', $id)->get('visit_tailor_icons')->row_array();
        $this->load->view('adminDash/userPages/visit_tailor_icons_edit',$data);
    }

    public function visit_tailor_icon_edit_act($id)
    {
        $title       = $_POST['title'];
        $icon        = $_POST['icon'];
        $icon_https  = $_POST['icon_https'];

        if (!empty($title) && !empty($icon) && !empty($icon_https)) {

            $data = [
                "title"         => $title,
                "icon"          => $icon,
                "icon_https"    => $icon_https,
            ];

            $this->db->where('id',$id)->update('visit_tailor_icons', $data);
            redirect(base_url('admin_visit_tailor_list'));

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

//////Visit Tailor End//////

//////Testimonial Area Start//////

    public function testimonial_list()
    {
        $data['select_visit_data'] = $this->db->order_by('id', 'DESC')->get('visit_tailor')->result_array();
        $data['select_testi_data'] = $this->db->order_by('id', 'DESC')->get('testimonial_area')->result_array();
        $data['select_title_data'] = $this->db->order_by('id', 'DESC')->get('testimonial_title')->result_array();
        $this->load->view('adminDash/userPages/testimonial_list',$data);
    }

    public function testimonial_add()
    {
        $this->load->view('adminDash/userPages/testimonial_add');
    }

    public function testimonial_add_act()
    {
        $desc   = $_POST['description'];

        if(!empty($desc)){

            $config['upload_path'] = './uploads/testimonial_img/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if($this->upload->do_upload('user_file')){
                $img = $this->upload->data('file_name');

                $data = [
                    "description"   => $desc,
                    "user_file"     => $img
                ];

                $this->db->insert('testimonial_area',$data);
                redirect(base_url('admin_testimonial_list'));
            }else{
                $data = [
                    "description"   => $desc
                ];

                $this->db->insert('testimonial_area',$data);
                redirect(base_url('admin_testimonial_list'));
            }


        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function testimonial_add_title()
    {
        $this->load->view('adminDash/userPages/testimonial_add_title');
    }

    public function test_add_title_act()
    {
        $title      = $_POST['title'];

        if(!empty($title)){

            $data = [
                "title"     => $title
            ];

            $this->db->insert('testimonial_title',$data);
            redirect(base_url('admin_testimonial_list'));

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function testi_del($id)
    {
        $this->db->where('id',$id)->delete('testimonial_title');
        redirect(base_url('admin_testimonial_list'));
    }

    public function testimonial_edit_1($id)
    {
        $data['select_testi_vse'] = $this->db->where('id',$id)->get('testimonial_title')->row_array();
        $this->load->view('adminDash/userPages/testimonial_edit_title',$data);
    }

    public function testimonial_edit_1_act($id)
    {
        $title      = $_POST['title'];

        if(!empty($title)){

            $data = [
                "title"     => $title
            ];

            $this->db->where('id',$id)->update('testimonial_title',$data);
            redirect(base_url('admin_testimonial_list'));

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function testimonial_del($id)
    {
        $this->db->where('id',$id)->delete('testimonial_area');
        redirect(base_url('admin_testimonial_list'));
    }

    public function testimonial_edit($id)
    {
        $data['select_testi_upt'] = $this->db->where('id',$id)->get('testimonial_area')->row_array();
        $this->load->view('adminDash/userPages/testimonial_edit',$data);
    }

    public function testimonial_edit_act($id)
    {
        $desc   = $_POST['description'];

        if(!empty($desc)){

            $config['upload_path'] = './uploads/testimonial_img/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if($this->upload->do_upload('user_file')){
                $img = $this->upload->data('file_name');

                $data = [
                    "description"   => $desc,
                    "user_file"     => $img
                ];

                $this->db->where('id',$id)->update('testimonial_area',$data);
                redirect(base_url('admin_testimonial_list'));
            }else{
                $data = [
                    "description"   => $desc
                ];

                $this->db->where('id',$id)->update('testimonial_area',$data);
                redirect(base_url('admin_testimonial_list'));
            }


        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

//////Testimonial Area End//////

///////The userPages End/////

//////The user Gallery Pages//////

//////Banner Start//////

    public function gall_banner_list()
    {
        $data['select_gall_data'] = $this->db->order_by('id', 'DESC')->get('gall_banner')->result_array();
        $this->load->view('adminDash/galleryPages/banner_list',$data);
    }

    public function gall_banner_add()
    {
        $this->load->view('adminDash/galleryPages/gall_banner_add');
    }

    public function gall_banner_add_act()
    {
        $title = $_POST['title'];

        if(!empty($title)){

            $config['upload_path'] = './uploads/gallbanner/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if($this->upload->do_upload('gall_file')){
                $img = $this->upload->data('file_name');

                $data = [
                  'title'       => $title,
                  'gall_file'   => $img
                ];

                $this->db->insert('gall_banner',$data);
                redirect(base_url('admin_gall_banner_list'));

            }else{

                $data = [
                    'title'       => $title,
                ];

                $this->db->insert('gall_banner',$data);
                redirect(base_url('admin_gall_banner_list'));

            }

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function gall_banner_del($id)
    {
        $this->db->where('id',$id)->delete('gall_banner');
        redirect(base_url('admin_gall_banner_list'));
    }

    public function gall_banner_edit($id)
    {
        $data['select_gall_upt'] = $this->db->where('id',$id)->get('gall_banner')->row_array();
        $this->load->view('adminDash/galleryPages/gall_banner_edit',$data);
    }

    public function gall_banner_edit_act($id)
    {
        $title = $_POST['title'];

        if(!empty($title)){

            $config['upload_path'] = './uploads/gallbanner/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if($this->upload->do_upload('gall_file')){
                $img = $this->upload->data('file_name');

                $data = [
                    'title'       => $title,
                    'gall_file'   => $img
                ];

                $this->db->where('id',$id)->update('gall_banner',$data);
                redirect(base_url('admin_gall_banner_list'));

            }else{

                $data = [
                    'title'       => $title,
                ];

                $this->db->where('id',$id)->update('gall_banner',$data);
                redirect(base_url('admin_gall_banner_list'));

            }

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

//////Banner End//////

//////Gallery Client Start//////

    public function gall_client_list()
    {
        $data['select_gall_client'] = $this->db->order_by('id','DESC')->get('gall_client')->result_array();
        $data['select_gall_img']    = $this->db->order_by('id','DESC')->get('gall_client_img')->result_array();
        $this->load->view('adminDash/galleryPages/gall_client_list',$data);
    }

    public function gall_client_add()
    {
        $this->load->view('adminDash/galleryPages/gall_client_add');
    }

    public function gall_client_add_act()
    {
        $title      = $_POST['title'];
        $sectitle   = $_POST['secondary_title'];

        if(!empty($title) && !empty($sectitle)){

            $data = [
                'title'             => $title,
                'secondary_title'   => $sectitle
            ];

            $this->db->insert('gall_client',$data);
            redirect(base_url('admin_gall_client_list'));

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function gall_client_del($id)
    {
        $this->db->where('id',$id)->delete('gall_client');
        redirect(base_url('admin_gall_client_list'));
    }

    public function gall_client_edit($id)
    {
        $data['select_gall_upt'] = $this->db->where('id',$id)->get('gall_client')->row_array();
        $this->load->view('adminDash/galleryPages/gall_client_edit',$data);
    }

    public function gall_client_edit_act($id)
    {
        $title      = $_POST['title'];
        $sectitle   = $_POST['secondary_title'];

        if(!empty($title) && !empty($sectitle)){

            $data = [
                'title'             => $title,
                'secondary_title'   => $sectitle
            ];

            $this->db->where('id',$id)->update('gall_client',$data);
            redirect(base_url('admin_gall_client_list'));

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function gall_client_img_add()
    {
        $this->load->view('adminDash/galleryPages/gall_client_img_add');
    }

    public function gall_client_img_add_act()
    {
        $img = $_POST['gall_file'];

        if (empty($img)) {
            $config['upload_path'] = './uploads/gallclient/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('gall_file')) {
                $img     = $this->upload->data('file_name');
                $img_ext = $this->upload->data('file_ext');

                $data = [
                    "client_img" => $img,
                    "file_ext"   => $img_ext
                ];

                $this->db->insert('gall_client_img', $data);
                redirect(base_url('admin_gall_client_list'));
            } else {
                redirect(base_url('admin_gall_client_list'));
            }

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function gall_client_img_del($id)
    {
        $this->db->where('id',$id)->delete('gall_client_img');
        redirect(base_url('admin_gall_client_list'));
    }

    public function gall_client_img_edit($id)
    {
        $data['select_gall_client_img'] = $this->db->where('id',$id)->get('gall_client_img')->row_array();
        $this->load->view('adminDash/galleryPages/gall_client_img_edit',$data);
    }

    public function gall_client_img_edit_act($id)
    {
        $img = $_POST['gall_file'];

        if (empty($img)) {
            $config['upload_path'] = './uploads/gallclient/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('gall_file')) {
                $img     = $this->upload->data('file_name');
                $img_ext = $this->upload->data('file_ext');

                $data = [
                    "client_img" => $img,
                    "file_ext"   => $img_ext
                ];

                $this->db->where('id',$id)->update('gall_client_img', $data);
                redirect(base_url('admin_gall_client_list'));
            } else {
                redirect(base_url('admin_gall_client_list'));
            }

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

//////Gallery Client End//////

//////Gallery Photos Start//////

    public function gall_photos_list()
    {
        $data['select_gall_title'] = $this->db->order_by('id','DESC')->get('gall_photo_title')->result_array();
        $data['select_gall_photos'] = $this->db->order_by('id','DESC')->get('gall_photos')->result_array();
        $this->load->view('adminDash/galleryPages/gall_photos_list',$data);
    }

    public function gall_photo_title_add()
    {
        $this->load->view('adminDash/galleryPages/gall_photo_title_add');
    }

    public function gall_photo_title_add_act()
    {
        $title      = $_POST['title'];

        if(!empty($title)){

            $data = [
                "title"     => $title
            ];

            $this->db->insert('gall_photo_title',$data);
            redirect(base_url('admin_gall_photos_list'));

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function gall_photo_title_del($id)
    {
        $this->db->where('id',$id)->delete('gall_photo_title');
        redirect(base_url('admin_gall_photos_list'));
    }

    public function gall_photo_title_edit($id)

    {
        $data['select_gall_photo_title'] = $this->db->where('id',$id)->get('gall_photo_title')->row_array();
        $this->load->view('adminDash/galleryPages/gall_photo_title_edit',$data);
    }

    public function gall_photo_title_edit_act($id)
    {
        $title      = $_POST['title'];

        if(!empty($title)){

            $data = [
                "title"     => $title
            ];

            $this->db->where('id',$id)->update('gall_photo_title',$data);
            redirect(base_url('admin_gall_photos_list'));

        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function gall_photos_add()
    {
        $this->load->view('adminDash/galleryPages/gall_photos_add');
    }

    public function gall_photos_add_act()
    {
        $img = $_POST['gall_img_file'];

        if (empty($img)) {
            $config['upload_path'] = './uploads/gallphotos/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('gall_img_file')) {
                $img     = $this->upload->data('file_name');
                $img_ext = $this->upload->data('file_ext');

                $data = [
                    "gall_file"  => $img,
                    "file_ext"   => $img_ext
                ];

                $this->db->insert('gall_photos', $data);
                redirect(base_url('admin_gall_photos_list'));
            } else {
                redirect(base_url('admin_gall_photos_list'));
            }

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function gall_photos_del($id)
    {
        $this->db->where('id',$id)->delete('gall_photos');
        redirect(base_url('admin_gall_photos_list'));
    }

    public function gall_photos_edit($id)
    {
        $data['select_gall_photos_upt'] = $this->db->where('id',$id)->get('gall_photos')->row_array();
        $this->load->view('adminDash/galleryPages/gall_photos_edit',$data);
    }

    public function gall_photos_edit_act($id)
    {
        $img = $_POST['gall_img_file'];

        if (empty($img)) {
            $config['upload_path'] = './uploads/gallphotos/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('gall_img_file')) {
                $img     = $this->upload->data('file_name');
                $img_ext = $this->upload->data('file_ext');

                $data = [
                    "gall_file"  => $img,
                    "file_ext"   => $img_ext
                ];

                $this->db->where('id',$id)->update('gall_photos', $data);
                redirect(base_url('admin_gall_photos_list'));
            } else {
                redirect(base_url('admin_gall_photos_list'));
            }

        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    // public function comment_add_act()
    // {
    //     $name = $_POST['name'];
    //     $comm = $_POST['comment'];
    //     $id   = $_POST['id'];
    //     $date = date("F j, Y, H:m");
    //
    //     if(!empty($name) && !empty($comm) && !empty($id) && !empty($date)) {
    //
    //         $data = [
    //             'name'     => $name,
    //             'comment'  => $comm,
    //             'id'       => $id,
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

//////Gallery Photos End//////



//////The user Gallery Pages End//////

}
