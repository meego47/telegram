<?php

namespace NotificationChannels\Telegram;

use GuzzleHttp\Client as HttpClient;
use Illuminate\Support\ServiceProvider;

/**
 * Class TelegramServiceProvider.
 */
class TelegramServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        $this->app->bind(Telegram::class, static function () {
            return new Telegram(
                config('services.telegram-bot-api.token'),
                new HttpClient()
            );
        });
    }
}
