<?php

namespace Concept7\LaravelNieuwbouwOffice\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Concept7\NieuwbouwOffice\NieuwbouwOffice
 */
class NieuwbouwOffice extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \NieuwbouwOffice\PhpSdk\NieuwbouwOffice::class;
    }
}
