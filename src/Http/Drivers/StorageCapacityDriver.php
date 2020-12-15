<?php

namespace SoftwaresCares\SuperBlog\Http\Drivers;

use SoftwaresCares\SuperBlog\Models\Media;

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


}