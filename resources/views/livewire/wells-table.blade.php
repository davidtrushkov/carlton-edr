<div>

    <div class="w-full flex pb-10">        
        <div class="w-1/3 relative mx-1">
            <select wire:model="sortField" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="date">Month</option>
                <option value="created_at">Created Date</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
        <div class="w-1/3 relative mx-1">
            <select wire:model="sortAsc" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
        <div class="w-full relative mx-1">
            <a href="/wells/create" class="block appearance-none w-full text-center bg-blue-500 border border-gray-200 text-white py-3 px-4 rounded leading-tight focus:outline-none focus:bg-blue-700 focus:border-gray-500">
                Enter Wells
            </a>
        </div>
    </div>

    @if($wells->isNotEmpty())
        <div class="mb-12">
            <table class="table-auto w-full mb-6">
                <thead>
                    <tr>
                        <th class="px-4 py-4 text-left">Sampled Date</th>
                    </tr>
                </thead>
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


    <hr class="mb-10">

    <form action="/wells/export" method="post">
        @csrf
        <div class="grid md:grid-cols-2 sm:grid-cols-1 gap-4">        
            <div>
                <div>
                    <label class="block">
                        <span class="text-sm text-gray-500 font-bold sm:display-block md:hidden">Selection</span>
                        <select name="well_data" id="colorselector" class="block bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="all_wells">All Well Data</option>
                            <option value="select_dates">Select Dates</option>
                        </select>
                    </label>
                </div>
            </div>
            <div id="select_dates" class="select_dates" style="display:none">
                <div>
                    <label class="block">
                        <span class="text-sm text-gray-500 font-bold">From</span>
                        <input type="date" name="from" class="p-2 mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </label>
                </div>
                <div>
                    <label class="block">
                        <span class="text-sm text-gray-500 font-bold">To</span>
                        <input type="date" name="to" class="p-2 mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </label>
                </div>
            </div>
            <div>
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-3 rounded-lg">
                    Export to Excel
                </button>
            </div>             
        </div>
    </form>

    <script type="application/javascript">
        $(function() {
                $('#colorselector').change(function(){
                    $('.select_dates').hide();
                    $('#' + $(this).val()).show();
                });
            });
    </script>
</div>