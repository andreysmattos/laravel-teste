<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            [
                'state_id'=> 1,
                'name' => 'Novo Hamburgo'
            ],
            [
                'state_id'=> 1,
                'name' => 'Sapiranga'
            ],
            [
                'state_id'=> 1,
                'name' => 'Porto Alegre'
            ],
            [
                'state_id'=> 1,
                'name' => 'Santa Cruz do Sul'
            ],
            [
                'state_id'=> 2,
                'name' => 'Joinville'
            ],
            [
                'state_id'=> 2,
                'name' => 'Florianopolis'
            ],
            [
                'state_id'=> 2,
                'name' => 'Sombrio'
            ],
        ]);
    }
}
