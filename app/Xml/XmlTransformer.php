<?php namespace Xjson\Xml;

use Carbon\Carbon;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class XmlTransformer implements XmlInterface
{
    /**
     * @param $file
     * @param string $namespaces
     * @return \Illuminate\Support\Collection
     */
    public function toJson($file, $namespaces = null)
    {
        $xml = \File::get(storage_path('xmlFiles/' . $file));
        $xmlToConvert = simplexml_load_string($this->removeNamespace($xml, $namespaces));
        $jsonConversion = json_decode(json_encode($xmlToConvert), true);
        $collection = new Collection($jsonConversion);
        return $collection;
    }

    /**
     * @param $xml
     * @param string $namespaces
     * @return string
     * The original code for this process came from BENderIsGr8te at Laracasts. https://laracasts.com/discuss/channels/general-discussion/converting-xml-to-jsonarray/replies/112561
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

    /**
     * @param Request $request
     * @return string
     */
    public function saveAndNameFile(Request $request)
    {
        $file = $request->file('xml');
        $randomName = md5(Hash::make(Carbon::now()->toTimeString()));
        $file->move(storage_path('xmlFiles'), $randomName);
        return $randomName;
    }
}