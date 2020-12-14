<?php

namespace SoftwaresCares\SuperBlog\database\seeders;

use Illuminate\Database\Seeder;
use SoftwaresCares\SuperBlog\Models\Media;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Media::truncate();
        //1
        $midia = new Media([
           'location' => '/',
           'type' => 'image',
          ]);

        $midia->save();
        //2
        $midia = new Media([
            'location' => '/',
            'type' => 'image',
           ]);
       
        $midia->save();
        //3
        $midia = new Media([
            'location' => '/',
            'type' => 'image',
           ]);
 
        $midia->save();

        //4
        $midia = new Media([
            'location' => '/',
            'type' => 'image',
           ]);
 
        $midia->save();
        //5
        $midia = new Media([
            'location' => '/',
            'type' => 'image',
           ]);
 
        $midia->save();

        //6
        $midia = new Media([
            'location' => '/',
            'type' => 'image',
           ]);
 
        $midia->save();

        //7
        $midia = new Media([
            'location' => '/',
            'type' => 'image',
           ]);
 
        $midia->save();

        //8
        $midia = new Media([
            'location' => '/',
            'type' => 'image',
           ]);
 
        $midia->save();

        //9
        $midia = new Media([
            'location' => '/',
            'type' => 'image',
           ]);
 
        $midia->save();

        //10
        $midia = new Media([
            'location' => '/',
            'type' => 'image',
           ]);
 
        $midia->save();

        //11
        $midia = new Media([
            'location' => '/',
            'type' => 'image',
           ]);
 
        $midia->save();

        //12
        $midia = new Media([
            'location' => '/',
            'type' => 'image',
           ]);
 
        $midia->save();
    }
}
