<?php

namespace App\Http\Livewire;

use App\helpers\CollectionHelper;
use Carbon\Carbon;
use App\Models\Well;
use Livewire\Component;
use Livewire\WithPagination;

class WellsTable extends Component
{
    use WithPagination;

    public $perPage = 25;
    public $sortField = 'date';
    public $sortAsc = true;

    public function deleteLabs() {
        Well::destroy($this->selected);
    }
    
    public function render() {

        $results = Well::orderBy($this->sortField, $this->sortAsc ? 'desc' : 'asc')->get()->groupBy(function($d) {
            return Carbon::parse($d->date)->format('F, Y');
        });
        
        $wells = CollectionHelper::paginate($results, $this->perPage);

        return view('livewire.wells-table', ['wells' => $wells]);
    }

}
