<?php

namespace App\Controllers;
use App\Models\AddressModel;
use App\Models\TempAddressModel;
use App\Models\DistrictModel;

class Address extends BaseController
{
    public function __construct()
    {
        $session = session();        
        $session_data = $session->get();
        
        if($session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }         
        
    }   

    public function index()
    {
        helper('url');
        $addressModel = new AddressModel();
        $temp_addressModel = new TempAddressModel();
        $request = \Config\Services::request();
        
        $session = session();        
        $session_data = $session->get();
        
        if($session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }       
        
        $in_data['staff_id'] = $session_data['staff_Id'];        
        $return_data = $addressModel->get_query_data($in_data);
        $return_data_temp = $temp_addressModel->get_query_data($in_data);
        if(count($return_data->getResult())<1){
            //return redirect()->to('/'); 
        }
        $row_data = $return_data->getResult();  
        $row_data_temp = $return_data_temp->getResult();     
        $object['controller'] = $this; 

        $data = array('title'=>"Address",'session_data'=>$session_data,'staff_data'=> $row_data,'staff_temp_data' => $row_data_temp,'session'=>$session,'controller'=>$this); 
        return view('include/header',$data).view('include/menu',$data).view('address_view',$data).view('include/footer');
        
    }

    public function update(){
        helper('url');
        $addressModel = new AddressModel();
        $request = \Config\Services::request();
        
        $session = session();        
        $session_data = $session->get();
       
        if($session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }   

        $in_data = $request->getPost();        
        if($in_data['staff_id']=='0' && $in_data['id']=='0')
        {
            //new insert
            unset($in_data['id']);
            $in_data['staff_id'] = $session_data['staff_Id'];
            $in_data['created_at'] = Date('Y-m-d h:i:s');
            
            $return_data = $addressModel->insert_data($in_data);
        }
        else{
            //update data
            if($in_data['staff_id'] != $session_data['staff_Id']){
                return redirect()->to('/'); 
            }else{
                $id = $in_data['id'];
                $in_data['updated_at'] = Date('Y-m-d h:i:s');
                $return_data = $addressModel->update_data($id,$in_data);
            }
        }     
        
        if($return_data>0){
            //
            //write true story
            $session->setFlashdata('type','success');
            $session->setFlashdata('msg','Your data has been updated successfuly');
            
        }else{
            $session->setFlashdata('type','error');
            $session->setFlashdata('msg','Error occurred!!');
        }       
        return redirect()->to('/address/');
    }

    public function temp_update(){
        helper('url');
        $addressModel = new TempAddressModel();
        $request = \Config\Services::request();
        
        $session = session();        
        $session_data = $session->get();
       
        if($session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }  

        $in_data = $request->getPost();        
        if($in_data['staff_id']=='0' && $in_data['id']=='0')
        {
            //new insert
            unset($in_data['id']);
            $in_data['staff_id'] = $session_data['staff_Id'];
            $in_data['created_at'] = Date('Y-m-d h:i:s');
            
            $return_data = $addressModel->insert_data($in_data);
        }
        else{
            //update data
            if($in_data['staff_id'] != $session_data['staff_Id']){
                return redirect()->to('/'); 
            }else{
                $id = $in_data['id'];
                $in_data['updated_at'] = Date('Y-m-d h:i:s');
                $return_data = $addressModel->update_data($id,$in_data);
            }
        }     
        
        if($return_data>0){
            //
            //write true story
            $session->setFlashdata('type','success');
            $session->setFlashdata('msg','Your data has been updated successfuly');
            
        }else{
            $session->setFlashdata('type','error');
            $session->setFlashdata('msg','Error occurred!!');
        }      
        return redirect()->to('/address/');         
    }

    public function getdistrict($province,$selected){
        $districtModel = new DistrictModel();
        $in_data['province'] = $province;
        $district_data = $districtModel->get_query_data($in_data);
        $option ='<select id="district" name = "district" class="form-control" autocomplete="off" required >';
        $option .= '<option value="">Select District</option>';
        if($district_data->resultID->num_rows>0){            
            $distrct_provincewise =  $district_data->getResult();             
            foreach($distrct_provincewise as $key=>$value){                
                $option .= "<option value='".$value->district."' ".($selected==$value->district?'selected':'').">".$value->district."</option>";
            }            
        }
        $option .= '</select>';
        echo $option;
    }
}
