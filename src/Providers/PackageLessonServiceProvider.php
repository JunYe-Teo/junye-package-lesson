<?php

namespace Junye\PackageLesson\Providers;

use Illuminate\Support\ServiceProvider;
use Junye\PackageLesson\Console\CreateModelTemplate;
use Junye\PackageLesson\Console\CreateModuleTemplate;

class PackageLessonServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands([
                            CreateModelTemplate::class,
                            CreateModuleTemplate::class,
                        ]);
    }
}
