<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsi = [
            [
                'id' => 1,
                'name' => 'Aceh',
                'code' => 1
            ],
            [
                'id' => 2,
                'name' => 'Sumatra Utara',
                'code' => 2
            ],
            [
                'id' => 3,
                'name' => 'Sumatra Barat',
                'code' => 4
            ],
            [
                'id' => 4,
                'name' => 'Riau',
                'code' => 6
            ],
            [
                'id' => 5,
                'name' => 'Jambi',
                'code' => 8
            ],
            [
                'id' => 6,
                'name' => 'Sumatra Selatan',
                'code' => 3
            ],
            [
                'id' => 7,
                'name' => 'Bengkulu',
                'code' => 5
            ],
            [
                'id' => 8,
                'name' => 'Lampung',
                'code' => 9
            ],
            [
                'id' => 9,
                'name' => 'Kepulauan Bangka Belitung',
                'code' => 10
            ],
            [
                'id' => 10,
                'name' => 'Kepulauan Riau',
                'code' => 7
            ],
            [
                'id' => 11,
                'name' => 'Daerah Khusus Ibukota Jakarta',
                'code' => 17
            ],
            [
                'id' => 12,
                'name' => 'Jawa Barat',
                'code' => 18
            ],
            [
                'id' => 13,
                'name' => 'Jawa Tengah',
                'code' => 19
            ],
            [
                'id' => 14,
                'name' => 'Daerah Istimewa Yogyakarta',
                'code' => 21
            ],
            [
                'id' => 15,
                'name' => 'Jawa Timur',
                'code' => 20
            ],
            [
                'id' => 16,
                'name' => 'Banten',
                'code' => 16
            ],
            [
                'id' => 17,
                'name' => 'Bali',
                'code' => 22
            ],
            [
                'id' => 18,
                'name' => 'Nusa Tenggara Barat',
                'code' => 24
            ],
            [
                'id' => 19,
                'name' => 'Nusa Tenggara Timur',
                'code' => 23
            ],
            [
                'id' => 20,
                'name' => 'Kalimantan Barat',
                'code' => 11
            ],
            [
                'id' => 21,
                'name' => 'Kalimantan Tengah',
                'code' => 14
            ],
            [
                'id' => 22,
                'name' => 'Kalimantan Selatan',
                'code' => 13
            ],
            [
                'id' => 23,
                'name' => 'Kalimantan Timur',
                'code' => 12
            ],
            [
                'id' => 24,
                'name' => 'Kalimantan Utara',
                'code' => 15
            ],
            [
                'id' => 25,
                'name' => 'Sulawesi Utara',
                'code' => 28
            ],
            [
                'id' => 26,
                'name' => 'Sulawesi Tengah',
                'code' => 27
            ],
            [
                'id' => 27,
                'name' => 'Sulawesi Selatan',
                'code' => 30
            ],
            [
                'id' => 28,
                'name' => 'Sulawesi Tenggara',
                'code' => 29
            ],
            [
                'id' => 29,
                'name' => 'Gorontalo',
                'code' => 26
            ],
            [
                'id' => 30,
                'name' => 'Sulawesi Barat',
                'code' => 25
            ],
            [
                'id' => 31,
                'name' => 'Maluku',
                'code' => 32
            ],
            [
                'id' => 32,
                'name' => 'Maluku Utara',
                'code' => 31
            ],
            [
                'id' => 33,
                'name' => 'Papua',
                'code' => 34
            ],
            [
                'id' => 34,
                'name' => 'Papua Barat',
                'code' => 33
            ],
            [
                'id' => 35,
                'name' => 'Papua Tengah',
                'code' => 35
            ],
            [
                'id' => 36,
                'name' => 'Papua Pegunungan',
                'code' => 36
            ],
            [
                'id' => 37,
                'name' => 'Papua Selatan',
                'code' => 37
            ],
            [
                'id' => 38,
                'name' => 'Papua Barat Daya',
                'code' => 38
            ],
        ];
        //

        Province::query()->delete();
        Province::insert($provinsi);
    }
}
