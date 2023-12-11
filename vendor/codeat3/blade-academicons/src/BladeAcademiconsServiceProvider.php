<?php

declare(strict_types=1);

namespace Codeat3\BladeAcademicons;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeAcademiconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-academicons', []);

            $factory->add('academicons', array_merge(['path' => __DIR__ . '/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/blade-academicons.php', 'blade-academicons');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/blade-academicons'),
            ], 'blade-academicons');

            $this->publishes([
                __DIR__ . '/../config/blade-academicons.php' => $this->app->configPath('blade-academicons.php'),
            ], 'blade-academicons-config');
        }
    }
}
