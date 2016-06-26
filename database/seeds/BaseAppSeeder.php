<?php

use Illuminate\Database\Seeder;
use App\User, App\Permission, App\Role;

class BaseAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Dwi Prabowo',
            'email' => 'dwijpr@gmail.com',
            'password' => bcrypt('asdfasdf'),
        ]);
        $owlpre = User::create([
            'name' => 'Owl Prestige',
            'email' => 'owlpre@gmail.com',
            'password' => bcrypt('asdfasdf'),
        ]);

        $permission_manage_users = Permission::create([
            'name' => 'manage-users',
            'label' => 'Manage non admin role users',
        ]);

        $role_admin = Role::create([
            'name' => 'admin',
            'label' => 'System admin',
        ]);

        $role_admin->assign($permission_manage_users);

        $owlpre->assign($role_admin);
    }
}
