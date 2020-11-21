<?php

namespace App\Providers;

use App\Models\{Product, User};
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Mail\{UserCreated, UserMailChanged};

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        User::created(function($user) {
            retry(5, function() use ($user) {
                Mail::to($user)->send(new UserCreated($user));
            }, 100);
        });

        User::updated(function($user) {
            if ($user->isDirty('email')) {
                retry(5, function() use ($user) {
                    Mail::to($user)->send(new UserMailChanged($user));
                }, 100);
            }
        });

        Product::updated(function($product) {
            if ($product->quantity == 0 && $product->estaDisponible()) {
                $product->status = Product::PRODUCTO_NO_DISPONIBLE;

                $product->save();
            }
        });

        Blade::withoutComponentTags();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
