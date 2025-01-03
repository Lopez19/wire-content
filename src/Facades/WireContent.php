<?php

namespace WireContent\Facades;

use Illuminate\Support\Facades\Facade;
use WireContent\WireContentServiceProvider;

/**
 * @see \WireContent\WireContentServiceProvider
 */
class WireContent extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return WireContentServiceProvider::class;
    }
}
