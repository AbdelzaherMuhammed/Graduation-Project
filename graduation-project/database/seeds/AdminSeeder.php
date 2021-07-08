<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'username' => 'admin',
           'full_name' => 'Super admin',
           'email' => 'admin@app.com',
           'password' => 12345678,
            'type' => 'admin',
        ]);
    }
}
