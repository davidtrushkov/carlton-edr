<div class="w-full mt-12">
    <div class="bg-white border-transparent rounded-lg shadow-md">
        <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
            <h5 class="font-bold uppercase text-gray-600">Total Chlorine Lab Results</h5>
        </div>
        <div class="p-2">
            <canvas wire:ignore id="myChart" width="undefined" height="undefined"></canvas>
            <div id="chartBar"></div>
            <script>
                var colors = [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(63, 191, 191, 0.2)',
                    'rgba(50, 192, 192, 0.2)'
                ];
                var data = {
                    labEffCL2T: {{  $labEffCL2T  }},
                    labProdCL2T: {{   $labProdCL2T  }},
                };
                var labels = ['EFF','Product'];

                function getChartData(data) {
                    let chartData = {
                        labels: {!! $labDates !!},
                        datasets: [],
                    };
                
                    Object.keys(data).forEach(function(label, index) {  
                        chartData.datasets.push({
                            label: labels[index],
                            data: data[label],
                            borderColor: 'rgba(75, 192, 192, 1)',
                            backgroundColor: colors[index],
                            pointRadius: 2,
                            pointBorderWidth: 5,
                            pointHoverRadius: 7,
                            pointHoverBorderWidth: 2,
                        });
                    });
                    return chartData;
                }

                var options = {
                    type: 'line',
                    data: getChartData(data),
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    precision: 0,
                                    callback: function(value, index, values) {
                                        return "Cl "+(value);
                                    }
                                }
                            }]
                        },
                        tooltips: {
                            displayColors: false,
                        }
                    }
                }

                var ctx = document.getElementById('myChart').getContext('2d');
                new Chart(ctx, options);

            
            </script> 

        </div>
    </div>
</div>