<div {{ $attributes->merge(['class' => 'p-8 rounded-lg shadow-lg h-full']) }}>
    <div class="font-bold">
        {{ $title }}
    </div>
    {{ $slot }}
</div>