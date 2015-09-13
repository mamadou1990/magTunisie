<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {


        $models = array(
            'Article',
            'Categorie',
            'Section',
            'Media',
            'User'
        );

        foreach ($models as $model) {
            $this->app->bind(

                "App\\Repositories\\{$model}Repository",
                "App\\Repositories\\{$model}RepositoryEloquent"
            );
        }
    }
}
