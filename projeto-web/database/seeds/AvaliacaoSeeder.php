<?php

use Illuminate\Database\Seeder;

class AvaliacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 5; $i++){
        	DB::table('avaliacaos')->insert(['descricao' => str_random(10), 'nota' => $i]);
        }
    }
}
