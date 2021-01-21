<x-app-layout>
    <div class="container mx-auto pt-12 pb-8 pl-2 pr-2">
        <form action="/wells/post" method="post">
        @csrf

            <div class="lg:flex lg:justify-between mb-12">
                <div class="lg:flex-1 bg-white rounded-lg p-4">


                    @if(session()->has('error_message'))
                        <div class="flex pb-6">
                            <div class="bg-red-300 border red-green-600 text-red-800 pl-3 pr-3 py-2 rounded inline-flex" role="alert">
                                <span class="block sm:inline text-sm">{{ session('error_message') }}</span>
                            </div>
                        </div>
                    @endif

                    <div class="grid md:grid-cols-4 sm:grid-cols-2 gap-4 pb-12">
                        <div>
                            <label class="block">
                                <span class="text-sm text-gray-500 font-bold">Select a Well</span>
                                <select name="well_id" class="@if($errors->has('well_id'))border-red-500 @endif block bg-gray-100 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                    <option value="">Select Well</option>
                                    <option value="21" @if (old('well_id') == 21) selected="selected" @endif>21</option>
                                    <option value="22" @if (old('well_id') == 22) selected="selected" @endif>22</option>
                                    <option value="23" @if (old('well_id') == 23) selected="selected" @endif>23</option>
                                    <option value="24" @if (old('well_id') == 24) selected="selected" @endif>24</option>
                                    <option value="25" @if (old('well_id') == 25) selected="selected" @endif>25</option>
                                    <option value="26" @if (old('well_id') == 26) selected="selected" @endif>26</option>
                                    <option value="27" @if (old('well_id') == 27) selected="selected" @endif>27</option>
                                    <option value="29" @if (old('well_id') == 29) selected="selected" @endif>29</option>
                                    <option value="30" @if (old('well_id') == 30) selected="selected" @endif>30</option>
                                    <option value="31" @if (old('well_id') == 31) selected="selected" @endif>31</option>
                                    <option value="32" @if (old('well_id') == 32) selected="selected" @endif>32</option>
                                    <option value="33" @if (old('well_id') == 33) selected="selected" @endif>33</option>
                                    <option value="38" @if (old('well_id') == 38) selected="selected" @endif>38</option>
                                    <option value="39" @if (old('well_id') == 39) selected="selected" @endif>39</option>
                                    <option value="59" @if (old('well_id') == 59) selected="selected" @endif>59</option>
                                    <option value="60" @if (old('well_id') == 60) selected="selected" @endif>60</option>
                                </select>
                            </label>
                            @if ($errors->has('well_id'))
                                <div class="text-red-500 text-sm font-bold">{{ $errors->first('well_id') }}</div>
                            @endif
                        </div>

                        <div>
                            <label class="block">
                                <span class="text-sm text-gray-500 font-bold">Date of Well Sampling</span>
                                <input type="date" name="date" value="{{ old('date') }}" class="@if($errors->has('date'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                            </label>
                            @if ($errors->has('date'))
                                <div class="text-red-500 text-sm font-bold">{{ $errors->first('date') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="text-gray-700 font-bold inline-block align-middle mb-2">Well Data</div><hr class="mb-6" />
                        <div class="grid md:grid-cols-8 sm:grid-cols-4 gap-4">

                            <div>
                                <label class="block">
                                    <span class="text-sm text-gray-500 font-bold">Tempature</span>
                                    <input type="text" value="{{ old('temp') }}"
                                    class="@if($errors->has('temp'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    placeholder="Tempature" name="temp" />
                                </label>
                                @if ($errors->has('temp'))
                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('temp') }}</div>
                                @endif
                            </div>

                            <div>
                                <label class="block">
                                    <span class="text-sm text-gray-500 font-bold">pH</span>
                                    <input type="text" value="{{ old('ph') }}"
                                    class="@if($errors->has('ph'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    placeholder="pH" name="ph" />
                                </label>
                                @if ($errors->has('ph'))
                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('ph') }}</div>
                                @endif
                            </div>

                            <div>
                                <label class="block">
                                    <span class="text-sm text-gray-500 font-bold">D.O.</span>
                                    <input type="text" value="{{ old('do') }}"
                                    class="@if($errors->has('do'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    placeholder="D.O." name="do" />
                                </label>
                                @if ($errors->has('do'))
                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('do') }}</div>
                                @endif
                            </div>

                            <div>
                                <label class="block">
                                    <span class="text-sm text-gray-500 font-bold">Cond</span>
                                    <input type="text" value="{{ old('cond') }}"
                                    class="@if($errors->has('cond'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    placeholder="Cond" name="cond" />
                                </label>
                                @if ($errors->has('cond'))
                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('cond') }}</div>
                                @endif
                            </div>

                            <div>
                                <label class="block">
                                    <span class="text-sm text-gray-500 font-bold">NTU</span>
                                    <input type="text" value="{{ old('ntu') }}"
                                    class="@if($errors->has('ntu'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    placeholder="NTU" name="ntu" />
                                </label>
                                @if ($errors->has('ntu'))
                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('ntu') }}</div>
                                @endif
                            </div>

                            <div>
                                <label class="block">
                                    <span class="text-sm text-gray-500 font-bold">Grab Time</span>
                                    <input type="time" value="{{ old('grab_time') }}"
                                    class="@if($errors->has('grab_time'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    placeholder="Grab Sample Time" name="grab_time" />
                                </label>
                                @if ($errors->has('grab_time'))
                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('grab_time') }}</div>
                                @endif
                            </div>

                        </div>

                        <div class="text-left py-2 pt-16 px-3 -mx-3 -mb-2 rounded-b-lg">
                            <a href="{{ url('/wells') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg mr-6 mt-4">
                                Back
                            </a>
                            <input type="submit" name="save" value="Save" class="bg-blue-500 mt-4 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg">
                            <input type="submit" name="saveAndContinue" value="Save & Enter Another Well" class="mt-4 ml-6 ml-0-xs bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg">
                        </div>

                    </div>

                </div>
            </div>

        </form>

      
        <div class="container mx-auto lg:flex lg:justify-between mb-12 pl-2 pr-2">
            <div class="lg:flex-1 bg-white rounded-lg p-4">
                @if($wells->count() > 0)
                <span class="text-sm">These wells were inputted for the month of {{ Carbon\Carbon::now()->format('F Y') }}</span><br /><br />
                    <div class="grid md:grid-cols-8 sm:grid-cols-4 gap-4">
                        @foreach($wells as $well)
                        <div class="grid md:grid-cols-1 gap-4">
                            <div>
                                <img src="{{ asset('svg/icons8-checked.svg') }}" class="inline-block" />  
                                {!! $well->well_id !!}                                     
                            </div>
                        </div>
                        @endforeach
                    </div>
                @else
                    <div>
                        <span class="text-sm">No wells were inputted for the month of {{ Carbon\Carbon::now()->format('F Y') }}</span>
                    </div>
                @endif
            </div>
        </div>
           

    </div>
</x-app-layout>
    