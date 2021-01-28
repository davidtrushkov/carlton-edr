<?php

namespace App\Http\Controllers;

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

        if(request('wellId')) {
            $wellID = request('wellId');
            $wellCOND =  Well::orderBy($WellDate)->where($WellDate, '>', $carbon)->where('well_id', '=', $wellID)->where('service', false)->limit($limit)->pluck('cond');
            $wellNTU =   Well::orderBy($WellDate)->where($WellDate, '>', $carbon)->where('well_id', '=', $wellID)->where('service', false)->limit($limit)->pluck('ntu');
            $wellDates = Well::orderBy($WellDate)->where($WellDate, '>', $carbon)->where('well_id', '=', $wellID)->where('service', false)->limit($limit)->pluck($WellDate)->map->format('m-y');
        } else {
            $wellCOND =  Well::orderBy($WellDate)->where($WellDate, '>', Carbon::now()->subMonth())->where('service', false)->limit($limit)->pluck('cond');
            $wellNTU =   Well::orderBy($WellDate)->where($WellDate, '>', $carbon)->limit($limit)->where('service', false)->pluck('ntu');
            $wellDates =  Well::orderBy($WellDate)->where($WellDate, '>', Carbon::now()->subMonth())->where('service', false)->limit(20)->pluck('well_id');
        }
       
        return view('dashboard', [
            'labEffCL2T' => $labEffCL2T, 
            'labPreCL2T' => $labPreCL2T, 
            'labPostCL2T' => $labPostCL2T,
            'labDates' => $labDates,
            'wellCOND' => $wellCOND,
            'wellNTU' => $wellNTU,
            'wellDates' => $wellDates
        ]);
    }

}