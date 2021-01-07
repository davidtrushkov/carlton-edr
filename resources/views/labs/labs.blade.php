<x-app-layout>
    
    <div class="container mx-auto pt-12 pb-12">
        <div class="lg:flex lg:mx-4 lg:justify-between">
            <div class="lg:w-64 bg-white md:mb-12 lg:m-0 rounded-lg p-4">
                @include('components.sidebar')
            </div>
            <div class="lg:flex-1 lg:mx-4 bg-white rounded-lg p-4 xs-mt">
                <livewire:labs-table></livewire:labs-table>
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