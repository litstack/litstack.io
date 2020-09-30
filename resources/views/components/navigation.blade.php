<nav class="z-20 w-full text-black bg-blue-100">
    <div class="container flex items-center justify-between h-32 border-b border-blue-200">
        <a href="#">
            <img src="/images/litstack_logo.svg" alt="Litstack Logo" class="h-12 mt-2">
        </a>
        <ul>
            <li class="inline-block mr-16">
                <a href="https://litstack.io/docs/master" target="_blank">Documentation</a>
            </li>
            <li class="inline-block">
                <x-dd-search-input 
                    repo="litstack/docs" 
                    :version="DEFAULT_VERSION"
                />
            </li>
        </ul>
    </div>
</nav>