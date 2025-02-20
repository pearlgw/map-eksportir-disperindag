<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaerahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['name' => 'Banjarnegara', 'latitude' => -7.3797, 'longitude' => 109.6957],
            ['name' => 'Banyumas', 'latitude' => -7.5153, 'longitude' => 109.2946],
            ['name' => 'Batang', 'latitude' => -6.9097, 'longitude' => 109.7344],
            ['name' => 'Blora', 'latitude' => -6.9695, 'longitude' => 111.4186],
            ['name' => 'Boyolali', 'latitude' => -7.5332, 'longitude' => 110.5931],
            ['name' => 'Brebes', 'latitude' => -6.9732, 'longitude' => 108.9027],
            ['name' => 'Cilacap', 'latitude' => -7.7258, 'longitude' => 109.9031],
            ['name' => 'Demak', 'latitude' => -6.8926, 'longitude' => 110.6383],
            ['name' => 'Grobogan', 'latitude' => -7.1275, 'longitude' => 110.9267],
            ['name' => 'Jepara', 'latitude' => -6.5845, 'longitude' => 110.6781],
            ['name' => 'Karanganyar', 'latitude' => -7.6162, 'longitude' => 110.9501],
            ['name' => 'Kebumen', 'latitude' => -7.6787, 'longitude' => 109.6542],
            ['name' => 'Kendal', 'latitude' => -6.9198, 'longitude' => 110.1981],
            ['name' => 'Klaten', 'latitude' => -7.7059, 'longitude' => 110.6071],
            ['name' => 'Kota Magelang', 'latitude' => -7.4797, 'longitude' => 110.2177],
            ['name' => 'Kota Pekalongan', 'latitude' => -6.889, 'longitude' => 109.6757],
            ['name' => 'Kota Salatiga', 'latitude' => -7.3305, 'longitude' => 110.5084],
            ['name' => 'Kota Semarang', 'latitude' => -6.9667, 'longitude' => 110.4167],
            ['name' => 'Kota Surakarta', 'latitude' => -7.5667, 'longitude' => 110.8167],
            ['name' => 'Kota Tegal', 'latitude' => -6.8694, 'longitude' => 109.1402],
            ['name' => 'Kudus', 'latitude' => -6.806, 'longitude' => 110.8404],
            ['name' => 'Magelang', 'latitude' => -7.4677, 'longitude' => 110.2176],
            ['name' => 'Pati', 'latitude' => -6.7528, 'longitude' => 111.0389],
            ['name' => 'Pekalongan', 'latitude' => -6.8885, 'longitude' => 109.6753],
            ['name' => 'Pemalang', 'latitude' => -6.8892, 'longitude' => 109.3802],
            ['name' => 'Purbalingga', 'latitude' => -7.3881, 'longitude' => 109.3639],
            ['name' => 'Purworejo', 'latitude' => -7.7135, 'longitude' => 110.0044],
            ['name' => 'Rembang', 'latitude' => -6.7063, 'longitude' => 111.3414],
            ['name' => 'Semarang', 'latitude' => -7.0051, 'longitude' => 110.4381],
            ['name' => 'Sragen', 'latitude' => -7.4265, 'longitude' => 111.0211],
            ['name' => 'Sukoharjo', 'latitude' => -7.6789, 'longitude' => 110.8286],
            ['name' => 'Tegal', 'latitude' => -6.8793, 'longitude' => 109.1427],
            ['name' => 'Temanggung', 'latitude' => -7.3089, 'longitude' => 110.1602],
            ['name' => 'Wonogiri', 'latitude' => -7.8195, 'longitude' => 110.9384],
            ['name' => 'Wonosobo', 'latitude' => -7.3633, 'longitude' => 109.9034],
            ['name' => 'Kabupaten Banjarnegara', 'latitude' => -7.39611, 'longitude' => 109.7575],
            ['name' => 'Kabupaten Banyumas', 'latitude' => -7.61167, 'longitude' => 109.35361],
            ['name' => 'Kabupaten Batang', 'latitude' => -7.03333, 'longitude' => 109.88333],
            ['name' => 'Kabupaten Blora', 'latitude' => -7.06667, 'longitude' => 111.38333],
            ['name' => 'Kabupaten Boyolali', 'latitude' => -7.5, 'longitude' => 110.7],
            ['name' => 'Kabupaten Cilacap', 'latitude' => -7.57417, 'longitude' => 108.98861],
            ['name' => 'Kabupaten Demak', 'latitude' => -6.8909, 'longitude' => 110.6396],
            ['name' => 'Kabupaten Grobogan', 'latitude' => -7.11667, 'longitude' => 110.91667],
            ['name' => 'Kabupaten Jepara', 'latitude' => -6.58333, 'longitude' => 110.76667],
            ['name' => 'Kabupaten Karanganyar', 'latitude' => -7.62806, 'longitude' => 111.0625],
            ['name' => 'Kabupaten Kendal', 'latitude' => -7.0256, 'longitude' => 110.1685],
            ['name' => 'Kabupaten Klaten', 'latitude' => -7.68333, 'longitude' => 110.61667],
            ['name' => 'Kabupaten Kudus', 'latitude' => -6.8, 'longitude' => 110.86667],
            ['name' => 'Kabupaten Magelang', 'latitude' => -7.4275, 'longitude' => 110.16194],
            ['name' => 'Kabupaten Pati', 'latitude' => -6.76667, 'longitude' => 111.1],
            ['name' => 'Kabupaten Pemalang', 'latitude' => -7.03333, 'longitude' => 109.4],
            ['name' => 'Kabupaten Purbalingga', 'latitude' => -7.28417, 'longitude' => 109.35028],
            ['name' => 'Kabupaten Rembang', 'latitude' => -6.78333, 'longitude' => 111.46667],
            ['name' => 'Kabupaten Semarang', 'latitude' => -7.20667, 'longitude' => 110.44139],
            ['name' => 'Kabupaten Sragen', 'latitude' => -7.41278, 'longitude' => 110.935],
            ['name' => 'Kabupaten Sukoharjo', 'latitude' => -7.54972, 'longitude' => 110.71639],
            ['name' => 'Kabupaten Tegal', 'latitude' => -6.8694, 'longitude' => 109.1402],
            ['name' => 'Kabupaten Temanggung', 'latitude' => -7.25, 'longitude' => 110.11667],
            ['name' => 'Kabupaten Wonogiri', 'latitude' => -7.91667, 'longitude' => 111],
        ];

        foreach ($cities as $city) {
            $city['created_at'] = Carbon::now();
            $city['updated_at'] = Carbon::now();
        }       

        DB::table('cities')->insert($cities);
    }
}
