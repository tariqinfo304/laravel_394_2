<?php

use Illuminate\Database\Seeder;

class Employee extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer_models')->insert([
            'name' => Str::random(10)
        ]);
    }
}
