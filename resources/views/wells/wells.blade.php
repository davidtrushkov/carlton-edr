<x-app-layout>

    <div class="container mx-auto pt-12-sm pb-12">
        <div class="lg:flex lg:mx-4 lg:justify-between">
            <div class="lg:w-64 bg-white md:mb-12 lg:m-0 rounded-lg not-rounded-xs p-4 xs-p-2 border-bottom-xs">
                @include('components.sidebar')
            </div>
            <div class="lg:flex-1 lg:mx-4 bg-white rounded-lg not-rounded-xs p-4 xs-p-2"> 

                @if(session()->has('success'))
                    <div class="flex pb-6">
                        <div class="bg-green-300 border red-green-600 text-green-800 pl-3 pr-3 py-3 rounded inline-flex" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    </div>
                @endif      

                <livewire:wells-table></livewire:labs-table>
                <hr class="mb-10">

                <form action="/wells/export" method="post">
                    @csrf
                    <div class="grid grid-cols-2 xs-grid-cols-none gap-4">       
                        <select name="well_data" id="colorselector" class="block bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="all_wells">All Well Data</option>
                            <option value="select_dates">Select Dates</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="59">59</option>
                            <option value="60">60</option>
                        </select>         
                        <button type="submit" class="block appearance-none w-full text-center bg-teal-500 focus:outline-none focus:bg-teal-600 focus:border-gray-500 hover:bg-teal-400 border-teal-600 text-white py-3 px-4 rounded leading-tight">
                            Export to Excel
                        </button>         
                    </div>
                    <div id="select_dates" class="select_dates grid grid-cols-2 xs-grid-cols-none gap-4 my-8" style="display:none">    
                        <label class="block mb-2">
                            <span class="text-sm text-gray-500 font-bold">From</span>
                            <input type="date" name="from" class="p-2 mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        </label>
                        <label class="block">
                            <span class="text-sm text-gray-500 font-bold">To</span>
                            <input type="date" name="to" class="p-2 mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        </label>         
                    </div>
                </form>

                <script type="application/javascript">
                    $(function() {
                            $('#colorselector').change(function(){
                                $('.select_dates').hide();
                                $('#' + $(this).val()).show();
                            });
                        });
                </script>

            </div>
        </div>
    </div>

</x-app-layout>