<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use Carbon\Carbon;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class LabController extends Controller
{
    
    public function index() {
    	
        $labs = Lab::latest()->get();

        $labCOND = Lab::orderBy('lab_date')->where('lab_date', '>', Carbon::now()->subDays(300))->pluck('eff_cond');
        $labCONDDay = Lab::orderBy('lab_date')->where('lab_date', '>', Carbon::now()->subDays(300))->pluck('lab_date')->map->format('m-d');

    	return view('labs.labs', ['labs' => $labs, 'labCOND' => $labCOND, 'labCONDDay' => $labCONDDay]);
    }

        
    public function create() {    
    	return view('labs.create');
    }


    public function store() {
    	$lab = request()->validate([
            'lab_date' => 'required|unique:labs',
            'eff_ph' => 'required|numeric',
            'eff_cl2t' => 'required|numeric',
            'eff_cl2f' => 'required|numeric',
            'eff_nh4t' => 'required|numeric',
            'eff_nh4f' => 'required|numeric',
            'eff_po4' => 'required|numeric',
            'eff_cond' => 'required|numeric',
            'eff_turb' => 'required|numeric',

            'pre_ph' => 'required|numeric',
            'pre_cl2t' => 'required|numeric',
            'pre_nh4t' => 'required|numeric',
            'pre_cond' => 'required|numeric',
            'pre_turb' => 'required|numeric',

            'post_ph' => 'required|numeric',
            'post_cl2t' => 'required|numeric',
            'post_nh4t' => 'required|numeric',
            'post_cond' => 'required|numeric',
            'post_po4' => 'required|numeric',
            'post_turb' => 'required|numeric',
        ]);
        
        if(request('lab_date') > Carbon::now()) {
            session()->flash('error_message', 'Can not have a future lab date selected');
            return back();
        }

        $lab = Lab::create([
            'user_id' => request()->user()->id,
            'lab_date' => request('lab_date'),
            'eff_ph' => request('eff_ph'),
            'eff_cl2t' => request('eff_cl2t'),
            'eff_cl2f' => request('eff_cl2f'),
            'eff_nh4t' => request('eff_nh4t'),
            'eff_nh4f' => request('eff_nh4f'),
            'eff_po4' => request('eff_po4'),
            'eff_cond' => request('eff_cond'),
            'eff_turb' => request('eff_turb'),

            'pre_ph' => request('pre_ph'),
            'pre_cl2t' => request('pre_cl2t'),
            'pre_nh4t' => request('pre_nh4t'),
            'pre_cond' => request('pre_cond'),
            'pre_turb' => request('pre_turb'),

            'post_ph' => request('post_ph'),
            'post_cl2t' => request('post_cl2t'),
            'post_nh4t' => request('post_nh4t'),
            'post_cond' => request('post_cond'),
            'post_po4' => request('post_po4'),
            'post_turb' => request('post_turb'),
        ]);
        
    	$lab->save();

	    return redirect('/labs');
    }

    public function edit($id) { 
        $lab = Lab::findOrFail($id);   
    	return view('labs.edit', ['lab' => $lab]);
    }



    public function update(Request $request, $id) {
    	$this->validate($request, [
            'lab_date' => 'required',
            'eff_ph' => 'required|numeric',
            'eff_cl2t' => 'required|numeric',
            'eff_cl2f' => 'required|numeric',
            'eff_nh4t' => 'required|numeric',
            'eff_nh4f' => 'required|numeric',
            'eff_po4' => 'required|numeric',
            'eff_cond' => 'required|numeric',
            'eff_turb' => 'required|numeric',

            'pre_ph' => 'required|numeric',
            'pre_cl2t' => 'required|numeric',
            'pre_nh4t' => 'required|numeric',
            'pre_cond' => 'required|numeric',
            'pre_turb' => 'required|numeric',

            'post_ph' => 'required|numeric',
            'post_cl2t' => 'required|numeric',
            'post_nh4t' => 'required|numeric',
            'post_cond' => 'required|numeric',
            'post_po4' => 'required|numeric',
            'post_turb' => 'required|numeric',
        ]);

        $lab = Lab::findOrFail($id);

        $lab->update([
            'user_id' => $lab->user_id,
            'lab_date' => request('lab_date'),
            'eff_ph' => request('eff_ph'),
            'eff_cl2t' => request('eff_cl2t'),
            'eff_cl2f' => request('eff_cl2f'),
            'eff_nh4t' => request('eff_nh4t'),
            'eff_nh4f' => request('eff_nh4f'),
            'eff_po4' => request('eff_po4'),
            'eff_cond' => request('eff_cond'),
            'eff_turb' => request('eff_turb'),

            'pre_ph' => request('pre_ph'),
            'pre_cl2t' => request('pre_cl2t'),
            'pre_nh4t' => request('pre_nh4t'),
            'pre_cond' => request('pre_cond'),
            'pre_turb' => request('pre_turb'),

            'post_ph' => request('post_ph'),
            'post_cl2t' => request('post_cl2t'),
            'post_nh4t' => request('post_nh4t'),
            'post_cond' => request('post_cond'),
            'post_po4' => request('post_po4'),
            'post_turb' => request('post_turb'),
        ]);

	    return redirect('/labs');
    }



}
