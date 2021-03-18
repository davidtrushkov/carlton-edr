<?php

namespace App\Exports;

use App\Models\EDR;
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

class EdrsExport implements FromQuery, WithHeadings, WithColumnFormatting, WithMapping, WithColumnWidths, WithStyles, WithEvents, ShouldAutoSize {

    use Exportable;

    
    public function __construct(int $EDid, string $type, $from, $to) {
        $this->EDid = $EDid;
        $this->type = $type;
        $this->from = $from;
        $this->to = $to;
    }

    
    public function query() {
        if($this->type === 'all_data') {
            return EDR::select('edr_id', 'date', 'polarity', 'run_hours', 'feed_cl2', 'feed_ph', 'feed_cond', 'feed_temp', 'product_cond', 'concen_cond', 'electrode_inlet_ph',
                                'post_cart_psi', 'stack_inlet_psi', 'inlet_press_dif', 'outlet_press_dif', 'dil_stack_outlet_psi', 'conc_stack_inlet_psi', 'feed_inlet_flow', 
                                'dil_outlet_flow', 'cbd_flow', 'conc_pump_kw', 'conc_pump_speed', 'feed_valve_pos', 'electrode_dosage', 'antiscalant_dosage', 'osp_time')
                                ->where('edr_id', '=', $this->EDid)->orderBy('date', 'desc');
        } elseif ($this->type === 'select_dates') {
            return EDR::query()->whereBetween('date', [$this->from, $this->to])->orderBy('date', 'desc');  
        }
    }


    public function map($edr): array
    {
        if($this->type === 'all_data' || $this->type === 'select_dates') {
            return [
                $edr->edr_id,
                $edr->date,
                $edr->polarity,
                $edr->run_hours,
                $edr->feed_cl2,
                $edr->feed_ph,
                $edr->feed_cond,
                $edr->feed_temp,
                $edr->product_cond,
                $edr->concen_cond,
                $edr->electrode_inlet_ph,
                $edr->post_cart_psi,
                $edr->stack_inlet_psi,
                $edr->inlet_press_dif,
                $edr->outlet_press_dif,
                $edr->dil_stack_outlet_psi,
                $edr->conc_stack_inlet_psi,
                $edr->feed_inlet_flow,
                $edr->dil_outlet_flow,
                $edr->cbd_flow,
                $edr->conc_pump_kw,
                $edr->conc_pump_speed,
                $edr->feed_valve_pos,
                $edr->electrode_dosage,
                $edr->antiscalant_dosage,
                $edr->osp_time,
                //$edr->date->format('m-d-Y'),
                //Date::dateTimeToExcel(Carbon::parse($edr->created_at)),
            ];
        }
    }


    public function headings(): array {

        if($this->type === 'all_data' || $this->type === 'select_dates') {
            return [
                'Unit #',
                'Date Sampled',
                'Polarity',
                'Life Time Run Hours',
                'Feed Chlorine Residual',
                'Feed pH',
                'Feed Tempature',
                'Feed Conductivity',
                'Product Conductivity',
                'Concentrate Blowdown Cond',
                'Electrode Inlet pH',
                'Post Cartridge PSI',
                'Stack Inlet PSI',
                'Inlet Pressure Diff',
                'Outlet Pressure DIff',
                'Dilute Stack Outlet PSI',
                'Concentrate Stack Inlet PSI',
                'Feed Inlet Flow',
                'Dilute Outlet Product Flow',
                'CBD Flow',
                'Concentrate Pump kW',
                'Concentrate Pump Speed %',
                'Feed Valve Position %', 
                'Electrode Acid Dosage',
                'Antiscalant Dosage',
                'Off Spec Time'
            ];
        }
    }


    public function columnFormats(): array {
        if($this->type === 'all_data' || $this->type === 'select_dates') {
            return [
                'B' => NumberFormat::FORMAT_DATE_XLSX14,
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
                if($this->type === 'all_data') {
                    $event->sheet->setCellValue('A1', 'EDR Results');
                } elseif ($this->type === 'select_dates') {
                    $event->sheet->setCellValue('A1', 'EDR Results With Dates: '. $this->from->format('m-d-Y') .' / '. $this->to->format('m-d-Y'));
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
