<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>litstack.io</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="crossorigin="anonymous"></script>
    <x-styles />
</head>
<body>
    <div id="app" class="bg-blue-100">
        <x-navigation/>
        <x-header/>
        <main>
            <div class="container z-10">
                <div class="row justify-center">
                    <div class="col py-20 w-2/3">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit nemo, itaque aliquid aperiam voluptates architecto sed, ea eum eius reiciendis consequatur iusto exercitationem voluptas! Nulla ducimus nesciunt cumque error ratione?
                        </p>
                    </div>
                </div>
                <div class="row">
                    @for ($i = 0; $i < 6; $i++)
                    <div class="col w-1/3">
                        <x-card class="mb-6">
                            <x-slot name="title">
                                <div class="text-blue-500 pb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -3 24 24" class="w-8 h-8 fill-current" preserveAspectRatio="xMinYMin" class="jam-icon jam-0"><path d="M7.116 10.749L6 1.948l-1.116 8.8H1c-.552 0-1-.437-1-.976a.99.99 0 011-.978h2.116l.9-7.086C4.15.636 5.15-.124 6.245.008c.91.11 1.626.81 1.739 1.7l.899 7.086h1.974L12 16.04l1.142-7.245H19c.552 0 1 .438 1 .978s-.448.977-1 .977h-4.142l-.881 5.587a1.978 1.978 0 01-1.672 1.634c-1.092.165-2.113-.567-2.282-1.634l-.88-5.587H7.115z"/></svg>
                                    Charts
                                </div>
                            </x-slot>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae delectus ut pariatur nulla minima. Expedita, consectetur. Ipsa alias explicabo dolore molestiae mollitia? Molestias sint nisi ipsa, iusto aut facilis minima.
                        </x-card>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="relative">
                <x-wings/>
                <div class="relative flex justify-center">
                    <div class="text-blue-500 text-center pt-20 pb-40">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" class="w-8 h-8 fill-current mx-auto" preserveAspectRatio="xMinYMin" class="jam-icon jam-3"><path d="M6 2H3a1 1 0 00-1 1v2a1 1 0 001 1h2a1 1 0 001-1V2zM3.01 8v9.965H5V13a2 2 0 012-2h2a2 2 0 012 2v4.965h6.013V8H15c-.768 0-1.47-.289-2-.764A2.989 2.989 0 0111 8H9c-.768 0-1.47-.289-2-.764A2.989 2.989 0 015 8H3.01zm-2-.754A2.993 2.993 0 010 5V3a3 3 0 013-3h14a3 3 0 013 3v2c0 .882-.38 1.676-.987 2.225v10.74a2 2 0 01-2 2h-7.64A2.01 2.01 0 019 20H7a2.01 2.01 0 01-.373-.035H3.011a2 2 0 01-2-2V7.245zM9 17.966V13H7v4.965h2zM12 2H8v3a1 1 0 001 1h2a1 1 0 001-1V2zm2 0v3a1 1 0 001 1h2a1 1 0 001-1V3a1 1 0 00-1-1h-3zm0 9h1a1 1 0 011 1v3a1 1 0 01-1 1h-1a1 1 0 01-1-1v-3a1 1 0 011-1z"/></svg>
                        <h2 class="text-2xl py-3 font-bold">
                            There is even more...
                        </h2>
                        <p>
                            Check out the official litstack packages<br>
                            {{-- at the package store --}}
                        </p>
                    </div>
                </div>
            </div>
            <section class="bg-blue-500 pb-12">
                <div class="container">
                    <div class="row">
                        
                        <div class="col w-1/3">
                            <x-card class="mb-6">
                                <x-slot name="title">
                                    <div class="text-black pb-4">
                                        Bladesmith
                                    </div>
                                </x-slot>
                                <p class="pb-4">A frontend package with helper functions and Blade components for your Litstack project. Lazy loading images, translatable routes and much more.</p>
                                {{-- <x-stars rating="4" count="92" class="pt-3 pb-4"/> --}}
                                <a href="{{ url('docs/packages/bladesmith') }}" class="py-2 text-blue-600 border-b border-blue-600">
                                    Go to package
                                </a>
                                <footer class="mt-6 -mx-8 border-t border-blue-200">
                                    <div class="px-8 -mb-4 mt-4 text-xs font-bold uppercase">
                                        <img src="https://avatars1.githubusercontent.com/u/29352871?s=400&u=5c8e0dde9014befd3205ee103959eeb4adb364eb&v=4" class="rounded-full w-8 h-8 inline-block mr-3">
                                        Lennart Carstens-Behrens
                                    </div>
                                </footer>
                            </x-card>
                        </div>
                        <div class="col w-1/3">
                            <x-card class="mb-6">
                                <x-slot name="title">
                                    <div class="text-black pb-4">
                                        Pages
                                    </div>
                                </x-slot>
                                <p class="pb-4">A package to turn your litstack application into a CMS. Add new pages to your application via the litstack interface, and fill them with content.</p>

                                {{-- <x-stars rating="4" count="92" class="pt-3 pb-4"/> --}}
                                <a href="{{ url('docs/packages/pages') }}" class="py-2 text-blue-600 border-b border-blue-600">
                                    Go to package
                                </a>
                                <footer class="mt-6 -mx-8 border-t border-blue-200">
                                    <div class="px-8 -mb-4 mt-4 text-xs font-bold uppercase">
                                        <img src="https://avatars1.githubusercontent.com/u/29352871?s=400&u=5c8e0dde9014befd3205ee103959eeb4adb364eb&v=4" class="rounded-full w-8 h-8 inline-block mr-3">
                                        Lennart Carstens-Behrens
                                    </div>
                                </footer>
                            </x-card>
                        </div>
                        
                    </div>
                </div>
            </section>
        </main>
        @include('partials.footer')
    </div>
</body>
</html>