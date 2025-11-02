<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-5 py-3 bg-danger border border-transparent rounded-2xl font-semibold text-sm text-white shadow-soft hover:brightness-110 active:brightness-90 focus:outline-none focus:ring-2 focus:ring-danger focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
