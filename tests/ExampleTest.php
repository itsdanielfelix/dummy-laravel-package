<?php

namespace Itsdanielfelix\DummyLaravelPackage\Tests;

use Orchestra\Testbench\TestCase;
use Itsdanielfelix\DummyLaravelPackage\DummyLaravelPackageServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [DummyLaravelPackageServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
