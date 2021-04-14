<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Exports\LabsExport;
use App\Imports\LabsImport;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LabController extends Controller
{
    
    public function index() {
    	return view('labs.labs');
    }

        
    public function create() {    
    	return view('labs.create');
    }


    public function store() {
    	$lab = request()->validate([
            'lab_date' => 'unique:labs',
            'eff_ph' => 'numeric',
            'eff_cl2t' => 'numeric',
            'eff_nh4t' => 'numeric',
            'eff_po4' => 'numeric',
            'eff_cond' => 'numeric',
            'eff_turb' => 'numeric',
            'product_ph' => 'numeric',
            'product_cl2t' => 'numeric',
            'product_nh4t' => 'numeric',
            'product_po4' => 'numeric',
            'product_cond' => 'numeric',
            'product_turb' => 'numeric',

            // 'pre_ph' => 'required|numeric',
            // 'pre_cl2t' => 'required|numeric',
            // 'pre_nh4t' => 'required|numeric',
            // 'pre_cond' => 'required|numeric',
            // 'pre_turb' => 'required|numeric',
            // 'post_ph' => 'required|numeric',
            // 'post_cl2t' => 'required|numeric',
            // 'post_nh4t' => 'required|numeric',
            // 'post_cond' => 'required|numeric',
            // 'post_po4' => 'required|numeric',
            // 'post_turb' => 'required|numeric',
        ]);
        
        $lab = Lab::create([
            'lab_date' => request('lab_date'),
            'eff_ph' => request('eff_ph'),
            'eff_cl2t' => request('eff_cl2t'),
            'eff_nh4t' => request('eff_nh4t'),
            'eff_po4' => request('eff_po4'),
            'eff_cond' => request('eff_cond'),
            'eff_turb' => request('eff_turb'),
            'product_ph' => request('product_ph'),
            'product_cl2t' => request('product_cl2t'),
            'product_nh4t' => request('product_nh4t'),
            'product_po4' => request('product_po4'),
            'product_cond' => request('product_cond'),
            'product_turb' => request('product_turb'),
            // 'pre_ph' => request('pre_ph'),
            // 'pre_cl2t' => request('pre_cl2t'),
            // 'pre_nh4t' => request('pre_nh4t'),
            // 'pre_cond' => request('pre_cond'),
            // 'pre_turb' => request('pre_turb'),
            // 'post_ph' => request('post_ph'),
            // 'post_cl2t' => request('post_cl2t'),
            // 'post_nh4t' => request('post_nh4t'),
            // 'post_cond' => request('post_cond'),
            // 'post_po4' => request('post_po4'),
            // 'post_turb' => request('post_turb'),
        ]);
        
    	$lab->save();

        $SubmitAndContinue = request('saveAndContinueToLab');

        if (isset($SubmitAndContinue)) {
            return redirect(route('labsCreate'));
        } else {
            return redirect('/labs');
        }
    }


    public function edit($id) { 
        $lab = Lab::findOrFail($id);
        
    	return view('labs.edit', ['lab' => $lab]);
    }


    public function update(Request $request, $id) {
    	$this->validate($request, [
            'lab_date' => 'required|unique:labs,lab_date,' . $id,
            'eff_ph' => 'numeric',
            'eff_cl2t' => 'numeric',
            'eff_nh4t' => 'numeric',
            'eff_po4' => 'numeric',
            'eff_cond' => 'numeric',
            'eff_turb' => 'numeric',
            'product_ph' => 'numeric',
            'product_cl2t' => 'numeric',
            'product_nh4t' => 'numeric',
            'product_po4' => 'numeric',
            'product_cond' => 'numeric',
            'product_turb' => 'numeric',
            // 'pre_ph' => 'required|numeric',
            // 'pre_cl2t' => 'required|numeric',
            // 'pre_nh4t' => 'required|numeric',
            // 'pre_cond' => 'required|numeric',
            // 'pre_turb' => 'required|numeric',
            // 'post_ph' => 'required|numeric',
            // 'post_cl2t' => 'required|numeric',
            // 'post_nh4t' => 'required|numeric',
            // 'post_cond' => 'required|numeric',
            // 'post_po4' => 'required|numeric',
            // 'post_turb' => 'required|numeric',
        ]);

        $lab = Lab::findOrFail($id);

        $lab->update([
            'lab_date' => request('lab_date'),
            'eff_ph' => request('eff_ph'),
            'eff_cl2t' => request('eff_cl2t'),
            'eff_nh4t' => request('eff_nh4t'),
            'eff_po4' => request('eff_po4'),
            'eff_cond' => request('eff_cond'),
            'eff_turb' => request('eff_turb'),
            'product_ph' => request('product_ph'),
            'product_cl2t' => request('product_cl2t'),
            'product_nh4t' => request('product_nh4t'),
            'product_po4' => request('product_po4'),
            'product_cond' => request('product_cond'),
            'product_turb' => request('product_turb'),
            // 'pre_ph' => request('pre_ph'),
            // 'pre_cl2t' => request('pre_cl2t'),
            // 'pre_nh4t' => request('pre_nh4t'),
            // 'pre_cond' => request('pre_cond'),
            // 'pre_turb' => request('pre_turb'),
            // 'post_ph' => request('post_ph'),
            // 'post_cl2t' => request('post_cl2t'),
            // 'post_nh4t' => request('post_nh4t'),
            // 'post_cond' => request('post_cond'),
            // 'post_po4' => request('post_po4'),
            // 'post_turb' => request('post_turb'),
        ]);

	    return redirect('/labs');
    }


    public function export() {
        $data = request('excel_data');
        $from = Carbon::parse(request('from'));
        $to = Carbon::parse(request('to'));

        if ($data === 'all_samples') { 
            return (new LabsExport($data, $from, $to))->download('all-lab.xlsx');
        } else if ($data === 'product_samples') {
            return (new LabsExport($data, $from, $to))->download('lab-product.xlsx');
        } else if ($data === 'eff_samples') {
            return (new LabsExport($data, $from, $to))->download('lab-effluent.xlsx');
        } else if ($data === 'select_dates') {
            return (new LabsExport($data, $from, $to))->download('lab-selected-dates.xlsx');
        } else {
            return back();
        }
    }


    public function import(Request $request) 
    {
        $file = $request->file('file');

        Excel::import(new LabsImport, $file);
        
        return back()->with('success', 'Lab file imported successfully!');
    }

}
