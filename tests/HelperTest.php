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
        $this->mdHelper();
        $this->fileHelper();
        $this->dateTimeHelper();
    }

    private function mdHelper() {
        $test = [
            'title' => [
                "**Business-In-a-Box** - Geekseat",
                "<strong>Business-In-a-Box</strong> - Geekseat\n",
            ],
            'body' => [
                "As a Tatts staff, I want to be able to upload a csv file"
                ." containing FirstName, LastName, and EmailAddress of the"
                ." people I want to invite to the cocktail party. I also want"
                ." to be able to manually enter the detail of the people from"
                ." the back end system."
                ."\n\nOnce they registering the app, the system will detect and"
                ." automatically set their cocktail party invitation as visible"
                ." in the mobile app.",
                "<p>As a Tatts staff, I want to be able to upload a csv file"
                ." containing FirstName, LastName, and EmailAddress of the"
                ." people I want to invite to the cocktail party. I also want"
                ." to be able to manually enter the detail of the people from"
                ." the back end system.</p>\n"
                ."<p>Once they registering the app, the system will detect and"
                ." automatically set their cocktail party invitation as visible"
                ." in the mobile app.</p>\n",
            ],
        ];
        $this->assertEquals(
            $test['title'][1], md_to_html_title($test['title'][0])
        );
        $this->assertEquals(
            $test['body'][1], md_to_html($test['body'][0])
        );
    }

    private function fileHelper() {
        $test = [
            'sample.php', 'sample'
        ];
        $this->assertEquals($test[1], strip_ext($test[0]));
    }

    private function dateTimeHelper() {
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
