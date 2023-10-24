<?php

namespace App\Controllers;
use App\Models\LanguageModel;
use App\Models\ELanguageModel;
class Language extends BaseController
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
        $languageModel = new LanguageModel();
        $request = \Config\Services::request();
        
        $session = session();        
        $session_data = $session->get();
        
        if($session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }         
        
        $in_data['staff_id'] = $session_data['staff_Id'];        
        $return_data = $languageModel->get_query_data($in_data);
        if(count($return_data->getResult())<1){
            $row_data = array('');
        }else{
            $row_data = $return_data->getResult();  
        }  
        

        $data = array('title'=>"Language",'session_data'=>$session_data,'staff_data'=> $row_data[0],'session'=>$session); 
        return view('include/header',$data).view('include/menu',$data).view('language_view',$data).view('include/footer');
        
    }

    public function update(){
        helper('url');
        $languageModel = new LanguageModel();
        $request = \Config\Services::request();
        
        $session = session();        
        $session_data = $session->get();
        
        if($session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }    

        $in_data = $request->getPost();   
        
        if($in_data['n_id']=='0')
        {
            //new insert
            unset($in_data['n_id']);
            $in_data['staff_id'] = $session_data['staff_Id'];                 
            $return_data = $languageModel->insert_data($in_data);
        }
        else{
            //update data           
            $id = $in_data['n_id'];    
            $flush_data['n_read_p'] ="0";
            $flush_data['n_write_p'] ="0";
            $flush_data['n_speak_p'] ="0";
            $flush_data['n_understand_p'] ="0";
            $flush_data['n_read_i'] ="0";
            $flush_data['n_write_i'] ="0";
            $flush_data['n_speak_i'] ="0";
            $flush_data['n_understand_i'] ="0";
            $return_data = $languageModel->update_data($id,$flush_data);
            $return_data = $languageModel->update_data($id,$in_data);
            
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
        
        return redirect()->to('/language/');     
    }
    
}

