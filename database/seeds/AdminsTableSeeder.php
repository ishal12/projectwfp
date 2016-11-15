<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = array(['id'=>1, 'nama'=>'admin','password'=>md5('123456')]);

		DB::table('admins')->insert($admins);
    }
}
