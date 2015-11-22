<?php namespace Xjson\Xml;

use Illuminate\Support\Collection;

class XmlTransformer implements XmlInterface
{
    /**
     * @param $xml
     * @param string $namespaces
     * @return \Illuminate\Support\Collection
     */
    public function toJson($xml, $namespaces = null)
    {
        $xmlToConvert = $namespaces ?
            simplexml_load_string($this->removeNamespace($xml, $namespaces)) :
            simplexml_load_string($xml);
        $jsonConversion = json_decode(json_encode($xmlToConvert), true);
        $collection = new Collection($jsonConversion);
        return $collection;
    }

    /**
     * @param $xml
     * @param string $namespaces
     * @return string
     */
    private function removeNamespace($xml, $namespaces)
    {
        $toRemove = explode(',', $namespaces);
        $nameSpaceDefRegEx = '(\S+)=["\']?((?:.(?!["\']?\s+(?:\S+)=|[>"\']))+.)"\']?';
        foreach ($toRemove as $remove) {
            $xml = str_replace('<' . $remove . ':', '<', $xml);
            $xml = str_replace('</' . $remove . ':', '</', $xml);
            $xml = str_replace($remove . ':commentText', 'commentText', $xml);
            $pattern = "/xmlns:{$remove}{$nameSpaceDefRegEx}/";
            $xml = preg_replace($pattern, '', $xml, 1);
        }
        return $xml;
    }
}