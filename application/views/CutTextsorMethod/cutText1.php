/*$caption = $_POST['ban_hero_caption'];
$span    = $_POST['ban_span'];

if(!empty($caption) && !empty($span)) {

$bannerData = [
"ban_hero_caption" => $caption,
"ban_span"         => $span
];

$this->db->update('banner',$bannerData);
redirect(base_url('Home_Edit'));

}else{
redirect($_SERVER['HTTP_REFERER']);
}*/



//    The Delete Method   //

//    The Home Banner 2nd
//    public function home_banner_add()
//    {
//        $this->load->view('adminDash/userPages/home_banner_add');
//    }
//
//    public function home_banner_act()
//    {
//        $hCaption = $_POST['hero_caption'];
//        $hSpan = $_POST['hero_span'];
//
//        if(!empty($hCaption) && !empty($hSpan)){
//
//            $heroData = [
//                "hero_caption" => $hCaption,
//                "hero_span" => $hSpan,
//            ];
//
//            $this->db->insert('twondbanner',$heroData);
//            redirect(base_url('Home_Edit'));
//
//        }else{
//            redirect($_SERVER['HTTP_REFERER']);
//        }
//
//    }
//
//    public function home_banner_del($id)
//    {
//        $this->db->where('id',$id)->delete('twondbanner');
//        redirect(base_url('Home_Edit'));
//    }
//
//    public function home_banner_edit($id)
//        {
//            $heroData['select_ban_hero'] = $this->db->where('id',$id)->get('twondbanner')->row_array();
//            $this->load->view('adminDash/userPages/home_banner_edit',$heroData);
//        }
//
//    public function home_banner_edit_act()
//    {
//        $hrcaption = $_POST['hero_caption'];
//        $hrspan    = $_POST['hero_span'];
//
//        if(!empty($hrcaption) && !empty($hrspan)) {
//
//            $bHeroData = [
//                "hero_caption" => $hrcaption,
//                "hero_span"    => $hrspan
//            ];
//
//            $this->db->update('twondbanner',$bHeroData);
//            redirect(base_url('Home_Edit'));
//
//        }else{
//            redirect($_SERVER['HTTP_REFERER']);
//        }
//    }

//    End Home Banner 2nd