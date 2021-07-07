<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('posts')->insert([
            'title' => 'Primeiro Titulo',
            'description' => 'Primeira Descrição',
            'content' => 'Primeiro Conteúdo',
            'is_active' => 1,
            'slug' => 'primeiro-slug',
            'user_id' => 1;
            
            ]);
    }

    
}
