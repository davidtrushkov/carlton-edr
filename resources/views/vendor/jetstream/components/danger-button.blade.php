<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center justify-center px-4 py-3 bg-red-600 rounded font-bold text-sm text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
