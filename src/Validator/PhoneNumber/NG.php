<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return [
    'code' => '234',
    'patterns' => [
        'national' => [
            'general' => '/^(?:[1-69]\\d{5,8}|[78]\\d{5,13})$/',
            'fixed' => '/^(?:[12]\\d{6,7}|9\\d{7}|(?:3\\d|4[023568]|5[02368]|6[02-469]|7[4-69]|8[2-9])\\d{6}|(?:4[47]|5[14579]|6[1578]|7[0-357])\\d{5,6}|(?:78|41)\\d{5})$/',
            'mobile' => '/^(?:(?:1(?:7[34]\\d|8(?:04|[124579]\\d|8[0-3])|95\\d)|287[0-7]|3(?:18[1-8]|88[0-7]|9(?:8[5-9]|6[1-5]))|4(?:28[0-2]|6(?:7[1-9]|8[02-47])|88[0-2])|5(?:2(?:7[7-9]|8\\d)|38[1-79]|48[0-7]|68[4-7])|6(?:2(?:7[7-9]|8\\d)|4(?:3[7-9]|[68][129]|7[04-69]|9[1-8])|58[0-2]|98[7-9])|7(?:38[0-7]|69[1-8]|78[2-4])|8(?:28[3-9]|38[0-2]|4(?:2[12]|3[147-9]|5[346]|7[4-9]|8[014-689]|90)|58[1-8]|78[2-9]|88[5-7])|98[07]\\d)\\d{4}|(?:70(?:[3-9]\\d|2[1-9])|8(?:0[2-9]|1\\d)\\d)\\d{6})$/',
            'tollfree' => '/^800\\d{7,11}$/',
            'uan' => '/^700\\d{7,11}$/',
            'emergency' => '/^199$/',
        ],
        'possible' => [
            'general' => '/^\\d{5,14}$/',
            'fixed' => '/^\\d{5,9}$/',
            'mobile' => '/^\\d{8,10}$/',
            'tollfree' => '/^\\d{10,14}$/',
            'uan' => '/^\\d{10,14}$/',
            'emergency' => '/^\\d{3}$/',
        ],
    ],
];
