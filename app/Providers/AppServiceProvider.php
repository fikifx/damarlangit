<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Notifications\DatabaseNotification;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Filament::serving(function () {
        //     if (auth()->check()) {
        //         $notifications = DatabaseNotification::where('notifiable_id', auth()->id())
        //             ->whereNull('read_at')
        //             ->get();

        //         foreach ($notifications as $notification) {
        //             Notification::make()
        //                 ->title($notification->data['title'])
        //                 ->body($notification->data['body'])
        //                 ->send();
        //             Log::info('Notification displayed: ' . $notification->id);
        //         }
        //     }
        // });
    }
}
