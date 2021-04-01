<?php

namespace App\Http\Controllers;

use App\Exports\EdrsExport;
use App\Imports\EdrsImport;
use App\Models\EDR;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EDRDataController extends Controller
{
        
    public function index() {
    	return view('edrs.index');
    }

    public function getEDR($id) {
      
        $edrID = EDR::where('edr_id', $id)->firstOrFail();
        $edrCount = EDR::where('edr_id', $edrID->edr_id)->count();

        $edr = EDR::get()->groupBy(function($d) {
            return Carbon::parse($d->date)->format('F, Y');
        });
       
        $edrLatest = EDR::where('edr_id', $id)->latest('date')->first();
      
        return view('edrs.show', ['edr' => $edr, 'edrID' => $edrID, 'edrLatest' => $edrLatest, 'edrCount' => $edrCount]);
    }

    public function create() {
        return view('edrs.create');
    }

    public function store() {
        $edr = request()->validate([
            'edr_id' => 'required',
            'date' => 'required',
            'polarity' => 'required',
            'run_hours' => 'required|numeric',
            'feed_cl2' => 'required|numeric',
            'feed_ph' => 'required|numeric',
            'feed_temp' => 'required|numeric',
            'feed_cond' => 'required|numeric',
            'product_cond' => 'required|numeric',
            'concen_cond' => 'required|numeric',
            'electrode_inlet_ph' => 'required|numeric',
            'post_cart_psi' => 'required|numeric',
            'stack_inlet_psi' => 'required|numeric',
            'inlet_press_dif' => 'required|numeric',
            'outlet_press_dif' => 'required|numeric',
            'dil_stack_outlet_psi' => 'required|numeric',
            'conc_stack_inlet_psi' => 'required|numeric',
            'feed_inlet_flow' => 'required|numeric',
            'dil_outlet_flow' => 'required|numeric',
            'cbd_flow' => 'required|numeric',
            'conc_pump_kw' => 'required|numeric',
            'conc_pump_speed' => 'required|numeric',
            'feed_valve_pos' => 'required|numeric',
            'electrode_dosage' => 'required|numeric',
            'antiscalant_dosage' => 'required|numeric',
            'osp_time' => 'required'
        ]);

       
        
        $edr = EDR::create([
            'edr_id' => request('edr_id'),
            'date' => request('date'),
            'polarity' => request('polarity'),
            'run_hours' => request('run_hours'),
            'feed_cl2' => request('feed_cl2'),
            'feed_ph' => request('feed_ph'),
            'feed_cond' => request('feed_cond'),
            'feed_temp' => request('feed_temp'),
            'product_cond' => request('product_cond'),
            'concen_cond' => request('concen_cond'),
            'electrode_inlet_ph' => request('electrode_inlet_ph'),
            'post_cart_psi' => request('post_cart_psi'),
            'stack_inlet_psi' => request('stack_inlet_psi'),
            'inlet_press_dif' => request('inlet_press_dif'),
            'outlet_press_dif' => request('outlet_press_dif'),
            'dil_stack_outlet_psi' => request('dil_stack_outlet_psi'),
            'conc_stack_inlet_psi' => request('conc_stack_inlet_psi'),
            'feed_inlet_flow' => request('feed_inlet_flow'),
            'dil_outlet_flow' => request('dil_outlet_flow'),
            'cbd_flow' => request('cbd_flow'),
            'conc_pump_kw' => request('conc_pump_kw'),
            'conc_pump_speed' => request('conc_pump_speed'),
            'feed_valve_pos' => request('feed_valve_pos'),
            'electrode_dosage' => request('electrode_dosage'),
            'antiscalant_dosage' => request('antiscalant_dosage'),
            'osp_time' => request('osp_time'),
        ]);
        
    	$edr->save();

        return redirect('/edrs');
    }


    public function edit($id) { 
        $edr = EDR::findOrFail($id);
        
    	return view('edrs.edit', ['edr' => $edr]);
    }


    public function update(Request $request, $id) {
    	$this->validate($request, [
            'edr_id' => 'required',
            'date' => 'required',
            'polarity' => 'required',
            'run_hours' => 'required|numeric',
            'feed_cl2' => 'required|numeric',
            'feed_ph' => 'required|numeric',
            'feed_temp' => 'required|numeric',
            'feed_cond' => 'required|numeric',
            'product_cond' => 'required|numeric',
            'concen_cond' => 'required|numeric',
            'electrode_inlet_ph' => 'required|numeric',
            'post_cart_psi' => 'required|numeric',
            'stack_inlet_psi' => 'required|numeric',
            'inlet_press_dif' => 'required|numeric',
            'outlet_press_dif' => 'required|numeric',
            'dil_stack_outlet_psi' => 'required|numeric',
            'conc_stack_inlet_psi' => 'required|numeric',
            'feed_inlet_flow' => 'required|numeric',
            'dil_outlet_flow' => 'required|numeric',
            'cbd_flow' => 'required|numeric',
            'conc_pump_kw' => 'required|numeric',
            'conc_pump_speed' => 'required|numeric',
            'feed_valve_pos' => 'required|numeric',
            'electrode_dosage' => 'required|numeric',
            'antiscalant_dosage' => 'required|numeric',
            'osp_time' => 'required'
        ]);

        $edr = EDR::findOrFail($id);

        $edr->update([
            'edr_id' => request('edr_id'),
            'date' => request('date'),
            'polarity' => request('polarity'),
            'run_hours' => request('run_hours'),
            'feed_cl2' => request('feed_cl2'),
            'feed_ph' => request('feed_ph'),
            'feed_cond' => request('feed_cond'),
            'feed_temp' => request('feed_temp'),
            'product_cond' => request('product_cond'),
            'concen_cond' => request('concen_cond'),
            'electrode_inlet_ph' => request('electrode_inlet_ph'),
            'post_cart_psi' => request('post_cart_psi'),
            'stack_inlet_psi' => request('stack_inlet_psi'),
            'inlet_press_dif' => request('inlet_press_dif'),
            'outlet_press_dif' => request('outlet_press_dif'),
            'dil_stack_outlet_psi' => request('dil_stack_outlet_psi'),
            'conc_stack_inlet_psi' => request('conc_stack_inlet_psi'),
            'feed_inlet_flow' => request('feed_inlet_flow'),
            'dil_outlet_flow' => request('dil_outlet_flow'),
            'cbd_flow' => request('cbd_flow'),
            'conc_pump_kw' => request('conc_pump_kw'),
            'conc_pump_speed' => request('conc_pump_speed'),
            'feed_valve_pos' => request('feed_valve_pos'),
            'electrode_dosage' => request('electrode_dosage'),
            'antiscalant_dosage' => request('antiscalant_dosage'),
            'osp_time' => request('osp_time'),
        ]);

	    return redirect('/edrs');
    }


    public function export($id) {
        $edrID = EDR::where('edr_id', $id)->firstOrFail();
        $EDid = $edrID->edr_id;
        $data = request('excel_data');
        $from = Carbon::parse(request('from'));
        $to = Carbon::parse(request('to'));

        if ($data === 'all_data') { 
            return (new EdrsExport($EDid, $data, $from, $to))->download('all-edr.xlsx');
        } else if ($data === 'select_dates') {
            return (new EdrsExport($EDid, $data, $from, $to))->download('edr-selected-dates.xlsx');
        } else {
            return back();
        }
    }


    public function import(Request $request) 
    {
        $file = $request->file('file');

        Excel::import(new EdrsImport, $file);
        
        return back()->with('success', 'Excel file imported successfully!');
    }

}
