<?php

namespace App\Exports;

use App\Models\Well;
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
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;


class WellsExport implements FromQuery, WithMapping, WithHeadings, WithColumnFormatting, WithColumnWidths, WithStyles, WithEvents {

    use Exportable;

    
    public function __construct(string $type, $from, $to) {
        $this->type = $type;
        $this->from = $from;
        $this->to = $to;
    }

    public function query()
    {
        if ($this->type === 'all_wells') {
            return Well::query()->orderBy('date', 'desc');
        } elseif ($this->type === 'select_dates') {
            return Well::query()->whereBetween('date', [$this->from, $this->to]);  
        }
    }

    public function map($well): array
    {
        if($this->type === 'all_wells') {
            return [
                'Well ' . $well->well_id,
                $well->temp,
                $well->ph,
                $well->do,
                $well->cond,
                $well->ntu,
                $well->grab_time,
                Date::dateTimeToExcel(Carbon::parse($well->date)),
            ];
        } elseif($this->type === 'select_dates') {
            return [
                'Well ' . $well->well_id,
                $well->temp,
                $well->ph,
                $well->do,
                $well->cond,
                $well->ntu,
                $well->grab_time,
                Date::dateTimeToExcel(Carbon::parse($well->date)),
            ];
        }
    }

    public function headings(): array {
        if($this->type === 'all_wells') {
            return [
                'Well #',
                'Temp',
                'pH',
                'D.O.',
                'Cond',
                'NTU',
                'Collection Time',
                'Collection Date'
            ];
        } elseif ($this->type === 'select_dates') {
            return [
                'Well #',
                'Temp',
                'pH',
                'D.O.',
                'Cond',
                'NTU',
                'Collection Time',
                'Collection Date'
            ];
        } 
    }


    public function columnFormats(): array {
        if($this->type === 'all_wells') {
            return [
                'H' => NumberFormat::FORMAT_DATE_XLSX14,
            ];
        } elseif($this->type === 'select_dates') {
            return [
                'H' => NumberFormat::FORMAT_DATE_XLSX14,
            ];
        }
    }


    public function columnWidths(): array {
        if($this->type === 'all_wells') {
            return [
                'G' => 16,
                'H' => 16,
            ];
        } elseif ($this->type === 'select_dates') {
            return [
                'G' => 16,
                'H' => 16,
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
                if($this->type === 'all_wells') {
                    $event->sheet->setCellValue('A1', 'Production Well Results');
                } elseif ($this->type === 'select_dates') {
                    $event->sheet->setCellValue('A1', 'Production Well Results With Dates: '. $this->from->format('m-d-Y') .' / '. $this->to->format('m-d-Y'));
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
