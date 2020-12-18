<?php

namespace SoftwaresCares\SuperBlog\Http\Drivers;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use SoftwaresCares\SuperBlog\Models\Media;

class FileManagerDriver
{
    public $id;
    
    public function __construct($id)
    {
      $this->id = $id;
    }

    /*Upload Media In Appropriate Storage Disks*/
    public function deleteFile()
    {
        $file = Media::find($this->id);
        Storage::delete($file->location);
        $file->delete();
    }

}
