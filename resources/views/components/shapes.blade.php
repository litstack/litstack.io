<div class="shapes">
    <div class="shape"></div>
    <div class="shape scnd"></div>
</div>

<x-style lang="scss">
    .shapes{
        position: absolute;
        top: 0;
        height: 100vh;
        width: 100vw;
    }    
    .shape{
        position: absolute;
        top: 0;
        background-color: rgba(90,90,100,.1);
        height: 100vw;
        width: 100vw;
        clip-path: polygon(0 100%, 100% 100%, 100% 0%, 50vw 0%);
    }
    .shape{
        left: 35vw;
        &.scnd{
            left: 15vw;
        }
    }
    </x-style>