<?php

namespace hocongtru95\mypackage;

use PHPUnit\Framework\TestCase;

use hocongtru95\mypackage\Url;

class UrlTest extends TestCase {
    /**
     * @param string $originalString
     * @param string $expctedString
     * @dataProvider testSluggifyStringValue
    */
    public function testSluggifyReturnsSluggifiedString($originalString, $expctedString)
    {
        $url = new Url();
        $result = $url->sluggify($originalString);

        $this->assertEquals($result, $expctedString);
    }
    public function testSluggifyStringValue ()
    {
        return [
            ['This string will be sluggified', 'this-string-will-be-sluggified'],
            ['THIS STRING WILL BE SLUGGIFIED', 'this-string-will-be-sluggified'],
            ['This1 string2 will3 be 44 sluggified10', 'this1-string2-will3-be-44-sluggified10'],
            ['This! @string#$ %$will ()be "sluggified', 'this-string-will-be-sluggified'],
            ["Tänk efter nu – förr'n vi föser dig bort", 'tank-efter-nu-forrn-vi-foser-dig-bort'],
            ['', ''],
        ];
    }

}