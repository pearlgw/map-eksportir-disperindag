<?php

namespace App\Imports;

use App\Models\Eksportir;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EksportirImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Eksportir([
            'npwp' => $row['npwp'],
            'nama_eksportir' => $row['nama_eksportir'],
            'city_id' => $row['city_id'],
        ]);
    }
}