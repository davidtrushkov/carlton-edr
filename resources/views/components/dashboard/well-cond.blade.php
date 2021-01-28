<div class="mt-12">
    <div class="bg-white border-transparent rounded-lg shadow-md">
        <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
            <h5 class="font-bold uppercase text-gray-600">
            {{ request('wellId') ? 'Well ' . request('wellId') . ' Conductivity Results' : 'Well Conductivity Past Month' }} 
            </h5>
        </div>
        <div class="p-2">
            <canvas wire:ignore id="myWellChart" width="undefined" height="undefined"></canvas>
            <div id="WellChartBar"></div>
            <script>
                var ctx = document.getElementById('myWellChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: {!! $wellDates !!},
                        datasets: [{
                            label: 'COND',
                            data: {{  $wellCOND  }},
                            backgroundColor: 'rgba(75, 192, 192, 0.8)',
                            borderColor: 'rgba(75, 192, 192, 1)'
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    precision: 0
                                },
                                gridLines: {
                                    display:false
                                }
                            }],
                            xAxes: [{
                                gridLines: {
                                    display:false
                                }
                            }],
                        }   
                    }
                });  
            </script> 
        </div>
    </div>
</div>