<?php

namespace App\Controllers;
use App\Models\EducationModel;
class Education extends BaseController
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
        $educationModel = new EducationModel();
        $request = \Config\Services::request();
        
        $session = session();        
        $session_data = $session->get();
        
        if($session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }       
        
        $in_data['staff_id'] = $session_data['staff_Id'];      
        
        $return_data = $educationModel->get_query_data($in_data);
        if(count($return_data->getResult())<1){
             $row_data = array('');
        }else{
            $row_data = $return_data->getResult();  
        }          
        
        $data = array('title'=>"Education",'session_data'=>$session_data,'staff_data'=> $row_data[0],'session'=>$session); 
        return view('include/header',$data).view('include/menu',$data).view('education_view',$data).view('include/footer');
        
    }

    public function getTableData(){
        helper('url');
        $educationModel = new EducationModel();
        $request = \Config\Services::request();
        
        $session = session();        
        $session_data = $session->get();
        
        if($session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }          
        
        $in_data['staff_id'] = $session_data['staff_Id'];      
        
        $return_array = $educationModel->getEducationJson($in_data);
        echo $return_array;
    }

    public function get_modal(){
        helper('url');
        $educationModel = new EducationModel();
        $request = \Config\Services::request();
        
        $session = session();        
        $session_data = $session->get();
        
        if($session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }          
        $in_data = $request->getPost();  
        $in_data['staff_id'] = $session_data['staff_Id'];      
        
        $return_data = $educationModel->get_education_data($in_data);
        if(count($return_data->getResult())<1){
             $row_data = array('');
        }else{
            $row_data = $return_data->getResult();  
        }          
        
        $data = array('title'=>"Education",'session_data'=>$session_data,'staff_data'=> $row_data[0],'session'=>$session); 
        return view('add_education',$data);
        
    }

    public function get_modal_delete(){
        helper('url');
        $educationModel = new EducationModel();
        $request = \Config\Services::request();
        
        $session = session();        
        $session_data = $session->get();
        
        if($session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }          
        $in_data = $request->getPost();  
        $in_data['staff_id'] = $session_data['staff_Id'];      
        
        $return_data = $educationModel->delete_data($in_data['edu_id']);
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
        helper(['form', 'url']);
        $educationModel = new EducationModel();
        $request = \Config\Services::request();
        
        $session = session();        
        $session_data = $session->get();
        
        if($session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }    

        $in_data = $request->getPost();   

        $input = $this->validate([
            'file' => [
                'uploaded[transcript]',
                'mime_in[transcript,image/jpg,image/jpeg,image/png,application/pdf]',
                'max_size[transcript,2048]',
            ]
        ]);
        
        if (!$input) {            
            $session->setFlashdata('type','error');
            $session->setFlashdata('msg','Invalid File. Please check type and size of the uploaded file');
            return redirect()->to('/education/'); 
        }

        $img = $this->request->getFile('transcript');
        $img->move(WRITEPATH . 'uploads/transcript');

        $in_data['transcript'] = $img->getName();

        if($in_data['edu_id']=='0')
        {
            //new insert
            unset($in_data['edu_id']);
            $in_data['staff_id'] = $session_data['staff_Id'];                 
            $return_data = $educationModel->insert_data($in_data);
        }
        else{
            //update data           
            $id = $in_data['edu_id'];               
            $return_data = $educationModel->update_data($id,$in_data);
            
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
        
        return redirect()->to('/education/');     
    }
    
}

