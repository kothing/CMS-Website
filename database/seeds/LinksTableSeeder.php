<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('links')->delete();
        
        \DB::table('links')->insert(array (
            0 => 
            array (
                'id' => 4,
                'title' => 'Kothing',
                'url' => 'https://www.kothing.com/',
                'sort' => 0,
                'status' => 1,
                'created_at' => '2019-12-12 12:36:34',
                'updated_at' => '2019-12-12 12:36:34',
            ),
            1 => 
            array (
                'id' => 5,
                'title' => '网址导航',
                'url' => 'http://site.kothing.com',
                'sort' => 0,
                'status' => 1,
                'created_at' => '2019-12-24 18:39:49',
                'updated_at' => '2019-12-24 18:39:49',
            ),
            2 => 
            array (
                'id' => 6,
                'title' => '开源地址',
                'url' => 'https://github.com/kothing/SiteCMS',
                'sort' => 0,
                'status' => 1,
                'created_at' => '2019-12-24 18:41:00',
                'updated_at' => '2019-12-30 11:28:21',
            ),
        ));
        
    }
}
