<?php

/**
 * @see       https://github.com/laminas/laminas-i18n for the canonical source repository
 * @copyright https://github.com/laminas/laminas-i18n/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-i18n/blob/master/LICENSE.md New BSD License
 */

return array(
    'code' => '250',
    'patterns' => array(
        'national' => array(
            'general' => '/^[027-9]\\d{7,8}$/',
            'fixed' => '/^2[258]\\d{7}|06\\d{6}$/',
            'mobile' => '/^7[238]\\d{7}$/',
            'tollfree' => '/^800\\d{6}$/',
            'premium' => '/^900\\d{6}$/',
            'emergency' => '/^112$/',
        ),
        'possible' => array(
            'general' => '/^\\d{8,9}$/',
            'mobile' => '/^\\d{9}$/',
            'tollfree' => '/^\\d{9}$/',
            'premium' => '/^\\d{9}$/',
            'emergency' => '/^\\d{3}$/',
        ),
    ),
);
