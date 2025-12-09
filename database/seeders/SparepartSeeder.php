<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sparepart;

class SparepartSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_sparepart' => 'SP001',
                'nama_sparepart' => 'Oli Mesin',
                'merk' => 'Pertamina',
                'stok' => 20,
                'harga' => 50000,
                'deskripsi' => 'Oli mesin 1 liter.'
            ],
            [
                'kode_sparepart' => 'SP002',
                'nama_sparepart' => 'Kampas Rem',
                'merk' => 'Brembo',
                'stok' => 15,
                'harga' => 75000,
                'deskripsi' => 'Kampas rem depan.'
            ],
            [
                'kode_sparepart' => 'SP003',
                'nama_sparepart' => 'Busi',
                'merk' => 'NGK',
                'stok' => 40,
                'harga' => 25000,
                'deskripsi' => 'Busi standar mobil.'
            ],
        ];

        foreach ($data as $item) {
            Sparepart::create($item);
        }
    }
}
