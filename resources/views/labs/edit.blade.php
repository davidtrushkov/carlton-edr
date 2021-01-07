<x-app-layout>

    <div class="container mx-auto pt-12 pb-12"> 
        <form action="/labs/post/update/{{$lab->id}}" method="post" >
        @csrf

        <div class="lg:flex lg:justify-between mb-12">
            <div class="lg:flex-1 bg-white rounded-lg p-4">
             
                <div class="grid grid-cols-2">
                    <div class="pb-12">
                        <label class="block">
                            <span class="text-sm text-gray-500 font-bold">Date of Lab</span>
                            <input type="date" name="lab_date" value="{{ old('lab_date') ? old('lab_date') : date('Y-m-d', strtotime($lab->lab_date)) }}" class="@if($errors->has('lab_date'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                        </label>
                        @if ($errors->has('lab_date'))
                            <div class="text-red-500 text-sm font-bold">{{ $errors->first('lab_date') }}</div>
                        @endif
                    </div>
                </div>

                @if(session()->has('error_message'))
                    <div class="flex pb-6">
                        <div class="bg-red-300 border red-green-600 text-red-800 pl-4 pr-8 py-3 rounded inline-flex" role="alert">
                            <strong class="font-bold">Error!</strong>
                            <span class="block sm:inline pl-6">{{ session('error_message') }}</span>
                        </div>
                    </div>
                @endif

                    
                <div class="text-gray-700 font-bold inline-block align-middle mb-2">Effluent</div><hr class="mb-6" />
                <div class="grid md:grid-cols-8 sm:grid-cols-4 gap-4">
                    <div>
                        <label class="block">
                            <span class="text-sm text-gray-500 font-bold">pH</span>
                            <input type="text" value="{{ old('eff_ph') ? old('eff_ph') : $lab->eff_ph }}"
                            class="@if($errors->has('eff_ph'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder="pH" name="eff_ph" />
                        </label>
                        @if ($errors->has('eff_ph'))
                            <div class="text-red-500 text-sm font-bold">{{ $errors->first('eff_ph') }}</div>
                        @endif
                    </div>
                    <div>
                        <label class="block">
                        <span class="text-sm text-gray-500 font-bold">CLT-T</span>
                            <input type="text" value="{{ old('eff_cl2t') ? old('eff_cl2t') : $lab->eff_cl2t }}"
                            class="@if($errors->has('eff_cl2t'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder="Cl2-T" name="eff_cl2t" />
                        </label>
                        @if ($errors->has('eff_cl2t'))
                            <div class="text-red-500 text-sm font-bold">{{ $errors->first('eff_cl2t') }}</div>
                        @endif
                    </div>

                    <div>
                        <label class="block">
                        <span class="text-sm text-gray-500 font-bold">CLT-F</span>
                            <input type="text" value="{{ old('eff_peff_cl2fh') ? old('eff_cl2f') : $lab->eff_cl2f }}" 
                            class="@if($errors->has('eff_cl2f'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder="Cl2-F" name="eff_cl2f" />
                        </label>
                        @if ($errors->has('eff_cl2f'))
                            <div class="text-red-500 text-sm font-bold">{{ $errors->first('eff_cl2f') }}</div>
                        @endif
                    </div>
                    <div>
                        <label class="block">
                        <span class="text-sm text-gray-500 font-bold">NH4-T</span>
                            <input type="text" value="{{ old('eff_nh4t') ? old('eff_nh4t') : $lab->eff_nh4t }}" 
                            class="@if($errors->has('eff_nh4t'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder="NH4-T" name="eff_nh4t" />
                        </label>
                        @if ($errors->has('eff_nh4t'))
                            <div class="text-red-500 text-sm font-bold">{{ $errors->first('eff_nh4t') }}</div>
                        @endif
                    </div>
                    <div>
                        <label class="block">
                        <span class="text-sm text-gray-500 font-bold">NH4-F</span>
                            <input type="text" value="{{ old('eff_nh4f') ? old('eff_nh4f') : $lab->eff_nh4f }}" 
                            class="@if($errors->has('eff_nh4f'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder="NH4-F" name="eff_nh4f" />
                        </label>
                        @if ($errors->has('eff_nh4f'))
                            <div class="text-red-500 text-sm font-bold">{{ $errors->first('eff_nh4f') }}</div>
                        @endif
                    </div>
                    <div>
                        <label class="block">
                        <span class="text-sm text-gray-500 font-bold">PO4</span>
                            <input type="text" value="{{ old('eff_po4') ? old('eff_po4') : $lab->eff_po4 }}" 
                            class="@if($errors->has('eff_po4'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder="PO4" name="eff_po4" />
                        </label>
                        @if ($errors->has('eff_po4'))
                            <div class="text-red-500 text-sm font-bold">{{ $errors->first('eff_po4') }}</div>
                        @endif
                    </div>
                    <div>
                        <label class="block">
                        <span class="text-sm text-gray-500 font-bold">COND</span>
                            <input type="text" value="{{ old('eff_cond') ? old('eff_cond') : $lab->eff_cond }}" 
                            class="@if($errors->has('eff_cond'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder="COND" name="eff_cond" />
                        </label>
                        @if ($errors->has('eff_cond'))
                            <div class="text-red-500 text-sm font-bold">{{ $errors->first('eff_cond') }}</div>
                        @endif
                    </div>
                    <div>
                        <label class="block">
                        <span class="text-sm text-gray-500 font-bold">TURB</span>
                            <input type="text" value="{{ old('eff_turb') ? old('eff_turb') : $lab->eff_turb }}" 
                            class="@if($errors->has('eff_turb'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder="TURB" name="eff_turb" />
                        </label>
                        @if ($errors->has('eff_turb'))
                            <div class="text-red-500 text-sm font-bold">{{ $errors->first('eff_turb') }}</div>
                        @endif
                    </div>
                </div>

            </div>
        </div>







        <div class="lg:flex lg:justify-between mb-12">
            <div class="lg:flex-1 bg-white rounded-lg p-4">
             
                    
                <div class="text-gray-700 font-bold inline-block align-middle mb-2">Peace River Pre</div><hr class="mb-6" />
                <div class="grid md:grid-cols-8 sm:grid-cols-4 gap-4">
                    <div>
                        <label class="block">
                            <span class="text-sm text-gray-500 font-bold">pH</span>
                            <input type="text" value="{{ old('pre_ph') ? old('pre_ph') : $lab->pre_ph }}"
                            class="@if($errors->has('pre_ph'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder="pH" name="pre_ph" />
                        </label>
                        @if ($errors->has('pre_ph'))
                            <div class="text-red-500 text-sm font-bold">{{ $errors->first('pre_ph') }}</div>
                        @endif
                    </div>
                    <div>
                        <label class="block">
                        <span class="text-sm text-gray-500 font-bold">CLT-T</span>
                            <input type="text" value="{{ old('eff_pre_cl2tturb') ? old('pre_cl2t') : $lab->pre_cl2t }}"
                            class="@if($errors->has('pre_cl2t'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder="Cl2-T" name="pre_cl2t" />
                        </label>
                        @if ($errors->has('pre_cl2t'))
                            <div class="text-red-500 text-sm font-bold">{{ $errors->first('pre_cl2t') }}</div>
                        @endif
                    </div>

                    <div>
                        <label class="block">
                        <span class="text-sm text-gray-500 font-bold">NH4-T</span>
                            <input type="text" value="{{ old('pre_nh4t') ? old('pre_nh4t') : $lab->pre_nh4t }}" 
                            class="@if($errors->has('pre_nh4t'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder="NH4-T" name="pre_nh4t" />
                        </label>
                        @if ($errors->has('pre_nh4t'))
                            <div class="text-red-500 text-sm font-bold">{{ $errors->first('pre_nh4t') }}</div>
                        @endif
                    </div>

                    <div>
                        <label class="block">
                        <span class="text-sm text-gray-500 font-bold">COND</span>
                            <input type="text" value="{{ old('pre_cond') ? old('pre_cond') : $lab->pre_cond }}" 
                            class="@if($errors->has('pre_cond'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder="COND" name="pre_cond" />
                        </label>
                        @if ($errors->has('pre_cond'))
                            <div class="text-red-500 text-sm font-bold">{{ $errors->first('pre_cond') }}</div>
                        @endif
                    </div>
                    <div>
                        <label class="block">
                        <span class="text-sm text-gray-500 font-bold">TURB</span>
                            <input type="text" value="{{ old('pre_turb') ? old('pre_turb') : $lab->pre_turb }}" 
                            class="@if($errors->has('pre_turb'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder="TURB" name="pre_turb" />
                        </label>
                        @if ($errors->has('pre_turb'))
                            <div class="text-red-500 text-sm font-bold">{{ $errors->first('pre_turb') }}</div>
                        @endif
                    </div>
                </div>

            </div>
        </div>





        <div class="lg:flex lg:justify-between mb-12">
            <div class="lg:flex-1 bg-white rounded-lg p-4">
             
                    
                <div class="text-gray-700 font-bold inline-block align-middle mb-2">Peace River Post</div><hr class="mb-6" />
                <div class="grid md:grid-cols-8 sm:grid-cols-4 gap-4">
                    <div>
                        <label class="block">
                            <span class="text-sm text-gray-500 font-bold">pH</span>
                            <input type="text" value="{{ old('post_ph') ? old('post_ph') : $lab->post_ph }}"
                            class="@if($errors->has('post_ph'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder="pH" name="post_ph" />
                        </label>
                        @if ($errors->has('post_ph'))
                            <div class="text-red-500 text-sm font-bold">{{ $errors->first('post_ph') }}</div>
                        @endif
                    </div>
                    <div>
                        <label class="block">
                        <span class="text-sm text-gray-500 font-bold">CLT-T</span>
                            <input type="text" value="{{ old('post_cl2t') ? old('post_cl2t') : $lab->post_cl2t }}"
                            class="@if($errors->has('post_cl2t'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder="Cl2-T" name="post_cl2t" />
                        </label>
                        @if ($errors->has('post_cl2t'))
                            <div class="text-red-500 text-sm font-bold">{{ $errors->first('post_cl2t') }}</div>
                        @endif
                    </div>

                    <div>
                        <label class="block">
                        <span class="text-sm text-gray-500 font-bold">NH4-T</span>
                            <input type="text" value="{{ old('post_nh4t') ? old('post_nh4t') : $lab->post_nh4t }}" 
                            class="@if($errors->has('post_nh4t'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder="NH4-T" name="post_nh4t" />
                        </label>
                        @if ($errors->has('post_nh4t'))
                            <div class="text-red-500 text-sm font-bold">{{ $errors->first('post_nh4t') }}</div>
                        @endif
                    </div>

                    <div>
                        <label class="block">
                        <span class="text-sm text-gray-500 font-bold">PO4</span>
                            <input type="text" value="{{ old('post_po4') ? old('post_po4') : $lab->post_po4 }}" 
                            class="@if($errors->has('post_po4'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder="PO4" name="post_po4" />
                        </label>
                        @if ($errors->has('post_po4'))
                            <div class="text-red-500 text-sm font-bold">{{ $errors->first('post_po4') }}</div>
                        @endif
                    </div>

                    <div>
                        <label class="block">
                        <span class="text-sm text-gray-500 font-bold">COND</span>
                            <input type="text" value="{{ old('post_cond') ? old('post_cond') : $lab->post_cond }}" 
                            class="@if($errors->has('post_cond'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder="COND" name="post_cond" />
                        </label>
                        @if ($errors->has('post_cond'))
                            <div class="text-red-500 text-sm font-bold">{{ $errors->first('post_cond') }}</div>
                        @endif
                    </div>
                    <div>
                        <label class="block">
                        <span class="text-sm text-gray-500 font-bold">TURB</span>
                            <input type="text" value="{{ old('post_turb') ? old('post_turb') : $lab->post_turb }}" 
                            class="@if($errors->has('post_turb'))border-red-500 @endif p-2 mt-1 block w-full rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder="TURB" name="post_turb" />
                        </label>
                        @if ($errors->has('post_turb'))
                            <div class="text-red-500 text-sm font-bold">{{ $errors->first('post_turb') }}</div>
                        @endif
                    </div>
                </div>

            </div>
        </div>




        <div class="block text-right py-2 pt-16 px-3 -mx-3 -mb-2 rounded-b-lg">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg">
                Update
            </button>
        </div>

    </form>
</div>

</x-app-layout>