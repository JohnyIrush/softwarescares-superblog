<?php

namespace SoftwaresCares\SuperBlog\Http\Drivers;

use SoftwaresCares\SuperBlog\Models\Media;
use Illuminate\Support\Facades\Storage;

class StorageCapacityDriver{

    public $totalFiles;
    public $images;
    public $videos;
    public $audios;
    public $text;
    
    public function __construct()
    {
     
    }
    /**
     * Count The Number of each type of media
    */
    public function getTotalFilesCount(){
        return $this->totalFiles = sizeof(Media::all());
    }

    public function getTotalVideosCount(){
        return $this->videos = sizeof(Media::where('type', 'video')->get());
    }
    public function getTotalImagesCount(){
        return $this->images = sizeof(Media::where('type', 'image')->get());
    }

    public function getTotalAudiosCount(){
        return $this->audios = sizeof(Media::where('type', 'audio')->get());
    }

    public function getTotalTextFilesCount(){
        return  $this->text = sizeof(Media::where('type', 'text')->get());
    }
    //get the size of the disk
    public function diskSize(){

        try {
            $capacity =  disk_free_space('C:\Bitnami\wampstack-7.4.6-1');
            //return $capacity;
            //echo storage_path('app/public');
            //echo public_path();
            return $capacity;
        } catch (\Throwable $th) {
            throw $th;
        }

    }


}