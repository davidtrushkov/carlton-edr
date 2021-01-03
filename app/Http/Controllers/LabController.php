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

        $labCOND = Lab::orderBy('lab_date')->where('lab_date', '>', Carbon::now()->subDays(30))->pluck('eff_cond');
        $labCONDDay = Lab::orderBy('lab_date')->where('lab_date', '>', Carbon::now()->subDays(30))->pluck('lab_date')->map->format('m-d');

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
        ]);
        
    	$lab->save();

	    return redirect('/labs');
    }


}
