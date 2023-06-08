<?php

namespace App;

class Constants
{
    const DATETIME_FORMAT = 'Y-m-d H:m:s';

    const DEFAULT_PAGINATION = 25;

    const MAX_PAGINATION = 100;

    const FILTER_QUERY = [
        'name' => 'filter_columns',
        'trueValue' => '1',
        'falseValue' => '0',
    ];
}
