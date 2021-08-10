<?php

use App\Pensamiento;
use Illuminate\Database\Seeder;

class PensamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pensamiento::class, 6)->create();

        Pensamiento::create([
            'user_id'       => '1',
            'description'   => 'El único modo de hacer un gran trabajo es amar lo que haces'
        ]);
    }
}
