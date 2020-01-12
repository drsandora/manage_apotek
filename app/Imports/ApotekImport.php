<?php

namespace App\Imports;

use App\dabat;
use App\Apotek;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ApotekImport implements ToCollection
{

    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2) {
                dabat::create([
                    'kode' => $row[1],
                    'nama' => $row[2],
                    'satuan' => $row[3],
                    'jumlah' => $row[4],
                    'harga' => $row[5],
                    'user_id' => $row[6],
                ]);
            }
        }
    }
}
