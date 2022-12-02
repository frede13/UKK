<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class makan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('makan')->insert([
            'nama' => 'Babi Pangang',
            'harga' =>  'Rp.45000',
            'deskripsi' => '
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil dolor incidunt ullam ut, magnam fugiat maiores fugit eos, illum quibusdam tempore laudantium sit cupiditate quasi voluptas quam! Sint, quod hic.'
        ]);
        DB::table('makan')->insert([
            'nama' => 'ayam Pangang',
            'harga' =>  'Rp.5000',
            'deskripsi' => '
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil dolor incidunt ullam ut, magnam fugiat maiores fugit eos, illum quibusdam tempore laudantium sit cupiditate quasi voluptas quam! Sint, quod hic.'
        ]);
        DB::table('makan')->insert([
            'nama' => 'ikan Pangang',
            'harga' =>  'Rp.100000',
            'deskripsi' => '
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil dolor incidunt ullam ut, magnam fugiat maiores fugit eos, illum quibusdam tempore laudantium sit cupiditate quasi voluptas quam! Sint, quod hic.'
        ]);
        DB::table('makan')->insert([
            'nama' => 'kucing Pangang',
            'harga' =>  'Rp.50000',
            'deskripsi' => '
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil dolor incidunt ullam ut, magnam fugiat maiores fugit eos, illum quibusdam tempore laudantium sit cupiditate quasi voluptas quam! Sint, quod hic.'
        ]);
        
    }
    
}

