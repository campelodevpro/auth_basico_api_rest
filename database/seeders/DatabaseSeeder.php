<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    protected static ?string $password;
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'teste',
        //     'email' => 'teste@teste.com.br',
        //     'password' => static::$password ??= Hash::make('1234'),
        // ]);

        User::factory()->create([
            'name' => 'api',
            'email' => 'api@teste.com.br',
            'password' => static::$password ??= Hash::make('1234'),
        ]);
    }
}
