<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class FormTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $login_infos = [
            [
                'email' => 'owlpre@gmail.com',
                'password' => 'asdfasdf',
                'see' => '/home',
            ],
            [
                'email' => 'dwijpr@gmail.com',
                'password' => 'asdfasdf',
                'see' => '/home',
            ],
            [
                'email' => 'unknown@unknown.com',
                'password' => 'asdfasdf',
                'see' => '/login',
            ],
        ];

        foreach ($login_infos as $login_info) {
            $this->visitHome($login_info);
        }
    }

    function visitHome($info) {
        $this->visit('/home')
            ->seePageIs('/login')
            ->type($info['email'], 'email')
            ->type($info['password'], 'password')
            ->press('Login')
            ->seePageIs($info['see'])
            ;
        $this->visit('/logout');
    }
}
