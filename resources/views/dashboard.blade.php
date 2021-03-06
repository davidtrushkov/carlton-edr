<x-app-layout>

    <div class="container mx-auto pt-12-sm pb-12">
        <div class="lg:flex lg:justify-between">
            <div class="lg:w-64 bg-white md:mb-12 lg:m-0 rounded-lg p-4 xs-p-2 not-rounded-xs">
                @include('components.sidebar')
            </div>
            <div class="lg:flex-1 lg:mx-10 bg-white rounded-lg p-4 xs-p-2 not-rounded-xs">
                <div class="flex flex-row flex-wrap flex-grow mt-2">  
                    <div class="w-full p-2">

                        @include('components.dashboard.form')
   
                        @if(!request('wellId')) 
                            @include('components.dashboard.total-chlorine-chart')
                        @endif
                        
                        <div class="grid grid-cols-2 xs-grid-cols-none gap-4">
                            @include('components.dashboard.well-cond')
                            @include('components.dashboard.well-ntu')
                        </div>

                        <div class="grid grid-cols-2 xs-grid-cols-none gap-4">
                            @include('components.dashboard.well-do')
                            @include('components.dashboard.well-ph')
                        </div>

                        @if(!request('wellId')) 
                            @include('components.dashboard.edr-run-hours')
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
