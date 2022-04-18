<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class IsiInovasi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_inovasi')->insert([
            'judul_inovasi' => 'Layanan Pembuatan SKCK Online',
            'latar_belakang' => 'Layanan baru yang dirilis pada tahun 2022',
            'deskripsi_inovasi' => 'Layanan baru yang dirilis pada tahun 2022',
            'tujuan' => 'Layanan baru yang dirilis pada tahun 2022',
            'lampiran' => 'folder'
        ]);
    }
}
