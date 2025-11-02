@props(['title' => '', 'desc' => '', 'icon' => null])
<div class="card h-full">
    <div class="flex items-center gap-3">
        @if($icon)
            <div class="inline-flex items-center justify-center w-10 h-10 rounded-2xl bg-gradient-to-br from-accent to-primary text-white">
                {!! $icon !!}
            </div>
        @endif
        <h3 class="text-lg font-semibold text-neutral-900">{{ $title }}</h3>
    </div>
    <p class="mt-2 text-neutral-700">{{ $desc }}</p>
</div>