<?php

namespace artemka124\HotfixMerge\Facades;

use Illuminate\Support\Facades\Facade;

class HotfixMerge extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hotfixmerge';
    }
}
