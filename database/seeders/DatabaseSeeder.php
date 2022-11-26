<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $doe = DB::table('users')->insert([
            'name' => 'Shraddha',
            'email' => 'shraddha@laravel.test',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $else = \App\Models\User::factory()->count(5)->create();

        $users = $else->concat([$doe]);
        
        $posts = App\Models\BlogPost::class->count(10)->create(); 
            $post->user_id = $users->random()->id;
            $post->save();
    
    }
}
