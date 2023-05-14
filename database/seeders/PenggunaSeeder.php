<?php

namespace Database\Seeders;

use App\Models\PenggunaModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PenggunaModel::query()->create([
            'nama_lengkap'      => 'administrator',
            'sandi'             => Hash::make('admin'),
            'email'             => 'naffiilham@gmail.com'
        ]);
    }
}
