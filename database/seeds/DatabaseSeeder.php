<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            'id' => 1,
            "name" => "admin",
            "prenom" => "admin",
            "email" => "admin@gmail.com",
            "telephone" => "691548705",
            "password" => \Illuminate\Support\Facades\Hash::make('123456'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
            "role" => \App\Constantes::ROLE_ADMINISTRATEUR,
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
