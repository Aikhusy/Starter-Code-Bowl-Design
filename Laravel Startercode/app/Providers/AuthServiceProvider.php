<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    public static $permission=[
        'dashboard' => ['superadmin','admin','user'],
        'index-users' => ['superadmin','admin'],
        
    ];
    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //

        

        Gate::before(function(User $user){
            if ($user->role === 'superadmin'){
                return true;
            }
        });

        foreach (self::$permission as $action=>$roles){
            Gate::define($action,function(User $user)use ($roles){
                if(in_array($user->role,$roles)){
                    return true;
                }
            });
        }
    }
}
