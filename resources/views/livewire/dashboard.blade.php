<div>
   
    <form>
        
        <div class="grid grid-cols-2 xs-grid-cols-none gap-4"> 
            <select wire:model="sortByMonth" name="excel_data" id="selectedDates" class="block bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option value="1">Past 30 Days</option>
                <option value="3">Past 90 Day</option>
                <option value="12">Past Year</option>
                <option value="24">Past 2 Years</option>
                <option value="select_dates">Selected Dates</option>
            </select>
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


    <div class="w-full p-2 xs-p-2">
        <div class="bg-white border-transparent rounded-lg shadow-md">
            <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h5 class="font-bold uppercase text-gray-600">Total Chlorine Lab Results</h5>
            </div>
            <div class="p-5">
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
                        labPreCL2T: {{   $labPreCL2T  }},
                        labPostCL2T: {{   $labPostCL2T  }}
                    };
                    var labels = ['EFF','PR','POST'];

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





    <div class="w-full p-2 xs-p-2">
        <div class="bg-white border-transparent rounded-lg shadow-md">
            <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h5 class="font-bold uppercase text-gray-600">Well Results</h5>
            </div>
            <div class="p-5">
                <canvas wire:ignore id="myWellChart" width="undefined" height="undefined"></canvas>
                <div id="WellChartBar"></div>
                <script>
                    var wellcolors = [
                        'rgba(75, 192, 192, 0.2)' 
                    ];
                    var welldata = {
                        labEffCL2T: {{  $wellCOND  }},
                    };
                    var welllabels = ['COND'];

                    function getChartData2(welldata) {
                        let chartData2 = {
                            labels: {!! $wellDates !!},
                            datasets: [],
                        };
                    
                        Object.keys(welldata).forEach(function(label, index) {  
                            chartData2.datasets.push({
                                label: welllabels[index],
                                data: welldata[label],
                                borderColor: 'rgba(75, 192, 192, 1)',
                                backgroundColor: wellcolors[index],
                                pointRadius: 2,
                                pointBorderWidth: 5,
                                pointHoverRadius: 7,
                                pointHoverBorderWidth: 2,
                            });
                        });
                        return chartData2;
                    }

                    var options2 = {
                        type: 'bar',
                        data: getChartData2(welldata),
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true,
                                        precision: 0,
                                        callback: function(value, index, values) {
                                            return "COND "+(value);
                                        }
                                    }
                                }]
                            },
                            tooltips: {
                                displayColors: false,
                            }
                        }
                    }

                    var ctx2 = document.getElementById('myWellChart').getContext('2d');
                    new Chart(ctx2, options2);
                </script> 

                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        Livewire.hook('element.updated', () => {   
                            $('#myChart').remove(); 
                            $('#chartBar').empty(); 
                            $('#chartBar').append('<canvas id="myChart"><canvas>')

                            $('#myWellChart').remove(); 
                            $('#WellChartBar').empty(); 
                            $('#WellChartBar').append('<canvas id="myWellChart"><canvas>')
                        });
                    });
                </script>
                
            </div>
        </div>
    </div>

</div>
