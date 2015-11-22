<?php

namespace Xjson\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Xjson\Http\Requests;
use Xjson\Xml\XmlInterface;

class HomeController extends Controller
{
    public function __construct(XmlInterface $xmlTransformer)
    {
        /** @var \Xjson\Xml\XmlTransformer xmlTransformer */
        $this->xmlTransformer = $xmlTransformer;
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
        $file = $this->xmlTransformer->saveAndNameFile($request);
        $namespaces = $request->get('namespaces');
        $collection = $this->xmlTransformer->toJson($file, $namespaces);
        return Response::json($collection);
    }
}
