<?php

namespace App\Http\Livewire;

use App\Models\Lab;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class LabsTable extends Component
{
    use WithPagination;


    public $search = '';
    public $perPage = 25;
    public $sortField = 'id';
    public $sortAsc = true;
    public $selected = [];


    public function deleteUsers()
    {
        User::destroy($this->selected);
    }

    
    public function render()
    {
        return view('livewire.labs-table', [
            'users' => User::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage),
        ]);
    }
}
