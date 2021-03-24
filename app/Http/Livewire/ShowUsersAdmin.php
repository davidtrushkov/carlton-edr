<?php

namespace App\Http\Livewire;

use App\helpers\CollectionHelper;
use App\Models\User;
use Carbon\Carbon;
use Livewire\WithPagination;
use Livewire\Component;

class ShowUsersAdmin extends Component
{

    use WithPagination;

    public $perPage = 50;


    public function render() {

        $results = User::all(); 
        
        $users = CollectionHelper::paginate($results, $this->perPage);

        return view('livewire.show-users-admin', ['users' => $users]);
    }
}
