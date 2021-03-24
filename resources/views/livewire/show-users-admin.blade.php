<div>

    @if($users->isNotEmpty())
        <div class="mb-12 mt-12">
            <table class="table-auto w-full mb-6">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="text-left py-2 px-3">Name</th>
                        <th class="text-left py-2 px-3 w-2/12">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user => $x)
                        <tr class="hover:bg-gray-100">
                            <td class="border px-2 py-2">   
                                <div>{{ $x->name }}</div>
                                <span class="text-xs text-gray-500">Joined {{ $x->created_at->diffForHumans() }}</span>
                            </td>
                            <td class="border px-2 py-2">   
                                <div class="text-sm font-extralight pb-1">
                                   <div>{{ $x->email }} </div>
                                </div>
                            </td>
                        </tr>       
                    @endforeach
                </tbody>     
            </table>
            {!! $users->links() !!}
        </div>
    @else
        <p class="text-center">Whoops! No Users found</p>
    @endif

</div>
