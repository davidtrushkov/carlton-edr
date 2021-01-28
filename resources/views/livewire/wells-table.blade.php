<div>

    <div class="grid grid-cols-3 xs-grid-cols-none gap-2 mb-8">       
        <select wire:model="sortField" class="block bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
            <option value="date">Month</option>
            <option value="created_at">Created Date</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
        <select wire:model="sortAsc" class="block bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
            <option value="1">Ascending</option>
            <option value="0">Descending</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
        <a href="/wells/create" class="xs-mt block appearance-none text-center bg-teal-500 focus:outline-none focus:bg-teal-600 focus:border-gray-500 hover:bg-teal-400 border-teal-600 text-white py-4 px-4 rounded leading-tight">
            Enter Wells
        </a>
    </div>

    @if($wells->isNotEmpty())
        <div class="mb-12">
            <div class="text-gray-600 font-bold mb-6">Sampled Date</div>
            <table class="table-auto w-full mb-6">
                <tbody>
                    @foreach($wells as $well => $dates)
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">
                                <div x-data={show:false}>
                                    <p class="flex">
                                        <a x-on:click.prevent="show=!show" class="font-bold cursor-pointer focus:outline-none mr-2">                               
                                            {{ $well }}
                                        </a>
                                    </p> 
                                    <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
                                        @foreach($dates as $date)
                                            <div class="text-sm font-extralight ml-4 pb-1">
                                                {{ $date->well_id }}
                                                <a href="{{ route('wellsEdit', $date->id) }}" class="text-gray-400 ml-4">Edit</a>
                                                <span class="float-right text-xs text-gray-500">Updated {{ $date->updated_at->diffForHumans() }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $wells->links() !!}
        </div>
    @else
        <p class="text-center">Whoops! No well inserts were found 🙁</p>
    @endif
</div>