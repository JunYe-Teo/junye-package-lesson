<?php

namespace Junye\PackageLesson\Providers;

use Illuminate\Support\ServiceProvider;
use Junye\PackageLesson\Console\CreateModelTemplate;

class PackageLessonServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands([
                            CreateModelTemplate::class,
                        ]);
    }
}
