<?php

namespace App\Exports;

use App\Models\Lab;
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
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class LabsExport implements FromQuery, WithHeadings, WithColumnFormatting, WithMapping, WithColumnWidths, WithStyles, WithEvents {

    use Exportable;

    
    public function __construct(string $type) {
        $this->type = $type;
    }


    public function query() {
        if($this->type === 'eff_samples') {
            return Lab::select('id', 'eff_ph', 'eff_cond', 'eff_cl2t', 'eff_cl2f', 'eff_nh4t', 'eff_nh4f', 'eff_turb', 'eff_po4', 'created_at');
        } elseif ($this->type === 'pr_pre_samples') {
            return Lab::select('id', 'pre_ph', 'pre_cond', 'pre_cl2t', 'pre_nh4t', 'pre_turb', 'created_at');
        } elseif ($this->type === 'pr_post_samples') {
            return Lab::select('id', 'post_ph', 'post_cond', 'post_cl2t', 'post_nh4t', 'post_turb', 'post_po4', 'created_at');
        } elseif ($this->type === 'all_samples') {
            return Lab::select('id', 'eff_ph', 'eff_cond', 'eff_cl2t', 'eff_cl2f', 'eff_nh4t', 'eff_nh4f', 'eff_turb', 'eff_po4', 'created_at',
                                'pre_ph', 'pre_cond', 'pre_cl2t', 'pre_nh4t', 'pre_turb', 'post_ph', 'post_cond', 'post_cl2t', 'post_nh4t', 'post_turb', 'post_po4');
        }
    }


    public function map($lab): array
    {
        if($this->type === 'all_samples') {
            return [
                $lab->id,
                $lab->eff_ph,
                $lab->eff_cond,
                $lab->eff_cl2t,
                $lab->eff_cl2f,
                $lab->eff_nh4t,
                $lab->eff_nh4f,
                $lab->eff_turb,
                $lab->eff_po4,
                $lab->pre_ph,
                $lab->pre_cond,
                $lab->pre_cl2t,
                $lab->pre_nh4t,
                $lab->pre_turb,
                $lab->post_ph,
                $lab->post_cond,
                $lab->post_cl2t,
                $lab->post_nh4t,
                $lab->post_turb,
                $lab->post_po4,
                Date::dateTimeToExcel($lab->created_at),
            ];
        } elseif ($this->type === 'eff_samples') {
            return [
                $lab->id,
                $lab->eff_ph,
                $lab->eff_cond,
                $lab->eff_cl2t,
                $lab->eff_cl2f,
                $lab->eff_nh4t,
                $lab->eff_nh4f,
                $lab->eff_turb,
                $lab->eff_po4,
                Date::dateTimeToExcel($lab->created_at),
            ];
        } elseif ($this->type === 'pr_pre_samples') {
            return [
                $lab->id,
                $lab->pre_ph,
                $lab->pre_cond,
                $lab->pre_cl2t,
                $lab->pre_nh4t,
                $lab->pre_turb,
                Date::dateTimeToExcel($lab->created_at),
            ];
        } elseif ($this->type === 'pr_post_samples') {
            return [
                $lab->id,
                $lab->post_ph,
                $lab->post_cond,
                $lab->post_cl2t,
                $lab->post_nh4t,
                $lab->post_turb,
                $lab->post_po4,
                Date::dateTimeToExcel($lab->created_at),
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
                'CL2-F',
                'NH4-T',
                'NH4-F',
                'TURB',
                'PO4',
                'Created'
            ];
        } 
        
        if ($this->type === 'pr_pre_samples') {
            return [
                'ID',
                'PH',
                'COND',
                'CL2-T',
                'NH4-T',
                'TURB',
                'Created'
            ];
        }

        if ($this->type === 'pr_post_samples') {
            return [
                'ID',
                'PH',
                'COND',
                'CL2-T',
                'NH4-T',
                'TURB',
                'PO4',
                'Created'
            ];
        }

        if($this->type === 'all_samples') {
            return [
                'ID',
                'EFF-PH',
                'EFF-COND',
                'EFF-CL2-T',
                'EFF-CL2-F',
                'EFF-NH4-T',
                'EFF-NH4-F',
                'EFF-TURB',
                'EFF-PO4',
                'PRE-PH',
                'PRE-COND',
                'PRE-CL2-T',
                'PRE-NH4-T',
                'PRE-TURB',
                'POST-PH',
                'POST-COND',
                'POST-CL2-T',
                'POST-NH4-T',
                'POST-TURB',
                'POST-PO4',
                'Created'
            ];
        } 
    }


    public function columnFormats(): array {
        if($this->type === 'all_samples') {
            return [
                'U' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            ];
        } elseif ($this->type === 'eff_samples') {
            return [
                'J' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            ];
        } elseif ($this->type === 'pr_pre_samples') {
            return [
                'G' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            ];
        } elseif ($this->type === 'pr_post_samples') {
            return [
                'H' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            ];
        }
    }


    public function columnWidths(): array {
        if($this->type === 'all_samples') {
            return [
                'U' => 15,
            ];
        } elseif ($this->type === 'eff_samples') {
            return [
                'J' => 15,
            ];
        } elseif ($this->type === 'pr_pre_samples') {
            return [
                'G' => 15,
            ];
        } elseif ($this->type === 'pr_post_samples') {
            return [
                'H' => 15,
            ];
        }
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
                } elseif ($this->type === 'eff_samples') {
                    $event->sheet->setCellValue('A1', 'Effluent Lab Results');
                } elseif ($this->type === 'pr_pre_samples') {
                    $event->sheet->setCellValue('A1', 'Peace River Pre Lab Results');
                } elseif ($this->type === 'pr_post_samples') {
                    $event->sheet->setCellValue('A1', 'Peace River Post Lab Results');
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
