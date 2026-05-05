<?php

namespace Concept7\LaravelNieuwbouwOffice\Tests;

use Concept7\LaravelNieuwbouwOffice\NieuwbouwOfficeServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            NieuwbouwOfficeServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
