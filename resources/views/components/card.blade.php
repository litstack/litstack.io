<div {{ $attributes->merge(['class' => 'p-8 rounded-lg shadow-lg bg-white text-blue-900 h-full']) }}>
    <div class="font-bold">
        {{ $title }}
    </div>
    {{ $slot }}
</div>