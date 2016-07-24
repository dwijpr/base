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
        $this->htmlHelper();
        $this->mdHelper();
        $this->fileHelper();
        $this->dateTimeHelper();
    }

    private function htmlHelper() {
        $test = [
            '<p>Hai, perkenalkan, nama saya Dwi, nama lengkap Dwi Juli Prabowo, saya rasa
cukup mudah untuk menginterpretasikan maksud dari nama tersebut ...</p>
<blockquote>
<p>Apalah arti sebuah nama</p>
</blockquote>
<footer>William Shakespeare</footer>
<p>Berasal dari sebuah kota di pulau Jawa bagian tengah yang terkenal dengan
candi Borobudur-nya. Seorang lelaki <sup>1</sup>/<sub>4</sub>
abad yang sedang mencoba <em>secara paksa</em> hobi baru.</p>
<p>Beberapa tahun ini saya sudah memiliki keinginan untuk membuat sebuah karya
dengan cara menulis seperti membuat artikel untuk <em>blog</em> atau membuat buku
dengan tujuan tidak lain adalah mendapat penghasilan dari karya tersebut. Namun
keinginan tinggal keinginan, membuat artikel, buku atau karya tulisan apapun,
hingga kini masih menjadi sebuah angan-angan.</p>
<p>Menulis, sebuah <em>skill</em> yang terdengar <em>simple</em>, namun nyatanya membuat sebuah
karya dari keahlian tersebut sangatlah sulit, khususnya untuk saya. Membuat
beberapa artikel untuk blog, dan kemudian menghapusnya kembali karena tidak
yakin apakah tulisan tersebut layak baca. Tidak ada jejak dari tulisan-tulisan
sebelumnya, hingga akhirnya memutuskan untuk menyusun tulisan dengan judul
<a href="./mulai-menulis">Mulai Menulis</a> ini.</p>
<p>Membuat <em>blog</em> seperti menjadi sebuah hobi, mendesain tampilan, mengatur konten
yang ada seperti <em>layout</em>, judul, kategori. Mencoba berbagai <em>platform</em> mulai
dari <em>blogspot</em>, <em>wordpress</em>, <em>jekyll</em>, hingga membuat program untuk membuat
<em>blog</em> sendiri masih tidak bisa membantu menciptakan karya yang bagus. Karena
inti dari sebuah <em>blog</em> adalah isinya itu sendiri yang berupa tulisan. Beberapa
blog dihapus yang lainnya terbengkalai tanpa lanjutan.</p>
<p>Dari sini saya berharap rangkaian tulisan ini dapat terus berlanjut. Mungkin
saya akan membuat tulisan yang tidak bertema atau hanya tulisan tentang
kegiatan sehari-hari. Semoga tulisan saya dapat bermanfaat bagi
pembaca, khususnya untuk saya sendiri, dan mampu menghasilkan karya yang lebih
baik lagi.</p>',
            '<p>Hai, perkenalkan, nama saya Dwi, nama lengkap Dwi Juli Prabowo, saya rasa
cukup mudah untuk menginterpretasikan maksud dari nama tersebut ...</p>',
        ];
        $this->assertEquals($test[1], get_first_p($test[0]));
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
