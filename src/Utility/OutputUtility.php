<?php
/*
 * This file is part of the "t3-debugger-utility-standalone" library.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2019 Wolf Utz
 */

namespace Alexanderthegreat96\DebuggerUtilityAlpha\Utility;

/**
 * Class OutputUtility.
 */
class OutputUtility
{
    /**
     * Wrap a string with the ANSI escape sequence for colorful output.
     *
     * @param mixed  $value      The string to wrap
     * @param string $ansiColors The ansi color sequence (e.g. "1;37")
     * @param bool   $enable     If FALSE, the raw string will be returned
     *
     * @return string The wrapped or raw string
     */
    public static function ansiEscapeWrap($value, $ansiColors, $enable = true)
    {
        if ($enable) {
            return '['.$ansiColors.'m'.$value.'[0m';
        }

        return $value;
    }
}
