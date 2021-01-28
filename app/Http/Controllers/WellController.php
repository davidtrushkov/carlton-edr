<?php

namespace App\Http\Controllers;

use App\Exports\WellsExport;
use Illuminate\Http\Request;
use App\Models\Well;
use Carbon\Carbon;
use DateTime;

class WellController extends Controller
{
    
    public function index() {
        $wells = Well::get()->groupBy(function($d) {
            return Carbon::parse($d->date)->format('F, Y');
        });

    	return view('wells.wells', ['wells' => $wells]);
    }


    public function getMonthDates() {
        $start = Carbon::now()->startOfMonth();
        $end = new Carbon('last day of this month');
        return [$start, $end];
    }
    

    public function create() {    
        // Get all wells entered for the current month if any
        $wells = Well::whereBetween('date', [$this->getMonthDates()])->get();

    	return view('wells.create', compact('wells'));
    }


    public function edit($id) { 
        $well = Well::findOrFail($id);
 
        $time = new DateTime($well->date);

        if ($time > Carbon::now()->startOfMonth() &&  $time < new Carbon('last day of this month')) {
            // Get all wells entered for the current month if any
            $wells = Well::whereBetween('date', [$this->getMonthDates()])->get();
        } else {
            $wells = 0;
        }

    	return view('wells.edit', ['well' => $well, 'wells' => $wells]);
    }


    public function store(Request $request) {
    	request()->validate([
            'well_id' => 'required',
            'service' => '',
            'temp' => 'required_without:service',
            'ph' => 'required_without:service',
            'do' => 'required_without:service',
            'cond' => 'required_without:service',
            'ntu' => 'required_without:service',
            'date' => 'required_without:service',
            'grab_time' => 'required_without:service'
        ]);

        // Get the date from the "datepicker" in the form
        $time = new DateTime(request('date'));

        // Get the start and end of the month from the choosen date from datepicker above
        $startOfAMonth = Carbon::parse($time)->startOfMonth();
        $endOfAMonth = Carbon::parse($time)->endOfMonth();

        // Get a;; the well IDs that are between the start and end of that particular month
        $wells = Well::whereBetween('date', [$startOfAMonth, $endOfAMonth])->get();
        $Wellids = $wells->pluck('well_id')->flatten();

        // If there are any wells for that choosen month that exist, flash and error message
        if ($Wellids->contains(request('well_id')) && $time >= $startOfAMonth && $time <= $endOfAMonth) {
            session()->flash('error_message', 'Well ' . request('well_id') . ' has already been inserted for the month you chose');
            return back()->withInput();
        }
    
        Well::create($request->except(['save', 'saveAndContinue']));

        $SubmitAndContinue = request('saveAndContinue');

        if (isset($SubmitAndContinue)) {
            return redirect(route('wellsCreate'));
        } else {
            return redirect('/wells');
        }
    }


    public function update($id, Request $request) {
    	request()->validate([
            'well_id' => 'required',
            'service' => '',
            'temp' => 'required_without:service',
            'ph' => 'required_without:service',
            'do' => 'required_without:service',
            'cond' => 'required_without:service',
            'ntu' => 'required_without:service',
            'date' => 'required_without:service',
            'grab_time' => 'required_without:service'
        ]);

        $well = Well::findOrFail($id);

        if($request->service === null) {
            $well->service = 0;
        }
        
        // Get the date from the "datepicker" in the form
        $time = new DateTime(request('date'));

        // Get the start and end of the month from the choosen date from datepicker above
        $startOfAMonth = Carbon::parse($time)->startOfMonth();
        $endOfAMonth = Carbon::parse($time)->endOfMonth();

        // Get all the well IDs that are between the start and end of that particular month "excluding the current ID for this particluar ID"
        $wells = Well::whereBetween('date', [$startOfAMonth, $endOfAMonth])->get();
        $Wellids = $wells->where('id', '!=', $well->id)->pluck('well_id')->flatten();

        // If there are any wells for that choosen month that exist, flash and error message
        if ($Wellids->contains(request('well_id')) && $time >= $startOfAMonth && $time <= $endOfAMonth) {
            session()->flash('error_message', 'Well ' . request('well_id') . ' has already been inserted for the month you chose');
            return back()->withInput();
        }
       
        
        $well->update($request->all());

	    return redirect('/wells')->with('success', 'Well updated successfully');
    }


    public function export() {
        $data = request('well_data');
        $from = Carbon::parse(request('from'));
        $to = Carbon::parse(request('to'));

        if ($data === 'all_wells') { 
            return (new WellsExport($data, $from, $to))->download('production-wells-all.xlsx');
        } elseif ($data === 'select_dates') {
            return (new WellsExport($data, $from, $to))->download('production-wells-dates.xlsx');
         } else {
            return back();
        }
    }

}