<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = [
            'administrador',
            'editor',
            'supervisor'
        ];
        foreach ($rols as $key => $value){
            DB::table('rol')->insert([
                'nombre' => $value
            ]);
        }
        
    }
}
