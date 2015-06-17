<?php

/**
 * Curry method, implemented for PHP 5.6+
 *
 * @param $params - array($func, $arg1, $arg2, ...)
 */
function Curry(...$params)
{
    $func = &array_shift($params);
    $ref = new ReflectionFunction($func);
    $argNum = $ref->getParameters();
    $args = $params;

    $innerCurry = call_user_func(function() use ($args, $func, $argNum) {
        $innerCurryHierarchy = function(...$innerParams) use (&$args, $func, $argNum, &$innerCurryHierarchy) {
            $args = array_merge($args, $innerParams);

            print_r($args);
            return (count($args) >= count($argNum))
                ? $func(...$args)
                : $innerCurryHierarchy;
        };
        return $innerCurryHierarchy;
    });

    return (count($ref->getParameters()) <= count($params))
        ? $func(...$params)
        :  $innerCurry;
}