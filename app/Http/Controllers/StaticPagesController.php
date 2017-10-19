<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageWordContent;

class StaticPagesController extends Controller
{
    //这里显示首页
    public function home()
    {
        return view('frontpage', ['words' => PageWordContent::all()[0]]);
    }
}
