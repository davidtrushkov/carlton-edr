<x-app-layout>
    
    <div class="container mx-auto pt-12 pb-12">
        <div class="lg:flex lg:mx-4 lg:justify-between">
            <div class="lg:w-64 bg-white md:mb-12 lg:m-0 rounded-lg not-rounded-xs border-bottom-xs p-4 xs-p-2">
                @include('components.sidebar')
            </div>
            <div class="lg:flex-1 lg:mx-4 bg-white rounded-lg p-4 xs-p-2 not-rounded-xs">    

                <livewire:labs-table></livewire:labs-table>

                <hr class="mb-10">

                <form action="/labs/export" method="post">
                    @csrf

                    <div class="grid grid-cols-2 xs-grid-cols-none gap-4"> 
                        <select name="excel_data" id="selectedDates" class="block bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="all_samples">All Samples</option>
                            <option value="eff_samples">Efluent Samples</option>
                            <option value="pr_pre_samples">PR Pre Samples</option>
                            <option value="pr_post_samples">PR Post Samples</option>
                            <option value="select_dates">Select Dates</option>
                        </select>
                    
                        <button type="submit" class="block appearance-none w-full text-center bg-green-500 border border-gray-200 text-white py-3 px-4 rounded leading-tight focus:outline-none focus:bg-green-700 focus:border-gray-500">
                            Export to Excel
                        </button>
                    </div>

                    <div id="select_dates" class="select_dates grid grid-cols-2 xs-grid-cols-none gap-4 my-8" style="display:none">    
                        <label class="block mb-2">
                            <span class="text-sm text-gray-500 font-bold">From</span>
                            <input type="date" placeholder="mm/dd/yyyy" name="from" class="p-2 mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        </label>
                        <label class="block">
                            <span class="text-sm text-gray-500 font-bold">To</span>
                            <input type="date" placeholder="mm/dd/yyyy" name="to" class="p-2 mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        </label>         
                    </div>

                </form>

                <script type="application/javascript">
                    $(function() {
                            $('#selectedDates').change(function(){
                                $('.select_dates').hide();
                                $('#' + $(this).val()).show();
                            });
                        });
                </script>

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