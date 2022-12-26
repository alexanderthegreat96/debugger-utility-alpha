<?php
use Alexanderthegreat96\DebuggerUtilityAlpha\DebuggerUtility;

if(!function_exists('debugger_utility')) {
    /**
     * @param $items
     * @param string $title
     * @return string
     */
    function debugger_utility($items = [], string $title = 'Array Debugger') {
        return DebuggerUtility::var_dump($items, $title);
    }
}