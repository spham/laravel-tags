<?php

namespace Spham\LaravelTags\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spham\LaravelTags\LaravelTags
 */
class LaravelTags extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Spham\LaravelTags\LaravelTags::class;
    }
}
