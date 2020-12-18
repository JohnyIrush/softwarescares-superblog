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

    /**maps file storage disk location
     * by returning new location path
    */
    public function storageMapper($originalpath,$replacement,$start,$length = null){
      return substr_replace ($originalpath, $replacement, $start, $length = null);
    }

    /*Upload Media In Appropriate Storage Disks*/
    public function deleteFile()
    {
      try {
        $file = Media::find($this->id);
        Storage::disk('public')->delete(asset('storage/'. $this->storageMapper($file->location,'app/storage/app/public',0,9)));
        //dd($this->storageMapper($file->location,'app/storage/app/public',0,9));
        //$file->delete();
        //dd(Storage::delete(asset('storage/'. $this->storageMapper($file->location,'app/storage/app/public',0,9))));
        //dd();
        //echo asset('storage/'. $this->storageMapper($file->location,'app/storage/app/public',0,9) );
      } catch (\Throwable $th) {
        throw $th;
      }
        //$file = Media::find($this->id);
        //Storage::delete($file->location);
        //$file->delete();
    }
     
}
