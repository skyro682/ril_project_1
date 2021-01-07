<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'utilisateur',
            'name' => 'utilisateur',
            'last_name' => 'utilisateur',
            'email' => 'utilisateur@utilisateur.fr',
            'password' => hash('sha256', 'utilisateur'),
            'grade_id' => '1',            
        ]);
        DB::table('users')->insert([
            'username' => 'moderateur',
            'name' => 'moderateur',
            'last_name' => 'moderateur',
            'email' => 'moderateur@moderateur.fr',
            'password' => hash('sha256', 'moderateur'),
            'grade_id' => '2',            
        ]);
        DB::table('users')->insert([
            'username' => 'admin',
            'name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@admin.fr',
            'password' => hash('sha256', 'admin'),
            'grade_id' => '3',            
        ]);
    }
}
