<div>
    <div class="grid grid-cols-3 xs-grid-cols-none gap-2 mb-8">       
        <a href="/edr/create" class="xs-mt block appearance-none text-center bg-teal-500 focus:outline-none focus:bg-teal-600 focus:border-gray-500 hover:bg-teal-400 border-teal-600 text-white py-4 px-4 rounded leading-tight">
            Enter EDR Data
        </a> 
    </div>

    @if($edrs->isNotEmpty())
        <div class="mb-12">
            <div class="text-gray-600 font-bold mb-6">Sampled Date</div>
            <table class="table-auto w-full mb-6">
                <tbody>
                    @foreach($edrs as $edr => $dates)
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">
                                <div x-data={show:false}>
                                    <p class="flex">
                                        <a x-on:click.prevent="show=!show" class="font-bold cursor-pointer focus:outline-none mr-2">                               
                                            {{ $edr }}
                                        </a>
                                    </p> 
                                    <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
                                        @foreach($dates as $date)
                                            <div class="text-sm font-extralight ml-4 pb-1">
                                                {{ $date->date->format('m-d-Y') }} 
                                                <a href="{{ route('edrsEdit', $date->id) }}" class="text-gray-400 ml-4">Edit</a>
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
            {!! $edrs->links() !!}
        </div>
    @else
        <p class="text-center">Whoops! No EDRS inserts were found 🙁</p>
    @endif

</div>