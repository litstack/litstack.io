<div {{ $attributes->merge(['class' => 'p-8 rounded-lg shadow-lg bg-white']) }}>
    <div class="font-bold">
        {{ $title }}
    </div>
    {{ $slot }}
</div>