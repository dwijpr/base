<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'manage-users',
                'label' => 'Manage non admin role users',
                'created_at' => '2016-06-26 19:24:39',
                'updated_at' => '2016-06-26 19:24:39',
            ),
        ));
        
        
    }
}
