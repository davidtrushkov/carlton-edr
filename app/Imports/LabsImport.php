<?php

namespace App\Imports;

use App\Models\Lab;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LabsImport implements ToModel, WithUpserts, WithHeadingRow
{
    use Importable;

    public function model(array $row)
    {
        return new Lab([
            'eff_ph' => $row['ph'],
            'eff_cond' => $row['cond'],
            'eff_cl2t' => $row['cl2'],
            'eff_nh4t' =>  $row['nh4'],
            'eff_turb' => $row['ntu'],
            'eff_po4' => $row['po4'],
            'product_ph' => $row['prod_ph'],
            'product_cond' => $row['prod_cond'],
            'product_cl2t' => $row['prod_cl2'],
            'product_nh4t' =>  $row['prod_nh4'],
            'product_turb' => $row['prod_ntu'],
            'product_po4' => $row['prod_po4'],
            'lab_date' => Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['date'])),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }


    public function headingRow(): int
    {
        return 1;
    }

    public function uniqueBy()
    {
        return 'lab_date';
    }
}
