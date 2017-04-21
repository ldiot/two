<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "timetable";
    protected $primaryKey = "number1";
    public $timestamps = false;

    static public function craw($number1)
    {
        if (preg_match('/http:\/\/jwzx.host.congm.in:88\/jwzxtmp\/kebiao\/kb_stu.php\?xh=\d{10}/', "http://jwzx.host.congm.in:88/jwzxtmp/kebiao/kb_stu.php?xh=$number1")) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, "Location");
            curl_setopt($ch, CURLOPT_URL, "http://jwzx.host.congm.in:88/jwzxtmp/kebiao/kb_stu.php?xh=$number1");
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; SV1; .NET CLR 1.1.4322)');//设置user-agent
            return curl_exec($ch);
        } else {
            return "There is no a student in chongyou.";
        }
    }

    static public function craw2($number2)
    {
        if (preg_match('/http:\/\/jwzx.host.congm.in:88\/jwzxtmp\/showBjStu.php\?bj=\d{7,8}/', "http://jwzx.host.congm.in:88/jwzxtmp/showBjStu.php?bj=$number2")) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_URL, "http://jwzx.host.congm.in:88/jwzxtmp/kebiao/kb_stu.php?xh=$number2");
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; SV1; .NET CLR 1.1.4322)');//设置user-agent
            return curl_exec($ch);
        } else {
            return "There is no a student in chongyou.";
        }
    }
}





















