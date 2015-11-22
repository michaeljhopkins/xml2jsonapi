<?php

namespace Xjson\Xml;

use Illuminate\Http\Request;

interface XmlInterface
{
    /**
     * @param $file
     * @param string $namespaces
     * @return \Illuminate\Support\Collection
     */
    public function toJson($file, $namespaces = null);

    /**
     * @param Request $request
     * @return string
     */
    public function saveAndNameFile(Request $request);
}