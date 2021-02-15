<x-app-layout>

    <div class="container mx-auto pt-12 pb-12">
        <div class="lg:flex lg:mx-4 lg:justify-between">
            <div class="lg:w-64 bg-white md:mb-12 lg:m-0 rounded-lg not-rounded-xs p-4 xs-p-2 border-bottom-xs">
                @include('components.sidebar')
            </div>
            <div class="lg:flex-1 lg:mx-4 bg-white rounded-lg not-rounded-xs p-4 xs-p-2"> 
                <livewire:file-browser :object="$object" :ancestors="$ancestors" />
            </div>
        </div>
    </div>

</x-app-layout>