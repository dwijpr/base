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
                'sex' => 1,
                'firstname' => 'Dwi',
                'lastname' => 'Prabowo',
                'dob' => '1990-07-26',
                'occupation' => 'Programmer',
                'username' => 'dp',
                'email' => 'dwijpr@gmail.com',
                'password' => '$2y$10$53z79ExyRu1Pb/e6TSjYpuyOksnGoOV741MjQtAhpbe5VatWhJ1ka',
                'remember_token' => 's8r6qJFI4BUNEFAfzc1WAoFsDCAXNQMomQmpX1ioLSamGGndDyqmeR3uMw8K',
                'created_at' => '2016-06-26 19:24:39',
                'updated_at' => '2016-07-08 12:48:44',
            ),
            1 => 
            array (
                'id' => 2,
                'sex' => 1,
                'firstname' => 'Prestige',
                'lastname' => 'Owl',
                'dob' => '1998-08-08',
                'occupation' => 'System Admin',
                'username' => 'ost',
                'email' => 'owlpre@gmail.com',
                'password' => '$2y$10$8IBQqmfsU4z7Qkq449J8O.298ilUiXE6iwzbznxmIC70qZMrGfpOa',
                'remember_token' => 'JnHXaYmH2jseDEUxuU7MpDKWVktBIF7odUs0CvMGzh4G1P6axpZsPXGZ4yNb',
                'created_at' => '2016-06-26 19:24:39',
                'updated_at' => '2016-07-02 09:54:37',
            ),
            2 => 
            array (
                'id' => 3,
                'sex' => 0,
                'firstname' => 'Lolee',
                'lastname' => 'Franziska',
                'dob' => '1994-06-20',
                'occupation' => 'Angel',
                'username' => 'loli',
                'email' => 'owljpr@gmail.com',
                'password' => '$2y$10$8IBQqmfsU4z7Qkq449J8O.298ilUiXE6iwzbznxmIC70qZMrGfpOa',
                'remember_token' => 'JnHXaYmH2jseDEUxuU7MpDKWVktBIF7odUs0CvMGzh4G1P6axpZsPXGZ4yNb',
                'created_at' => '2016-06-26 19:24:39',
                'updated_at' => '2016-07-02 09:54:37',
            ),
        ));
        
        
    }
}
