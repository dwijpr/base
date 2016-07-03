<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'firstname' => 'Dwi',
                'lastname' => 'Prabowo',
                'dob' => '1990-07-26',
                'username' => 'dp',
                'email' => 'dwijpr@gmail.com',
                'password' => '$2y$10$53z79ExyRu1Pb/e6TSjYpuyOksnGoOV741MjQtAhpbe5VatWhJ1ka',
                'remember_token' => 'lmmNRmlmdfHwmawZQejjV0baGKTYhPsq5n9552doPBWHGsUJ1JetlSLqbjx7',
                'created_at' => '2016-06-26 19:24:39',
                'updated_at' => '2016-07-02 07:51:17',
            ),
            1 => 
            array (
                'id' => 2,
                'firstname' => 'Owl Prestige',
                'lastname' => 'Prestige',
                'dob' => '1998-08-08',
                'username' => 'ost',
                'email' => 'owlpre@gmail.com',
                'password' => '$2y$10$8IBQqmfsU4z7Qkq449J8O.298ilUiXE6iwzbznxmIC70qZMrGfpOa',
                'remember_token' => 'JnHXaYmH2jseDEUxuU7MpDKWVktBIF7odUs0CvMGzh4G1P6axpZsPXGZ4yNb',
                'created_at' => '2016-06-26 19:24:39',
                'updated_at' => '2016-07-02 09:54:37',
            ),
        ));
        
        
    }
}
