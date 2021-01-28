<?php

namespace App\Http\Livewire;

use App\Models\Lab;
use App\Models\Well;
use Carbon\Carbon;
use Livewire\Component;

class Dashboard extends Component
{

    public $sortByMonth = 1;


    public function render()
    {
        $carbon = Carbon::now()->subMonth((int)$this->sortByMonth);
        $date = 'lab_date';
        $limit = 200;

        $labEffCL2T =  Lab::orderBy($date)->where($date, '>', $carbon)->limit($limit)->pluck('eff_cl2t');
        $labPreCL2T =  Lab::orderBy($date)->where($date, '>', $carbon)->limit($limit)->pluck('pre_cl2t');
        $labPostCL2T = Lab::orderBy($date)->where($date, '>', $carbon)->limit($limit)->pluck('post_cl2t');
        $labDates =  Lab::orderBy($date)->where($date, '>', $carbon)->limit($limit)->pluck($date)->map->format('m-d');


        $WellDate = 'date';
        $wellCOND =  Well::orderBy($WellDate)->where($WellDate, '>', $carbon)->limit($limit)->pluck('cond');
        $wellDates =  Well::orderBy($WellDate)->where($WellDate, '>', $carbon)->limit($limit)->pluck('well_id');

        return view('livewire.dashboard', [
            'labEffCL2T' => $labEffCL2T, 
            'labPreCL2T' => $labPreCL2T, 
            'labPostCL2T' => $labPostCL2T,
            'labDates' => $labDates,
            'wellCOND' => $wellCOND, 
            'wellDates' => $wellDates
        ]);
    }

}
