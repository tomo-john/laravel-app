<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $john = User::where('email', 'john@gmail.com')->first();
        $pyon = User::where('email', 'pyon@gmail.com')->first();

        // 管理者投稿
        Post::create([
            'title' => 'じょんの投稿',
            'body' => '散歩🐶',
            'user_id' => $john->id,
        ]);

        // 一般ユーザー投稿
        Post::create([
            'title' => 'ぴょんの投稿',
            'body' => '🐰Super Rabbit🐰',
            'user_id' => $pyon->id,
        ]);
    }
}
