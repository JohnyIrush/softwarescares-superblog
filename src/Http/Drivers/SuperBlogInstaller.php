<?php

namespace SoftwaresCares\SuperBlog\Http\Drivers;

class SuperBlogInstaller {
    
    public function __construct()
    {
     
    }
    /**
     * Automatically update app scripts
     * with superblog package scripts
    */
    public function scriptUpdater($packagescript,$appscript){

        $packagescripts = fopen($packagescript, "r") or die("Unable to open file!");
        $appscripts = fopen($appscript, "a+") or die("Unable to open file!");

        fwrite($appscripts, fread($packagescripts ,filesize($packagescript)));


        $data = fopen($appscript, "r") or die("Unable to open file!");
        //echo $packagescripts;
        echo fread($data,filesize($appscript));
    }

}