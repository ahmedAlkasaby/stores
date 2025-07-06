<?php

namespace App\Providers;

use App\Services\FirebaseNotificationService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
         $this->app->singleton(FirebaseNotificationService::class, function ($app) {
            $projectId = config('firebase.project_id'); // الحصول على projectId من ملف الإعدادات
            return new FirebaseNotificationService($projectId);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
