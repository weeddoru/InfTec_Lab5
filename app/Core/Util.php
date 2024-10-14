<?php

namespace Core;

 HEAD
 761d629 (Task 10.2 login/logout)
class Util
{
    /**
     * 
     */
    public static function arrayToList($array = [], $mask = "%s", $separator = ","): string
    {
 HEAD
        return implode($separator, array_map( 'sprintf', array_fill(0, count ($array), $mask), $array ));
        return implode($separator, array_map( "sprintf", array_fill(0, count ($array), $mask), $array ));
 761d629 (Task 10.2 login/logout)
    }

    public static function keyValueToList($array = [], $mask = "%s => %s", $separator = ","): string
    {
 HEAD
        return implode($separator, array_map( 'sprintf', array_fill(0, count ($array), $mask), array_keys($array), array_values($array)));
    }
        return implode($separator, array_map( "sprintf", array_fill(0, count ($array), $mask), array_keys($array), array_values($array)));
    }

 761d629 (Task 10.2 login/logout)
}