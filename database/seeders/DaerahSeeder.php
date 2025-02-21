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
            ['name' => 'Kabupaten Banjarnegara', 'latitude' => -7.3797, 'longitude' => 109.6957],
            ['name' => 'Kabupaten Banyumas', 'latitude' => -7.5153, 'longitude' => 109.2946],
            ['name' => 'Kabupaten Batang', 'latitude' => -6.9097, 'longitude' => 109.7344],
            ['name' => 'Kabupaten Blora', 'latitude' => -6.9695, 'longitude' => 111.4186],
            ['name' => 'Kabupaten Boyolali', 'latitude' => -7.5332, 'longitude' => 110.5931],
            ['name' => 'Kabupaten Brebes', 'latitude' => -6.9732, 'longitude' => 108.9027],
            ['name' => 'Kabupaten Cilacap', 'latitude' => -7.7258, 'longitude' => 109.9031],
            ['name' => 'Kabupaten Demak', 'latitude' => -6.8926, 'longitude' => 110.6383],
            ['name' => 'Kabupaten Grobogan', 'latitude' => -7.1275, 'longitude' => 110.9267],
            ['name' => 'Kabupaten Jepara', 'latitude' => -6.5845, 'longitude' => 110.6781],
            ['name' => 'Kabupaten Karanganyar', 'latitude' => -7.6162, 'longitude' => 110.9501],
            ['name' => 'Kabupaten Kebumen', 'latitude' => -7.6787, 'longitude' => 109.6542],
            ['name' => 'Kabupaten Kendal', 'latitude' => -6.9198, 'longitude' => 110.1981],
            ['name' => 'Kabupaten Klaten', 'latitude' => -7.7059, 'longitude' => 110.6071],
            ['name' => 'Kabupaten Kudus', 'latitude' => -6.806, 'longitude' => 110.8404],
            ['name' => 'Kabupaten Magelang', 'latitude' => -7.4677, 'longitude' => 110.2176],
            ['name' => 'Kabupaten Pati', 'latitude' => -6.7528, 'longitude' => 111.0389],
            ['name' => 'Kabupaten Pekalongan', 'latitude' => -6.8885, 'longitude' => 109.6753],
            ['name' => 'Kabupaten Pemalang', 'latitude' => -6.8892, 'longitude' => 109.3802],
            ['name' => 'Kabupaten Purbalingga', 'latitude' => -7.3881, 'longitude' => 109.3639],
            ['name' => 'Kabupaten Purworejo', 'latitude' => -7.7135, 'longitude' => 110.0044],
            ['name' => 'Kabupaten Rembang', 'latitude' => -6.7063, 'longitude' => 111.3414],
            ['name' => 'Kabupaten Semarang', 'latitude' => -7.0051, 'longitude' => 110.4381],
            ['name' => 'Kabupaten Sragen', 'latitude' => -7.4265, 'longitude' => 111.0211],
            ['name' => 'Kabupaten Sukoharjo', 'latitude' => -7.6789, 'longitude' => 110.8286],
            ['name' => 'Kabupaten Tegal', 'latitude' => -6.8793, 'longitude' => 109.1427],
            ['name' => 'Kabupaten Temanggung', 'latitude' => -7.3089, 'longitude' => 110.1602],
            ['name' => 'Kabupaten Wonogiri', 'latitude' => -7.8195, 'longitude' => 110.9384],
            ['name' => 'Kabupaten Wonosobo', 'latitude' => -7.3633, 'longitude' => 109.9034],
            ['name' => 'Kota Magelang', 'latitude' => -7.4697, 'longitude' => 110.2250],
            ['name' => 'Kota Pekalongan', 'latitude' => -6.8800, 'longitude' => 109.6900],
            ['name' => 'Kota Salatiga', 'latitude' => -7.3305, 'longitude' => 110.5084],
            ['name' => 'Kota Semarang', 'latitude' => -6.9500, 'longitude' => 110.4200],
            ['name' => 'Kota Surakarta', 'latitude' => -7.5667, 'longitude' => 110.8167],
            ['name' => 'Kota Tegal', 'latitude' => -6.8600, 'longitude' => 109.1600],
        ];

        foreach ($cities as $city) {
            $city['created_at'] = Carbon::now();
            $city['updated_at'] = Carbon::now();
        }       

        DB::table('cities')->insert($cities);
    }
}
