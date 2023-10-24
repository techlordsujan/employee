<?php

namespace App\Controllers;
use App\Models\PersonalFactModel;
use App\Models\AddressModel;
use App\Models\TempAddressModel;
use App\Models\LanguageModel;
use App\Models\EducationModel;
use App\Models\FamilyModel;


class Home extends BaseController
{
    public function index()
    {  
        
        $session = session();        
        $session_data = $session->get();
               
        if($session->get('staff_name')==null&&$session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }  
        return redirect()->to('home/dashboard');     
        
    }

    public function dashboard()
    {
        $session = session();        
        $session_data = $session->get();     
        if($session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }   
        $pmodel = new PersonalFactModel();
        $amodel = new AddressModel();
        $tamodel = new TempAddressModel();
        $lmodel = new LanguageModel();
        $emodel = new EducationModel();
        $fmodel = new FamilyModel();
        if($session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }       
        $in_data['staff_id'] = $session_data['staff_Id']; 

        $return_data = $pmodel->get_query_data($in_data);
        $percentage = 0;
        if(count($return_data->getResult())>0){
            $percentage = $percentage+3;
        }
        $return_data = $amodel->get_query_data($in_data);
        if(count($return_data->getResult())>0){
            $percentage = $percentage+2;
        }
        $return_data = $tamodel->get_query_data($in_data);
        if(count($return_data->getResult())>0){
            $percentage = $percentage+1;
        }
        $return_data = $lmodel->get_query_data($in_data);
        if(count($return_data->getResult())>0){
            $percentage = $percentage+1;
        }
        $return_data = $emodel->get_query_data($in_data);
        if(count($return_data->getResult())>0){
            $percentage = $percentage+3;
        }
        $return_data = $fmodel->get_query_data($in_data);
        if(count($return_data->getResult())>0){
            $percentage = $percentage+2;
        }
        $total_percentage = $percentage*100/12;


        $data = array('title'=>"Home",'session_data'=>$session_data,'precentage'=>$total_percentage,'session'=>$session);  

        return view('include/header',$data).view('include/menu',$data).view('welcome_message',$data).view('include/footer');
    }    
}
