<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class PagesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->visit('/')
            ->click('Home')
            ->seePageIs('/login');

        $admin_user = User::where('email', 'owlpre@gmail.com')->first();
        $user = User::where('email', 'dwijpr@gmail.com')->first();

        $this->seeHomePage($user);
        $this->seeHomePage($admin_user);

        $this->visitUser($user, 401);
        $this->visitUser($admin_user, 200);
    }

    function visitUser($as, $code) {
        $response = $this->actingAs($as)
            ->call('GET', '/user');
        $this->assertEquals($code, $response->status());
    }

    function seeLandingPage($as) {
        $this->visit('/')
            ->actingAs($as)
            ->click('Laravel')
            ->seePageIs('/');
    }

    function seeHomePage($as) {
        $this->visit('/')
            ->actingAs($as)
            ->click('Home')
            ->seePageIs('/home');
    }
}
