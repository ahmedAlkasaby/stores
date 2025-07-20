<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected $commands = [
        // \App\Console\Commands\MakeServiceCommand::class,
        \App\Console\Commands\DeleteExpiredCartItems::class,

    ];
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('otp:clean')->daily();
        $schedule->command('cart:clear-expired')->everyFiveMinutes();
        $schedule->command('app:notify-amount-product')->daily();


    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
