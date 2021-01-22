<div>

    <div class="grid grid-cols-3 xs-grid-cols-none gap-2 mb-8">   
        <div>
            <input wire:model.debounce.300ms="search" type="text" class="pb-4 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Search labs...">
        </div>
        <div>
            <select wire:model="sortField" class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="id">ID</option>
                <option value="lab_date">Lab Date</option>
                <option value="created_at">Created Date</option>
            </select>
        </div>
        <div>
            <select wire:model="sortAsc" class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
        </div>
    </div>
    <div class="grid grid-cols-2 xs-grid-cols-none gap-2 mb-8">
        <a href="#" wire:click="deleteLabs" class="block text-center bg-red-500 border border-gray-200 text-white py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-red focus:border-gray-500">
            Delete
        </a>
        <a href="/labs/create" class="block text-center bg-blue-500 border border-gray-200 text-white py-3 px-4 rounded leading-tight focus:outline-none focus:bg-blue-700 focus:border-gray-500">
            Enter Lab
        </a>
    </div>

    @if($labs->isNotEmpty())
        <div class="mb-12">
            <div class="text-gray-600 font-bold mb-6">Laboratory Date</div>
            @foreach($labs as $lab => $dates)
                <div x-data={show:false}>
                    <div class="border-b px-4 py-2">
                        <a x-on:click.prevent="show=!show" class="font-bold cursor-pointer focus:outline-none mr-2">                               
                            {{ $lab }}
                        </a>
                    </div>     
                    <table class="table-auto w-full mb-6" x-show="show">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-left text-sm">
                                    <img src="{{ asset('/svg/icons8-trash-can.svg') }}" width="20px" />
                                </th>
                                <th class="px-4 py-2 text-left text-sm">ID</th>
                                <th class="px-4 py-2 text-left text-sm">Lab Date</th>
                                <th class="px-4 py-2 text-left text-sm">Action</th>
                            </tr>
                        </thead>
                        @foreach($dates as $date)  
                            <tbody>
                                <td class="border px-4 py-2">
                                    <input wire:model="selected" value="{{ $date->id }}" type="checkbox">
                                </td>
                                <td class="border px-4 py-2 text-sm">{{ $date->id }}</td>
                                <td class="border px-4 py-2 text-sm">{{ $date->lab_date->format('m-d-Y') }}</td>
                                <td class="py-2 border px-4 text-sm">
                                    <div class="flex items-center">
                                        <ul class="flex items-center">
                                            <li class="mr-4">
                                                <a href="{{ route('labsEdit', $date->id) }}" class="text-gray-500">
                                                    Edit
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tbody>    
                        @endforeach
                    </table>
                </div>
            @endforeach
           <div class="mt-8">
                {!! $labs->links() !!}
           </div>
        </div>
    @else
        <p class="text-center">Whoops! No labs were found 🙁</p>
    @endif
</div>
