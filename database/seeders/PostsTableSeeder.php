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
        // Post::create([
        //     'title' => 'Primeiro título',
        //     'description' => 'Primeira descrição',
        //     'content' => 'Aprendendo Laravel',
        //     'is_active' => 1,
        //     'slug' => 'primeira-postagem',
        //     'id_user' => 1,
        // ]);

        Post::factory(30)->create();


    }
}
