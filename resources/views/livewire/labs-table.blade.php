<div>
        <div class="w-full flex pb-10">
            <div class="w-3/6 mx-1">
                <input wire:model.debounce.300ms="search" type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"placeholder="Search labs...">
            </div>
            <div class="w-1/6 relative mx-1">
                <select wire:model="sortField" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option value="id">ID</option>
                    <option value="created_at">Created Date</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            <div class="w-1/6 relative mx-1">
                <select wire:model="sortAsc" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option value="1">Ascending</option>
                    <option value="0">Descending</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            <div class="w-1/6 relative md:visible sm:w-6/6">
                <button wire:click="deleteLabs" class="block appearance-none w-full bg-red-500 border border-gray-200 text-white py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">Delete</button>
            </div>
        </div>

        <div class="w-full mb-12">
            <a href="/labs/create" class="block appearance-none w-full text-center bg-blue-500 border border-gray-200 text-white py-3 px-4 rounded leading-tight focus:outline-none focus:bg-blue-700 focus:border-gray-500">
                Enter Lab
            </a>
        </div>

        @if($labs->isNotEmpty())
            <div class="mb-12">
                <table class="table-auto w-full mb-6">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left">Action</th>
                            <th class="px-4 py-2 text-left">ID</th>
                            <th class="px-4 py-2 text-left">Created At</th>
                            <th class="px-4 py-2 text-left">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($labs as $lab)
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">
                                    <input wire:model="selected" value="{{ $lab->id }}" type="checkbox">
                                </td>
                                <td class="border px-4 py-2">{{ $lab->id }}</td>
                                <td class="border px-4 py-2">{{ $lab->created_at->format('m-d-Y') }}</td>
                                <td class="py-2 border px-4">
                                    <div class="flex items-center">
                                        <ul class="flex items-center">
                                            <li class="mr-4">
                                                <a href="{{ route('labsEdit', $lab->id) }}" class="text-gray-500 font-bold">
                                                    Edit
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $labs->links() !!}
            </div>
        @else
            <p class="text-center">Whoops! No labs were found 🙁</p>
        @endif
    </div>
