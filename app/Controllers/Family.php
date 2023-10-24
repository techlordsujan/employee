<?php

namespace App\Controllers;
use App\Models\FamilyModel;
class Family extends BaseController
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
        $familyModel = new FamilyModel();
        $request = \Config\Services::request();
        
        $session = session();        
        $session_data = $session->get();
        
        if($session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }         
        
        $in_data['staff_id'] = $session_data['staff_Id'];      
        
        $return_data = $familyModel->get_query_data($in_data);
        if(count($return_data->getResult())<1){
             $row_data = array('');
        }else{
            $row_data = $return_data->getResult();  
        }          
        
        $data = array('title'=>"Family Members",'session_data'=>$session_data,'staff_data'=> $row_data[0],'session'=>$session); 
        return view('include/header',$data).view('include/menu',$data).view('family_view',$data).view('include/footer');
        
    }

    public function getTableData(){
        helper('url');
        $familyModel = new FamilyModel();
        $request = \Config\Services::request();
        
        $session = session();        
        $session_data = $session->get();
        
        if($session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }         
        
        $in_data['staff_id'] = $session_data['staff_Id'];      
        
        $return_array = $familyModel->getEducationJson($in_data);
        echo $return_array;
    }

    public function get_modal(){
        helper('url');
        $familyModel = new FamilyModel();
        $request = \Config\Services::request();
        
        $session = session();        
        $session_data = $session->get();
        
        if($session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }         
        $in_data = $request->getPost();  
        $in_data['staff_id'] = $session_data['staff_Id'];      
        
        $return_data = $familyModel->get_education_data($in_data);
        if(count($return_data->getResult())<1){
             $row_data = array('');
        }else{
            $row_data = $return_data->getResult();  
        }          
        
        $data = array('title'=>"Family Members",'session_data'=>$session_data,'staff_data'=> $row_data[0],'session'=>$session); 
        return view('add_family',$data);
        
    }

    public function get_modal_delete(){
        helper('url');
        $familyModel = new FamilyModel();
        $request = \Config\Services::request();
        
        $session = session();        
        $session_data = $session->get();
        
        if($session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }          
        $in_data = $request->getPost();  
        $in_data['staff_id'] = $session_data['staff_Id'];      
        
        $return_data = $familyModel->delete_data($in_data['f_id']);
        if($return_data){
            //write true story
            $session->setFlashdata('type','success');
            $session->setFlashdata('msg','Your data has been deleted successfuly');
            
        }else{
            $session->setFlashdata('type','error');
            $session->setFlashdata('msg','Error occurred!!');
        }      
    }

    public function update(){
        helper('url');
        $familyModel = new FamilyModel();
        $request = \Config\Services::request();
        
        $session = session();        
        $session_data = $session->get();
        
        if($session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }    

        $in_data = $request->getPost();   
        
        if($in_data['f_id']=='0')
        {
            //new insert
            unset($in_data['f_id']);
            $in_data['staff_id'] = $session_data['staff_Id'];                 
            $return_data = $familyModel->insert_data($in_data);
        }
        else{
            //update data           
            $id = $in_data['f_id'];               
            $return_data = $familyModel->update_data($id,$in_data);
            
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
        
        return redirect()->to('/family/');     
    }
    
}

