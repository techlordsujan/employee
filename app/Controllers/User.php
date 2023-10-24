<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Libraries\Base32;
use App\Libraries\GoogleAuthenticator;

class User extends BaseController
{
    public $base32;   
    public $googleAuth;

    public function auth_user()
    {
        helper('url');
        $userModel = new UserModel();
        $request = \Config\Services::request();     
        $session = session();
        $this->base32 = new Base32();
        $this->googleAuth = new GoogleAuthenticator(6);

        $data = $request->getPost();
        $in_data['staff_id'] = $data['staffid'];
        $in_data['phone'] = $data['receiver'];
        $return_data = $userModel->get_query_data($in_data);
        if(count($return_data->getResult())<1){
            $session->setFlashdata('msg','Invalid Credentials!');
            return redirect()->to('/'); 
        }
        $row_data = $return_data->getResult();
                
        $SECRET_KEY =  $this->googleAuth->createSecret(25);
        $session_data = [
            'staff_Id' => $row_data[0]->staff_id,
            'phone' => $row_data[0]->phone,
            'staff_name' => $row_data[0]->staff_name,
            'email' => $row_data[0]->email,
            'status'=> $row_data[0]->status,
            'position'=> $row_data[0]->position,
            'avatar'=> $row_data[0]->avatar,
            'ent_date'=> $row_data[0]->ent_date,
            'secret' =>$SECRET_KEY,
            'auth' => 0
        ];
        $session->set($session_data);      
               
        $generate_otp = $this->googleAuth->getCode($SECRET_KEY);        
        return view('login_otp',['otp'=>$generate_otp,'session'=>$session]);
        
                      
    }
    public function auth_otp(){
        $request = \Config\Services::request(); 
        $data = $request->getPost();
        $otp = $data['myotp'];      
        $session = session();
        $this->base32 = new Base32();
        $this->googleAuth = new GoogleAuthenticator(6);

        $return = $this->googleAuth->verifyCode($session->get('secret'),$otp,1);
        print_r($session->get('auth'));
        if($return){
            $session->set('auth',1);            
            return redirect()->to('/');
        }else{
            $generate_otp = $this->googleAuth->getCode($session->get('secret'));  
            $session->setFlashdata('msg','Invalid OTP!');            
            return view('login_otp',['otp'=>$generate_otp,'session'=>$session]);            
        }		
    }

    public function get_modal(){
        helper('url');
        $userModel = new UserModel();
        $request = \Config\Services::request();
        
        $session = session();        
        $session_data = $session->get();
        
        if($session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }          
        $in_data = $request->getPost();  
        $in_data['staff_id'] = $session_data['staff_Id'];            
        
        $data = array('title'=>"Upload Image",'session_data'=>$session_data,'session'=>$session); 
        return view('add_userimage',$data);
        
    }
    public function updateimage(){
        
        helper(['form', 'url']);
        $userModel = new UserModel();
        $request = \Config\Services::request();
        
        $session = session();        
        $session_data = $session->get();
        
        if($session->get('auth')==0 )
        {
            return view('login',['session'=>$session]);
        }  

        $in_data = $request->getPost(); 
        $staff_id = $in_data['staff_id'] ;
        
        $input = $this->validate([
            'file' => [
                'uploaded[avatar]',
                'mime_in[avatar,image/jpg,image/jpeg,image/png]',
                'max_size[avatar,1024]',
            ]
        ]);
        
        if (!$input) {            
            $session->setFlashdata('type','error');
            $session->setFlashdata('msg','Invalid File.');
        } else {
            $img = $this->request->getFile('avatar');
            $img->move(WRITEPATH . 'uploads/avatar');
    
            $data = [
               'avatar' =>  $img->getName()
            ];
    
            $save = $userModel->update_data($staff_id,$data);
            $session->set('avatar',$img->getName());      
            $session->setFlashdata('type','success');
            $session->setFlashdata('msg','Your file has been updated successfuly');
        }
        return redirect()->to('home/dashboard/'); 
    }
    public function showFile($file_name)
    {
        helper("filesystem");
        $path = WRITEPATH . 'uploads/avatar/';
        $filename = $file_name;

        $fullpath = $path . $filename;
        $file = new \CodeIgniter\Files\File($fullpath, true);
        $binary = readfile($fullpath);
        return $this->response
                ->setHeader('Content-Type', $file->getMimeType())
                ->setHeader('Content-disposition', 'inline; filename="' . $file->getBasename() . '"')
                ->setStatusCode(200)
                ->setBody($binary);
    }
    public function logout(){
        $session = session();
        $session->destroy();    
        return redirect()->to('/'); 
    }
}

