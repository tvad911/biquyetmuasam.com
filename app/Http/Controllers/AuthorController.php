<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    /**
     * Lấy ra thông tin của author và danh sách bài viết của author theo nice name
     * @param  [string] $name nice name of  author
     * @return [void]
     */
    public function author_name($name)
    {

    }
    /**
     * Lấy ra thông tin của author và danh sách bài viết của author theo author_id
     * @param  [int] $id author_id
     * @return [type]     [description]
     */
    public function author_id($id)
    {

    }
}
