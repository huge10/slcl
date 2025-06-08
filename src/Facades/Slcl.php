<?php

namespace Huge10\Slcl\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Huge10\Slcl\Slcl
 */
class Slcl extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Huge10\Slcl\Slcl::class;
    }
}
