<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Post;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 管理者
        User::create([
            'name' => '管理者じょん',
            'email' => 'john@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // 一般ユーザー
        User::create([
            'name' => '一般ぴょん',
            'email' => 'pyon@gmail.com',
            'password' => Hash::make('password'),
        ]);

        // ランダムユーザー + 投稿
        User::factory()
            ->count(5)
            ->has(Post::factory()->count(10))
            ->create();
    }
}
