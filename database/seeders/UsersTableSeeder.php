<?php 
namespace Database\Seeders; 
 
use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\Hash; 
 
class UsersTableSeeder extends Seeder 
{ 
    /** 
     * Run the database seeds. 
     * 
     * @return void 
     */ 
    public function run() 
    { 
        DB::table('users')->insert([ 
            'name' => 'Fernando', 
            'email' => 'al222010066@gmail.com', 
            'email_verified_at' => now(), 
            'password' => Hash::make('123456789'), 
            'created_at' => now(), 
            'updated_at' => now() 
        ]); 
    } 
}