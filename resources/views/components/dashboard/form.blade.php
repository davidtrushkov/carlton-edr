<form action="/dashboard" method="post">
    @csrf

    <div class="grid grid-cols-2 xs-grid-cols-none gap-4 mb-8"> 
        <select name="sort_date" id="selectedDates" class="block bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            <option value="1" {{ request('sort_date') == 1 ? 'selected' : '' }}>Past 30 Days</option>
            <option value="3" {{ request('sort_date') == 3 ? 'selected' : '' }}>Past 90 Day</option>
            <option value="12" {{ request('sort_date') == 12 ? 'selected' : '' }}>Past Year</option>
            <option value="24" {{ request('sort_date') == 24 ? 'selected' : '' }}>Past 2 Years</option>
            <option value="select_dates">Selected Dates</option>
        </select>

        <select name="wellId" class="block bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            <option value="">Select Well</option>
            <option value="21" {{  request('wellId') == 21 ? 'selected' : '' }}>21</option>
            <option value="22" {{  request('wellId') == 22 ? 'selected' : '' }}>22</option>
            <option value="23" {{  request('wellId') == 23 ? 'selected' : '' }}>23</option>
            <option value="24" {{  request('wellId') == 24 ? 'selected' : '' }}>24</option>
            <option value="25" {{  request('wellId') == 25 ? 'selected' : '' }}>25</option>
            <option value="26" {{  request('wellId') == 26 ? 'selected' : '' }}>26</option>
            <option value="27" {{  request('wellId') == 27 ? 'selected' : '' }}>27</option>
            <option value="29" {{  request('wellId') == 29 ? 'selected' : '' }}>29</option>
            <option value="30" {{  request('wellId') == 30 ? 'selected' : '' }}>30</option>
            <option value="31" {{  request('wellId') == 31 ? 'selected' : '' }}>31</option>
            <option value="32" {{  request('wellId') == 32 ? 'selected' : '' }}>32</option>
            <option value="33" {{  request('wellId') == 33 ? 'selected' : '' }}>33</option>
            <option value="38" {{  request('wellId') == 38 ? 'selected' : '' }}>38</option>
            <option value="39" {{  request('wellId') == 39 ? 'selected' : '' }}>39</option>
            <option value="59" {{  request('wellId') == 59 ? 'selected' : '' }}>59</option>
            <option value="60" {{  request('wellId') == 60 ? 'selected' : '' }}>60</option>
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

    <button type="submit" class="block appearance-none w-full text-center bg-teal-500 focus:outline-none focus:bg-teal-600 focus:border-gray-500 hover:bg-teal-400 border-teal-600 text-white font-bold py-3 px-4 rounded leading-tight">
        Update Results
    </button>

</form>

<script type="application/javascript">
    $(function() {
            $('#selectedDates').change(function(){
                $('.select_dates').hide();
                $('#' + $(this).val()).show();
            });
        });
</script>