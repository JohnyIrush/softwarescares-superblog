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
    public function storageMapper($search, $replace, $subject){
      return str_ireplace($search, $replace, $subject);
    }

    /*Upload Media In Appropriate Storage Disks*/
    public function deleteFile()
    {
      try {
        //$file = Media::find($this->id);
        //unlink($file->location);
        //unlink($this->storageMapper('/storage','app/storage/public',$file->location));
        //unlink($this->storageMapper('/storage' . '/','',$file->location));
        //dd(unlink($this->storageMapper('/storage' . '/','',$file->location)));
        //Storage::delete($this->storageMapper('/storage' . '/','',$file->location));
        //dd($this->storageMapper('/storage' . '/','',$file->location));
        //return dd(Storage::delete($this->storageMapper('/storage','',$file->location)));
        //Storage::delete('images/' . $post->image);
        //dd($this->storageMapper('/storage','',$file->location));
        //echo $this->storageMapper($file->location,'/',0,11);
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
