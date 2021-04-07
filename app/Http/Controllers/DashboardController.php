<?php

namespace App\Http\Controllers;

use App\Models\EDR;
use App\Models\Lab;
use App\Models\Well;
use Carbon\Carbon;

class DashboardController extends Controller
{
    
    public function index() {

        $carbon = Carbon::now()->subMonth(1);

        if(request('sort_date')) {
            $carbon = Carbon::now()->subMonth((int)request('sort_date'));
        }

        $labDate = 'lab_date';
        $WellDate = 'date';
        $limit = 200;

        $labEffCL2T =  Lab::orderBy($labDate)->where($labDate, '>', $carbon)->limit($limit)->pluck('eff_cl2t');
        $labPreCL2T =  Lab::orderBy($labDate)->where($labDate, '>', $carbon)->limit($limit)->pluck('pre_cl2t');
        $labPostCL2T = Lab::orderBy($labDate)->where($labDate, '>', $carbon)->limit($limit)->pluck('post_cl2t');
        $labDates =  Lab::orderBy($labDate)->where($labDate, '>', $carbon)->limit($limit)->pluck($labDate)->map->format('m-y');

 
        $edrNum2 =  EDR::where('edr_id', 2)->pluck('run_hours')->max();
        $edrNum4 =  EDR::where('edr_id', 4)->pluck('run_hours')->max();
        $edrNum6 =  EDR::where('edr_id', 6)->pluck('run_hours')->max();
        $edrNum8 =  EDR::where('edr_id', 8)->pluck('run_hours')->max();
        $edrNum10 =  EDR::where('edr_id', 10)->pluck('run_hours')->max();
        
        if(request('wellId')) {
            $wellID = request('wellId');
            $wellCOND =  Well::orderBy($WellDate)->where($WellDate, '>', $carbon)->where('well_id', '=', $wellID)->where('service', false)->limit($limit)->pluck('cond');
            $wellNTU =   Well::orderBy($WellDate)->where($WellDate, '>', $carbon)->where('well_id', '=', $wellID)->where('service', false)->limit($limit)->pluck('ntu');
            $wellDO =    Well::orderBy($WellDate)->where($WellDate, '>', $carbon)->where('well_id', '=', $wellID)->where('service', false)->limit($limit)->pluck('do');
            $wellPH =    Well::orderBy($WellDate)->where($WellDate, '>', $carbon)->where('well_id', '=', $wellID)->where('service', false)->limit($limit)->pluck('ph');
            $wellDates = Well::orderBy($WellDate)->where($WellDate, '>', $carbon)->where('well_id', '=', $wellID)->where('service', false)->limit($limit)->pluck($WellDate)->map->format('m-y');
        } else {
            $wellCOND =  Well::orderBy($WellDate)->where($WellDate, '>', $carbon)->where('service', false)->limit($limit)->pluck('cond');
            $wellNTU =   Well::orderBy($WellDate)->where($WellDate, '>', $carbon)->limit($limit)->where('service', false)->pluck('ntu');
            $wellDO =   Well::orderBy($WellDate)->where($WellDate, '>', $carbon)->limit($limit)->where('service', false)->pluck('do');
            $wellPH =   Well::orderBy($WellDate)->where($WellDate, '>', $carbon)->limit($limit)->where('service', false)->pluck('ph');
            $wellDates =  Well::orderBy($WellDate)->where($WellDate, '>', $carbon)->where('service', false)->limit(20)->pluck('well_id');
        }
       
        return view('dashboard', [
            'labEffCL2T' => $labEffCL2T, 
            'labPreCL2T' => $labPreCL2T, 
            'labPostCL2T' => $labPostCL2T,
            'labDates' => $labDates,
            'wellCOND' => $wellCOND,
            'wellNTU' => $wellNTU,
            'wellDO' => $wellDO,
            'wellPH' => $wellPH,
            'wellDates' => $wellDates,
            'edrNum2' => $edrNum2,
            'edrNum4' => $edrNum4,
            'edrNum6' => $edrNum6,
            'edrNum8' => $edrNum8,
            'edrNum10' => $edrNum10
        ]);
    }

}