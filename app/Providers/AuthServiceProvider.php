<?php 
 
namespace App\Providers; 
 
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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy', 
    ]; 
 
    /** 
     * Register any authentication / authorization services. 
     * 
     * @return void 
     */ 
    public function boot()
    {
        $this->registerPolicies();

        // Usuario super Admin
        // Otorga todos los permisos a las funciones de "Superadministrador"
        Gate::before(function ($user, $ability) {
            return in_array($user->email, ['al222010066@gmail.com', 'al222010231@gmail.com']);
        });
    }
}