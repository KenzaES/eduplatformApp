<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center gap-1.5 rounded-lg border border-purple-600 bg-purple-600 px-3 py-2 text-sm font-semibold leading-5 text-white hover:border-purple-700 hover:bg-purple-700 active:border-purple-600 active:bg-purple-600']) }}>
    {{ $slot }}
</button>
