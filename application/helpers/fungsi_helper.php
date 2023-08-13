<?php

function check_already_login()
{
	$ci = & get_instance();
	$user_session = $ci->session->userdata('userid');
	if($user_session){
		redirect('dashboard');
     }
}

function check_not_login()
{
	$ci = & get_instance();
	$user_session = $ci->session->userdata('userid');
	if(!$user_session){
		redirect('auth/login');
     }
}

function check_admin()
{
    $ci = & get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->level != 1 ){
        redirect('dashboard');
    }
}

function indo_curreny($nominal){
    $result = " LE " . number_format($nominal,2,',',','.'');
return $result;
}
function format_date($date)
{
        $d = substr($date,8,2);
        $m = substr($date,5,2);
        $y = substr($date,0,4);
        return $d .'-' .$m .'-'.$y;
}
function translate($word = '')
{
    $CI = &get_instance();
    if ($CI->session->has_userdata('set_lang')) {
        $set_lang = $CI->session->userdata('set_lang');
    } else {
        $set_lang = 'english';
    }
    if ($set_lang == '') {
        $set_lang = 'english';
    }
    $query = $CI->db->get_where('languages', array('word' => $word));
    if ($query->num_rows() > 0) {
        if (isset($query->row()->$set_lang) && $query->row()->$set_lang != '') {
            return $query->row()->$set_lang;
        } else {
            return $query->row()->english;
        }
    } else {
        $arrayData = array(
            'word' => $word,
            'english' => ucwords(str_replace('_', ' ', $word)),
        );
        $CI->db->insert('languages', $arrayData);
        return ucwords(str_replace('_', ' ', $word));
    }
}


?>