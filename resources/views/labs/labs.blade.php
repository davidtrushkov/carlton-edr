<x-app-layout>
    
    <div class="container mx-auto pt-12 pb-12">
        <div class="lg:flex lg:justify-between">
            <div class="lg:w-64 bg-white md:mb-12 lg:m-0 rounded-lg p-4">
                @include('components.sidebar')
            </div>
            <div class="lg:flex-1 lg:mx-10 bg-white rounded-lg p-4">
                <livewire:labs-table></livewire:labs-table>
                <div class="flex flex-wrap items-center justify-between mb-4">
                    <div class="flex-grow md:mr-3 mt-4 md:mt-0 order-3 w-full md:w-auto md:order-1">
                        <input type="search" wire:model="query" placeholder="Search labs" class="w-full pl-3 pr-3 h-12 border-2 rounded-lg">
                    </div>
                    <div class="order-2">
                        <div>
                            <a href="/labs/create" class="bg-blue-500 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-bold">
                            Enter Lab Data
                            </a>
                        </div>
                    </div>
                </div>

                <div class="overflow-auto mt-10">
                    <table class="w-full">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="text-left py-2 px-3">Lab Date</th>
                                <th class="text-left py-2 px-3 w-2/12">pH</th>
                                <th class="text-left py-2 px-3 w-2/12">COND</th>
                                <th class="text-left py-2 px-3 w-2/12">CL2-T</th>
                                <th class="p-2 w-2/12"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($labs as $lab)
                            <tr class="border-gray-100  @if(!$loop->last) border-b-2 @endif hover:bg-gray-100">
                                <td class="py-2 px-3 flex items-center">
                                   {{  $lab->lab_date }}
                                </td>
                                <td class="py-2 px-3">
                                    {{  $lab->eff_ph }}
                                </td>
                                <td class="py-2 px-3">
                                    {{  $lab->eff_cond }}
                                </td>
                                <td class="py-2 px-3">
                                    {{  $lab->eff_cl2t }}
                                </td>
                                <td class="py-2 px-3">
                                    <div class="flex justify-end items-center">
                                        <ul class="flex items-center">
                                            <li class="mr-4">
                                                <button class="text-gray-500 font-bold">
                                                    Edit
                                                </button>
                                            </li>
                                            <li>
                                                <button class="text-blue-400 font-bold">
                                                    View
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                <canvas id="myChart"></canvas>

                
            </div>
        </div>
    </div>


    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: {!! $labCONDDay !!},
                datasets: [{
                    label: 'Conductivity',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: {{ $labCOND }}
                    //data: [0, 10, 5, 2, 20, 30, 45]
                }]
            },

            // Configuration options go here
            options: {}
        });
    </script>
</x-app-layout>