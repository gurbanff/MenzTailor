<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

//The User Site.///////////////////////////////////////////////////

$route['default_controller']     = 'UserController/index';
$route['Gallery']                = 'UserController/gellary';
$route['Blog']                   = 'UserController/blog';
$route['Contact']                = 'UserController/contact';
$route['Single_Blog/(:any)']     = 'UserController/single_blog/$1';
$route['add_comment_act']        = 'UserController/add_comment_act';
$route['add_user_comment_act']   = 'UserController/add_user_comment_act';
$route['Blog_Category']          = 'UserController/blog_category';
$route['Side_Item']              = 'UserController/side_item';
// $route['Footer']                 = 'UserController/footer_section';

//End User Site.///////////////////////////////////////////////////

$route['Login']                                      = 'AdminDashboard/login';
$route['LoginAct']                                   = 'AdminDashboard/loginAct';
$route['LoginOut']                                   = 'AdminDashboard/loginOut';
$route['Dashboard']                                  = 'AdminDashboard/index';
$route['admin_news_add_action']                      = 'AdminDashboard/news_add_action';
$route['admin_update_nav']                           = 'AdminDashboard/update_nav';
$route['admin_news_edit/(:any)']                     = 'AdminDashboard/news_edit/$1';
$route['admin_news_edit_act/(:any)']                 = 'AdminDashboard/news_edit_act/$1';
$route['admin_home_delete/(:any)']                   = 'AdminDashboard/home_delete/$1';
$route['admin_footer_title_edit/(:any)']             = 'AdminDashboard/footer_title_edit/$1';
$route['admin_footer_title_edit_act/(:any)']         = 'AdminDashboard/footer_title_edit_act/$1';
$route['admin_footer_contact_edit/(:any)']           = 'AdminDashboard/footer_contact_edit/$1';
$route['admin_footer_contact_edit_act/(:any)']       = 'AdminDashboard/footer_contact_edit_act/$1';
$route['admin_footer_link_title_edit/(:any)']        = 'AdminDashboard/footer_link_title_edit/$1';
$route['admin_footer_link_title_edit_act/(:any)']    = 'AdminDashboard/footer_link_title_edit_act/$1';
$route['admin_footer_links_edit/(:any)']             = 'AdminDashboard/footer_links_edit/$1';
$route['admin_footer_links_edit_act/(:any)']         = 'AdminDashboard/footer_links_edit_act/$1';
$route['admin_footer_face_edit/(:any)']              = 'AdminDashboard/footer_face_edit/$1';
$route['admin_footer_face_edit_act/(:any)']          = 'AdminDashboard/footer_face_edit_act/$1';
$route['admin_footer_icon_title/(:any)']             = 'AdminDashboard/footer_icon_title/$1';
$route['admin_footer_icon_title_act/(:any)']         = 'AdminDashboard/footer_icon_title_act/$1';

///The userPages  //////////////////////////////////////////
$route['Home_Page']                      = 'AdminDashboard/home_page';
$route['Home_Edit']                      = 'AdminDashboard/home_list_edit';
$route['Home_Page_Edit']                 = 'AdminDashboard/home_page';
$route['Home_Edit_Act']                  = 'AdminDashboard/home_edit_act';
$route['HomeUpdate/(:any)']              = 'AdminDashboard/home_edit_update/$1';
$route['EditUpdate/(:any)']              = 'AdminDashboard/edit_update_act/$1';
$route['Home_Banner_Add']                = 'AdminDashboard/home_banner_add';
$route['Home_Banner_Act']                = 'AdminDashboard/home_banner_act';
$route['Home_Banner_Del/(:any)']         = 'AdminDashboard/home_banner_del/$1';
$route['Home_Banner_Edit/(:any)']        = 'AdminDashboard/home_banner_edit/$1';
$route['Home_Banner_Edit_Act']           = 'AdminDashboard/home_banner_edit_act';

//////Clients Offers List Start//////////////////////////////////////////////////

$route['admin_clients_offers_list']             = 'AdminDashboard/clients_offers_list';
$route['admin_clients_offers_add']              = 'AdminDashboard/clients_offers_add';
$route['admin_clients_offers_add_act']          = 'AdminDashboard/clients_offers_add_act';
$route['admin_clients_offers_del/(:any)']       = 'AdminDashboard/clients_offers_del/$1';
$route['admin_clients_offers_upt/(:any)']       = 'AdminDashboard/clients_offers_upt/$1';
$route['admin_clients_offers_upt_act/(:any)']   = 'AdminDashboard/clients_offers_upt_act/$1';

//////Clients Offers List End//////////////////////////////////////////////////
///
//////Single Offers List Start//////////////////////////////////////////////////

$route['admin_single_off_add']                 = 'AdminDashboard/single_off_add';
$route['admin_single_off_add_act']             = 'AdminDashboard/single_off_add_act';
$route['admin_single_off_del/(:any)']          = 'AdminDashboard/single_off_del/$1';
$route['admin_single_off_upt/(:any)']          = 'AdminDashboard/single_off_upt/$1';
$route['admin_single_off_upt_act/(:any)']      = 'AdminDashboard/single_off_upt_act/$1';

///End userPages  ///////////////////////////////////////////////////////////////

///History Start  ///////////////////////////////////////////////////////////////

$route['admin_history_list']                = 'AdminDashboard/history_list';
$route['admin_history_add']                 = 'AdminDashboard/history_add';
$route['admin_history_add_act']             = 'AdminDashboard/history_add_act';
$route['admin_history_del/(:any)']          = 'AdminDashboard/history_del/$1';
$route['admin_history_edit/(:any)']         = 'AdminDashboard/history_edit/$1';
$route['admin_history_edit_act/(:any)']     = 'AdminDashboard/history_edit_act/$1';

///History End  /////////////////////////////////////////////////////////

///Client Feedback Start  /////////////////////////////////////////////////////

$route['admin_client_feed_list']            = 'AdminDashboard/client_feed_list';
$route['admin_client_feed_add']             = 'AdminDashboard/client_feed_add';
$route['admin_client_feed_add_act']         = 'AdminDashboard/client_feed_add_act';
$route['admin_client_feed_del/(:any)']      = 'AdminDashboard/client_feed_del/$1';
$route['admin_client_feed_edit/(:any)']     = 'AdminDashboard/client_feed_edit/$1';
$route['admin_client_edit_act/(:any)']      = 'AdminDashboard/client_feed_edit_act/$1';
$route['admin_client_edit_act/(:any)']      = 'AdminDashboard/client_feed_edit_act/$1';
$route['admin_c_feed_img_add']              = 'AdminDashboard/c_feed_img_add';
$route['admin_c_feed_img_add_act']          = 'AdminDashboard/c_feed_img_add_act';
$route['admin_c_feed_img_del/(:any)']       = 'AdminDashboard/c_feed_img_del/$1';
$route['admin_c_feed_img_edit/(:any)']      = 'AdminDashboard/c_feed_img_edit/$1';
$route['admin_c_feed_img_edit_act/(:any)']  = 'AdminDashboard/c_feed_img_edit_act/$1';

///Client Feedback End  /////////////////////////////////////////////////////

///Visit Tailor Start  /////////////////////////////////////////////////////

$route['admin_visit_tailor_list']                   = 'AdminDashboard/visit_tailor_list';
$route['admin_visit_tailor_add']                    = 'AdminDashboard/visit_tailor_add';
$route['admin_visit_tailor_add_act']                = 'AdminDashboard/visit_tailor_add_act';
$route['admin_visit_tailor_del/(:any)']             = 'AdminDashboard/visit_tailor_del/$1';
$route['admin_visit_tailor_edit/(:any)']            = 'AdminDashboard/visit_tailor_edit/$1';
$route['admin_visit_tailor_edit_act/(:any)']        = 'AdminDashboard/visit_tailor_edit_act/$1';
$route['admin_visit_tailor_icon_add']               = 'AdminDashboard/visit_tailor_icon_add';
$route['admin_visit_tailor_icon_add_act']           = 'AdminDashboard/visit_tailor_icon_add_act';
$route['admin_visit_tailor_icon_del/(:any)']        = 'AdminDashboard/visit_tailor_icon_del/$1';
$route['admin_visit_tailor_icon_edit/(:any)']       = 'AdminDashboard/visit_tailor_icon_edit/$1';
$route['admin_visit_tailor_icon_edit_act/(:any)']   = 'AdminDashboard/visit_tailor_icon_edit_act/$1';

$route['admin_visit_offers_add']                    = 'AdminDashboard/visit_offers_add';
$route['admin_visit_offers_add_act']                = 'AdminDashboard/visit_offers_add_act';
$route['admin_visit_offers_del/(:any)']             = 'AdminDashboard/visit_offers_del/$1';
$route['admin_visit_offers_edit/(:any)']            = 'AdminDashboard/visit_offers_edit/$1';
$route['admin_visit_offers_edit_act/(:any)']        = 'AdminDashboard/visit_offers_edit_act/$1';

///Visit Tailor End  /////////////////////////////////////////////////////

///Testimonial Area Start /////////////////////////////////////////////////////

$route['admin_testimonial_list']                = 'AdminDashboard/testimonial_list';
$route['admin_testimonial_add']                 = 'AdminDashboard/testimonial_add';
$route['admin_testimonial_add_act']             = 'AdminDashboard/testimonial_add_act';
$route['admin_testimonial_add_title']           = 'AdminDashboard/testimonial_add_title';
$route['admin_test_add_title_act']              = 'AdminDashboard/test_add_title_act';
$route['admin_testi_del/(:any)']                = 'AdminDashboard/testi_del/$1';
$route['admin_testimonial_edit_1/(:any)']       = 'AdminDashboard/testimonial_edit_1/$1';
$route['admin_testimonial_edit_1_act/(:any)']   = 'AdminDashboard/testimonial_edit_1_act/$1';
$route['admin_testimonial_del/(:any)']          = 'AdminDashboard/testimonial_del/$1';
$route['admin_testimonial_edit/(:any)']         = 'AdminDashboard/testimonial_edit/$1';
$route['admin_testimonial_edit_act/(:any)']     = 'AdminDashboard/testimonial_edit_act/$1';

///Testimonial Area End /////////////////////////////////////////////////////

///End userPages ////////////////////////////////////////////////////

///Start Gallery Pages//////////////////////////////////////////////////////

///Gallery Banner Start////////////////////////////////////////////////////

$route['admin_gall_banner_list']                 = 'AdminDashboard/gall_banner_list';
$route['admin_gall_banner_add']                  = 'AdminDashboard/gall_banner_add';
$route['admin_gall_banner_add_act']              = 'AdminDashboard/gall_banner_add_act';
$route['admin_gall_banner_del/(:any)']           = 'AdminDashboard/gall_banner_del/$1';
$route['admin_gall_banner_edit/(:any)']          = 'AdminDashboard/gall_banner_edit/$1';
$route['admin_gall_banner_edit_act/(:any)']      = 'AdminDashboard/gall_banner_edit_act/$1';
$route['admin_gall_banner_edit_act/(:any)']      = 'AdminDashboard/gall_banner_edit_act/$1';

///Gallery Banner End//////////////////////////////////////////////////////////

///Gallery Client Start////////////////////////////////////////////////////////

$route['admin_gall_client_list']                    = 'AdminDashboard/gall_client_list';
$route['admin_gall_client_add']                     = 'AdminDashboard/gall_client_add';
$route['admin_gall_client_add_act']                 = 'AdminDashboard/gall_client_add_act';
$route['admin_gall_client_del/(:any)']              = 'AdminDashboard/gall_client_del/$1';
$route['admin_gall_client_edit/(:any)']             = 'AdminDashboard/gall_client_edit/$1';
$route['admin_gall_client_edit_act/(:any)']         = 'AdminDashboard/gall_client_edit_act/$1';
$route['admin_gall_client_img_add']                 = 'AdminDashboard/gall_client_img_add';
$route['admin_gall_client_img_add_act']             = 'AdminDashboard/gall_client_img_add_act';
$route['admin_gall_client_img_del/(:any)']          = 'AdminDashboard/gall_client_img_del/$1';
$route['admin_gall_client_img_edit/(:any)']         = 'AdminDashboard/gall_client_img_edit/$1';
$route['admin_gall_client_img_edit_act/(:any)']     = 'AdminDashboard/gall_client_img_edit_act/$1';

///Gallery Client End////////////////////////////////////////////////////////

///Gallery Photos Start////////////////////////////////////////////////////////

$route['admin_gall_photos_list']                     = 'AdminDashboard/gall_photos_list';
$route['admin_gall_photo_title_add']                 = 'AdminDashboard/gall_photo_title_add';
$route['admin_gall_photo_title_add_act']             = 'AdminDashboard/gall_photo_title_add_act';
$route['admin_gall_photo_title_del/(:any)']          = 'AdminDashboard/gall_photo_title_del/$1';
$route['admin_gall_photo_title_edit/(:any)']         = 'AdminDashboard/gall_photo_title_edit/$1';
$route['admin_gall_photo_title_edit_act/(:any)']     = 'AdminDashboard/gall_photo_title_edit_act/$1';
$route['admin_gall_photos_add']                      = 'AdminDashboard/gall_photos_add';
$route['admin_gall_photos_add_act']                  = 'AdminDashboard/gall_photos_add_act';
$route['admin_gall_photos_del/(:any)']               = 'AdminDashboard/gall_photos_del/$1';
$route['admin_gall_photos_edit/(:any)']              = 'AdminDashboard/gall_photos_edit/$1';
$route['admin_gall_photos_edit_act/(:any)']          = 'AdminDashboard/gall_photos_edit_act/$1';

///Gallery Photos Start////////////////////////////////////////////////////////

///End Gallery Pages////////////////////////////////////////////////////////

///Blog Pages Start////////////////////////////////////////////////////////////

///Blog Banner Start///////////////////////////////////////////////////////////

$route['admin_blog_banner_list']                 = 'UserPagesController/blog_banner_list';
$route['admin_blog_banner_add']                  = 'UserPagesController/blog_banner_add';
$route['admin_blog_banner_add_act']              = 'UserPagesController/blog_banner_add_act';
$route['admin_blog_banner_del/(:any)']           = 'UserPagesController/blog_banner_del/$1';
$route['admin_blog_banner_edit/(:any)']          = 'UserPagesController/blog_banner_edit/$1';
$route['admin_blog_banner_edit_act/(:any)']      = 'UserPagesController/blog_banner_edit_act/$1';

///Blog Banner End///////////////////////////////////////////////////////////

///Blog Area Start///////////////////////////////////////////////////////////

$route['admin_blog_area_list']                  = 'UserPagesController/blog_area_list';
$route['admin_blog_area_add']                   = 'UserPagesController/blog_area_add';
$route['admin_blog_area_add_act']               = 'UserPagesController/blog_area_add_act';
$route['admin_blog_area_del/(:any)']            = 'UserPagesController/blog_area_del/$1';
$route['admin_blog_area_edit/(:any)']           = 'UserPagesController/blog_area_edit/$1';
$route['admin_blog_area_edit_act/(:any)']       = 'UserPagesController/blog_area_edit_act/$1';

///Blog Area End///////////////////////////////////////////////////////////

///Blog Category Start ///////////////////////////////////////////////////////////
$route['admin_blog_category_icon']                  = 'UserPagesController/blog_category_icon';
$route['admin_blog_category']                       = 'UserPagesController/blog_category';
$route['admin_blog_category_list']                  = 'UserPagesController/blog_category_list';
$route['admin_blog_cate_title_add']                 = 'UserPagesController/blog_cate_title_add';
$route['admin_blog_cate_title_add_act']             = 'UserPagesController/blog_cate_title_add_act';
$route['admin_blog_cate_title_del/(:any)']          = 'UserPagesController/blog_cate_title_del/$1';
$route['admin_blog_cate_title_edit/(:any)']         = 'UserPagesController/blog_cate_title_edit/$1';
$route['admin_blog_cate_title_edit_act/(:any)']     = 'UserPagesController/blog_cate_title_edit_act/$1';
$route['admin_blog_category_add']                   = 'UserPagesController/blog_category_add';
$route['admin_blog_category_add_act']               = 'UserPagesController/blog_category_add_act';
$route['admin_blog_category_del/(:any)']            = 'UserPagesController/blog_category_del/$1';
$route['admin_blog_category_edit/(:any)']           = 'UserPagesController/blog_category_edit/$1';
$route['admin_blog_category_edit_act/(:any)']       = 'UserPagesController/blog_category_edit_act/$1';
///Blog Category End ///////////////////////////////////////////////////////////

///Blog Pages End////////////////////////////////////////////////////////////

///Single Blog Pages Start////////////////////////////////////////////////////////////


$route['admin_single_blog_list']                = 'UserPagesController/single_blog_list';
$route['admin_single_blog_add']                 = 'UserPagesController/single_blog_add';
$route['admin_single_blog_add_act']             = 'UserPagesController/single_blog_add_act';
$route['admin_single_blog_del/(:any)']          = 'UserPagesController/single_blog_del/$1';
$route['admin_single_blog_edit/(:any)']         = 'UserPagesController/single_blog_edit/$1';
$route['admin_single_blog_edit_act/(:any)']     = 'UserPagesController/single_blog_edit_act/$1';
//Comment
// $route['admin_comment_add_act']                 = 'UserPagesController/comment_add_act';
// $route["add_user_comment_act"]                  = "UserPagesController/add_user_comment_act";
//$route['admin_add_message/(:any)']              = 'UserPagesController/add_message/$1';
//$route['admin_single/(:any)']                   = 'UserPagesController/single/$1';


///Single Blog Pages Start////////////////////////////////////////////////////////////

///Contact Pages Start////////////////////////////////////////////////////////////

$route['admin_con_banner_list']                 = 'UserPagesController/con_banner_list';
$route['admin_con_banner_add']                  = 'UserPagesController/con_banner_add';
$route['admin_con_banner_add_act']              = 'UserPagesController/con_banner_add_act';
$route['admin_con_banner_del/(:any)']           = 'UserPagesController/con_banner_del/$1';
$route['admin_con_banner_edit/(:any)']          = 'UserPagesController/con_banner_edit/$1';
$route['admin_con_banner_edit_act/(:any)']      = 'UserPagesController/con_banner_edit_act/$1';
$route['admin_cont_location_list']              = 'UserPagesController/cont_location_list';
$route['admin_cont_location_add']               = 'UserPagesController/cont_location_add';
$route['admin_cont_location_add_act']           = 'UserPagesController/cont_location_add_act';
$route['admin_cont_location_del/(:any)']        = 'UserPagesController/cont_location_del/$1';
$route['admin_cont_location_edit/(:any)']       = 'UserPagesController/cont_location_edit/$1';
$route['admin_cont_location_edit_act/(:any)']   = 'UserPagesController/cont_location_edit_act/$1';
$route['admin_con_mail_list']                   = 'UserPagesController/con_mail_list';
$route['admin_con_mail_add']                    = 'UserPagesController/con_mail_add';
$route['admin_con_mail_add_act']                = 'UserPagesController/con_mail_add_act';
$route['admin_con_mail_del/(:any)']             = 'UserPagesController/con_mail_del/$1';
$route['admin_con_mail_edit/(:any)']            = 'UserPagesController/con_mail_edit/$1';
$route['admin_con_mail_edit_act/(:any)']        = 'UserPagesController/con_mail_edit_act/$1';
$route['admin_cont_mess_add_act']               = 'UserPagesController/cont_mess_add_act';
$route['admin_con_mail_view/(:any)']            = 'UserPagesController/con_mail_view/$1';
$route['admin_con_cont_list']                   = 'UserPagesController/con_cont_list';
$route['admin_con_cont_edit/(:any)']            = 'UserPagesController/con_cont_edit/$1';
$route['admin_con_cont_edit_act/(:any)']         = 'UserPagesController/con_cont_edit_act/$1';

///Contact Pages Start////////////////////////////////////////////////////////////










$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
