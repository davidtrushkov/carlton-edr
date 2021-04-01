<x-app-layout>

    <div class="container mx-auto pt-12 pb-12">
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


                <div class="flex items-center text-gray-800">
                    <div class="p-1 w-full">
                        
                        <div class="grid grid-cols-2 xs-grid-cols-none gap-4 mt-8">
                            <a href="/edrs/2">
                                <div class="flex flex-row bg-gray-100 shadow-sm rounded p-4">          
                                    <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-orange-100 text-orange-500">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                                    </div>
                                    <div class="flex flex-col flex-grow ml-4">
                                        <div class="text-sm text-gray-500">{{ \App\Models\EDR::where(['edr_id' => 2])->pluck('run_hours')->first() > 0 ? \App\Models\EDR::where(['edr_id' => 2])->pluck('run_hours')->first(). ' hrs' : '' }}</div>
                                        <div class="font-bold text-lg">EDR #2</div>
                                    </div>
                                    
                                </div>
                            </a>
                            <a href="/edrs/4">
                                <div class="flex flex-row bg-gray-100 shadow-sm rounded p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-orange-100 text-orange-500">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                                    </div>
                                    <div class="flex flex-col flex-grow ml-4">
                                        <div class="text-sm text-gray-500">{{ \App\Models\EDR::where(['edr_id' => 4])->pluck('run_hours')->first() > 0 ? \App\Models\EDR::where(['edr_id' => 4])->pluck('run_hours')->first(). ' hrs' : '' }}</div>
                                        <div class="font-bold text-lg">EDR #4</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="grid grid-cols-2 xs-grid-cols-none gap-4 mt-8">
                            <a href="/edrs/6">
                                <div class="flex flex-row bg-gray-100 shadow-sm rounded p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-orange-100 text-orange-500">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                                    </div>
                                    <div class="flex flex-col flex-grow ml-4">
                                        <div class="text-sm text-gray-500">{{ \App\Models\EDR::where(['edr_id' => 6])->pluck('run_hours')->first() > 0 ? \App\Models\EDR::where(['edr_id' => 6])->pluck('run_hours')->first(). ' hrs' : '' }}</div>
                                        <div class="font-bold text-lg">EDR #6</div>
                                    </div>
                                </div>
                            </a>
                            <a href="/edrs/8">
                                <div class="flex flex-row bg-gray-100 shadow-sm rounded p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-orange-100 text-orange-500">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                                    </div>
                                    <div class="flex flex-col flex-grow ml-4">
                                        <div class="text-sm text-gray-500">{{ \App\Models\EDR::where(['edr_id' => 8])->pluck('run_hours')->first() > 0 ? \App\Models\EDR::where(['edr_id' => 8])->pluck('run_hours')->first(). ' hrs' : '' }}</div>
                                        <div class="font-bold text-lg">EDR #8</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="grid grid-cols-2 xs-grid-cols-none gap-4 mt-8">
                            <a href="/edrs/10">
                                <div class="flex flex-row bg-gray-100 shadow-sm rounded p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-orange-100 text-orange-500">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                                    </div>
                                    <div class="flex flex-col flex-grow ml-4">
                                        <div class="text-sm text-gray-500">{{ \App\Models\EDR::where(['edr_id' => 10])->pluck('run_hours')->first() > 0 ? \App\Models\EDR::where(['edr_id' => 10])->pluck('run_hours')->first(). 'hrs' : '' }}</div>
                                        <div class="font-bold text-lg">EDR #10</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                       
                    </div>
                </div>

            </div>

            
        </div>     
    </div>

</x-app-layout>