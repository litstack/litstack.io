<nav class="z-20 w-full text-blue-900 bg-blue-100">
    <div class="container flex items-center justify-between h-32 border-b border-blue-200">
        <a href="#">
            <img src="/images/litstack_logo.svg" alt="Litstack Logo" class="h-12 mt-2">
        </a>
        <ul class="flex items-center">
            <li class="mr-16 lg:inline-block">
                <a href="{{ url('docs') }}">Documentation</a>
            </li>
            <li class="items-center hidden lg:inline-flex">
                <div class="absolute ml-3">
                    <svg class="w-5 h-5 fill-current jam-icon jam-3" xmlns="http://www.w3.org/2000/svg" viewBox="-2.5 -2.5 24 24" preserveAspectRatio="xMinYMin" ><path d="M8 14A6 6 0 108 2a6 6 0 000 12zm6.32-1.094l3.58 3.58a1 1 0 11-1.415 1.413l-3.58-3.58a8 8 0 111.414-1.414z"/></svg>
                </div>
                <x-dd-search-input 
                    repo="litstack/docs" 
                    :version="DEFAULT_VERSION"
                />
            </li>
        </ul>
    </div>
</nav>