<?php

namespace diversen;

use Symfony\Component\CssSelector\CssSelectorConverter;

class querySelector {
    
    public static function getElementsAsDOM ($xml, $query) {
        $converter = new CssSelectorConverter();
        $dom_elem = $xml->xpath($converter->toXPath($query));
        return $dom_elem;
    }

    public static function getElementsAsAry($xml, $query) {
        $dom = self::getElementsAsDOM($xml, $query);
        $ary = json_decode(json_encode($dom), 1);
        return $ary;
    }
}

