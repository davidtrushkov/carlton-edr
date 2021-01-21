<x-app-layout>
    
    <div class="container mx-auto pt-12 pb-12">
        <div class="lg:flex lg:mx-4 lg:justify-between">
            <div class="lg:w-64 bg-white md:mb-12 lg:m-0 rounded-lg not-rounded-xs border-bottom-xs p-4">
                @include('components.sidebar')
            </div>
            <div class="lg:flex-1 lg:mx-4 bg-white rounded-lg p-4 not-rounded-xs">    

                <livewire:labs-table></livewire:labs-table>

                <hr class="mb-10">

                <form action="/labs/export" method="post">
                    @csrf

                    <div class="w-full flex flex-wrap justify-center"> 
                        <select name="excel_data" class="block bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="all_samples">All Samples</option>
                            <option value="eff_samples">Efluent Samples</option>
                            <option value="pr_pre_samples">PR Pre Samples</option>
                            <option value="pr_post_samples">PR Post Samples</option>
                        </select>
                    
                        <button type="submit" class="ml-8 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-3 rounded-lg mr-6">
                            Export Data to Excel
                        </button>
                    </div>
                </form>

                <!-- <canvas id="myChart"></canvas>  -->
            </div>
        </div>
    </div>


    <!-- <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: !! $labCONDDay !!,
                datasets: [{
                    label: 'Conductivity',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data:  $labCOND 
                    //data: [0, 10, 5, 2, 20, 30, 45]
                }]
            },

            // Configuration options go here
            options: {}
        });
    </script> -->
</x-app-layout>