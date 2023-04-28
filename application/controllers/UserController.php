<?php


class UserController extends CI_Controller
{
    public function index()
    {
        $data['select_all_item']     = $this->db->get('navitem')->result_array(); //NavBar
        $data['select_banner']       = $this->db->get('banner')->result_array(); //Banner 1nd
        $data['select_hero_main']    = $this->db->get('twondbanner')->result_array(); //Banner 2nd
        $data['select_clients']      = $this->db->get('client_offers')->result_array(); //CLients Offers
        $data['select_single_db']    = $this->db->get('single_offers')->result_array(); //CLients Offers
        $data['select_history_db']   = $this->db->get('our_history')->result_array(); //CLients Offers
        $data['select_feedbk_db']    = $this->db->get('client_feedback')->result_array(); //CLients Offers
        $data['select_feedimg_db']   = $this->db->order_by('id', 'DESC')->get('client_feed_img')->result_array(); //CLients Image Offers
        $data['select_visit_db']     = $this->db->order_by('id', 'DESC')->get('visit_tailor')->result_array(); //Visit Tailor
        $data['select_visit_i_db']   = $this->db->order_by('id', 'ASC')->get('visit_tailor_icons')->result_array(); //Visit Tailor
        $data['select_off_db']       = $this->db->order_by('id', 'DESC')->get('visit_offers')->result_array(); //Visit Offers
        $data['select_testi_db']     = $this->db->order_by('id', 'DESC')->get('testimonial_area')->result_array(); //Testimonial Description
        $data['select_tt_db']        = $this->db->order_by('id', 'DESC')->get('testimonial_title')->result_array(); //Testimonial Title
        // Footer Data
        $data['select_footer_db']       = $this->db->order_by('id', 'DESC')->get('footer_title')->result_array(); //Testimonial Title
        $data['foo_contact_db']         = $this->db->order_by('id', 'DESC')->get('footer_desc')->result_array(); //Contact Description
        $data['select_link_s_db']       = $this->db->order_by('id', 'DESC')->get('footer_link_title')->result_array(); //Footer Link Title
        $data['select_links_db']        = $this->db->order_by('id', 'DESC')->get('footer_links')->result_array(); //Contact Description
        $data['select_icon_db']         = $this->db->order_by('id', 'DESC')->get('footer_icons')->result_array(); //Social Icons
        $data['select_icon_title_db']   = $this->db->order_by('id', 'DESC')->get('footer_icon_title')->result_array(); //Social Icons

        $this->load->view('userview/index', $data);
    }


    public function gellary()
    {
        $data['select_all_item']              = $this->db->get('navitem')->result_array(); //NavBar
        $data['select_gall_item']             = $this->db->get('gall_banner')->result_array(); //Banner
        $data['select_gall_client_db']        = $this->db->get('gall_client')->result_array(); //Client Section
        $data['select_gall_clit_img_db']      = $this->db->order_by('id', "DESC")->get('gall_client_img')->result_array(); //Client Image Section
        $data['select_gall_photos_db']        = $this->db->order_by('id', "DESC")->get('gall_photos')->result_array(); //Client Image Section
        $data['select_gall_photos_ttl_db']    = $this->db->order_by('id', "DESC")->get('gall_photo_title')->result_array(); //Client Image Section
        // Footer Data
        $data['select_footer_db']       = $this->db->order_by('id', 'DESC')->get('footer_title')->result_array(); //Testimonial Title
        $data['foo_contact_db']         = $this->db->order_by('id', 'DESC')->get('footer_desc')->result_array(); //Contact Description
        $data['select_link_s_db']       = $this->db->order_by('id', 'DESC')->get('footer_link_title')->result_array(); //Footer Link Title
        $data['select_links_db']        = $this->db->order_by('id', 'DESC')->get('footer_links')->result_array(); //Contact Description
        $data['select_icon_db']         = $this->db->order_by('id', 'DESC')->get('footer_icons')->result_array(); //Social Icons
        $data['select_icon_title_db']   = $this->db->order_by('id', 'DESC')->get('footer_icon_title')->result_array(); //Social Icons

        $this->load->view('userview/gellary', $data);
    }

    public function blog()
    {
        $data['select_all_item']            = $this->db->get('navitem')->result_array(); //NavBar
        $data['select_blog_db']             = $this->db->get('blog_banner')->result_array(); //Title
        $data['select_blog_area_db']        = $this->db->get('blog_area')->result_array(); //Area
        $data['select_side_item']           = $this->db->limit(4)->get('blog_area')->result_array(); //Recent Post
        $data['select_blog_cate_title_db']  = $this->db->order_by('id', 'ACS')->get('blog_cate_title')->result_array(); //Category Resaurant food
        $data['select_blog_cate_db']        = $this->db->order_by('id', 'ACS')->get('blog_cate')->result_array(); //Category Resaurant food
        // Footer Data
        $data['select_footer_db']       = $this->db->order_by('id', 'DESC')->get('footer_title')->result_array(); //Testimonial Title
        $data['foo_contact_db']         = $this->db->order_by('id', 'DESC')->get('footer_desc')->result_array(); //Contact Description
        $data['select_link_s_db']       = $this->db->order_by('id', 'DESC')->get('footer_link_title')->result_array(); //Footer Link Title
        $data['select_links_db']        = $this->db->order_by('id', 'DESC')->get('footer_links')->result_array(); //Contact Description
        $data['select_icon_db']         = $this->db->order_by('id', 'DESC')->get('footer_icons')->result_array(); //Social Icons
        $data['select_icon_title_db']   = $this->db->order_by('id', 'DESC')->get('footer_icon_title')->result_array(); //Social Icons

        $this->load->view('userview/blog', $data);
    }

    // public function footer_section()
    // {
    //     $data['footer_title']   = $this->db->get('footer_title')->result_array(); //Footer Title
    //
    //     $this->load->view('userview/includes/fooTer',$data);
    // }

    public function single_blog($id)
    {
        $data['select_all_item']        = $this->db->get('navitem')->result_array(); //NavBar
        $data['select_blog_area_db']    = $this->db->where('id', $id)->get('blog_area')->result_array(); //Area
        $data['select_single_title_db'] = $this->db->get('single_blog_title')->result_array(); //Single Title
        $data['select_comments_db']     = $this->db->where('id', $id)->get('single_message')->result_array(); // Comment
        // Footer Data
        $data['select_footer_db']       = $this->db->order_by('id', 'DESC')->get('footer_title')->result_array(); //Testimonial Title
        $data['foo_contact_db']         = $this->db->order_by('id', 'DESC')->get('footer_desc')->result_array(); //Contact Description
        $data['select_link_s_db']       = $this->db->order_by('id', 'DESC')->get('footer_link_title')->result_array(); //Footer Link Title
        $data['select_links_db']        = $this->db->order_by('id', 'DESC')->get('footer_links')->result_array(); //Contact Description
        $data['select_icon_db']         = $this->db->order_by('id', 'DESC')->get('footer_icons')->result_array(); //Social Icons
        $data['select_icon_title_db']   = $this->db->order_by('id', 'DESC')->get('footer_icon_title')->result_array(); //Social Icons

        $this->load->view('userview/single-blog', $data);
    }

    public function contact()
    {
        $data['select_all_item']       = $this->db->get('navitem')->result_array(); //NavBar
        $data['select_cont_bann']      = $this->db->get('con_banner')->result_array(); //Banner
        $data['select_cont_lock']      = $this->db->get('con_location')->result_array(); //Location
        $data['select_cont_db']        = $this->db->get('cont_title')->result_array(); //Message Title
        $data['select_cons_db']        = $this->db->get('cont_address')->result_array(); //Address
        // Footer Data
        $data['select_footer_db']       = $this->db->order_by('id', 'DESC')->get('footer_title')->result_array(); //Testimonial Title
        $data['foo_contact_db']         = $this->db->order_by('id', 'DESC')->get('footer_desc')->result_array(); //Contact Description
        $data['select_link_s_db']       = $this->db->order_by('id', 'DESC')->get('footer_link_title')->result_array(); //Footer Link Title
        $data['select_links_db']        = $this->db->order_by('id', 'DESC')->get('footer_links')->result_array(); //Contact Description
        $data['select_icon_db']         = $this->db->order_by('id', 'DESC')->get('footer_icons')->result_array(); //Social Icons
        $data['select_icon_title_db']   = $this->db->order_by('id', 'DESC')->get('footer_icon_title')->result_array(); //Social Icons

        $this->load->view('userview/contact', $data);
    }
}
