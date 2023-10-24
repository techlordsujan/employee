<?php

namespace App\Controllers;

class Resource extends BaseController
{
    public function avatar($filename)
    {
        $filepath = WRITEPATH . 'uploads/avatar/' . $filename;
        if(file_exists($filepath)){
            $mime = mime_content_type($filepath);
            header('Content-Length: ' . filesize($filepath));
            header("Content-Type: $mime");
            header('Content-Disposition: inline; filename="' . $filepath . '";');
            readfile($filepath);
            exit();
        }        

    }
    public function transcript($filename)
    {
        $filepath = WRITEPATH . 'uploads/education/' . $filename;
        if(file_exists($filepath)){
            $mime = mime_content_type($filepath);
            header('Content-Length: ' . filesize($filepath));
            header("Content-Type: $mime");
            header('Content-Disposition: inline; filename="' . $filepath . '";');
            readfile($filepath);
            exit();
        }        
    }

    public function document($filename)
    {
        $filepath = WRITEPATH . 'uploads/transcript/' . $filename;
        if(file_exists($filepath)){
            $mime = mime_content_type($filepath);
            header('Content-Length: ' . filesize($filepath));
            header("Content-Type: $mime");
            header('Content-Disposition: inline; filename="' . $filepath . '";');
            readfile($filepath);
            exit();
        }        
    }
    
}