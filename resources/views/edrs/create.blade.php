<x-app-layout>
    <div class="container mx-auto pt-12 pb-8 pl-2 pr-2">
        <form action="/edr/post" method="post">
        @csrf
            <div class="lg:flex lg:justify-between mb-12">
                <div class="lg:flex-1 bg-white rounded-lg p-4">
                    <div class="overflow-x-auto">
                        <div class="flex items-center justify-center overflow-hidden">
                            <div class="w-full">
                                <div class="bg-white shadow-md rounded my-6 border">
                                    <table class="min-w-max w-full table-auto">
                                        <thead>
                                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                                <th class="py-3 px-3 text-left">Data</th>
                                                <th class="py-3 px-3 text-left">Info</th>
                                                <th class="py-3 px-3 text-left">Result</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-600 text-sm font-light">
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Unit #</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r"></td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                    <label class="block">
                                                        <select name="edr_id" class="@if($errors->has('edr_id'))border-red-500 @endif block bg-gray-100 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                            <option value="">Select Unit #</option>
                                                            <option value="2" @if (old('edr_id') == 2) selected="selected" @endif>2</option>
                                                            <option value="4" @if (old('edr_id') == 4) selected="selected" @endif>4</option>
                                                            <option value="6" @if (old('edr_id') == 6) selected="selected" @endif>6</option>
                                                            <option value="8" @if (old('edr_id') == 8) selected="selected" @endif>8</option>
                                                            <option value="10" @if (old('edr_id') == 10) selected="selected" @endif>10</option>
                                                        </select>
                                                    </label>
                                                    @if ($errors->has('polarity'))
                                                        <div class="text-red-500 text-sm font-bold">{{ $errors->first('polarity') }}</div>
                                                    @endif      
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Date</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Date When Taken</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                    <label class="block">
                                                        <input type="date" name="date" value="{{ old('date') }}" class="@if($errors->has('date'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                                                    </label>
                                                    @if ($errors->has('date'))
                                                        <div class="text-red-500 text-sm font-bold">{{ $errors->first('date') }}</div>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Polarity</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Step</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                    <label class="block">
                                                        <select name="polarity" class="@if($errors->has('polarity'))border-red-500 @endif block bg-gray-100 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                            <option value="">Select Polarity</option>
                                                            <option value="neg" @if (old('polarity') == 'neg') selected="selected" @endif>Negative</option>
                                                            <option value="pos" @if (old('polarity') == 'pos') selected="selected" @endif>Positive</option>
                                                        </select>
                                                    </label>
                                                    @if ($errors->has('polarity'))
                                                        <div class="text-red-500 text-sm font-bold">{{ $errors->first('polarity') }}</div>
                                                    @endif      
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Life Time Run Hours</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Info</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('run_hours') }}"
                                                    class="@if($errors->has('run_hours'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Life Time Run Hours" name="run_hours" />
                                                </label>
                                                @if ($errors->has('run_hours'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('run_hours') }}</div>
                                                @endif    
                                                </td>
                                            </tr>

                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Feed Chlorine Residual</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">lab</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('feed_cl2') }}"
                                                    class="@if($errors->has('feed_cl2'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Feed Chlorine Residual" name="feed_cl2" />
                                                </label>
                                                @if ($errors->has('feed_cl2'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('feed_cl2') }}</div>
                                                @endif    
                                                </td>
                                            </tr>

                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Feed pH</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">HH</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('feed_ph') }}"
                                                    class="@if($errors->has('feed_ph'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Feed pH" name="feed_ph" />
                                                </label>
                                                @if ($errors->has('feed_ph'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('feed_ph') }}</div>
                                                @endif    
                                                </td>
                                            </tr>

                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Feed Tempature</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">32-TI-101</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('feed_temp') }}"
                                                    class="@if($errors->has('feed_temp'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Feed Tempature" name="feed_temp" />
                                                </label>
                                                @if ($errors->has('feed_temp'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('feed_temp') }}</div>
                                                @endif    
                                                </td>
                                            </tr>       
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Feed Conductivity</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">32-AI-101</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('feed_cond') }}"
                                                    class="@if($errors->has('feed_cond'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Feed Conductivity" name="feed_cond" />
                                                </label>
                                                @if ($errors->has('feed_cond'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('feed_cond') }}</div>
                                                @endif    
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Product Conductivity</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">32-AI-301</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('product_cond') }}"
                                                    class="@if($errors->has('product_cond'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Product Conductivity" name="product_cond" />
                                                </label>
                                                @if ($errors->has('product_cond'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('product_cond') }}</div>
                                                @endif    
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Concentrate Blowdown Cond</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">HH</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('concen_cond') }}"
                                                    class="@if($errors->has('concen_cond'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Concentrate Blowdown Cond" name="concen_cond" />
                                                </label>
                                                @if ($errors->has('concen_cond'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('concen_cond') }}</div>
                                                @endif    
                                                </td>
                                            </tr>

                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Electrode Inlet pH</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">HH</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('electrode_inlet_ph') }}"
                                                    class="@if($errors->has('electrode_inlet_ph'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Electrode Inlet pH" name="electrode_inlet_ph" />
                                                </label>
                                                @if ($errors->has('electrode_inlet_ph'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('electrode_inlet_ph') }}</div>
                                                @endif    
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Post Cartridge PSI</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">32-PI-001</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('post_cart_psi') }}"
                                                    class="@if($errors->has('post_cart_psi'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Post Cartridge PSI" name="post_cart_psi" />
                                                </label>
                                                @if ($errors->has('post_cart_psi'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('post_cart_psi') }}</div>
                                                @endif    
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Stack Inlet PSI</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">32-PI-101</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('stack_inlet_psi') }}"
                                                    class="@if($errors->has('stack_inlet_psi'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Stack Inlet PSI" name="stack_inlet_psi" />
                                                </label>
                                                @if ($errors->has('stack_inlet_psi'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('stack_inlet_psi') }}</div>
                                                @endif    
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Inlet Pressure Diff</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">32-PDI-103</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('inlet_press_dif') }}"
                                                    class="@if($errors->has('inlet_press_dif'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Inlet Pressure Diff" name="inlet_press_dif" />
                                                </label>
                                                @if ($errors->has('inlet_press_dif'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('inlet_press_dif') }}</div>
                                                @endif    
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Outlet Pressure DIff</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">32-PDI-301</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('outlet_press_dif') }}"
                                                    class="@if($errors->has('outlet_press_dif'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Outlet Pressure DIff" name="outlet_press_dif" />
                                                </label>
                                                @if ($errors->has('outlet_press_dif'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('outlet_press_dif') }}</div>
                                                @endif    
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Dilute Stack Outlet PSI</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">32-PI-302</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('dil_stack_outlet_psi') }}"
                                                    class="@if($errors->has('dil_stack_outlet_psi'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Dilute Stack Outlet PSI" name="dil_stack_outlet_psi" />
                                                </label>
                                                @if ($errors->has('dil_stack_outlet_psi'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('dil_stack_outlet_psi') }}</div>
                                                @endif    
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Concentrate Stack Inlet PSI</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">32-PI-401</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('conc_stack_inlet_psi') }}"
                                                    class="@if($errors->has('conc_stack_inlet_psi'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Concentrate Stack Inlet PSI" name="conc_stack_inlet_psi" />
                                                </label>
                                                @if ($errors->has('conc_stack_inlet_psi'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('conc_stack_inlet_psi') }}</div>
                                                @endif    
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Feed Inlet Flow</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">32-FL-101</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('feed_inlet_flow') }}"
                                                    class="@if($errors->has('feed_inlet_flow'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Feed Inlet Flow" name="feed_inlet_flow" />
                                                </label>
                                                @if ($errors->has('feed_inlet_flow'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('feed_inlet_flow') }}</div>
                                                @endif    
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Dilute Outlet Product Flow</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">32-FL-301</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('dil_outlet_flow') }}"
                                                    class="@if($errors->has('dil_outlet_flow'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Dilute Outlet Flow" name="dil_outlet_flow" />
                                                </label>
                                                @if ($errors->has('dil_outlet_flow'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('dil_outlet_flow') }}</div>
                                                @endif    
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">CBD Flow</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">32-FL-401</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('cbd_flow') }}"
                                                    class="@if($errors->has('cbd_flow'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="CBD Flow" name="cbd_flow" />
                                                </label>
                                                @if ($errors->has('cbd_flow'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('cbd_flow') }}</div>
                                                @endif    
                                                </td>
                                            </tr>


                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Concentrate Pump kW</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">@VFD</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('conc_pump_kw') }}"
                                                    class="@if($errors->has('conc_pump_kw'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Concentrate Pump kW" name="conc_pump_kw" />
                                                </label>
                                                @if ($errors->has('conc_pump_kw'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('conc_pump_kw') }}</div>
                                                @endif    
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Concentrate Pump Speed %</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">32-P-401</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('conc_pump_speed') }}"
                                                    class="@if($errors->has('conc_pump_speed'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Concentrate Pump Speed %" name="conc_pump_speed" />
                                                </label>
                                                @if ($errors->has('conc_pump_speed'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('conc_pump_speed') }}</div>
                                                @endif    
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Feed Valve Position %</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">32-FCV-101</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('feed_valve_pos') }}"
                                                    class="@if($errors->has('feed_valve_pos'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Feed Valve Position %" name="feed_valve_pos" />
                                                </label>
                                                @if ($errors->has('feed_valve_pos'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('feed_valve_pos') }}</div>
                                                @endif    
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Electrode Acid Dosage</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">@ 85-MP</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('electrode_dosage') }}"
                                                    class="@if($errors->has('electrode_dosage'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Electrode Acid Dosage" name="electrode_dosage" />
                                                </label>
                                                @if ($errors->has('electrode_dosage'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('electrode_dosage') }}</div>
                                                @endif    
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Antiscalant Dosage</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">@ 86-MP</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('antiscalant_dosage') }}"
                                                    class="@if($errors->has('antiscalant_dosage'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Antiscalant Dosage" name="antiscalant_dosage" />
                                                </label>
                                                @if ($errors->has('antiscalant_dosage'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('antiscalant_dosage') }}</div>
                                                @endif    
                                                </td>
                                            </tr>
                                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Off Spec Time</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap border-r">Data</td>
                                                <td class="py-3 px-3 text-left whitespace-nowrap">
                                                <label class="block">
                                                    <input type="text" value="{{ old('osp_time') }}"
                                                    class="@if($errors->has('osp_time'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Off Spec Time" name="osp_time" />
                                                </label>
                                                @if ($errors->has('osp_time'))
                                                    <div class="text-red-500 text-sm font-bold">{{ $errors->first('osp_time') }}</div>
                                                @endif    
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

             <div class="text-left py-2 pt-16 px-3 -mx-3 -mb-2 rounded-b-lg">
                <a href="{{ url('/edrs') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-3 px-6 rounded leading-tight mr-6 mt-4">
                    Back
                </a>
                <input type="submit" name="save" value="Save" class="bg-teal-500 focus:outline-none focus:bg-teal-600 focus:border-gray-500 hover:bg-teal-400 border-teal-600 text-white font-bold py-3 px-6 rounded leading-tight">
            </div>

        </form>
    </div>
</x-app-layout>