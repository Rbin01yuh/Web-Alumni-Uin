<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn-primary px-5 py-3 text-sm font-semibold rounded-2xl']) }}>
    {{ $slot }}
</button>
