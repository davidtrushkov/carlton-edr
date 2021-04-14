<?php

namespace App\Exports;

use App\Models\Lab;
use Carbon\Carbon;
use \Maatwebsite\Excel\Sheet;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Events\BeforeSheet;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class LabsExport implements FromQuery, WithHeadings, WithColumnFormatting, WithMapping, WithColumnWidths, WithStyles, WithEvents, ShouldAutoSize {

    use Exportable;

    
    public function __construct(string $type, $from, $to) {
        $this->type = $type;
        $this->from = $from;
        $this->to = $to;
    }


    public function query() {
        if($this->type === 'eff_samples') {
            return Lab::select('id', 'eff_ph', 'eff_cond', 'eff_cl2t', 'eff_nh4t', 'eff_turb', 'eff_po4', 'lab_date', 'created_at')->orderBy('lab_date', 'desc');
        } elseif($this->type === 'product_samples') {
            return Lab::select('id', 'product_ph', 'product_cond', 'product_cl2t', 'product_nh4t', 'product_turb', 'product_po4', 'lab_date', 'created_at')->orderBy('lab_date', 'desc');
        } elseif ($this->type === 'all_samples') {
            return Lab::select('id', 'product_ph', 'product_cond', 'product_cl2t', 'product_nh4t', 'product_turb', 'product_po4', 
                                'eff_ph', 'eff_cond', 'eff_cl2t', 'eff_nh4t', 'eff_turb', 'eff_po4', 'lab_date', 'created_at')->orderBy('lab_date', 'desc');
        } elseif ($this->type === 'select_dates') {
            return Lab::query()->whereBetween('lab_date', [$this->from, $this->to])->orderBy('lab_date', 'desc');  
        }
    }


    public function map($lab): array
    {
        if($this->type === 'all_samples' || $this->type === 'select_dates') {
            return [
                $lab->id,
                $lab->product_ph,
                $lab->product_cond,
                $lab->product_cl2t,
                $lab->product_nh4t,
                $lab->product_turb,
                $lab->product_po4,
                $lab->eff_ph,
                $lab->eff_cond,
                $lab->eff_cl2t,
                $lab->eff_nh4t,
                $lab->eff_turb,
                $lab->eff_po4,
                $lab->lab_date->format('m-d-Y'),
                Date::dateTimeToExcel(Carbon::parse($lab->created_at)),
            ];
        } elseif ($this->type === 'product_samples') {
            return [
                $lab->id,
                $lab->product_ph,
                $lab->product_cond,
                $lab->product_cl2t,
                $lab->product_nh4t,
                $lab->product_turb,
                $lab->product_po4,
                $lab->lab_date->format('m-d-Y'),
                Date::dateTimeToExcel(Carbon::parse($lab->created_at)),
            ];
        } elseif ($this->type === 'eff_samples') {
            return [
                $lab->id,
                $lab->eff_ph,
                $lab->eff_cond,
                $lab->eff_cl2t,
                $lab->eff_nh4t,
                $lab->eff_turb,
                $lab->eff_po4,
                $lab->lab_date->format('m-d-Y'),
                Date::dateTimeToExcel(Carbon::parse($lab->created_at)),
            ];
        }
    }


    public function headings(): array {
        if($this->type === 'eff_samples') {
            return [
                'ID',
                'PH',
                'COND',
                'CL2-T',
                'NH4-T',
                'TURB',
                'PO4',
                'Lab Date',
                'Created'
            ];
        } 
        
        if($this->type === 'product_samples') {
            return [
                'ID',
                'PH',
                'COND',
                'CL2-T',
                'NH4-T',
                'TURB',
                'PO4',
                'Lab Date',
                'Created'
            ];
        } 

        if($this->type === 'all_samples' || $this->type === 'select_dates') {
            return [
                'ID',
                'PRODUCT-PH',
                'PRODUCT-COND',
                'PRODUCT-CL2-T',
                'PRODUCT-NH4-T',
                'PRODUCT-TURB',
                'PRODUCT-PO4',
                'EFF-PH',
                'EFF-COND',
                'EFF-CL2-T',
                'EFF-NH4-T',
                'EFF-TURB',
                'EFF-PO4',
                'Lab Date',
                'Created'
            ];
        } 
    }


    public function columnFormats(): array {
        if($this->type === 'all_samples' || $this->type === 'select_dates') {
            return [
                'O' => NumberFormat::FORMAT_DATE_XLSX14,
            ];
        } elseif ($this->type === 'product_samples') {
            return [
                'I' => NumberFormat::FORMAT_DATE_XLSX14,
            ];
        } elseif ($this->type === 'eff_samples') {
            return [
                'I' => NumberFormat::FORMAT_DATE_XLSX14,
            ];
        }
    }


    public function columnWidths(): array {
            return [
                'A' => 10,
            ];
    }

    public function styles(Worksheet $sheet) {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],
            2    => ['font' => ['bold' => true]],
        ];
    }


    public function registerEvents(): array {

        Sheet::macro('styleCells', function (Sheet $sheet, string $cellRange, array $style) {
            $sheet->getDelegate()->getStyle($cellRange)->applyFromArray($style);
        });

        return [
            BeforeSheet::class  => function(BeforeSheet $event) {
                if($this->type === 'all_samples') {
                    $event->sheet->setCellValue('A1', 'Lab Results');
                } elseif ($this->type === 'product_samples') {
                    $event->sheet->setCellValue('A1', 'Product Lab Results');
                } elseif ($this->type === 'eff_samples') {
                    $event->sheet->setCellValue('A1', 'Effluent Lab Results');
                } elseif ($this->type === 'select_dates') {
                    $event->sheet->setCellValue('A1', 'Lab Results With Dates: '. $this->from->format('m-d-Y') .' / '. $this->to->format('m-d-Y'));
                }
            },
            AfterSheet::class  => function(AfterSheet $event) {
                $event->sheet->insertNewRowBefore(2, 1);
                $event->sheet->styleCells(
                    'A1:H1',
                    [ 
                        'font' => [
                            'size' => 16
                        ]
                    ]
                );
            }
        ];
    }
    
}
