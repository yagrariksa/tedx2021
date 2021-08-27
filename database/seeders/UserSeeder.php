<?php

namespace Database\Seeders;

use App\Models\Essay;
use App\Models\EssayPayment;
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
        for ($i = 0; $i < 100; $i++) {
            $s = Str::random(10);
            $u = User::create([
                'name' => $s,
                'email' => $s,
                'institute' => $s,
                'phone' => $s,
                'address' => $s,
                'age' => 20,
            ]);

            $e = Essay::create([
                'uid' => $u->id,
                'title' => $s,
                'essaylink' => '#'
            ]);

            EssayPayment::create([
                'essay_id' => $e->id,
                'status' => array_rand([2, 5, 6], 1),
                'reason' => $s,
                'img' => '#',
                'method' => array_rand(['gopay', 'mandiri'], 1)
            ]);
        }
    }
}
