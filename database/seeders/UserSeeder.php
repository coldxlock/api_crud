<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Prisco Cleyton',
            'password' => bcrypt('123456'),
            'email' => 'priscocleyton@gmail.com'
        ]);      
    }
}
