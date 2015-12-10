<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DateController extends Controller
{
    /**
     * Lấy danh sách bài viết theo ngày
     * @param  [date] $date [Ngày]
     * @return [void]       [description]
     */
    public function date($date)
    {
        //
    }
    /**
     * Lấy danh sách bài viết theo tháng trong năm
     * @param  [date] $month [Tháng]
     * @return [void]        [description]
     */
    public function month($month)
    {

    }
    /**
     * Lấy tất cả các bài viết theo năm
     * @param  [int/date] $year [Năm]
     * @return [void]       [description]
     */
    public function year($year)
    {

    }
}
