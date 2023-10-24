<?php

namespace App\Models;

use CodeIgniter\Model;


class FamilyModel extends Model
{
    protected $table      = 'family_details';
    protected $primaryKey = 'f_id';

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
   			array( 'db' => $table.'.f_id', 'field' => 'f_id' , 'dt' => 0 ),
            array( 'db' => $table.'.firstname', 'field' => 'firstname' , 'dt' => 1 ),
            array( 'db' => $table.'.midname', 'field' => 'midname' , 'dt' => 2 ),
            array( 'db' => $table.'.lastname', 'field' => 'lastname' , 'dt' => 3 ),
			array( 'db' => $table.'.relation', 'field' => 'relation' , 'dt' => 4 ),			
			array( 'db' => $table.'.f_id', 'field' => 'f_id' , 'dt' => 5 ),
            array( 'db' => $table.'.f_id', 'field' => 'f_id' , 'dt' => 6 )
		);
        $output_arr = $this->get_query_data($data);
        $output_arr = $output_arr->getResult();
        $new_array['data'] = [];
        foreach ($output_arr as $key => $value) {
            $new_array['data'][$key][0] = $value->f_id;
            $new_array['data'][$key][1] = $value->firstname;
            $new_array['data'][$key][2] = $value->midname;
            $new_array['data'][$key][3] = $value->lastname;
            $new_array['data'][$key][4] = $value->relation;
            $new_array['data'][$key][5] = "<a class='modalButtonFamily' style='cursor:pointer;' data-src=".$value->f_id." onclick='#'><i class='fa fa-edit'></i></a>";
            $new_array['data'][$key][6] = "<a class='modalDeleteButtonFamily' style='cursor:pointer;' data-src=".$value->f_id." onclick='#'><i class='fa fa-trash'></i></a>";
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