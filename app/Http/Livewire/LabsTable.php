<?php

namespace App\Http\Livewire;

use App\helpers\CollectionHelper;
use App\Models\Lab;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class LabsTable extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 20;
    public $sortField = 'lab_date';
    public $sortAsc = true;
    public $selected = [];


    public function deleteLabs() {
        if(auth()->user()->admin == 1){
            Lab::destroy($this->selected);
        }
    }
    
    public function render() {
        $results = Lab::search($this->search)->orderBy($this->sortField, $this->sortAsc ? 'desc' : 'asc')->get()->groupBy(function($d) {
            return Carbon::parse($d->lab_date)->format('F, Y');
        });
        
        $labs = CollectionHelper::paginate($results, $this->perPage);

        return view('livewire.labs-table', ['labs' => $labs]);
    }
}
