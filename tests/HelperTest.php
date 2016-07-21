<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Carbon\Carbon;

class HelperTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $year_months = year_months(
            Carbon::parse('2016-07-21')
            , Carbon::parse('2016-06-20')
        );
        $result = [
            '2016-06',
            '2016-07',
            '2016-08',
        ];
        $this->assertTrue($year_months === $result);
    }
}
