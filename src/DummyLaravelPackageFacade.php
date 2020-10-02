<?php

namespace Itsdanielfelix\DummyLaravelPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Itsdanielfelix\DummyLaravelPackage\Skeleton\SkeletonClass
 */
class DummyLaravelPackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dummy-laravel-package';
    }
}
