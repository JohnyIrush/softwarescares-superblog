<?php

namespace SoftwaresCares\SuperBlog\Http\Drivers;
use Session;

class SuperBlogInstaller {
    
    public function __construct()
    {
     
    }
    /**
     * Automatically update app scripts
     * with superblog package scripts
    */
    public function scriptUpdater($packagescript,$appscript){

        //$updates = new Session();

        //Session::put('scriptupdate','updated');


        $packagescripts = fopen($packagescript, "r") or die("Unable to open file!");
        $appscripts = fopen($appscript, "a") or die("Unable to open file!");
        //dd(filesize($packagescript));

        $scriptupdate = fwrite($appscripts, fread($packagescripts ,filesize($packagescript)));

        //echo Session::get('scriptupdate');



    }

}