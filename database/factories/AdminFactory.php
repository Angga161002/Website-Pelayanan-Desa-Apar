<?php

// database/factories/AdminFactory.php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AdminFactory extends Factory
{
    protected $model = Admin::class;

    public function definition()
    {
        return [
            'username' => $this->faker->name,
            'no_hp' => $this->faker->phoneNumber(),
            'password' => Hash::make('123456'),
        ];
    }
}


