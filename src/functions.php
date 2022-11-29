<?php
use Alexanderthegreat96\DebuggerUtilityAlpha\DebuggerUtility;

if(!function_exists('debug')) {
    /**
     * @param $items
     * @param string $title
     * @return string
     */
    function debug($items = [], string $title = 'Array Debugger') {
        return DebuggerUtility::var_dump($items, $title);
    }
}