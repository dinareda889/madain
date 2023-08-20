<?phpdefined('BASEPATH') or exit('No direct script access allowed');class Project extends CI_Controller{    function __construct()    {        parent::__construct();        check_not_login();        $this->load->model(['Project_m']);    }    public function index()    {        //$data['all'] = $this->Project_m->get();        $data['title'] = translate('projects');        $this->template->load('template', 'project_v/data', $data);    }    function get_ajax()    {        $list = $this->Project_m->get_datatables();        $data = array();        $no = @$_POST['start'];        foreach ($list as $item) {            $no++;            $row = array();            if (!empty($item->image) && (file_exists('uploads/project/' . $item->image))) {                $image = base_url() . 'uploads/project/' . $item->image;            } else {                $image = base_url() . 'uploads/defult_image.jpg';            }            $row[] = $no . ".";            $row[] = '<img src="' . $image . '"  height="100px" width="150px" alt="" class="direct-chat-img" />';            $row[] = $item->name_ar;            $row[] = $item->name_en;            $row[] = '<a href="' . $item->link . '" target="_blank" title="انقر للذهاب الي اللينك" class="btn btn-info btn-sm"><i class="fas fa-link"></i></a>';//            $row[] = $item->description;            $row[] = '            <div class="btn-block  btn-group-sm">                                    <a href="#modal_details" data-toggle="modal" title="تفاصيل"                         onclick="get_load_details(' . $item->id . ')" class="btn btn-warning btn-sm">                          <i class="fa fa-eye" style="color: white;"></i></a>                                         <a href="' . base_url() . 'Project/edit/' . $item->id . '" title="تعديل"   class="btn btn-info btn-sm">                                            <i class="fa fa-pencil-alt" > </i></a>            <a href="#" title="حذف"  onclick=\'swal({                                            title: "هل انت متأكد من الحذف ؟",                                            text: "",                                            type: "warning",                                            showCancelButton: true,                                            confirmButtonClass: "btn-danger",                                            confirmButtonText: "حذف",                                            cancelButtonText: "إلغاء",                                            closeOnConfirm: false                                            },                                            function(){                                            swal("تم الحذف!", "", "success");                                            window.location="' . base_url() . 'Project/delete/' . $item->id . '";                                            });\' class="btn btn-danger btn-sm">                                            <i class="fa fa-trash"> </i></a>                                                                    </div>            ';            $data[] = $row;        }        $output = array(            "draw" => @$_POST['draw'],            "recordsTotal" => $this->Project_m->count_all(),            "recordsFiltered" => $this->Project_m->count_filtered(),            "data" => $data,        );        // output to json format        echo json_encode($output);    }    public function get_load_details()    {        $id = $this->input->post('id');        //$data['all_details'] = $this->Project_m->get_load_details($id)[0];        $data['all_details'] = $this->Project_m->get($id)->row();        $this->load->view('project_v/load_details_page', $data);    }    /****************************************************************/    public function thumb($data, $folder_name)    {        $config['image_library'] = 'gd2';        $config['source_image'] = $data['full_path'];        $config['new_image'] = 'uploads/' . $folder_name . '/thumbs/' . $data['file_name'];        $config['create_thumb'] = TRUE;        $config['maintain_ratio'] = TRUE;        $config['thumb_marker'] = '';        $config['width'] = 275;        $config['height'] = 250;        $this->load->library('image_lib', $config);        $this->image_lib->initialize($config);        $this->image_lib->resize();    }    private function upload_image($file_name, $folder_name)    {        $config['upload_path'] = 'uploads/' . $folder_name;        $config['allowed_types'] = 'gif|Gif|ico|ICO|jpg|JPG|jpeg|JPEG|BNG|png|PNG|bmp|BMP|WMV|wmv|MP3|mp3|FLV|flv|SWF|swf';        $config['max_size'] = '100024*8';        $config['encrypt_name'] = true;        $this->load->library('upload', $config);        $this->upload->initialize($config);        if (!$this->upload->do_upload($file_name)) {            return false;        } else {            $datafile = $this->upload->data();            $this->thumb($datafile, $folder_name);//            echo '<br>'. $datafile['file_name'];            return $datafile['file_name'];        }    }    public function add() /* Project/add*/    {        $this->load->helper(array('form', 'url'));        $this->load->library(array('form_validation'));        $this->form_validation->set_rules('name_ar', translate('name') . translate('arabic'), 'required');        $this->form_validation->set_rules('name_en', translate('name') . translate('english'), 'required');        $this->form_validation->set_rules('name_ru', translate('name') . translate('russian'), 'required');        $this->form_validation->set_rules('link', 'اللينك', 'required');        $this->form_validation->set_rules('description_ar', translate('description') . translate('arabic'), 'required');        $this->form_validation->set_rules('description_en', translate('description') . translate('english'), 'required');        $this->form_validation->set_rules('description_ru', translate('description') . translate('russian'), 'required');        if (empty($_FILES['image']['name'])) {            $this->form_validation->set_rules('image', translate('main_image'), 'required');        }        if ($this->form_validation->run() == FALSE) {            $project = new stdClass();            $project->id = null;            $project->description = null;            $project->image = null;            $data = array(                'page' => 'add',                'project' => $project,            );            $this->template->load('template', 'project_v/form', $data);        } else {            $post = $this->input->post(null, TRUE);            if (isset($_POST['add'])) {                $image = $this->upload_image("image", 'project');                $images = upload_muli_image("images", 'project');                $this->Project_m->add($post, $image, $images);                if ($this->db->affected_rows() > 0) {                    $this->session->set_flashdata('success', 'تمت العملية بنجاح ');                }                redirect('Project', 'refresh');            }        }    }    public function edit($id)    {        $this->load->helper(array('form', 'url'));        $this->load->library('form_validation');        $this->form_validation->set_rules('name_ar', translate('name') . translate('arabic'), 'required');        $this->form_validation->set_rules('name_en', translate('name') . translate('english'), 'required');        $this->form_validation->set_rules('name_ru', translate('name') . translate('russian'), 'required');        $this->form_validation->set_rules('link', 'اللينك', 'required');        $this->form_validation->set_rules('description_ar', translate('description') . translate('arabic'), 'required');        $this->form_validation->set_rules('description_en', translate('description') . translate('english'), 'required');        $this->form_validation->set_rules('description_ru', translate('description') . translate('russian'), 'required');        if ($this->form_validation->run() == FALSE) {            $query = $this->Project_m->get($id);            if ($query->num_rows() > 0) {                $project = $query->row();                $data = array(                    'page' => 'edit',                    'project' => $project,                );                $this->template->load('template', 'project_v/edit', $data);            } else {                redirect('Project', 'refresh');            }        } else {            $post = $this->input->post(null, TRUE);            if (isset($_POST['add'])) {                /*   echo '<pre>';                   print_r($_POST);                   echo '<br>';                   print_r($_FILES);*/                $image = $this->upload_image("image", 'project');                $images = upload_muli_image("images", 'project');                /* echo '<br>';                 print_r($images);*/                $this->Project_m->edit($post, $image, $images);            }            if ($this->db->affected_rows() > 0) {                $this->session->set_flashdata('success', 'تمت العملية بنجاح ');            } else {                $this->session->set_flashdata('danger', 'حدث خطأ يرجي المحاوله مره أخري ');            }            redirect('Project', 'refresh');        }    }    public function delete($id)    {        $this->Project_m->delete($id);        if ($this->db->affected_rows() > 0) {            $this->session->set_flashdata('success', 'تم الحذف بنجاح');        }        redirect('Project', 'refresh');    }}