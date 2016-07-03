<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'label' => 'System admin',
                'created_at' => '2016-06-26 19:24:39',
                'updated_at' => '2016-06-26 19:24:39',
            ),
        ));
        
        
    }
}
