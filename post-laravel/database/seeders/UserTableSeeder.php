<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('users')->insert([
            'name' => 'Primeiro Usuário',
            'email' => 'primeiroemail@email.com',
            'password' => bcrypt('senha');
            
            ]);
    }
}
