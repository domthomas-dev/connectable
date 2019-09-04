<?php

namespace Thomasdominic\Connectable;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Thomasdominic\Connectable\Skeleton\SkeletonClass
 */
class ConnectableFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'connectable';
    }
}
