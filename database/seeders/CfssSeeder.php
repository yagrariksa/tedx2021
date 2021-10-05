<?php

namespace Database\Seeders;

use App\Models\Speaker;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CfssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $s = Str::random(10);
            $u = User::create([
                'name' => 'cfss.' . $s,
                'email' => 'cfss.' . $s,
                'institute' => $s,
                'phone' => $s,
                'address' => $s,
                'age' => 20,
            ]);

            $e = Speaker::create([
                'uid' => $u->id,
                'instagram' => $s,
                'domisili' => 'kota ' . $s,
                'drive' => '#'
            ]);
        }
    }
}
