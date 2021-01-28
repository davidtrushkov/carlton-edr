<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-3 bg-teal-500 font-bold text-sm text-white tracking-widest hover:bg-teal-400 active:bg-teal-700 focus:outline-none focus:shadow-outline-teal disabled:opacity-25 transition ease-in-out duration-150 rounded']) }}>
    {{ $slot }}
</button>
