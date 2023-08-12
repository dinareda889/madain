<?phpclass Project_m extends CI_Model{    var $column_order_groups = array(null,'tbl_projects.image','tbl_projects.name_ar','tbl_projects.name_en','tbl_projects.link'); //set column field database for datatable orderable    var $column_search_groups = array('tbl_projects.image','tbl_projects.name_ar','tbl_projects.name_en','tbl_projects.link'); //set column field database for datatable searchable    var $order_groups = array('tbl_projects.id' => 'desc');    private function _get_datatables_query()    {        $this->db->select('tbl_projects.*');        $this->db->from('tbl_projects ');        $i = 0;        foreach ($this->column_search_groups as $item) {            if (@$_POST['search']['value']) {                if ($i === 0) { // first loop                    $this->db->group_start();                    $this->db->like($item, $_POST['search']['value']);                } else {                    $this->db->or_like($item, $_POST['search']['value']);                }                if (count($this->column_search_groups) - 1 == $i)                    $this->db->group_end();            }            $i++;        }        if (isset($_POST['order'])) {            $this->db->order_by($this->column_order_groups [$_POST['order']['0']['column']], $_POST['order']['0']['dir']);        } else if (isset($this->order_groups)) {            $order = $this->order_groups;            $this->db->order_by(key($order), $order[key($order)]);        }    }    function get_datatables()    {        $this->_get_datatables_query();        if (@$_POST['length'] != -1)            $this->db->limit(@$_POST['length'], @$_POST['start']);        $query = $this->db->get();        return $query->result();    }    function count_filtered()    {        $this->_get_datatables_query();        $query = $this->db->get();        return $query->num_rows();    }    function count_all()    {        $this->db->select('client.*');        $this->db->from('tbl_projects as client');        return $this->db->count_all_results();    }    /*************************************************************************/    public function get($id = null)    {        $this->db->select('tbl_projects.* , users.name as publisher_name ');        $this->db->from('tbl_projects');        $this->db->join('users','users.user_id = tbl_projects.user_id');        if ($id != null) {            $this->db->where('id', $id);        }        $this->db->order_by('id','desc');        $query = $this->db->get();        return $query;    }    public function add($post,$image='')    {        $params = [            'user_id' => $this->session->userdata('userid'),            'image' => $image,            'name_ar' => $post['name_ar'],            'name_en' => $post['name_en'],            'name_ru' => $post['name_ru'],            'link' => $post['link'],            'description_ar' => $post['description_ar'],            'description_en' => $post['description_en'],            'description_ru' => $post['description_ru'],            'create_at' => date('Y-m-d H:i:s')        ];        $this->db->insert('tbl_projects', $params);    }    public function edit($post,$image='')    {        $params = [            'name_ar' => $post['name_ar'],            'name_en' => $post['name_en'],            'name_ru' => $post['name_ru'],            'link' => $post['link'],            'description_ar' => $post['description_ar'],            'description_en' => $post['description_en'],            'description_ru' => $post['description_ru'],            'updated' => date('Y-m-d H:i:s')        ];        if(!empty($image)) {            $params['image'] = $image;        }        $this->db->where('id',$post['id']);        $this->db->update('tbl_projects',$params);    }    public function delete($id)    {        $item = $this->get($id)->row();        if($item->image != null){            $target_file = './uploads/client/'.$item->image ;            unlink($target_file);        }        $this->db->where('id',$id);        $this->db->delete('tbl_projects');    }}?>