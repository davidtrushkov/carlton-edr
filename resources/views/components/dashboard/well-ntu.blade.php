<div class="mt-12">
    <div class="bg-white border-transparent rounded-lg shadow-md">
        <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
            <h5 class="font-bold uppercase text-gray-600">
            {{ request('wellId') ? 'Well ' . request('wellId') . ' NTU Results' : 'Well NTU Past Month' }} 
            </h5>
        </div>
        <div class="p-2">
            <canvas wire:ignore id="wellNTUChart" width="undefined" height="undefined"></canvas>
            <script>
                var ctx = document.getElementById('wellNTUChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: {!! $wellDates !!},
                        datasets: [{
                            label: 'NTU',
                            data: {{  $wellNTU  }},
                            backgroundColor: 'rgba(0,0,0,0)',
                            borderColor: 'rgba(75, 192, 192, 1)'
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    min: 0,
                                    stepSize: 0.5
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