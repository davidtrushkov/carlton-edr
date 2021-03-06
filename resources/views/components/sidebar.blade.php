<div class="md:flex flex-col md:flex-row w-full"> <!-- lg:min-h-screen -->
    
<!-- md:w-64 -->
    <div @click.away="open = false" 
        class="flex flex-col w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">

        <div class="flex-shrink-0 py-4 flex flex-row items-center justify-between md:hidden">
            <!-- <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
                SIDE-BAR
            </a> -->
            <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
            
            
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>        
            <!-- <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg> -->
            </button>
        </div>
        <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block pb-4 md:pb-0 md:overflow-y-auto">
            <a class="block px-4 py-2 mt-2 text-sm font-bold text-gray-800 {{ Route::is('dashboard') ? 'bg-teal-100' : 'bg-transparent' }} rounded dark-mode:bg-transparent dark-mode:hover:bg-teal-600 dark-mode:focus:bg-teal-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-teal-200 hover:text-teal-900 focus:text-teal-900 hover:bg-teal-200 focus:bg-teal-200 focus:outline-none" href="{{ route('dashboard') }}">
                    Dashboard
                </a>
            <a class="block px-4 py-2 mt-2 text-sm font-bold text-gray-800 {{ Route::is('labs') ? 'bg-teal-100' : 'bg-transparent' }} rounded dark-mode:bg-teal-700 dark-mode:hover:bg-teal-600 dark-mode:focus:bg-teal-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-teal-200 hover:text-teal-900 focus:text-teal-900 hover:bg-teal-200 focus:bg-teal-200 focus:outline-none" href="{{ route('labs') }}">
                Labs
            </a>
            <a class="block px-4 py-2 mt-2 text-sm font-bold text-gray-800 {{ Route::is('wells') ? 'bg-teal-100' : 'bg-transparent' }} rounded dark-mode:bg-teal-700 dark-mode:hover:bg-teal-600 dark-mode:focus:bg-teal-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-teal-200 hover:text-teal-900 focus:text-teal-900 hover:bg-teal-200 focus:bg-teal-200 focus:outline-none" href="{{ route('wells') }}">
                Wells
            </a>
            <a class="block px-4 py-2 mt-2 text-sm font-bold text-gray-800 {{ Route::is('files') ? 'bg-teal-100' : 'bg-transparent' }} rounded dark-mode:bg-teal-700 dark-mode:hover:bg-teal-600 dark-mode:focus:bg-teal-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-teal-200 hover:text-teal-900 focus:text-teal-900 hover:bg-teal-200 focus:bg-teal-200 focus:outline-none" href="{{ route('files') }}">
                Files
            </a>
            <a class="block px-4 py-2 mt-2 text-sm font-bold text-gray-800 {{ Route::is('edrs') ? 'bg-teal-100' : 'bg-transparent' }} rounded dark-mode:bg-teal-700 dark-mode:hover:bg-teal-600 dark-mode:focus:bg-teal-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-teal-200 hover:text-teal-900 focus:text-teal-900 hover:bg-teal-200 focus:bg-teal-200 focus:outline-none" href="{{ route('edrs') }}">
                EDRs
            </a>
            <!-- <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    <span>Dropdown</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                    <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #1</a>
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #2</a>
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #3</a>
                    </div>
                </div>
            </div> -->
        </nav>
    </div>
</div>