<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        Factory::factoryForModel(Admin::class)->create([
            'username' => 'admin',
            'no_hp' => '081372281811',
            'password' => Hash::make('123456'),
        ]);
        Factory::factoryForModel(Admin::class)->create([
            'username' => 'syahbandar',
            'no_hp' => '081372281810',
            'password' => Hash::make('123456'),
        ]);
        Factory::factoryForModel(Admin::class)->create([
            'username' => 'pujangga',
            'no_hp' => '081372281812',
            'password' => Hash::make('123456'),
        ]);
    }
}
