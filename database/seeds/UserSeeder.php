<?php

use App\User;
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
        User::create([
            'name' => 'Darinel',
            'email' => 'darinelcigarroa97@gmail.com',
            'password' => bcrypt('darinel293')
        ]);
        
        factory(User::class, 5)->create();
    }
}
