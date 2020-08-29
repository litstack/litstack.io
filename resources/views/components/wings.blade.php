<div class="wings absolute bottom-0 h-full w-full">
    <div class="absolute top-0 left-0 wing-light bg-blue-200"></div>
    <div class="absolute top-0 left-0 wing-blue bg-blue-500"></div>
    <div class="absolute bluebar bg-blue-500"></div>
</div>

<x-style lang="scss">

.bluebar{
    bottom: 0px;
    height: 51px;
    width: 100%;
}
.wing-light{
    top: -50px;
    height: 100%;
    width: 100%;
    clip-path: polygon(0 0, 50% 96%, 100% 0%, 100% 100%, 0 100%);
}
.wing-blue{
    top: -50px;
    height: 100%;
    width: 100%;
    clip-path: polygon(0 30%, 50% 98%, 100% 30%, 100% 100%, 0 100%);
}
</x-style>