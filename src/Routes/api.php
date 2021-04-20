<?php

Route::group(['prefix' => 'api',  'middleware' => 'api'], function() {
    Route::post('coinbase/webhook', '\AlexisRiot\Coinbase\Http\Controllers\WebhookController')->name('coinbase-webhook');
});