<?php

namespace SoftwaresCares\SuperBlog\Http\Drivers;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use SoftwaresCares\SuperBlog\Models\Media;

class UploadStorageDriver
{
    //use Media;
    public $file;
    /*Take the media file to be processed*/
    public function __construct($media)
    {
      $this->file = $media;
    }

    /*Upload Media In Appropriate Storage Disks*/
    public function uploadToDisk()
    {
        $fileExtension = $this->file->extension(); //Check File Type

        /*Store in Image Disk*/
        if ($fileExtension=="jpg" || $fileExtension=="png" || $fileExtension=="jpeg" ) 
        {
            $type = 'image';
            $path = '/storage' . '/' . $this->file->store('images','public');
            $this->saveToDatabase($path,$type);
        }

        else if ($fileExtension=="mp4" || $fileExtension=="mkv" || $fileExtension=="mov" ) 
        {
            $type = 'video';
            $path = '/storage' . '/' . $this->file->store('videos','public');
            $this->saveToDatabase($path,$type);
        }

        
        else if ($fileExtension=="mp3") 
        {
            $type = 'audio';
            $path = '/storage' . '/' . $this->file->store('audios','public');
            $this->saveToDatabase($path,$type);
        }

        else if ($fileExtension=="txt" || $fileExtension=="doc" || $fileExtension=="rtf" || $fileExtension=="pdf" || $fileExtension=="docx" ) 
        {
            $type = 'text';
            $path = '/storage' . '/' . $this->file->store('documents','public');
            $this->saveToDatabase($path,$type);
        }

        
        //return redirect(route('media'));

    }

    /*Save Media File Path into database*/
    public function saveToDatabase($location,$type)
    {
        $media = new Media();
        $media->location = $location;
        $media->type = $type;
        $media->save();
        
    }

}
