<?php

namespace App\Http\Livewire;

use App\helpers\CollectionHelper;
use App\Models\EDR;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class EDRTable extends Component
{

    use WithPagination;

    public $perPage = 25;

    
    public function mount() {
        $this->id = request()->id;
    }

    public function render() {
        $results = EDR::where('edr_id', $this->id)->get()->groupBy(function($d) {
            return Carbon::parse($d->date)->format('F, Y');
        });
        
        $edrs = CollectionHelper::paginate($results, $this->perPage);

        return view('livewire.e-d-r-table', ['edrs' => $edrs]);
    }

}
