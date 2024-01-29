<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Primeiro título',
            'description' => 'Primeira descrição',
            'content' => 'Aprendendo Laravel',
            'user_id' => '1',
            'slug' => 'que-saco',
            'is_active' => '1'
        ]);

    }
}
