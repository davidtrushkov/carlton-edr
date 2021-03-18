<div class="mt-12">
    <div class="bg-white border-transparent rounded-lg shadow-md">
        <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
            <h5 class="font-bold uppercase text-gray-600">
            EDR Unit Run Hours
            </h5>
        </div>
        <div class="p-2">
            <canvas wire:ignore id="EDR-RunHours-Chart" width="undefined" height="undefined"></canvas>
            <div id="EDRChartBar"></div>
            <script>
                var ctx = document.getElementById('EDR-RunHours-Chart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['2', '4', '6', '8', '10'],
                        datasets: [{
                            label: 'Unit Run Hours',
                            data: [{{ $edrNum2 }}, {{ $edrNum4 }}, {{ $edrNum6 }}, {{ $edrNum8 }}, {{ $edrNum10 }}],
                            backgroundColor: 'rgba(75, 192, 192, 0.8)',
                            borderColor: 'rgba(75, 192, 192, 1)'
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    precision: 0,
                                    callback: function(value, index, values) {
                                        return (value)+" hrs";
                                    }
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