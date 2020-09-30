<div {{ $attributes->merge(['class' => 'p-8 pb-12 rounded-lg shadow-lg bg-white text-blue-900']) }}>
    <div class="font-bold">
        {{ $title }}
    </div>
    {{ $slot }}
</div>