<?phpclass Project_m extends CI_Model{    var $column_order_groups = array(null, 'tbl_projects.image', 'tbl_projects.name_ar', 'tbl_projects.name_en', 'tbl_projects.link'); //set column field database for datatable orderable    var $column_search_groups = array('tbl_projects.image', 'tbl_projects.name_ar', 'tbl_projects.name_en', 'tbl_projects.link'); //set column field database for datatable searchable    var $order_groups = array('tbl_projects.id' => 'desc');    private function _get_datatables_query()    {        $this->db->select('tbl_projects.*');        $this->db->from('tbl_projects ');        $i = 0;        foreach ($this->column_search_groups as $item) {            if (@$_POST['search']['value']) {                if ($i === 0) { // first loop                    $this->db->group_start();                    $this->db->like($item, $_POST['search']['value']);                } else {                    $this->db->or_like($item, $_POST['search']['value']);                }                if (count($this->column_search_groups) - 1 == $i)                    $this->db->group_end();            }            $i++;        }        if (isset($_POST['order'])) {            $this->db->order_by($this->column_order_groups [$_POST['order']['0']['column']], $_POST['order']['0']['dir']);        } else if (isset($this->order_groups)) {            $order = $this->order_groups;            $this->db->order_by(key($order), $order[key($order)]);        }    }    function get_datatables()    {        $this->_get_datatables_query();        if (@$_POST['length'] != -1)            $this->db->limit(@$_POST['length'], @$_POST['start']);        $query = $this->db->get();        return $query->result();    }    function count_filtered()    {        $this->_get_datatables_query();        $query = $this->db->get();        return $query->num_rows();    }    function count_all()    {        $this->db->select('client.*');        $this->db->from('tbl_projects as client');        return $this->db->count_all_results();    }    /*************************************************************************/    public function get($id = null)    {        $this->db->select('tbl_projects.* , users.name as publisher_name ');        $this->db->from('tbl_projects');        $this->db->join('users', 'users.user_id = tbl_projects.user_id');        if ($id != null) {            $this->db->where('id', $id);        }        $this->db->order_by('id', 'desc');        $query = $this->db->get();        return $query;    }    public function add($post, $image = '', $images = array())    {        $params = [            'user_id' => $this->session->userdata('userid'),            'image' => $image,            'name_ar' => $post['name_ar'],            'name_en' => $post['name_en'],            'name_ru' => $post['name_ru'],            'link' => $post['link'],            'description_ar' => $post['description_ar'],            'description_en' => $post['description_en'],            'description_ru' => $post['description_ru'],            'location_map' => $post['location_map'],            'create_at' => date('Y-m-d H:i:s')        ];        $link =  $post['link'];        $video_id = explode("?v=", $link); // For videos like http://www.youtube.com/watch?v=...        if (empty($video_id[1]))            $video_id = explode("/v/", $link); // For videos like http://www.youtube.com/watch/v/..        $video_id = explode("&", $video_id[1]); // Deleting any other params        $video_id = $video_id[0];        $params['link_id'] = $video_id;        $this->db->insert('tbl_projects', $params);        $insert_id = $this->db->insert_id();        if (!empty($images) && (count($images) > 0)) {            $this->db->where('project_id_fk', $post['id'])->delete('tbl_projects_images');            foreach ($images as $key => $one_image) {                $image_data['project_id_fk'] = $insert_id;                $image_data['image'] = $one_image;                $this->db->insert('tbl_projects_images', $image_data);            }        }    }    public function edit($post, $image = '', $images = array())    {        $params = [            'name_ar' => $post['name_ar'],            'name_en' => $post['name_en'],            'name_ru' => $post['name_ru'],            'link' => $post['link'],            'description_ar' => $post['description_ar'],            'description_en' => $post['description_en'],            'description_ru' => $post['description_ru'],            'location_map' =>urlencode($post['location_map']),            'updated' => date('Y-m-d H:i:s')        ];        $link =  $post['link'];        $video_id = explode("?v=", $link); // For videos like http://www.youtube.com/watch?v=...        if (empty($video_id[1]))            $video_id = explode("/v/", $link); // For videos like http://www.youtube.com/watch/v/..        $video_id = explode("&", $video_id[1]); // Deleting any other params        $video_id = $video_id[0];         $params['link_id'] = $video_id;        if (!empty($image)) {            $params['image'] = $image;        }        $this->db->where('id', $post['id']);        $this->db->update('tbl_projects', $params);        if (!empty($images) && (count($images) > 0)) {            $this->db->where('project_id_fk', $post['id'])->delete('tbl_projects_images');            foreach ($images as $key => $one_image) {                $image_data['project_id_fk'] = $post['id'];                $image_data['image'] = $one_image;                $this->db->insert('tbl_projects_images', $image_data);            }        }    }    public function delete($id)    {        $item = $this->get($id)->row();        if ($item->image != null) {            $target_file = './uploads/project/' . $item->image;            unlink($target_file);        }        $this->db->where('id', $id);        $this->db->delete('tbl_projects');    }    /*-------------------------web site----------------------------*/    function get_all_projects($where_arr = null, $limit = null, $start = 0)    {        $this->db->select('tbl_projects.*')->from('tbl_projects');        if (!empty($where_arr)) {            $this->db->where($where_arr);        }        if (!empty($limit)) {            $this->db->limit($limit, $start);        }        $events = $this->db->order_by('id','DESC')->get()->result();        /*        print_r($this->db->last_query());*/        if (!empty($events)) {            foreach ($events as $key => $event) {                $events[$key]->imgs = get_by('tbl_projects_images', array('project_id_fk' => $event->id), 1);            }        }        return $events;    }    function get_one_project($where_arr)    {        $this->db->select('tbl_projects.*')->from('tbl_projects');        if (!empty($where_arr)) {            $this->db->where($where_arr);        }        $event = $this->db->get()->row();        if (!empty($event)) {            $event->imgs = get_by('tbl_projects_images', array('project_id_fk' => $event->id));        }        return $event;    }    public function get_count($where_arr)    {        if (!empty($where_arr)) {            $this->db->where($where_arr);        }        return $this->db->get("tbl_projects")->num_rows();    }}?>