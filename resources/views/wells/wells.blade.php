<x-app-layout>

    <div class="container mx-auto pt-12 pb-12">
        @if(session()->has('success'))
            <div class="flex pb-6">
                <div class="bg-green-300 border red-green-600 text-green-800 pl-3 pr-3 py-3 rounded inline-flex" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            </div>
        @endif

        <div class="lg:flex lg:mx-4 lg:justify-between">
            <div class="lg:w-64 bg-white md:mb-12 lg:m-0 rounded-lg not-rounded-xs p-4 border-bottom-xs">
                @include('components.sidebar')
            </div>
            <div class="lg:flex-1 lg:mx-4 bg-white rounded-lg not-rounded-xs p-4">       
                <livewire:wells-table></livewire:labs-table>
            </div>
        </div>
    </div>

</x-app-layout>