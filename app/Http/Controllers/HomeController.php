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
        $file = '/xmlFiles/'.$this->xmlTransformer->saveAndNameFile($request);
        return $this->takeRequestAndFileReturnJson($request,$file);
    }

    public function testPost(Request $request)
    {
        $file = '/exampleXml/example.xml';
        return $this->takeRequestAndFileReturnJson($request,$file);
    }

    private function takeRequestAndFileReturnJson(Request $request,$file)
    {
        $namespaces = $request->get('namespaces');
        $collection = $this->xmlTransformer->toJson($file, $namespaces);
        return Response::json($collection);
    }
}
