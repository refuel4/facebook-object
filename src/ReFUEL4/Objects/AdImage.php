<?php

namespace ReFUEL4\FacebookObject\Objects;

class AdImage extends BaseObject
{

    static public    $_fields        = [
        'id',
        'account_id',
        'url',
        'url_128',
        'creatives',
        'width',
        'height',
        'original_width',
        'original_height',
        'created_time',
        'name',
        'permalink_url',
        'status',
        'updated_time',
        'hash',
    ];

    static public    $_defaultFields = [
        'account_id',
        'url',
        'url_128',
        'creatives',
        'width',
        'height',
        'original_width',
        'original_height',
        'created_time',
        'name',
        'permalink_url',
        'status',
        'updated_time',
        'hash',
    ];

    static protected $_defaultValues = [
        'url'           => '',
        'url_128'       => '',
        'permalink_url' => '',
        'id'            => '',
    ];

    public function getTimeZone()
    {
        return new \DateTimeZone($this->timezone_name);
    }

}