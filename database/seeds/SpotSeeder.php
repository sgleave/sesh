<?php

use Illuminate\Database\Seeder;

class SpotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spots')->insert([
            'id' => 1,
            'msw_spot_id' => 4625, //Big Bay
            'user_id' => 1, //Kelly Slater
            'name' => 'Doodles',
            'public' => true,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('spots')->insert([
            'id' => 2,
            'msw_spot_id' => 4625, //Big Bay
            'user_id' => 1, //Kelly Slater
            'name' => 'Horse Trails',
            'public' => false,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
