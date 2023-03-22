<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(20)->create();

        User::where('id', 1)->update([
            'email' => 'test@gmail.com',
            'is_admin' => 1,
        ]);

        User::where('id', 2)->update([
            'email' => 'test2@gmail.com',
        ]);
    }
}
