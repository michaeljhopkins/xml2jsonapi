<?php

namespace Xjson\Http\Controllers;

use Illuminate\Http\Request;
use Xjson\Http\Requests;
use Xjson\Xml\XmlInterface;

class HomeController extends Controller
{
    public function __construct(XmlInterface $xmlTransformer)
    {
        $this->xmlTransformer = $xmlTransformer;
        parent::__construct();
    }
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
        $file = $request->file('xml');
        $namespaces = $request->get('namespaces');
        $collection = $this->xmlTransformer->toJson($file, $namespaces);

    }
}
