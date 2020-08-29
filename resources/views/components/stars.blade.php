<div {{ $attributes->merge(['class' => 'flex items-center']) }}>
    @for ($i = 0; $i < 5; $i++)
    <span class="@if($i < $rating) text-yellow-500 @else text-blue-200 @endif "><svg xmlns="http://www.w3.org/2000/svg"
    viewBox="-2 -2 24 24"
    class="w-6 h-6 fill-current inline-block"
    preserveAspectRatio="xMinYMin"
    ><path d="M10 16.207l-6.173 3.246 1.179-6.874L.01 7.71l6.902-1.003L10 .453l3.087 6.254 6.902 1.003-4.995 4.869 1.18 6.874z"/></svg></span>
    @endfor

    <div class="inline-block pl-3">
        ({{ $count }})
    </div>
</div>