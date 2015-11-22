<?php

namespace Xjson\Http\Controllers;

use Illuminate\Http\Request;
use Xjson\Http\Requests;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.home');
    }

    public function store(Request $request)
    {
        //
    }
}
