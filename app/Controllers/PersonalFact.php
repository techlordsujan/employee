<?php

namespace App\Controllers;
use App\Models\PersonalFactModel;
class PersonalFact extends BaseController
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
        $personalModel = new PersonalFactModel();
        $request = \Config\Services::request();
        
        $session = session();        
        $session_data = $session->get();
        
        if($session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }          
        
        $in_data['staff_id'] = $session_data['staff_Id'];        
        $return_data = $personalModel->get_query_data($in_data);
        if(count($return_data->getResult())<1){
            //return redirect()->to('/'); 
        }
        $row_data = $return_data->getResult();        

        $data = array('title'=>"PersonalFact",'session_data'=>$session_data,'staff_data'=> $row_data,'session'=>$session); 
        return view('include/header',$data).view('include/menu',$data).view('personal_fact',$data).view('include/footer');
        
    }

    public function update(){
        helper('url');
        $personalModel = new PersonalFactModel();
        $request = \Config\Services::request();
        
        $session = session();        
        $session_data = $session->get();
        //print_r($request->getPost());exit;
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
            $return_data = $personalModel->insert_data($in_data);
        }
        else{
            //update data
            if($in_data['staff_id'] != $session_data['staff_Id']){
                return redirect()->to('/'); 
            }else{
                $id = $in_data['id'];
                $in_data['updated_at'] = Date('Y-m-d h:i:s');
                $return_data = $personalModel->update_data($id,$in_data);
            }
        }     

        if($return_data>0){            
            //write true story
            $session->setFlashdata('type','success');
            $session->setFlashdata('msg','Your data has been updated successfuly');
            
        }else{
            $session->setFlashdata('type','error');
            $session->setFlashdata('msg','Error occurred!!');
        }     

        return redirect()->to('/personalfact/'); 
    }
    
}
