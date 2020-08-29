<nav id="main-navigation" class="border-gray-500 border-solid border-b">
    <div class="logo">Litstack</div>
    <div class="flex">
        <ul class="links">
            <li class="active border-indigo-700">Documentation</li>
            <li class="border-indigo-700">Packages</li>
        </ul>
        <div class="search" style="width:300px">

            <x-dd-search-input repo="litstack/docs" version="master" />
        
        </div>
    </div>
</nav>
<x-style lang="scss">
$navigation-height: 90px;
nav#main-navigation{
    height: $navigation-height;
    position: relative;
    justify-content: space-between;
    display:flex;

    ul.links{
        display: flex;

        li{
            line-height: $navigation-height;
            border-bottom-width: 0px;

            &.active, &:hover{
                border-bottom-width: 2px;
            }
        }
        
    }
}
</x-style>