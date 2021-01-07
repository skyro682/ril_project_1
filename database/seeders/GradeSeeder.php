<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grade')->insert([
            'name' => 'user',
        ]);
        DB::table('grade')->insert([
            'name' => 'modo',
        ]);
        DB::table('grade')->insert([
            'name' => 'admin',
        ]);
    }
}
