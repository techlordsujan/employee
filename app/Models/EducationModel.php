<?php

namespace App\Models;

use CodeIgniter\Model;


class EducationModel extends Model
{
    protected $table      = 'education';
    protected $primaryKey = 'edu_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getEducationJson($data){
        $table = $this->table;
    	$primaryKey = $this->primaryKey;
    	$columns = array(
   			array( 'db' => $table.'.edu_id', 'field' => 'edu_id' , 'dt' => 0 ),
			array( 'db' => $table.'.staff_id', 'field' => 'staff_id' , 'dt' => 1 ),
            array( 'db' => $table.'.Level', 'field' => 'Level' , 'dt' => 2 ),
			array( 'db' => $table.'.degree_name', 'field' => 'degree_name' , 'dt' => 3 ),
			array( 'db' => $table.'.school_name_address', 'field' => 'school_name_address' , 'dt' => 4 ),
			array( 'db' => $table.'.from_year', 'field' => 'from_year' , 'dt' => 5 ),
			array( 'db' => $table.'.to_year', 'field' => 'to_year' , 'dt' => 6 ),
			array( 'db' => $table.'.marks', 'field' => 'marks' , 'dt' => 7 ),
			array( 'db' => $table.'.division', 'field' => 'division' , 'dt' => 8 ),
			array( 'db' => $table.'.specialization', 'field' => 'specialization' , 'dt' => 9 ),
			array( 'db' => $table.'.edu_id', 'field' => 'edu_id' , 'dt' => 10 ),
            array( 'db' => $table.'.edu_id', 'field' => 'edu_id' , 'dt' => 11 )
		);
        $output_arr = $this->get_query_data($data);
        $output_arr = $output_arr->getResult();
        $new_array['data'] = [];
        foreach ($output_arr as $key => $value) {
            $new_array['data'][$key][0] = $value->edu_id;
            $new_array['data'][$key][1] = $value->staff_id;
            $new_array['data'][$key][2] = $value->Level;
            $new_array['data'][$key][3] = $value->degree_name;
            $new_array['data'][$key][4] = $value->school_name_address;
            $new_array['data'][$key][5] = $value->from_year;
            $new_array['data'][$key][6] = $value->to_year;
            $new_array['data'][$key][7] = $value->marks;
            $new_array['data'][$key][8] = $value->division;
            $new_array['data'][$key][9] = $value->specialization;
            $new_array['data'][$key][10] = "<a class='modalButtonEducation' style='cursor:pointer;' data-src=".$value->edu_id." onclick='#'><i class='fa fa-edit'></i></a>";
            $new_array['data'][$key][11] = "<a class='modalDeleteButtonEducation' style='cursor:pointer;' data-src=".$value->edu_id." onclick='#'><i class='fa fa-trash'></i></a>";
        }
        return json_encode($new_array);
    }
    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
        // OR $this->db = db_connect();
    }
    public function insert_data($data = array())
    {        
        $this->db->table($this->table)->insert($data);         
        return $this->db->insertID();
    }

    public function update_data($id, $data = array())
    {
        $this->db->table($this->table)->update($data, array(
            $this->primaryKey => $id,
        ));
        return $this->db->affectedRows();
    }

    public function delete_data($id)
    {
        return $this->db->table($this->table)->delete(array(
            $this->primaryKey => $id,
        ));
    }

    public function get_all_data()
    {
        $query = $this->db->query('select * from ' . $this->table);
        return $query->getResult();
    }

    public function get_query_data($data){
        $builder = $this->db->table($this->table);
        $return = $builder->getWhere($data);
        return  $return ;
    }

    public function get_education_data($data){
        $builder = $this->db->table($this->table);
        $return = $builder->getWhere($data);
        return  $return ;
    }

}