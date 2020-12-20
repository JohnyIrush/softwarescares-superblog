<?php 
/*
namespace SoftwaresCares\SuperBlog;

use SoftwaresCares\SuperBlog\Http\Drivers\SuperBlogInstaller;

class AutoEngines{

public function run(){
    $installer = new SuperBlogInstaller();
    $installer->scriptUpdater(__DIR__ . '/src/superblog-vue-components/app.js',base_path() . '/resources/js/test.js');
}

}

$autoEngines = new AutoEngines();
$autoEngines->run();

 function scriptUpdater($packagescript,$appscript){
 
     $packagescripts = fopen($packagescript, "r") or die("Unable to open file!");
     $appscripts = fopen($appscript, "a+") or die("Unable to open file!");
 
     fwrite($appscripts, fread($packagescripts ,filesize($packagescript)));
 
 
     $data = fopen($appscript, "r") or die("Unable to open file!");
     //echo $packagescripts;
     echo fread($data,filesize($appscript));
 }
 
 scriptUpdater(__DIR__ . '/src/superblog-vue-components/app.js',base_path() . '/resources/js/test.js')
 */

 echo 'npm run watch';