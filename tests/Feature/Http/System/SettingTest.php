<?php

namespace Http\System;

use App\Models\System\Setting;
use Tests\HttpTestCase;

class SettingTest extends HttpTestCase
{
    /**
     * Respective model for endpoint.
     *
     * @var Model|null
     */
    protected $model = Setting::class;

    /**
     * Respective URL for endpoint.
     *
     * @var string|null
     */
    protected ?string $url = 'settings/';
}
