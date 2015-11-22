<?php

namespace Xjson\Xml;

interface XmlInterface
{
    /**
     * @param $xml
     * @param array $namespaces
     * @return \Illuminate\Support\Collection
     */
    public function toJson($xml, $namespaces = null);
}