@props(['label' => '', 'value' => '', 'trend' => null])
<div class="card">
    <div class="flex items-baseline justify-between">
        <span class="text-sm font-medium text-neutral-600">{{ $label }}</span>
        @if($trend)
            <span class="text-xs rounded-full px-2 py-1 bg-neutral-100 text-neutral-700">{{ $trend }}</span>
        @endif
    </div>
    <div class="mt-2 text-2xl font-bold text-neutral-900">
        {{ $value ?: $slot }}
    </div>
</div>