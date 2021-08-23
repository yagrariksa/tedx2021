<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100; $i++) { 
            $s = Str::random(10);
            User::create([
                'name' => $s,
                'email' => $s,
                'institute' => $s,
                'phone' => $s,
                'address' => $s,
                'age' => 20,
            ]);
        }
    }
}
