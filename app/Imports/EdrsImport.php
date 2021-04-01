<?php

namespace App\Imports;

use App\Models\EDR;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EdrsImport implements ToModel, WithHeadingRow 
{

    use Importable;

    public function model(array $row)
    {
        return new EDR([
            'edr_id' => $row['unit'],
            'polarity' => $row['polarity'],
            'run_hours' => $row['life_time_run_hours'],
            'feed_cl2' => $row['feed_chlorine_residual'],
            'feed_ph' => $row['feed_ph'],
            'feed_temp' => $row['feed_tempature'],
            'feed_cond' => $row['feed_conductivity'],
            'product_cond' => $row['product_conductivity'],
            'concen_cond' =>$row['concentrate_blowdown_cond'],
            'electrode_inlet_ph' => $row['electrode_inlet_ph'],
            'post_cart_psi' => $row['post_cartridge_psi'],
            'stack_inlet_psi' => $row['stack_inlet_psi'],
            'inlet_press_dif' =>$row['inlet_pressure_diff'],
            'outlet_press_dif' =>$row['outlet_pressure_diff'],
            'dil_stack_outlet_psi' =>$row['dilute_stack_outlet_psi'],
            'conc_stack_inlet_psi' => $row['concentrate_stack_inlet_psi'],
            'feed_inlet_flow' =>$row['feed_inlet_flow'],
            'dil_outlet_flow' =>$row['dilute_outlet_product_flow'],
            'cbd_flow' => $row['cbd_flow'],
            'conc_pump_kw' => $row['concentrate_pump_kw'],
            'conc_pump_speed' =>  $row['concentrate_pump_speed'],
            'feed_valve_pos' =>  $row['feed_valve_position'],
            'electrode_dosage' =>  $row['electrode_acid_dosage'],
            'antiscalant_dosage' =>  $row['antiscalant_dosage'],
            'osp_time' => $row['off_spec_time'],
            'date' => $row['date_sampled'],
        ]);
    }

    public function headingRow(): int
    {
        return 3;
    }

}
