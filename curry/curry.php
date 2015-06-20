<?php

//function Curry(...$params)
//{
//    $func = &array_shift($params);
//    $ref = new ReflectionFunction($func);
//    $argNum = $ref->getParameters();
//    $args = $params;
//
//    $innerCurry = call_user_func(function() use ($args, $func, $argNum) {
//        $innerCurryHierarchy = function(...$innerParams) use (&$args, $func, $argNum, &$innerCurryHierarchy) {
//            $args = array_merge($args, $innerParams);
//
//            print_r($args);
//            return (count($args) >= count($argNum))
//                ? $func(...$args)
//                : $innerCurryHierarchy;
//        };
//        return $innerCurryHierarchy;
//    });
//
//    return (count($ref->getParameters()) <= count($params))
//        ? $func(...$params)
//        :  $innerCurry;
//}

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