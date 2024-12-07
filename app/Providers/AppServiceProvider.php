<?php

namespace App\Providers;

use App\Models\ConversationMessage;
use App\Models\DocumentConversation;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

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
        Gate::define('view-conversation', function(User $user, ConversationMessage $conversation){
            return $user->employee_number === $conversation->employee_id;
        });

        Gate::define('manage-employee', function(User $user){
            return $user->divisions->abbreviation === 'HEAD';
        });

        Gate::define('manage-division', function(User $user){
            return $user->divisions->abbreviation === 'HEAD';
        });

        Gate::define('request-response', function(User $user){
            return $user->divisions->abbreviation === 'HEAD';
        });

        Gate::define('post-announcement', function(User $user){
            return $user->divisions->abbreviation === 'HEAD';
        });

        Gate::define('refer-someone', function(User $user){
            return $user->divisions->abbreviation === 'HEAD';
        });

        Gate::define('archive-document', function(User $user){
            return $user->divisions->abbreviation === 'HEAD';
        });
    }
}
