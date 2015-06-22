<?php
/**
 * Icon Plugin for kirby
 * User: thieshagedorn
 * Date: 18.06.15
 * Version: 1.0
 */

kirbytext::$pre[] = function($kirbytext, $text) {

    $text = preg_replace_callback('!(\(icon:[a-z-\s0-9]+\))!is', function($matches) use($kirbytext) {

        $toreplace = array(
            '(icon:',
            ')',
            ' lg,',
            ' 2x',
            ' 3x',
            ' 4x',
            ' 5x',
        );
        $replace = array(
            '<i class="fa fa-',
            '"></i>',
            ' fa-lg,',
            ' fa-2x',
            ' fa-3x',
            ' fa-4x',
            ' fa-5x',
        );

        return str_replace($toreplace,$replace,$matches[1]);

    }, $text);

    return $text;

};
