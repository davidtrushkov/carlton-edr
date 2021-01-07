<?php

namespace App\Http\Livewire;

use App\Models\Lab;
use Livewire\Component;
use Livewire\WithPagination;

class LabsTable extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 20;
    public $sortField = 'id';
    public $sortAsc = true;
    public $selected = [];


    public function deleteLabs() {
        Lab::destroy($this->selected);
    }
    
    public function render() {
        return view('livewire.labs-table', [
            'labs' => Lab::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage),
        ]);
    }
}
