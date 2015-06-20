<?php

function Curry($func)
{
    if ( ! $func instanceof Closure) {
        return null;
    }

    $ref = new ReflectionFunction($func);
    $argNum = count($ref->getParameters());
    return function (...$params) use ($argNum, &$func) {
        if ($argNum > 1) {
            $collect = function (...$collectParams) use (&$params, $argNum, &$collect, &$func) {
                if (count($params) >= $argNum) {
                    return $func(...$params);
                }
                else if (count($collectParams) + count($params) >= $argNum) {
                    return $func(...array_merge($collectParams, $params));
                } else {
                    return function (...$innerParams) use(&$collect, $collectParams) {
                        $params = array_merge($collectParams, $innerParams);
                        return $collect(...$params);
                    };
                }
            };
            return $collect;
        }
        else {
            return $func(...$params);
        }
    };
}