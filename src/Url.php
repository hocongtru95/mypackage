<?php
namespace hocongtru95\mypackage;

class Url
{
    public function sluggify($string, $separator = '-', $maxLength = 96)
    {
        //this my change
        $title = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $string);
        $title = preg_replace('%[^-/+|\w ]%', '', $title);
        $title = strtolower(trim(substr($title, 0, $maxLength), '-'));
        $title = preg_replace('/[\/_|+ -]+/', $separator, $title);

        return $title;
    }
}