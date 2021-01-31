<?php

use Illuminate\Database\Seeder;

class SystemInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('system_infos')->truncate();
        DB::table('system_infos')->insert([
            'web_title' => 'SiteCMS内容导航',
            'web_desc' => '内容导航平台第一站',
            'web_url' => 'http://site.kothing.com',
            'web_logo'    => 'sys_img/logo.svg',
            'stats_code'    => '',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
    }
}
