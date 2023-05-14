<?php

namespace Database\Seeders;

use App\Models\WargaModel;
use Illuminate\Database\Seeder;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WargaModel::query()->create([
            'nama_lengkap'  => 'ilham',
            'gender'        => 'L',
            'tgl_lahir'     => '2003-08-11 ',
            'alamat'        => 'jl. adisucipto, pontianak',
            'lokasi'        => '-0.07658339760266258, 109.37861604227133',
            'pengguna_id'   => 1
        ]);
    }
}
