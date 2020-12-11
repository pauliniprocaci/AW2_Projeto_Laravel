<?php

use Illuminate\Database\Seeder;

class TitulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titulos')->insert([
            'data_vencimento' => '2020-12-10',
            'descricao' => 'APT. 01',
            'status' => 'PAGO',
            'valor' => 100
        ]);

        DB::table('titulos')->insert([
            'data_vencimento' => '2020-12-10',
            'descricao' => 'APT. 02',
            'status' => 'PENDENTE',
            'valor' => 150
        ]);

        DB::table('titulos')->insert([
            'data_vencimento' => '2020-12-10',
            'descricao' => 'APT. 03',
            'status' => 'PAGO',
            'valor' => 100
        ]);

        DB::table('titulos')->insert([
            'data_vencimento' => '2020-12-10',
            'descricao' => 'APT. 04',
            'status' => 'PENDENTE',
            'valor' => 100
        ]);

        DB::table('titulos')->insert([
            'data_vencimento' => '2020-12-10',
            'descricao' => 'APT. 05',
            'status' => 'PENDENTE',
            'valor' => 150
        ]);

        DB::table('titulos')->insert([
            'data_vencimento' => '2020-12-10',
            'descricao' => 'APT. 06',
            'status' => 'PENDENTE',
            'valor' => 300
        ]);

        DB::table('titulos')->insert([
            'data_vencimento' => '2020-12-10',
            'descricao' => 'APT. 07',
            'status' => 'PAGO',
            'valor' => 100
        ]);

        DB::table('titulos')->insert([
            'data_vencimento' => '2020-12-10',
            'descricao' => 'APT. 08',
            'status' => 'PAGO',
            'valor' => 150
        ]);

        DB::table('titulos')->insert([
            'data_vencimento' => '2020-12-10',
            'descricao' => 'APT. 09',
            'status' => 'PAGO',
            'valor' => 125.5
        ]);

        DB::table('titulos')->insert([
            'data_vencimento' => '2020-12-10',
            'descricao' => 'APT. 10',
            'status' => 'PAGO',
            'valor' => 100
        ]);

        DB::table('titulos')->insert([
            'data_vencimento' => '2020-12-10',
            'descricao' => 'APT. 11',
            'status' => 'PENDENTE',
            'valor' => 150
        ]);

        DB::table('titulos')->insert([
            'data_vencimento' => '2020-12-10',
            'descricao' => 'APT. 12',
            'status' => 'PAGO',
            'valor' => 200
        ]);
    }
}
