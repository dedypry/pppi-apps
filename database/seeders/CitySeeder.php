<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kabupatenKota = [
            [
                'id' => 1,
                'province_id' => 1,
                'name' => 'Kabupaten Aceh Barat',
                "code" => "1"
            ],
            [
                'id' => 2,
                'province_id' => 1,
                'name' => 'Kabupaten Aceh Barat Daya',
                "code" => "1"
            ],
            [
                'id' => 3,
                'province_id' => 1,
                'name' => 'Kabupaten Aceh Besar',
                "code" => "1"
            ],
            [
                'id' => 4,
                'province_id' => 1,
                'name' => 'Kabupaten Aceh Jaya',
                "code" => "1"
            ],
            [
                'id' => 5,
                'province_id' => 1,
                'name' => 'Kabupaten Aceh Selatan',
                "code" => "1"
            ],
            [
                'id' => 6,
                'province_id' => 1,
                'name' => 'Kabupaten Aceh Singkil',
                "code" => "1"
            ],
            [
                'id' => 7,
                'province_id' => 1,
                'name' => 'Kabupaten Aceh Tamiang',
                "code" => "1"
            ],
            [
                'id' => 8,
                'province_id' => 1,
                'name' => 'Kabupaten Aceh Tengah',
                "code" => "1"
            ],
            [
                'id' => 9,
                'province_id' => 1,
                'name' => 'Kabupaten Aceh Tenggara',
                "code" => "1"
            ],
            [
                'id' => 10,
                'province_id' => 1,
                'name' => 'Kabupaten Aceh Timur',
                "code" => "1"
            ],
            [
                'id' => 11,
                'province_id' => 1,
                'name' => 'Kabupaten Aceh Utara',
                "code" => "1"
            ],
            [
                'id' => 12,
                'province_id' => 1,
                'name' => 'Kabupaten Bener Meriah',
                "code" => "1"
            ],
            [
                'id' => 13,
                'province_id' => 1,
                'name' => 'Kabupaten Bireuen',
                "code" => "1"
            ],
            [
                'id' => 14,
                'province_id' => 1,
                'name' => 'Kabupaten Gayo Lues',
                "code" => "1"
            ],
            [
                'id' => 15,
                'province_id' => 1,
                'name' => 'Kabupaten Nagan Raya',
                "code" => "1"
            ],
            [
                'id' => 16,
                'province_id' => 1,
                'name' => 'Kabupaten Pidie',
                "code" => "1"
            ],
            [
                'id' => 17,
                'province_id' => 1,
                'name' => 'Kabupaten Pidie Jaya',
                "code" => "1"
            ],
            [
                'id' => 18,
                'province_id' => 1,
                'name' => 'Kabupaten Simeulue',
                "code" => "1"
            ],
            [
                'id' => 19,
                'province_id' => 1,
                'name' => 'Kota Banda Aceh',
                "code" => "1"
            ],
            [
                'id' => 20,
                'province_id' => 1,
                'name' => 'Kota Langsa',
                "code" => "1"
            ],
            [
                'id' => 21,
                'province_id' => 1,
                'name' => 'Kota Lhokseumawe',
                "code" => "1"
            ],
            [
                'id' => 22,
                'province_id' => 1,
                'name' => 'Kota Sabang',
                "code" => "1"
            ],
            [
                'id' => 23,
                'province_id' => 1,
                'name' => 'Kota Subulussalam',
                "code" => "1"
            ],
            [
                'id' => 24,
                'province_id' => 2,
                'name' => 'Kabupaten Asahan',
                "code" => "2"
            ],
            [
                'id' => 25,
                'province_id' => 2,
                'name' => 'Kabupaten Batu Bara',
                "code" => "2"
            ],
            [
                'id' => 26,
                'province_id' => 2,
                'name' => 'Kabupaten Dairi',
                "code" => "2"
            ],
            [
                'id' => 27,
                'province_id' => 2,
                'name' => 'Kabupaten Deli Serdang',
                "code" => "2"
            ],
            [
                'id' => 28,
                'province_id' => 2,
                'name' => 'Kabupaten Humbang Hasundutan',
                "code" => "2"
            ],
            [
                'id' => 29,
                'province_id' => 2,
                'name' => 'Kabupaten Karo',
                "code" => "2"
            ],
            [
                'id' => 30,
                'province_id' => 2,
                'name' => 'Kabupaten Labuhanbatu',
                "code" => "2"
            ],
            [
                'id' => 31,
                'province_id' => 2,
                'name' => 'Kabupaten Labuhanbatu Selatan',
                "code" => "2"
            ],
            [
                'id' => 32,
                'province_id' => 2,
                'name' => 'Kabupaten Labuhanbatu Utara',
                "code" => "2"
            ],
            [
                'id' => 33,
                'province_id' => 2,
                'name' => 'Kabupaten Langkat',
                "code" => "2"
            ],
            [
                'id' => 34,
                'province_id' => 2,
                'name' => 'Kabupaten Mandailing Natal',
                "code" => "2"
            ],
            [
                'id' => 35,
                'province_id' => 2,
                'name' => 'Kabupaten Nias',
                "code" => "2"
            ],
            [
                'id' => 36,
                'province_id' => 2,
                'name' => 'Kabupaten Nias Barat',
                "code" => "2"
            ],
            [
                'id' => 37,
                'province_id' => 2,
                'name' => 'Kabupaten Nias Selatan',
                "code" => ""
            ],
            [
                'id' => 38,
                'province_id' => 2,
                'name' => 'Kabupaten Nias Utara',
                "code" => "2"
            ],
            [
                'id' => 39,
                'province_id' => 2,
                'name' => 'Kabupaten Padang Lawas',
                "code" => "2"
            ],
            [
                'id' => 40,
                'province_id' => 2,
                'name' => 'Kabupaten Padang Lawas Utara',
                "code" => "2"
            ],
            [
                'id' => 41,
                'province_id' => 2,
                'name' => 'Kabupaten Pakpak Bharat',
                "code" => "2"
            ],
            [
                'id' => 42,
                'province_id' => 2,
                'name' => 'Kabupaten Samosir',
                "code" => "2"
            ],
            [
                'id' => 43,
                'province_id' => 2,
                'name' => 'Kabupaten Serdang Bedagai',
                "code" => "2"
            ],
            [
                'id' => 44,
                'province_id' => 2,
                'name' => 'Kabupaten Simalungun',
                "code" => "2"
            ],
            [
                'id' => 45,
                'province_id' => 2,
                'name' => 'Kabupaten Tapanuli Selatan',
                "code" => "2"
            ],
            [
                'id' => 46,
                'province_id' => 2,
                'name' => 'Kabupaten Tapanuli Tengah',
                "code" => "2"
            ],
            [
                'id' => 47,
                'province_id' => 2,
                'name' => 'Kabupaten Tapanuli Utara',
                "code" => "2"
            ],
            [
                'id' => 48,
                'province_id' => 2,
                'name' => 'Kabupaten Toba Samosir',
                "code" => "2"
            ],
            [
                'id' => 49,
                'province_id' => 2,
                'name' => 'Kota Binjai',
                "code" => "2"
            ],
            [
                'id' => 50,
                'province_id' => 2,
                'name' => 'Kota Gunungsitoli',
                "code" => "2"
            ],
            [
                'id' => 51,
                'province_id' => 2,
                'name' => 'Kota Medan',
                "code" => "2"
            ],
            [
                'id' => 52,
                'province_id' => 2,
                'name' => 'Kota Padang Sidempuan',
                "code" => "2"
            ],
            [
                'id' => 53,
                'province_id' => 2,
                'name' => 'Kota Pematangsiantar',
                "code" => "2"
            ],
            [
                'id' => 54,
                'province_id' => 2,
                'name' => 'Kota Sibolga',
                "code" => "2"
            ],
            [
                'id' => 55,
                'province_id' => 2,
                'name' => 'Kota Tanjung Balai',
                "code" => "2"
            ],
            [
                'id' => 56,
                'province_id' => 2,
                'name' => 'Kota Tebing Tinggi',
                "code" => "2"
            ],
            [
                'id' => 57,
                'province_id' => 3,
                'name' => 'Kabupaten Agam',
                "code" => "4"
            ],
            [
                'id' => 58,
                'province_id' => 3,
                'name' => 'Kabupaten Dharmasraya',
                "code" => "4"
            ],
            [
                'id' => 59,
                'province_id' => 3,
                'name' => 'Kabupaten Kepulauan Mentawai',
                "code" => "4"
            ],
            [
                'id' => 60,
                'province_id' => 3,
                'name' => 'Kabupaten Lima Puluh Kota',
                "code" => "4"
            ],
            [
                'id' => 61,
                'province_id' => 3,
                'name' => 'Kabupaten Padang Pariaman',
                "code" => "4"
            ],
            [
                'id' => 62,
                'province_id' => 3,
                'name' => 'Kabupaten Pasaman',
                "code" => "4"
            ],
            [
                'id' => 63,
                'province_id' => 3,
                'name' => 'Kabupaten Pasaman Barat',
                "code" => "4"
            ],
            [
                'id' => 64,
                'province_id' => 3,
                'name' => 'Kabupaten Pesisir Selatan',
                "code" => "4"
            ],
            [
                'id' => 65,
                'province_id' => 3,
                'name' => 'Kabupaten Sijunjung (Sawah Lunto Sijunjung)',
                "code" => "4"
            ],
            [
                'id' => 66,
                'province_id' => 3,
                'name' => 'Kabupaten Solok',
                "code" => "4"
            ],
            [
                'id' => 67,
                'province_id' => 3,
                'name' => 'Kabupaten Solok Selatan',
                "code" => "4"
            ],
            [
                'id' => 68,
                'province_id' => 3,
                'name' => 'Kabupaten Tanah Datar',
                "code" => "4"
            ],
            [
                'id' => 69,
                'province_id' => 3,
                'name' => 'Kota Bukittinggi',
                "code" => "4"
            ],
            [
                'id' => 70,
                'province_id' => 3,
                'name' => 'Kota Padang',
                "code" => "4"
            ],
            [
                'id' => 71,
                'province_id' => 3,
                'name' => 'Kota Padang Panjang',
                "code" => "4"
            ],
            [
                'id' => 72,
                'province_id' => 3,
                'name' => 'Kota Pariaman',
                "code" => "4"
            ],
            [
                'id' => 73,
                'province_id' => 3,
                'name' => 'Kota Payakumbuh',
                "code" => "4"
            ],
            [
                'id' => 74,
                'province_id' => 3,
                'name' => 'Kota Sawahlunto',
                "code" => "4"
            ],
            [
                'id' => 75,
                'province_id' => 3,
                'name' => 'Kota Solok',
                "code" => "4"
            ],
            [
                'id' => 76,
                'province_id' => 4,
                'name' => 'Kabupaten Bengkalis',
                "code" => "6"
            ],
            [
                'id' => 77,
                'province_id' => 4,
                'name' => 'Kabupaten Indragiri Hilir',
                "code" => "6"
            ],
            [
                'id' => 78,
                'province_id' => 4,
                'name' => 'Kabupaten Indragiri Hulu',
                "code" => "6"
            ],
            [
                'id' => 79,
                'province_id' => 4,
                'name' => 'Kabupaten Kampar',
                "code" => "6"
            ],
            [
                'id' => 80,
                'province_id' => 4,
                'name' => 'Kabupaten Kepulauan Meranti',
                "code" => "6"
            ],
            [
                'id' => 81,
                'province_id' => 4,
                'name' => 'Kabupaten Kuantan Singingi',
                "code" => "6"
            ],
            [
                'id' => 82,
                'province_id' => 4,
                'name' => 'Kabupaten Pelalawan',
                "code" => "6"
            ],
            [
                'id' => 83,
                'province_id' => 4,
                'name' => 'Kabupaten Rokan Hilir',
                "code" => "6"
            ],
            [
                'id' => 84,
                'province_id' => 4,
                'name' => 'Kabupaten Rokan Hulu',
                "code" => "6"
            ],
            [
                'id' => 85,
                'province_id' => 4,
                'name' => 'Kabupaten Siak',
                "code" => "6"
            ],
            [
                'id' => 86,
                'province_id' => 4,
                'name' => 'Kota Dumai',
                "code" => "6"
            ],
            [
                'id' => 87,
                'province_id' => 4,
                'name' => 'Kota Pekanbaru',
                "code" => "6"
            ],
            [
                'id' => 88,
                'province_id' => 5,
                'name' => 'Kabupaten Batanghari',
                "code" => "8"
            ],
            [
                'id' => 89,
                'province_id' => 5,
                'name' => 'Kabupaten Bungo',
                "code" => "8"
            ],
            [
                'id' => 90,
                'province_id' => 5,
                'name' => 'Kabupaten Kerinci',
                "code" => "8"
            ],
            [
                'id' => 91,
                'province_id' => 5,
                'name' => 'Kabupaten Merangin',
                "code" => "8"
            ],
            [
                'id' => 92,
                'province_id' => 5,
                'name' => 'Kabupaten Muaro Jambi',
                "code" => "8"
            ],
            [
                'id' => 93,
                'province_id' => 5,
                'name' => 'Kabupaten Sarolangun',
                "code" => "8"
            ],
            [
                'id' => 94,
                'province_id' => 5,
                'name' => 'Kabupaten Tanjung Jabung Barat',
                "code" => "8"
            ],
            [
                'id' => 95,
                'province_id' => 5,
                'name' => 'Kabupaten Tanjung Jabung Timur',
                "code" => "8"
            ],
            [
                'id' => 96,
                'province_id' => 5,
                'name' => 'Kabupaten Tebo',
                "code" => "8"
            ],
            [
                'id' => 97,
                'province_id' => 5,
                'name' => 'Kota Jambi',
                "code" => "8"
            ],
            [
                'id' => 98,
                'province_id' => 5,
                'name' => 'Kota Sungai Penuh',
                "code" => "8"
            ],
            [
                'id' => 99,
                'province_id' => 6,
                'name' => 'Kabupaten Banyuasin',
                "code" => "3"
            ],
            [
                'id' => 100,
                'province_id' => 6,
                'name' => 'Kabupaten Empat Lawang',
                "code" => "3"
            ],
            [
                'id' => 101,
                'province_id' => 6,
                'name' => 'Kabupaten Lahat',
                "code" => "3"
            ],
            [
                'id' => 102,
                'province_id' => 6,
                'name' => 'Kabupaten Muara Enim',
                "code" => "3"
            ],
            [
                'id' => 103,
                'province_id' => 6,
                'name' => 'Kabupaten Musi Banyuasin',
                "code" => "3"
            ],
            [
                'id' => 104,
                'province_id' => 6,
                'name' => 'Kabupaten Musi Rawas',
                "code" => "3"
            ],
            [
                'id' => 105,
                'province_id' => 6,
                'name' => 'Kabupaten Musi Rawas Utara',
                "code" => "3"
            ],
            [
                'id' => 106,
                'province_id' => 6,
                'name' => 'Kabupaten Ogan Ilir',
                "code" => "3"
            ],
            [
                'id' => 107,
                'province_id' => 6,
                'name' => 'Kabupaten Ogan Komering Ilir',
                "code" => "3"
            ],
            [
                'id' => 108,
                'province_id' => 6,
                'name' => 'Kabupaten Ogan Komering Ulu',
                "code" => "3"
            ],
            [
                'id' => 109,
                'province_id' => 6,
                'name' => 'Kabupaten Ogan Komering Ulu Selatan (Oku Selatan)',
                "code" => "3"
            ],
            [
                'id' => 110,
                'province_id' => 6,
                'name' => 'Kabupaten Ogan Komering Ulu Timur (Oku Timur)',
                "code" => "3"
            ],
            [
                'id' => 111,
                'province_id' => 6,
                'name' => 'Kabupaten Penukal Abab Lematang Ilir',
                "code" => "3"
            ],
            [
                'id' => 112,
                'province_id' => 6,
                'name' => 'Kota Lubuk Linggau',
                "code" => "3"
            ],
            [
                'id' => 113,
                'province_id' => 6,
                'name' => 'Kota Pagar Alam',
                "code" => "3"
            ],
            [
                'id' => 114,
                'province_id' => 6,
                'name' => 'Kota Palembang',
                "code" => "3"
            ],
            [
                'id' => 115,
                'province_id' => 6,
                'name' => 'Kota Prabumulih',
                "code" => "3"
            ],
            [
                'id' => 116,
                'province_id' => 7,
                'name' => 'Kabupaten Bengkulu Selatan',
                "code" => "5"
            ],
            [
                'id' => 117,
                'province_id' => 7,
                'name' => 'Kabupaten Bengkulu Tengah',
                "code" => "5"
            ],
            [
                'id' => 118,
                'province_id' => 7,
                'name' => 'Kabupaten Bengkulu Utara',
                "code" => "5"
            ],
            [
                'id' => 119,
                'province_id' => 7,
                'name' => 'Kabupaten Kaur',
                "code" => "5"
            ],
            [
                'id' => 120,
                'province_id' => 7,
                'name' => 'Kabupaten Kepahiang',
                "code" => "5"
            ],
            [
                'id' => 121,
                'province_id' => 7,
                'name' => 'Kabupaten Lebong',
                "code" => "5"
            ],
            [
                'id' => 122,
                'province_id' => 7,
                'name' => 'Kabupaten Muko Muko',
                "code" => "5"
            ],
            [
                'id' => 123,
                'province_id' => 7,
                'name' => 'Kabupaten Rejang Lebong',
                "code" => "5"
            ],
            [
                'id' => 124,
                'province_id' => 7,
                'name' => 'Kabupaten Seluma',
                "code" => "5"
            ],
            [
                'id' => 125,
                'province_id' => 7,
                'name' => 'Kota Bengkulu',
                "code" => "5"
            ],
            [
                'id' => 126,
                'province_id' => 8,
                'name' => 'Kabupaten Lampung Barat',
                "code" => "9"
            ],
            [
                'id' => 127,
                'province_id' => 8,
                'name' => 'Kabupaten Lampung Selatan',
                "code" => "9"
            ],
            [
                'id' => 128,
                'province_id' => 8,
                'name' => 'Kabupaten Lampung Tengah',
                "code" => "9"
            ],
            [
                'id' => 129,
                'province_id' => 8,
                'name' => 'Kabupaten Lampung Timur',
                "code" => "9"
            ],
            [
                'id' => 130,
                'province_id' => 8,
                'name' => 'Kabupaten Lampung Utara',
                "code" => "9"
            ],
            [
                'id' => 131,
                'province_id' => 8,
                'name' => 'Kabupaten Mesuji',
                "code" => "9"
            ],
            [
                'id' => 132,
                'province_id' => 8,
                'name' => 'Kabupaten Pesawaran',
                "code" => "9"
            ],
            [
                'id' => 133,
                'province_id' => 8,
                'name' => 'Kabupaten Pesisir Barat',
                "code" => "9"
            ],
            [
                'id' => 134,
                'province_id' => 8,
                'name' => 'Kabupaten Pringsewu',
                "code" => "9"
            ],
            [
                'id' => 135,
                'province_id' => 8,
                'name' => 'Kabupaten Tanggamus',
                "code" => "9"
            ],
            [
                'id' => 136,
                'province_id' => 8,
                'name' => 'Kabupaten Tulang Bawang',
                "code" => "9"
            ],
            [
                'id' => 137,
                'province_id' => 8,
                'name' => 'Kabupaten Tulang Bawang Barat',
                "code" => "9"
            ],
            [
                'id' => 138,
                'province_id' => 8,
                'name' => 'Kabupaten Way Kanan',
                "code" => "9"
            ],
            [
                'id' => 139,
                'province_id' => 8,
                'name' => 'Kota Bandar Lampung',
                "code" => "9"
            ],
            [
                'id' => 140,
                'province_id' => 8,
                'name' => 'Kota Metro',
                "code" => "9"
            ],
            [
                'id' => 141,
                'province_id' => 9,
                'name' => 'Kabupaten Bangka',
                "code" => "10"
            ],
            [
                'id' => 142,
                'province_id' => 9,
                'name' => 'Kabupaten Bangka Barat',
                "code" => "10"
            ],
            [
                'id' => 143,
                'province_id' => 9,
                'name' => 'Kabupaten Bangka Selatan',
                "code" => "10"
            ],
            [
                'id' => 144,
                'province_id' => 9,
                'name' => 'Kabupaten Bangka Tengah',
                "code" => "10"
            ],
            [
                'id' => 145,
                'province_id' => 9,
                'name' => 'Kabupaten Belitung',
                "code" => "10"
            ],
            [
                'id' => 146,
                'province_id' => 9,
                'name' => 'Kabupaten Belitung Timur',
                "code" => "10"
            ],
            [
                'id' => 147,
                'province_id' => 9,
                'name' => 'Kota Pangkal Pinang',
                "code" => "10"
            ],
            [
                'id' => 148,
                'province_id' => 10,
                'name' => 'Kabupaten Bintan',
                "code" => "7"
            ],
            [
                'id' => 149,
                'province_id' => 10,
                'name' => 'Kabupaten Karimun',
                "code" => "7"
            ],
            [
                'id' => 150,
                'province_id' => 10,
                'name' => 'Kabupaten Kepulauan Anambas',
                "code" => "7"
            ],
            [
                'id' => 151,
                'province_id' => 10,
                'name' => 'Kabupaten Lingga',
                "code" => "7"
            ],
            [
                'id' => 152,
                'province_id' => 10,
                'name' => 'Kabupaten Natuna',
                "code" => "7"
            ],
            [
                'id' => 153,
                'province_id' => 10,
                'name' => 'Kota Batam',
                "code" => "7"
            ],
            [
                'id' => 154,
                'province_id' => 10,
                'name' => 'Kota Tanjung Pinang',
                "code" => "7"
            ],
            [
                'id' => 155,
                'province_id' => 11,
                'name' => 'Kabupaten Adm. Kepulauan Seribu',
                "code" => "17"
            ],
            [
                'id' => 156,
                'province_id' => 11,
                'name' => 'Kota Adm. Jakarta Barat',
                "code" => "17"
            ],
            [
                'id' => 157,
                'province_id' => 11,
                'name' => 'Kota Adm. Jakarta Pusat',
                "code" => "17"
            ],
            [
                'id' => 158,
                'province_id' => 11,
                'name' => 'Kota Adm. Jakarta Selatan',
                "code" => "17"
            ],
            [
                'id' => 159,
                'province_id' => 11,
                'name' => 'Kota Adm. Jakarta Timur',
                "code" => "17"
            ],
            [
                'id' => 160,
                'province_id' => 11,
                'name' => 'Kota Adm. Jakarta Utara',
                "code" => "17"
            ],
            [
                'id' => 161,
                'province_id' => 12,
                'name' => 'Kabupaten Bandung',
                "code" => "18"
            ],
            [
                'id' => 162,
                'province_id' => 12,
                'name' => 'Kabupaten Bandung Barat',
                "code" => "18"
            ],
            [
                'id' => 163,
                'province_id' => 12,
                'name' => 'Kabupaten Bekasi',
                "code" => "18"
            ],
            [
                'id' => 164,
                'province_id' => 12,
                'name' => 'Kabupaten Bogor',
                "code" => "18"
            ],
            [
                'id' => 165,
                'province_id' => 12,
                'name' => 'Kabupaten Ciamis',
                "code" => "18"
            ],
            [
                'id' => 166,
                'province_id' => 12,
                'name' => 'Kabupaten Cianjur',
                "code" => "18"
            ],
            [
                'id' => 167,
                'province_id' => 12,
                'name' => 'Kabupaten Cirebon',
                "code" => "18"
            ],
            [
                'id' => 168,
                'province_id' => 12,
                'name' => 'Kabupaten Garut',
                "code" => "18"
            ],
            [
                'id' => 169,
                'province_id' => 12,
                'name' => 'Kabupaten Indramayu',
                "code" => "18"
            ],
            [
                'id' => 170,
                'province_id' => 12,
                'name' => 'Kabupaten Karawang',
                "code" => "18"
            ],
            [
                'id' => 171,
                'province_id' => 12,
                'name' => 'Kabupaten Kuningan',
                "code" => "18"
            ],
            [
                'id' => 172,
                'province_id' => 12,
                'name' => 'Kabupaten Majalengka',
                "code" => "18"
            ],
            [
                'id' => 173,
                'province_id' => 12,
                'name' => 'Kabupaten Pangandaran',
                "code" => "18"
            ],
            [
                'id' => 174,
                'province_id' => 12,
                'name' => 'Kabupaten Purwakarta',
                "code" => "18"
            ],
            [
                'id' => 175,
                'province_id' => 12,
                'name' => 'Kabupaten Subang',
                "code" => "18"
            ],
            [
                'id' => 176,
                'province_id' => 12,
                'name' => 'Kabupaten Sukabumi',
                "code" => "18"
            ],
            [
                'id' => 177,
                'province_id' => 12,
                'name' => 'Kabupaten Sumedang',
                "code" => "18"
            ],
            [
                'id' => 178,
                'province_id' => 12,
                'name' => 'Kabupaten Tasikmalaya',
                "code" => "18"
            ],
            [
                'id' => 179,
                'province_id' => 12,
                'name' => 'Kota Bandung',
                "code" => "18"
            ],
            [
                'id' => 180,
                'province_id' => 12,
                'name' => 'Kota Banjar',
                "code" => "18"
            ],
            [
                'id' => 181,
                'province_id' => 12,
                'name' => 'Kota Bekasi',
                "code" => "18"
            ],
            [
                'id' => 182,
                'province_id' => 12,
                'name' => 'Kota Bogor',
                "code" => "18"
            ],
            [
                'id' => 183,
                'province_id' => 12,
                'name' => 'Kota Cimahi',
                "code" => "18"
            ],
            [
                'id' => 184,
                'province_id' => 12,
                'name' => 'Kota Cirebon',
                "code" => "18"
            ],
            [
                'id' => 185,
                'province_id' => 12,
                'name' => 'Kota Depok',
                "code" => "18"
            ],
            [
                'id' => 186,
                'province_id' => 12,
                'name' => 'Kota Sukabumi',
                "code" => "18"
            ],
            [
                'id' => 187,
                'province_id' => 12,
                'name' => 'Kota Tasikmalaya',
                "code" => "18"
            ],
            [
                'id' => 188,
                'province_id' => 13,
                'name' => 'Kabupaten Banjarnegara',
                "code" => "19"
            ],
            [
                'id' => 189,
                'province_id' => 13,
                'name' => 'Kabupaten Banyumas',
                "code" => "19"
            ],
            [
                'id' => 190,
                'province_id' => 13,
                'name' => 'Kabupaten Batang',
                "code" => "19"
            ],
            [
                'id' => 191,
                'province_id' => 13,
                'name' => 'Kabupaten Blora',
                "code" => "19"
            ],
            [
                'id' => 192,
                'province_id' => 13,
                'name' => 'Kabupaten Boyolali',
                "code" => "19"
            ],
            [
                'id' => 193,
                'province_id' => 13,
                'name' => 'Kabupaten Brebes',
                "code" => "19"
            ],
            [
                'id' => 194,
                'province_id' => 13,
                'name' => 'Kabupaten Cilacap',
                "code" => "19"
            ],
            [
                'id' => 195,
                'province_id' => 13,
                'name' => 'Kabupaten Demak',
                "code" => "19"
            ],
            [
                'id' => 196,
                'province_id' => 13,
                'name' => 'Kabupaten Grobogan',
                "code" => "19"
            ],
            [
                'id' => 197,
                'province_id' => 13,
                'name' => 'Kabupaten Jepara',
                "code" => "19"
            ],
            [
                'id' => 198,
                'province_id' => 13,
                'name' => 'Kabupaten Karanganyar',
                "code" => "19"
            ],
            [
                'id' => 199,
                'province_id' => 13,
                'name' => 'Kabupaten Kebumen',
                "code" => "19"
            ],
            [
                'id' => 200,
                'province_id' => 13,
                'name' => 'Kabupaten Kendal',
                "code" => "19"
            ],
            [
                'id' => 201,
                'province_id' => 13,
                'name' => 'Kabupaten Klaten',
                "code" => "19"
            ],
            [
                'id' => 202,
                'province_id' => 13,
                'name' => 'Kabupaten Kudus',
                "code" => "19"
            ],
            [
                'id' => 203,
                'province_id' => 13,
                'name' => 'Kabupaten Magelang',
                "code" => "19"
            ],
            [
                'id' => 204,
                'province_id' => 13,
                'name' => 'Kabupaten Pati',
                "code" => "19"
            ],
            [
                'id' => 205,
                'province_id' => 13,
                'name' => 'Kabupaten Pekalongan',
                "code" => "19"
            ],
            [
                'id' => 206,
                'province_id' => 13,
                'name' => 'Kabupaten Pemalang',
                "code" => "19"
            ],
            [
                'id' => 207,
                'province_id' => 13,
                'name' => 'Kabupaten Purbalingga',
                "code" => "19"
            ],
            [
                'id' => 208,
                'province_id' => 13,
                'name' => 'Kabupaten Purworejo',
                "code" => "19"
            ],
            [
                'id' => 209,
                'province_id' => 13,
                'name' => 'Kabupaten Rembang',
                "code" => "19"
            ],
            [
                'id' => 210,
                'province_id' => 13,
                'name' => 'Kabupaten Semarang',
                "code" => "19"
            ],
            [
                'id' => 211,
                'province_id' => 13,
                'name' => 'Kabupaten Sragen',
                "code" => "19"
            ],
            [
                'id' => 212,
                'province_id' => 13,
                'name' => 'Kabupaten Sukoharjo',
                "code" => "19"
            ],
            [
                'id' => 213,
                'province_id' => 13,
                'name' => 'Kabupaten Tegal',
                "code" => "19"
            ],
            [
                'id' => 214,
                'province_id' => 13,
                'name' => 'Kabupaten Temanggung',
                "code" => "19"
            ],
            [
                'id' => 215,
                'province_id' => 13,
                'name' => 'Kabupaten Wonogiri',
                "code" => "19"
            ],
            [
                'id' => 216,
                'province_id' => 13,
                'name' => 'Kabupaten Wonosobo',
                "code" => "19"
            ],
            [
                'id' => 217,
                'province_id' => 13,
                'name' => 'Kota Magelang',
                "code" => "19"
            ],
            [
                'id' => 218,
                'province_id' => 13,
                'name' => 'Kota Pekalongan',
                "code" => "19"
            ],
            [
                'id' => 219,
                'province_id' => 13,
                'name' => 'Kota Salatiga',
                "code" => "19"
            ],
            [
                'id' => 220,
                'province_id' => 13,
                'name' => 'Kota Semarang',
                "code" => "19"
            ],
            [
                'id' => 221,
                'province_id' => 13,
                'name' => 'Kota Surakarta (Solo)',
                "code" => "19"
            ],
            [
                'id' => 222,
                'province_id' => 13,
                'name' => 'Kota Tegal',
                "code" => "19"
            ],
            [
                'id' => 223,
                'province_id' => 14,
                'name' => 'Kabupaten Bantul',
                "code" => "21"
            ],
            [
                'id' => 224,
                'province_id' => 14,
                'name' => 'Kabupaten Gunung Kidul',
                "code" => "21"
            ],
            [
                'id' => 225,
                'province_id' => 14,
                'name' => 'Kabupaten Kulon Progo',
                "code" => "21"
            ],
            [
                'id' => 226,
                'province_id' => 14,
                'name' => 'Kabupaten Sleman',
                "code" => "21"
            ],
            [
                'id' => 227,
                'province_id' => 14,
                'name' => 'Kota Yogyakarta',
                "code" => "21"
            ],
            [
                'id' => 228,
                'province_id' => 15,
                'name' => 'Kabupaten Bangkalan',
                "code" => "20"
            ],
            [
                'id' => 229,
                'province_id' => 15,
                'name' => 'Kabupaten Banyuwangi',
                "code" => "20"
            ],
            [
                'id' => 230,
                'province_id' => 15,
                'name' => 'Kabupaten Blitar',
                "code" => "20"
            ],
            [
                'id' => 231,
                'province_id' => 15,
                'name' => 'Kabupaten Bojonegoro',
                "code" => "20"
            ],
            [
                'id' => 232,
                'province_id' => 15,
                'name' => 'Kabupaten Bondowoso',
                "code" => "20"
            ],
            [
                'id' => 233,
                'province_id' => 15,
                'name' => 'Kabupaten Gresik',
                "code" => "20"
            ],
            [
                'id' => 234,
                'province_id' => 15,
                'name' => 'Kabupaten Jember',
                "code" => "20"
            ],
            [
                'id' => 235,
                'province_id' => 15,
                'name' => 'Kabupaten Jombang',
                "code" => "20"
            ],
            [
                'id' => 236,
                'province_id' => 15,
                'name' => 'Kabupaten Kediri',
                "code" => "20"
            ],
            [
                'id' => 237,
                'province_id' => 15,
                'name' => 'Kabupaten Lamongan',
                "code" => "20"
            ],
            [
                'id' => 238,
                'province_id' => 15,
                'name' => 'Kabupaten Lumajang',
                "code" => "20"
            ],
            [
                'id' => 239,
                'province_id' => 15,
                'name' => 'Kabupaten Madiun',
                "code" => "20"
            ],
            [
                'id' => 240,
                'province_id' => 15,
                'name' => 'Kabupaten Magetan',
                "code" => "20"
            ],
            [
                'id' => 241,
                'province_id' => 15,
                'name' => 'Kabupaten Malang',
                "code" => "20"
            ],
            [
                'id' => 242,
                'province_id' => 15,
                'name' => 'Kabupaten Mojokerto',
                "code" => "20"
            ],
            [
                'id' => 243,
                'province_id' => 15,
                'name' => 'Kabupaten Nganjuk',
                "code" => "20"
            ],
            [
                'id' => 244,
                'province_id' => 15,
                'name' => 'Kabupaten Ngawi',
                "code" => "20"
            ],
            [
                'id' => 245,
                'province_id' => 15,
                'name' => 'Kabupaten Pacitan',
                "code" => "20"
            ],
            [
                'id' => 246,
                'province_id' => 15,
                'name' => 'Kabupaten Pamekasan',
                "code" => "20"
            ],
            [
                'id' => 247,
                'province_id' => 15,
                'name' => 'Kabupaten Pasuruan',
                "code" => "20"
            ],
            [
                'id' => 248,
                'province_id' => 15,
                'name' => 'Kabupaten Ponorogo',
                "code" => "20"
            ],
            [
                'id' => 249,
                'province_id' => 15,
                'name' => 'Kabupaten Probolinggo',
                "code" => "20"
            ],
            [
                'id' => 250,
                'province_id' => 15,
                'name' => 'Kabupaten Sampang',
                "code" => "20"
            ],
            [
                'id' => 251,
                'province_id' => 15,
                'name' => 'Kabupaten Sidoarjo',
                "code" => "20"
            ],
            [
                'id' => 252,
                'province_id' => 15,
                'name' => 'Kabupaten Situbondo',
                "code" => "20"
            ],
            [
                'id' => 253,
                'province_id' => 15,
                'name' => 'Kabupaten Sumenep',
                "code" => "20"
            ],
            [
                'id' => 254,
                'province_id' => 15,
                'name' => 'Kabupaten Trenggalek',
                "code" => "20"
            ],
            [
                'id' => 255,
                'province_id' => 15,
                'name' => 'Kabupaten Tuban',
                "code" => "20"
            ],
            [
                'id' => 256,
                'province_id' => 15,
                'name' => 'Kabupaten Tulungagung',
                "code" => "20"
            ],
            [
                'id' => 257,
                'province_id' => 15,
                'name' => 'Kota Batu',
                "code" => "20"
            ],
            [
                'id' => 258,
                'province_id' => 15,
                'name' => 'Kota Blitar',
                "code" => "20"
            ],
            [
                'id' => 259,
                'province_id' => 15,
                'name' => 'Kota Kediri',
                "code" => "20"
            ],
            [
                'id' => 260,
                'province_id' => 15,
                'name' => 'Kota Madiun',
                "code" => "20"
            ],
            [
                'id' => 261,
                'province_id' => 15,
                'name' => 'Kota Malang',
                "code" => "20"
            ],
            [
                'id' => 262,
                'province_id' => 15,
                'name' => 'Kota Mojokerto',
                "code" => "20"
            ],
            [
                'id' => 263,
                'province_id' => 15,
                'name' => 'Kota Pasuruan',
                "code" => "20"
            ],
            [
                'id' => 264,
                'province_id' => 15,
                'name' => 'Kota Probolinggo',
                "code" => "20"
            ],
            [
                'id' => 265,
                'province_id' => 15,
                'name' => 'Kota Surabaya',
                "code" => "20"
            ],
            [
                'id' => 266,
                'province_id' => 16,
                'name' => 'Kabupaten Lebak',
                "code" => "16"
            ],
            [
                'id' => 267,
                'province_id' => 16,
                'name' => 'Kabupaten Pandeglang',
                "code" => "16"
            ],
            [
                'id' => 268,
                'province_id' => 16,
                'name' => 'Kabupaten Serang',
                "code" => "16"
            ],
            [
                'id' => 269,
                'province_id' => 16,
                'name' => 'Kabupaten Tangerang',
                "code" => "16"
            ],
            [
                'id' => 270,
                'province_id' => 16,
                'name' => 'Kota Cilegon',
                "code" => "16"
            ],
            [
                'id' => 271,
                'province_id' => 16,
                'name' => 'Kota Serang',
                "code" => "16"
            ],
            [
                'id' => 272,
                'province_id' => 16,
                'name' => 'Kota Tangerang',
                "code" => "16"
            ],
            [
                'id' => 273,
                'province_id' => 16,
                'name' => 'Kota Tangerang Selatan',
                "code" => "16"
            ],
            [
                'id' => 274,
                'province_id' => 17,
                'name' => 'Kabupaten Badung',
                "code" => "22"
            ],
            [
                'id' => 275,
                'province_id' => 17,
                'name' => 'Kabupaten Bangli',
                "code" => "22"
            ],
            [
                'id' => 276,
                'province_id' => 17,
                'name' => 'Kabupaten Buleleng',
                "code" => "22"
            ],
            [
                'id' => 277,
                'province_id' => 17,
                'name' => 'Kabupaten Gianyar',
                "code" => "22"
            ],
            [
                'id' => 278,
                'province_id' => 17,
                'name' => 'Kabupaten Jembrana',
                "code" => "22"
            ],
            [
                'id' => 279,
                'province_id' => 17,
                'name' => 'Kabupaten Karangasem',
                "code" => "22"
            ],
            [
                'id' => 280,
                'province_id' => 17,
                'name' => 'Kabupaten Klungkung',
                "code" => "22"
            ],
            [
                'id' => 281,
                'province_id' => 17,
                'name' => 'Kabupaten Tabanan',
                "code" => "22"
            ],
            [
                'id' => 282,
                'province_id' => 17,
                'name' => 'Kota Denpasar',
                "code" => "22"
            ],
            [
                'id' => 283,
                'province_id' => 18,
                'name' => 'Kabupaten Bima',
                "code" => "23"
            ],
            [
                'id' => 284,
                'province_id' => 18,
                'name' => 'Kabupaten Dompu',
                "code" => "23"
            ],
            [
                'id' => 285,
                'province_id' => 18,
                'name' => 'Kabupaten Lombok Barat',
                "code" => "23"
            ],
            [
                'id' => 286,
                'province_id' => 18,
                'name' => 'Kabupaten Lombok Tengah',
                "code" => "23"
            ],
            [
                'id' => 287,
                'province_id' => 18,
                'name' => 'Kabupaten Lombok Timur',
                "code" => "23"
            ],
            [
                'id' => 288,
                'province_id' => 18,
                'name' => 'Kabupaten Lombok Utara',
                "code" => "23"
            ],
            [
                'id' => 289,
                'province_id' => 18,
                'name' => 'Kabupaten Sumbawa',
                "code" => "23"
            ],
            [
                'id' => 290,
                'province_id' => 18,
                'name' => 'Kabupaten Sumbawa Barat',
                "code" => "23"
            ],
            [
                'id' => 291,
                'province_id' => 18,
                'name' => 'Kota Bima',
                "code" => "23"
            ],
            [
                'id' => 292,
                'province_id' => 18,
                'name' => 'Kota Mataram',
                "code" => "23"
            ],
            [
                'id' => 293,
                'province_id' => 19,
                'name' => 'Kabupaten Alor',
                "code" => "23"
            ],
            [
                'id' => 294,
                'province_id' => 19,
                'name' => 'Kabupaten Belu',
                "code" => "23"
            ],
            [
                'id' => 295,
                'province_id' => 19,
                'name' => 'Kabupaten Ende',
                "code" => "23"
            ],
            [
                'id' => 296,
                'province_id' => 19,
                'name' => 'Kabupaten Flores Timur',
                "code" => "23"
            ],
            [
                'id' => 297,
                'province_id' => 19,
                'name' => 'Kabupaten Kupang',
                "code" => "23"
            ],
            [
                'id' => 298,
                'province_id' => 19,
                'name' => 'Kabupaten Lembata',
                "code" => "23"
            ],
            [
                'id' => 299,
                'province_id' => 19,
                'name' => 'Kabupaten Malaka',
                "code" => "23"
            ],
            [
                'id' => 300,
                'province_id' => 19,
                'name' => 'Kabupaten Manggarai',
                "code" => "23"
            ],
            [
                'id' => 301,
                'province_id' => 19,
                'name' => 'Kabupaten Manggarai Barat',
                "code" => "23"
            ],
            [
                'id' => 302,
                'province_id' => 19,
                'name' => 'Kabupaten Manggarai Timur',
                "code" => "23"
            ],
            [
                'id' => 303,
                'province_id' => 19,
                'name' => 'Kabupaten Nagekeo',
                "code" => "23"
            ],
            [
                'id' => 304,
                'province_id' => 19,
                'name' => 'Kabupaten Ngada',
                "code" => "23"
            ],
            [
                'id' => 305,
                'province_id' => 19,
                'name' => 'Kabupaten Rote Ndao',
                "code" => "23"
            ],
            [
                'id' => 306,
                'province_id' => 19,
                'name' => 'Kabupaten Sabu Raijua',
                "code" => "23"
            ],
            [
                'id' => 307,
                'province_id' => 19,
                'name' => 'Kabupaten Sikka',
                "code" => "23"
            ],
            [
                'id' => 308,
                'province_id' => 19,
                'name' => 'Kabupaten Sumba Barat',
                "code" => "23"
            ],
            [
                'id' => 309,
                'province_id' => 19,
                'name' => 'Kabupaten Sumba Barat Daya',
                "code" => "23"
            ],
            [
                'id' => 310,
                'province_id' => 19,
                'name' => 'Kabupaten Sumba Tengah',
                "code" => "23"
            ],
            [
                'id' => 311,
                'province_id' => 19,
                'name' => 'Kabupaten Sumba Timur',
                "code" => "23"
            ],
            [
                'id' => 312,
                'province_id' => 19,
                'name' => 'Kabupaten Timor Tengah Selatan',
                "code" => "23"
            ],
            [
                'id' => 313,
                'province_id' => 19,
                'name' => 'Kabupaten Timor Tengah Utara',
                "code" => "23"
            ],
            [
                'id' => 314,
                'province_id' => 19,
                'name' => 'Kota Kupang',
                "code" => "23"
            ],
            [
                'id' => 315,
                'province_id' => 20,
                'name' => 'Kabupaten Bengkayang',
                "code" => "11"
            ],
            [
                'id' => 316,
                'province_id' => 20,
                'name' => 'Kabupaten Kapuas Hulu',
                "code" => "11"
            ],
            [
                'id' => 317,
                'province_id' => 20,
                'name' => 'Kabupaten Kayong Utara',
                "code" => "11"
            ],
            [
                'id' => 318,
                'province_id' => 20,
                'name' => 'Kabupaten Ketapang',
                "code" => "11"
            ],
            [
                'id' => 319,
                'province_id' => 20,
                'name' => 'Kabupaten Kubu Raya',
                "code" => "11"
            ],
            [
                'id' => 320,
                'province_id' => 20,
                'name' => 'Kabupaten Landak',
                "code" => "11"
            ],
            [
                'id' => 321,
                'province_id' => 20,
                'name' => 'Kabupaten Melawi',
                "code" => "11"
            ],
            [
                'id' => 322,
                'province_id' => 20,
                'name' => 'Kabupaten Mempawah',
                "code" => "11"
            ],
            [
                'id' => 323,
                'province_id' => 20,
                'name' => 'Kabupaten Sambas',
                "code" => "11"
            ],
            [
                'id' => 324,
                'province_id' => 20,
                'name' => 'Kabupaten Sanggau',
                "code" => "11"
            ],
            [
                'id' => 325,
                'province_id' => 20,
                'name' => 'Kabupaten Sekadau',
                "code" => "11"
            ],
            [
                'id' => 326,
                'province_id' => 20,
                'name' => 'Kabupaten Sintang',
                "code" => "11"
            ],
            [
                'id' => 327,
                'province_id' => 20,
                'name' => 'Kota Pontianak',
                "code" => "11"
            ],
            [
                'id' => 328,
                'province_id' => 20,
                'name' => 'Kota Singkawang',
                "code" => "11"
            ],
            [
                'id' => 329,
                'province_id' => 21,
                'name' => 'Kabupaten Barito Selatan',
                "code" => "14"
            ],
            [
                'id' => 330,
                'province_id' => 21,
                'name' => 'Kabupaten Barito Timur',
                "code" => "14"
            ],
            [
                'id' => 331,
                'province_id' => 21,
                'name' => 'Kabupaten Barito Utara',
                "code" => "14"
            ],
            [
                'id' => 332,
                'province_id' => 21,
                'name' => 'Kabupaten Gunung Mas',
                "code" => "14"
            ],
            [
                'id' => 333,
                'province_id' => 21,
                'name' => 'Kabupaten Kapuas',
                "code" => "14"
            ],
            [
                'id' => 334,
                'province_id' => 21,
                'name' => 'Kabupaten Katingan',
                "code" => "14"
            ],
            [
                'id' => 335,
                'province_id' => 21,
                'name' => 'Kabupaten Kotawaringin Barat',
                "code" => "14"
            ],
            [
                'id' => 336,
                'province_id' => 21,
                'name' => 'Kabupaten Kotawaringin Timur',
                "code" => "14"
            ],
            [
                'id' => 337,
                'province_id' => 21,
                'name' => 'Kabupaten Lamandau',
                "code" => "14"
            ],
            [
                'id' => 338,
                'province_id' => 21,
                'name' => 'Kabupaten Murung Raya',
                "code" => "14"
            ],
            [
                'id' => 339,
                'province_id' => 21,
                'name' => 'Kabupaten Pulang Pisau',
                "code" => "14"
            ],
            [
                'id' => 340,
                'province_id' => 21,
                'name' => 'Kabupaten Seruyan',
                "code" => "14"
            ],
            [
                'id' => 341,
                'province_id' => 21,
                'name' => 'Kabupaten Sukamara',
                "code" => "14"
            ],
            [
                'id' => 342,
                'province_id' => 21,
                'name' => 'Kota Palangka Raya',
                "code" => "14"
            ],
            [
                'id' => 343,
                'province_id' => 22,
                'name' => 'Kabupaten Balangan',
                "code" => "14"
            ],
            [
                'id' => 344,
                'province_id' => 22,
                'name' => 'Kabupaten Banjar',
                "code" => "13"
            ],
            [
                'id' => 345,
                'province_id' => 22,
                'name' => 'Kabupaten Barito Kuala',
                "code" => "13"
            ],
            [
                'id' => 346,
                'province_id' => 22,
                'name' => 'Kabupaten Hulu Sungai Selatan',
                "code" => "13"
            ],
            [
                'id' => 347,
                'province_id' => 22,
                'name' => 'Kabupaten Hulu Sungai Tengah',
                "code" => "13"
            ],
            [
                'id' => 348,
                'province_id' => 22,
                'name' => 'Kabupaten Hulu Sungai Utara',
                "code" => "13"
            ],
            [
                'id' => 349,
                'province_id' => 22,
                'name' => 'Kabupaten Kotabaru',
                "code" => "13"
            ],
            [
                'id' => 350,
                'province_id' => 22,
                'name' => 'Kabupaten Tabalong',
                "code" => "13"
            ],
            [
                'id' => 351,
                'province_id' => 22,
                'name' => 'Kabupaten Tanah Bumbu',
                "code" => "13"
            ],
            [
                'id' => 352,
                'province_id' => 22,
                'name' => 'Kabupaten Tanah Laut',
                "code" => "13"
            ],
            [
                'id' => 353,
                'province_id' => 22,
                'name' => 'Kabupaten Tapin',
                "code" => "13"
            ],
            [
                'id' => 354,
                'province_id' => 22,
                'name' => 'Kota Banjarbaru',
                "code" => "13"
            ],
            [
                'id' => 355,
                'province_id' => 22,
                'name' => 'Kota Banjarmasin',
                "code" => "13"
            ],
            [
                'id' => 356,
                'province_id' => 23,
                'name' => 'Kabupaten Berau',
                "code" => "12"
            ],
            [
                'id' => 357,
                'province_id' => 23,
                'name' => 'Kabupaten Kutai Barat',
                "code" => "12"
            ],
            [
                'id' => 358,
                'province_id' => 23,
                'name' => 'Kabupaten Kutai Kartanegara',
                "code" => "12"
            ],
            [
                'id' => 359,
                'province_id' => 23,
                'name' => 'Kabupaten Kutai Timur',
                "code" => "12"
            ],
            [
                'id' => 360,
                'province_id' => 23,
                'name' => 'Kabupaten Mahakam Ulu',
                "code" => "12"
            ],
            [
                'id' => 361,
                'province_id' => 23,
                'name' => 'Kabupaten Paser',
                "code" => "12"
            ],
            [
                'id' => 362,
                'province_id' => 23,
                'name' => 'Kabupaten Penajam Paser Utara',
                "code" => "12"
            ],
            [
                'id' => 363,
                'province_id' => 23,
                'name' => 'Kota Balikpapan',
                "code" => "12"
            ],
            [
                'id' => 364,
                'province_id' => 23,
                'name' => 'Kota Bontang',
                "code" => "12"
            ],
            [
                'id' => 365,
                'province_id' => 23,
                'name' => 'Kota Samarinda',
                "code" => "12"
            ],
            [
                'id' => 366,
                'province_id' => 24,
                'name' => 'Kabupaten Bulungan (Bulongan)',
                "code" => "15"
            ],
            [
                'id' => 367,
                'province_id' => 24,
                'name' => 'Kabupaten Malinau',
                "code" => "15"
            ],
            [
                'id' => 368,
                'province_id' => 24,
                'name' => 'Kabupaten Nunukan',
                "code" => "15"
            ],
            [
                'id' => 369,
                'province_id' => 24,
                'name' => 'Kabupaten Tana Tidung',
                "code" => "15"
            ],
            [
                'id' => 370,
                'province_id' => 24,
                'name' => 'Kota Tarakan',
                "code" => "15"
            ],
            [
                'id' => 371,
                'province_id' => 25,
                'name' => 'Kabupaten Bolaang Mongondow',
                "code" => "28"
            ],
            [
                'id' => 372,
                'province_id' => 25,
                'name' => 'Kabupaten Bolaang Mongondow Selatan',
                "code" => "28"
            ],
            [
                'id' => 373,
                'province_id' => 25,
                'name' => 'Kabupaten Bolaang Mongondow Timur',
                "code" => "28"
            ],
            [
                'id' => 374,
                'province_id' => 25,
                'name' => 'Kabupaten Bolaang Mongondow Utara',
                "code" => "28"
            ],
            [
                'id' => 375,
                'province_id' => 25,
                'name' => 'Kabupaten Kepulauan Sangihe',
                "code" => "28"
            ],
            [
                'id' => 376,
                'province_id' => 25,
                'name' => 'Kabupaten Kepulauan Siau Tagulandang Biaro (Sitaro)',
                "code" => "28"
            ],
            [
                'id' => 377,
                'province_id' => 25,
                'name' => 'Kabupaten Kepulauan Talaud',
                "code" => "28"
            ],
            [
                'id' => 378,
                'province_id' => 25,
                'name' => 'Kabupaten Minahasa',
                "code" => "28"
            ],
            [
                'id' => 379,
                'province_id' => 25,
                'name' => 'Kabupaten Minahasa Selatan',
                "code" => "28"
            ],
            [
                'id' => 380,
                'province_id' => 25,
                'name' => 'Kabupaten Minahasa Tenggara',
                "code" => "28"
            ],
            [
                'id' => 381,
                'province_id' => 25,
                'name' => 'Kabupaten Minahasa Utara',
                "code" => "28"
            ],
            [
                'id' => 382,
                'province_id' => 25,
                'name' => 'Kota Bitung',
                "code" => "28"
            ],
            [
                'id' => 383,
                'province_id' => 25,
                'name' => 'Kota Kotamobagu',
                "code" => "28"
            ],
            [
                'id' => 384,
                'province_id' => 25,
                'name' => 'Kota Manado',
                "code" => "28"
            ],
            [
                'id' => 385,
                'province_id' => 25,
                'name' => 'Kota Tomohon',
                "code" => "28"
            ],
            [
                'id' => 386,
                'province_id' => 26,
                'name' => 'Kabupaten Banggai',
                "code" => "27"
            ],
            [
                'id' => 387,
                'province_id' => 26,
                'name' => 'Kabupaten Banggai Kepulauan',
                "code" => "27"
            ],
            [
                'id' => 388,
                'province_id' => 26,
                'name' => 'Kabupaten Banggai Laut',
                "code" => "27"
            ],
            [
                'id' => 389,
                'province_id' => 26,
                'name' => 'Kabupaten Buol',
                "code" => "27"
            ],
            [
                'id' => 390,
                'province_id' => 26,
                'name' => 'Kabupaten Donggala',
                "code" => "27"
            ],
            [
                'id' => 391,
                'province_id' => 26,
                'name' => 'Kabupaten Morowali',
                "code" => "27"
            ],
            [
                'id' => 392,
                'province_id' => 26,
                'name' => 'Kabupaten Morowali Utara',
                "code" => "27"
            ],
            [
                'id' => 393,
                'province_id' => 26,
                'name' => 'Kabupaten Parigi Moutong',
                "code" => "27"
            ],
            [
                'id' => 394,
                'province_id' => 26,
                'name' => 'Kabupaten Poso',
                "code" => "27"
            ],
            [
                'id' => 395,
                'province_id' => 26,
                'name' => 'Kabupaten Sigi',
                "code" => "27"
            ],
            [
                'id' => 396,
                'province_id' => 26,
                'name' => 'Kabupaten Tojo Una-Una',
                "code" => "27"
            ],
            [
                'id' => 397,
                'province_id' => 26,
                'name' => 'Kabupaten Toli-Toli',
                "code" => "27"
            ],
            [
                'id' => 398,
                'province_id' => 26,
                'name' => 'Kota Palu',
                "code" => "27"
            ],
            [
                'id' => 399,
                'province_id' => 27,
                'name' => 'Kabupaten Bantaeng',
                "code" => "27"
            ],
            [
                'id' => 400,
                'province_id' => 27,
                'name' => 'Kabupaten Barru',
                "code" => "27"
            ],
            [
                'id' => 401,
                'province_id' => 27,
                'name' => 'Kabupaten Bone',
                "code" => "27"
            ],
            [
                'id' => 402,
                'province_id' => 27,
                'name' => 'Kabupaten Bulukumba',
                "code" => "27"
            ],
            [
                'id' => 403,
                'province_id' => 27,
                'name' => 'Kabupaten Enrekang',
                "code" => "27"
            ],
            [
                'id' => 404,
                'province_id' => 27,
                'name' => 'Kabupaten Gowa',
                "code" => "27"
            ],
            [
                'id' => 405,
                'province_id' => 27,
                'name' => 'Kabupaten Jeneponto',
                "code" => "27"
            ],
            [
                'id' => 406,
                'province_id' => 27,
                'name' => 'Kabupaten Selayar (Kepulauan Selayar)',
                "code" => "27"
            ],
            [
                'id' => 407,
                'province_id' => 27,
                'name' => 'Kabupaten Luwu',
                "code" => "27"
            ],
            [
                'id' => 408,
                'province_id' => 27,
                'name' => 'Kabupaten Luwu Timur',
                "code" => "27"
            ],
            [
                'id' => 409,
                'province_id' => 27,
                'name' => 'Kabupaten Luwu Utara',
                "code" => "27"
            ],
            [
                'id' => 410,
                'province_id' => 27,
                'name' => 'Kabupaten Maros',
                "code" => "27"
            ],
            [
                'id' => 411,
                'province_id' => 27,
                'name' => 'Kabupaten Pangkajene Kepulauan',
                "code" => "27"
            ],
            [
                'id' => 412,
                'province_id' => 27,
                'name' => 'Kabupaten Pinrang',
                "code" => "27"
            ],
            [
                'id' => 413,
                'province_id' => 27,
                'name' => 'Kabupaten Sidenreng Rappang (Sidrap)',
                "code" => "27"
            ],
            [
                'id' => 414,
                'province_id' => 27,
                'name' => 'Kabupaten Sinjai',
                "code" => "27"
            ],
            [
                'id' => 415,
                'province_id' => 27,
                'name' => 'Kabupaten Soppeng',
                "code" => "27"
            ],
            [
                'id' => 416,
                'province_id' => 27,
                'name' => 'Kabupaten Takalar',
                "code" => "27"
            ],
            [
                'id' => 417,
                'province_id' => 27,
                'name' => 'Kabupaten Tana Toraja',
                "code" => "27"
            ],
            [
                'id' => 418,
                'province_id' => 27,
                'name' => 'Kabupaten Toraja Utara',
                "code" => "27"
            ],
            [
                'id' => 419,
                'province_id' => 27,
                'name' => 'Kabupaten Wajo',
                "code" => "27"
            ],
            [
                'id' => 420,
                'province_id' => 27,
                'name' => 'Kota Makassar',
                "code" => "27"
            ],
            [
                'id' => 421,
                'province_id' => 27,
                'name' => 'Kota Palopo',
                "code" => "27"
            ],
            [
                'id' => 422,
                'province_id' => 27,
                'name' => 'Kota Parepare',
                "code" => "27"
            ],
            [
                'id' => 423,
                'province_id' => 28,
                'name' => 'Kabupaten Bombana',
                "code" => "29"
            ],
            [
                'id' => 424,
                'province_id' => 28,
                'name' => 'Kabupaten Buton',
                "code" => "29"
            ],
            [
                'id' => 425,
                'province_id' => 28,
                'name' => 'Kabupaten Buton Selatan',
                "code" => "29"
            ],
            [
                'id' => 426,
                'province_id' => 28,
                'name' => 'Kabupaten Buton Tengah',
                "code" => "29"
            ],
            [
                'id' => 427,
                'province_id' => 28,
                'name' => 'Kabupaten Buton Utara',
                "code" => "29"
            ],
            [
                'id' => 428,
                'province_id' => 28,
                'name' => 'Kabupaten Kolaka',
                "code" => "29"
            ],
            [
                'id' => 429,
                'province_id' => 28,
                'name' => 'Kabupaten Kolaka Timur',
                "code" => "29"
            ],
            [
                'id' => 430,
                'province_id' => 28,
                'name' => 'Kabupaten Kolaka Utara',
                "code" => "29"
            ],
            [
                'id' => 431,
                'province_id' => 28,
                'name' => 'Kabupaten Konawe',
                "code" => "29"
            ],
            [
                'id' => 432,
                'province_id' => 28,
                'name' => 'Kabupaten Konawe Kepulauan',
                "code" => "29"
            ],
            [
                'id' => 433,
                'province_id' => 28,
                'name' => 'Kabupaten Konawe Selatan',
                "code" => "29"
            ],
            [
                'id' => 434,
                'province_id' => 28,
                'name' => 'Kabupaten Konawe Utara',
                "code" => "29"
            ],
            [
                'id' => 435,
                'province_id' => 28,
                'name' => 'Kabupaten Muna',
                "code" => "29"
            ],
            [
                'id' => 436,
                'province_id' => 28,
                'name' => 'Kabupaten Muna Barat',
                "code" => "29"
            ],
            [
                'id' => 437,
                'province_id' => 28,
                'name' => 'Kabupaten Wakatobi',
                "code" => "29"
            ],
            [
                'id' => 438,
                'province_id' => 28,
                'name' => 'Kota Baubau',
                "code" => "29"
            ],
            [
                'id' => 439,
                'province_id' => 28,
                'name' => 'Kota Kendari',
                "code" => "29"
            ],
            [
                'id' => 440,
                'province_id' => 29,
                'name' => 'Kabupaten Boalemo',
                "code" => "29"
            ],
            [
                'id' => 441,
                'province_id' => 29,
                'name' => 'Kabupaten Bone Bolango',
                "code" => "29"
            ],
            [
                'id' => 442,
                'province_id' => 29,
                'name' => 'Kabupaten Gorontalo',
                "code" => "29"
            ],
            [
                'id' => 443,
                'province_id' => 29,
                'name' => 'Kabupaten Gorontalo Utara',
                "code" => "29"
            ],
            [
                'id' => 444,
                'province_id' => 29,
                'name' => 'Kabupaten Pohuwato',
                "code" => "29"
            ],
            [
                'id' => 445,
                'province_id' => 29,
                'name' => 'Kota Gorontalo',
                "code" => "29"
            ],
            [
                'id' => 446,
                'province_id' => 30,
                'name' => 'Kabupaten Majene',
                "code" => "26"
            ],
            [
                'id' => 447,
                'province_id' => 30,
                'name' => 'Kabupaten Mamasa',
                "code" => "26"
            ],
            [
                'id' => 448,
                'province_id' => 30,
                'name' => 'Kabupaten Mamuju',
                "code" => "26"
            ],
            [
                'id' => 449,
                'province_id' => 30,
                'name' => 'Kabupaten Mamuju Tengah',
                "code" => "26"
            ],
            [
                'id' => 450,
                'province_id' => 30,
                'name' => 'Kabupaten Mamuju Utara',
                "code" => "26"
            ],
            [
                'id' => 451,
                'province_id' => 30,
                'name' => 'Kabupaten Polewali Mandar',
                "code" => "26"
            ],
            [
                'id' => 452,
                'province_id' => 31,
                'name' => 'Kabupaten Buru',
                "code" => "32"
            ],
            [
                'id' => 453,
                'province_id' => 31,
                'name' => 'Kabupaten Buru Selatan',
                "code" => "32"
            ],
            [
                'id' => 454,
                'province_id' => 31,
                'name' => 'Kabupaten Kepulauan Aru',
                "code" => "32"
            ],
            [
                'id' => 455,
                'province_id' => 31,
                'name' => 'Kabupaten Maluku Barat Daya',
                "code" => "32"
            ],
            [
                'id' => 456,
                'province_id' => 31,
                'name' => 'Kabupaten Maluku Tengah',
                "code" => "32"
            ],
            [
                'id' => 457,
                'province_id' => 31,
                'name' => 'Kabupaten Maluku Tenggara',
                "code" => "32"
            ],
            [
                'id' => 458,
                'province_id' => 31,
                'name' => 'Kabupaten Maluku Tenggara Barat',
                "code" => "323"
            ],
            [
                'id' => 459,
                'province_id' => 31,
                'name' => 'Kabupaten Seram Bagian Barat',
                "code" => "32"
            ],
            [
                'id' => 460,
                'province_id' => 31,
                'name' => 'Kabupaten Seram Bagian Timur',
                "code" => "32"
            ],
            [
                'id' => 461,
                'province_id' => 31,
                'name' => 'Kota Ambon',
                "code" => "32"
            ],
            [
                'id' => 462,
                'province_id' => 31,
                'name' => 'Kota Tual',
                "code" => "32"
            ],
            [
                'id' => 463,
                'province_id' => 32,
                'name' => 'Kabupaten Halmahera Barat',
                "code" => "31"
            ],
            [
                'id' => 464,
                'province_id' => 32,
                'name' => 'Kabupaten Halmahera Selatan',
                "code" => "31"
            ],
            [
                'id' => 465,
                'province_id' => 32,
                'name' => 'Kabupaten Halmahera Tengah',
                "code" => "31"
            ],
            [
                'id' => 466,
                'province_id' => 32,
                'name' => 'Kabupaten Halmahera Timur',
                "code" => "31"
            ],
            [
                'id' => 467,
                'province_id' => 32,
                'name' => 'Kabupaten Halmahera Utara',
                "code" => "31"
            ],
            [
                'id' => 468,
                'province_id' => 32,
                'name' => 'Kabupaten Kepulauan Sula',
                "code" => "31"
            ],
            [
                'id' => 469,
                'province_id' => 32,
                'name' => 'Kabupaten Pulau Morotai',
                "code" => "31"
            ],
            [
                'id' => 470,
                'province_id' => 32,
                'name' => 'Kabupaten Pulau Taliabu',
                "code" => "31"
            ],
            [
                'id' => 471,
                'province_id' => 32,
                'name' => 'Kota Ternate',
                "code" => "31"
            ],
            [
                'id' => 472,
                'province_id' => 32,
                'name' => 'Kota Tidore Kepulauan',
                "code" => "31"
            ],
            [
                'id' => 473,
                'province_id' => 33,
                'name' => 'Kabupaten Asmat',
                "code" => "37"
            ],
            [
                'id' => 474,
                'province_id' => 33,
                'name' => 'Kabupaten Biak Numfor',
                "code" => "37"
            ],
            [
                'id' => 475,
                'province_id' => 33,
                'name' => 'Kabupaten Boven Digoel',
                "code" => "37"
            ],
            [
                'id' => 476,
                'province_id' => 33,
                'name' => 'Kabupaten Deiyai (Deliyai)',
                "code" => "37"
            ],
            [
                'id' => 477,
                'province_id' => 33,
                'name' => 'Kabupaten Dogiyai',
                "code" => "37"
            ],
            [
                'id' => 478,
                'province_id' => 33,
                'name' => 'Kabupaten Intan Jaya',
                "code" => "37"
            ],
            [
                'id' => 479,
                'province_id' => 33,
                'name' => 'Kabupaten Jayapura',
                "code" => "37"
            ],
            [
                'id' => 480,
                'province_id' => 33,
                'name' => 'Kabupaten Jayawijaya',
                "code" => "37"
            ],
            [
                'id' => 481,
                'province_id' => 33,
                'name' => 'Kabupaten Keerom',
                "code" => "37"
            ],
            [
                'id' => 482,
                'province_id' => 33,
                'name' => 'Kabupaten Kepulauan Yapen (Yapen Waropen)',
                "code" => "37"
            ],
            [
                'id' => 483,
                'province_id' => 33,
                'name' => 'Kabupaten Lanny Jaya',
                "code" => "37"
            ],
            [
                'id' => 484,
                'province_id' => 33,
                'name' => 'Kabupaten Mamberamo Raya',
                "code" => "37"
            ],
            [
                'id' => 485,
                'province_id' => 33,
                'name' => 'Kabupaten Mamberamo Tengah',
                "code" => "37"
            ],
            [
                'id' => 486,
                'province_id' => 33,
                'name' => 'Kabupaten Mappi',
                "code" => "37"
            ],
            [
                'id' => 487,
                'province_id' => 33,
                'name' => 'Kabupaten Merauke',
                "code" => "37"
            ],
            [
                'id' => 488,
                'province_id' => 33,
                'name' => 'Kabupaten Mimika',
                "code" => "37"
            ],
            [
                'id' => 489,
                'province_id' => 33,
                'name' => 'Kabupaten Nabire',
                "code" => "37"
            ],
            [
                'id' => 490,
                'province_id' => 33,
                'name' => 'Kabupaten Nduga',
                "code" => "37"
            ],
            [
                'id' => 491,
                'province_id' => 33,
                'name' => 'Kabupaten Paniai',
                "code" => "37"
            ],
            [
                'id' => 492,
                'province_id' => 33,
                'name' => 'Kabupaten Pegunungan Bintang',
                "code" => "37"
            ],
            [
                'id' => 493,
                'province_id' => 33,
                'name' => 'Kabupaten Puncak',
                "code" => "37"
            ],
            [
                'id' => 494,
                'province_id' => 33,
                'name' => 'Kabupaten Puncak Jaya',
                "code" => "37"
            ],
            [
                'id' => 495,
                'province_id' => 33,
                'name' => 'Kabupaten Sarmi',
                "code" => "37"
            ],
            [
                'id' => 496,
                'province_id' => 33,
                'name' => 'Kabupaten Supiori',
                "code" => "37"
            ],
            [
                'id' => 497,
                'province_id' => 33,
                'name' => 'Kabupaten Tolikara',
                "code" => "37"
            ],
            [
                'id' => 498,
                'province_id' => 33,
                'name' => 'Kabupaten Waropen',
                "code" => "37"
            ],
            [
                'id' => 499,
                'province_id' => 33,
                'name' => 'Kabupaten Yahukimo',
                "code" => "37"
            ],
            [
                'id' => 500,
                'province_id' => 33,
                'name' => 'Kabupaten Yalimo',
                "code" => "37"
            ],
            [
                'id' => 501,
                'province_id' => 33,
                'name' => 'Kota Jayapura',
                "code" => "37"
            ],
            [
                'id' => 502,
                'province_id' => 34,
                'name' => 'Kabupaten Fakfak',
                "code" => "33"
            ],
            [
                'id' => 503,
                'province_id' => 34,
                'name' => 'Kabupaten Kaimana',
                "code" => "33"
            ],
            [
                'id' => 504,
                'province_id' => 34,
                'name' => 'Kabupaten Manokwari',
                "code" => "33"
            ],
            [
                'id' => 505,
                'province_id' => 34,
                'name' => 'Kabupaten Manokwari Selatan',
                "code" => "33"
            ],
            [
                'id' => 506,
                'province_id' => 34,
                'name' => 'Kabupaten Maybrat',
                "code" => "33"
            ],
            [
                'id' => 507,
                'province_id' => 34,
                'name' => 'Kabupaten Pegunungan Arfak',
                "code" => "33"
            ],
            [
                'id' => 508,
                'province_id' => 34,
                'name' => 'Kabupaten Raja Ampat',
                "code" => "33"
            ],
            [
                'id' => 509,
                'province_id' => 34,
                'name' => 'Kabupaten Sorong',
                "code" => "33"
            ],
            [
                'id' => 510,
                'province_id' => 34,
                'name' => 'Kabupaten Sorong Selatan',
                "code" => "33"
            ],
            [
                'id' => 511,
                'province_id' => 34,
                'name' => 'Kabupaten Tambrauw',
                "code" => "33"
            ],
            [
                'id' => 512,
                'province_id' => 34,
                'name' => 'Kabupaten Teluk Bintuni',
                "code" => "33"
            ],
            [
                'id' => 513,
                'province_id' => 34,
                'name' => 'Kabupaten Teluk Wondama',
                "code" => "33"
            ],
            [
                'id' => 514,
                'province_id' => 34,
                'name' => 'Kota Sorong',
                "code" => "33"
            ],
        ];

        City::query()->delete();
        City::insert($kabupatenKota);
    }
}
