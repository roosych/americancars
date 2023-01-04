<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Fuel;
use App\Models\Settings;
use Illuminate\Database\Seeder;

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

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'rusif@rusif.com',
            'password' => bcrypt('Met@k2020'),
            'role' => 1
        ]);

        Settings::factory()->create([
            'phone1' => '',
            'phone2' => '',
            'whatsapp' => '',
            'facebook' => '',
            'instagram' => '',
        ]);


    }
}
