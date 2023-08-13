<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Translations extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
    }


    public function arabic()
    {

        $language = 'arabic';
        if (!empty($language)) {
            $query_language = $this->db->query("SELECT * FROM `languages` WHERE `arabic`=' '  ORDER BY `languages`.`id` DESC");
            if ($this->input->post('submit') == 'update') {
                if ($query_language->num_rows() > 0) {
                    $words = $query_language->result();
                    foreach ($words as $row) {
                        $word = $this->input->post('word_' . $row->word);
                        if (!empty($word)) {
                            $this->db->where('word', $row->word);
                            $this->db->update('languages', array($language => $word));
                            /*print_r($this->db->last_query());
                            echo ';<br>';*/
                        }
                    }
                   /* $this->db->where('lang_field', $language);
                    $this->db->update('language_list', array(
                        'updated_at' => date('Y-m-d H:i:s'),
                    ));*/
                }
/*                print_r($_POST);*/
/*                redirect(base_url('translations/arabic'));*/
            }
            $data['select_language'] = $language;
            $data['query_language'] = $query_language;
            $data['main_menu'] = 'settings';
            $data['title'] = translate('translations');
            $this->template->load('template', 'language/arabic',$data);

        } else {
            $this->session->set_userdata('last_page', current_url());
            redirect(base_url(), 'refresh');
        }
    }

}