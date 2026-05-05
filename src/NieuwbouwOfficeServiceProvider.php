<?php

namespace Concept7\LaravelNieuwbouwOffice;

use NieuwbouwOffice\PhpSdk\NieuwbouwOffice;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class NieuwbouwOfficeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('nbo')
            ->hasConfigFile();
    }

    public function packageBooted(): void
    {
        $this->app->singleton(NieuwbouwOffice::class, function () {
            $token = config('nbo.api_token');
            $baseUrl = config('nbo.base_url');

            return new NieuwbouwOffice($token, $baseUrl);
        });
    }
}
