<!DOCTYPE html>
<html lang="en">
<head>
    @if (env('APP_ENV')!='local')
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177622585-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
    
        gtag('config', 'UA-177622585-1');
    </script>
    @endif
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#4853f2">
    <meta name="msapplication-TileColor" content="#070a1f">
    <meta name="theme-color" content="#070a1f">

    <meta property=”og:image” content=”/images/litstack_og.jpg” />
    <meta property="og:title" content="litstack - Laravel content administration framework"/>
    <meta property="og:description" content="A framework for lightning fast creation of Laravel Admin Panels. Litstack offers the possibility to extend Laravel models with CRUD functionality and edit them in a highly extensible interface.">

    <meta name="description" content="A framework for creating Laravel admin panels. Extend Laravel models with CRUD functionality, build forms and edit your data in a highly extensible interface." />
    <meta title="litstack - Laravel content administration framework" />
    
    <title>litstack - Laravel content administration framework</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="crossorigin="anonymous"></script>
    <x-styles />
</head>
<body>
    <div id="app" class="bg-blue-100">
        <x-navigation/>
        <x-header/>
        
        <main class="text-white">
            <section class="bg-blue-900 pb-32">
                <div class="container z-10">
                    <div class="justify-center row">
                        <div class="w-full py-20 text-center lg:w-3/4 col">
                            <p class="text-xl">
                                A framework for lightning fast creation of Laravel Admin Panels.<br>
                                Litstack offers the possibility to extend Laravel models with CRUD functionality and edit them in a highly extensible interface.
                                Freely configurable forms offer endless possibilities to prepare and manage content of all kinds.
                            </p>
                        </div>
                    </div>

                    <div class="justify-center row">
                        <div class="w-full md:w-1/2 lg:w-1/3 col">
                            <x-card class="mb-6 bg-white text-blue-900">
                                <x-slot name="title">
                                    <div class="pb-2">
                                        <div class="mb-4 text-blue-500">
                                            <svg class="h-8 w-8" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" fill="white" fill-opacity="0.01"/><path d="M43 16V42H5V16V16" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 4H43V16H5V4Z" fill="#FFF" stroke="#4853f2" stroke-width="4" stroke-linejoin="round"/><path fill-rule="evenodd" clip-rule="evenodd" d="M11 12C12.1046 12 13 11.1046 13 10C13 8.89543 12.1046 8 11 8C9.89543 8 9 8.89543 9 10C9 11.1046 9.89543 12 11 12Z" fill="#4853f2"/><path fill-rule="evenodd" clip-rule="evenodd" d="M17 12C18.1046 12 19 11.1046 19 10C19 8.89543 18.1046 8 17 8C15.8954 8 15 8.89543 15 10C15 11.1046 15.8954 12 17 12Z" fill="#4853f2"/><path fill-rule="evenodd" clip-rule="evenodd" d="M23 12C24.1046 12 25 11.1046 25 10C25 8.89543 24.1046 8 23 8C21.8954 8 21 8.89543 21 10C21 11.1046 21.8954 12 23 12Z" fill="#4853f2"/></svg>
                                        </div>
                                        Usability
                                    </div>
                                </x-slot>
                                Simple and self-explaning admin panel to give developers and operators more time for productivity in what they do best.
                            </x-card>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 col">
                            <x-card class="mb-6 bg-white text-blue-900">
                                <x-slot name="title">
                                    <div class="pb-2">
                                        <div class="mb-4 text-blue-500">
                                            <svg style="transform: rotate(-90deg);" class="w-8 h-8" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" fill="white" fill-opacity="0.01"/><path d="M30 41.9999H42V29.9999" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M42 17.9999V5.99994H30" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M42 6L6 42" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M24 23.9999L6 5.99994M31.5 31.4999L34 33.9999L39 38.9999L41.5 41.4999L42 41.9999" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </div>
                                        Flexibility
                                    </div>
                                </x-slot>
                                Clean codebase with testable declarative code that keeps your project prepared for any kind of changes.
                            </x-card>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 col">
                            <x-card class="mb-6 bg-white text-blue-900">
                                <x-slot name="title">
                                    <div class="pb-2">
                                        <div class="mb-4 text-blue-500">
                                            <svg class="h-8 w-8" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" fill="white" fill-opacity="0.01"/><path d="M14 29H42V41H14V35V29Z" fill="#4853f2"/><path d="M14 7H42V19H14V13V7Z" fill="#FFF"/><path d="M14 13V19H42V7H14V13ZM14 13H6V35H14M14 35V41H42V29H14V35Z" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 13H6V35H14" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 29H42V41H14V35V29Z" fill="#FFF" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 7H42V19H14V13V7Z" fill="#FFF" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </div>
                                        Compatibility
                                    </div>
                                </x-slot>
                                Build api-based application with a separate front end. Manage content for any kind of application using litstack.
                            </x-card>
                        </div>
                    </div>

                    <div class="relative flex justify-center">
                        <div class="pb-40 mt-12 text-center text-blue-100 lg:pb-24 lg:mt-10">
                            <h2 class="pt-3 pb-0 text-xl font-semibold ">
                                There is more...
                            </h2>
                            <p class="-mt-2" style="max-width: 600px;">
                                See Just some of the build in Features below. Or checkout our extensive and simple docs that guide you through whatever you want to build.<br>
                            </p>
                        </div>
                    </div>
    
                    <div class="justify-center row">
                        <div class="w-full md:w-1/2 lg:w-1/3 col">
                            <x-card class="mb-6 shadow-none">
                                <x-slot name="title">
                                    <div class="pb-2">
                                        <div class="mb-4 text-blue-500">
                                            <svg class="w-8 h-8" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" fill="white" fill-opacity="0.01"/><ellipse cx="24" cy="11" rx="20" ry="6" fill="none" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.7709 15.5C6.61878 16.5994 4 18.208 4 20C4 23.3137 12.9543 26 24 26C35.0457 26 44 23.3137 44 20C44 18.208 41.3812 16.5994 37.2291 15.5C33.7035 16.4335 29.0722 17 24 17C18.9278 17 14.2965 16.4335 10.7709 15.5Z" fill="none" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.7709 24.5C6.61878 25.5994 4 27.208 4 29C4 32.3137 12.9543 35 24 35C35.0457 35 44 32.3137 44 29C44 27.208 41.3812 25.5994 37.2291 24.5C33.7035 25.4335 29.0722 26 24 26C18.9278 26 14.2965 25.4335 10.7709 24.5Z" fill="none" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.7709 33.5C6.61878 34.5994 4 36.208 4 38C4 41.3137 12.9543 44 24 44C35.0457 44 44 41.3137 44 38C44 36.208 41.3812 34.5994 37.2291 33.5C33.7035 34.4335 29.0722 35 24 35C18.9278 35 14.2965 34.4335 10.7709 33.5Z" fill="none" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </div>
                                        Headless
                                    </div>
                                </x-slot>
                                It is super easy to integrate litstack into existing projects. No models, providers or controllers need to be touched. Also Api versioning is no problem with listack.
                            </x-card>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 col">
                            <x-card class="mb-6 shadow-none">
                                <x-slot name="title">
                                    <div class="pb-2">
                                        <div class="mb-4 text-blue-500">
                                            <svg class="w-8 h-8" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" fill="white" fill-opacity="0.01"/><path fill-rule="evenodd" clip-rule="evenodd" d="M8 12C10.2091 12 12 10.2091 12 8C12 5.79086 10.2091 4 8 4C5.79086 4 4 5.79086 4 8C4 10.2091 5.79086 12 8 12Z" fill="none" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path fill-rule="evenodd" clip-rule="evenodd" d="M10 42C13.3137 42 16 39.3137 16 36C16 32.6863 13.3137 30 10 30C6.68629 30 4 32.6863 4 36C4 39.3137 6.68629 42 10 42Z" fill="none" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path fill-rule="evenodd" clip-rule="evenodd" d="M38 44C41.3137 44 44 41.3137 44 38C44 34.6863 41.3137 32 38 32C34.6863 32 32 34.6863 32 38C32 41.3137 34.6863 44 38 44Z" fill="none" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path fill-rule="evenodd" clip-rule="evenodd" d="M22 28C26.4183 28 30 24.4183 30 20C30 15.5817 26.4183 12 22 12C17.5817 12 14 15.5817 14 20C14 24.4183 17.5817 28 22 28Z" fill="none" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path fill-rule="evenodd" clip-rule="evenodd" d="M34 12C36.2091 12 38 10.2091 38 8C38 5.79086 36.2091 4 34 4C31.7909 4 30 5.79086 30 8C30 10.2091 31.7909 12 34 12Z" fill="none" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M11 11L15 15" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M30 12L28 14" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M34 33.5L28 26" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 31L18 27" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </div>
                                        Laravel, Livewire, Vue
                                    </div>
                                </x-slot>
                                Litstack does not care if you prefer livewire, vue or classic plain Blade components. Choose what you like best and start customizing to your needs.
                            </x-card>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 col">
                            <x-card class="mb-6 shadow-none">
                                <x-slot name="title">
                                    <div class="pb-2">
                                        <div class="mb-4 text-blue-500">
                                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                        </div>
                                        Fields
                                    </div>
                                </x-slot>
                                Attach fields to Model attributes. Manage every existing Laravel relation and edit pivot data for polymorphic many-to-many relationships.
                            </x-card>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 col">
                            <x-card class="mb-6 shadow-none">
                                <x-slot name="title">
                                    <div class="pb-2">
                                        <div class="mb-4 text-blue-500">
                                            <svg class="w-8 h-8" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" fill="white" fill-opacity="0.01"/><path fill-rule="evenodd" clip-rule="evenodd" d="M6 42H42V6H32H30C28.6758 9.15854 26.6758 10.7378 24 10.7378C21.3242 10.7378 19.3242 9.15854 18 6H16H6V42Z" fill="none" stroke="#4853f2" stroke-width="4" stroke-linejoin="round"/><path d="M15 24L21 30L33 18" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </div>
                                        Actions
                                    </div>
                                </x-slot>
                                Let the user perform actions like sending mails for one or more models and place them wherever they are needed. In index tables, crud pages or globally in the navigaton.
                            </x-card>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 col">
                            <x-card class="mb-6 shadow-none">
                                <x-slot name="title">
                                    <div class="pb-2">
                                        <div class="mb-4 text-blue-500">
                                            <svg class="w-8 h-8" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" fill="none" fill-opacity="0.01"/><path fill-rule="evenodd" clip-rule="evenodd" d="M4 42H44H4Z" fill="none"/><path d="M4 42H44" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><rect x="8" y="28" width="6" height="14" fill="none" stroke="#4853f2" stroke-width="4" stroke-linejoin="round"/><rect x="21" y="18" width="6" height="24" fill="none" stroke="#4853f2" stroke-width="4" stroke-linejoin="round"/><rect x="34" y="6" width="6" height="36" fill="none" stroke="#4853f2" stroke-width="4" stroke-linejoin="round"/></svg>
                                        </div>
                                        Charts
                                    </div>
                                </x-slot>
                                Create charts in seconds and give the user a feeling about what is happening. Build dashboards or place your charts on crud pages.
                            </x-card>
                        </div>
                        
                        <div class="w-full md:w-1/2 lg:w-1/3 col">
                            <x-card class="mb-6 shadow-none">
                                <x-slot name="title">
                                    <div class="pb-2">
                                        <div class="mb-4 text-blue-500">
                                            <svg class="w-8 h-8" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><g><g><rect fill-opacity="0.01" fill="#FFFFFF" x="0" y="0" width="48" height="48" stroke-width="4" stroke="none" fill-rule="evenodd"/><path d="M6,8.25564385 L24.008642,3 L42,8.25564385 L42,19.0336798 C42,30.3621834 34.7502223,40.4194233 24.0026245,44.0005035 L24.0026245,44.0005035 C13.2520792,40.4194856 6,30.3599802 6,19.0286999 L6,8.25564385 Z" stroke="#4853f2" stroke-width="4" fill="none" fill-rule="nonzero" stroke-linejoin="round"/></g></g></svg>
                                        </div>
                                        Permission
                                    </div>
                                </x-slot>
                                Litstack makes it easy to create authorization through permissions. Also the build in permission manager makes managing roles and permissions a breeze.
                            </x-card>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="relative bg-blue-100 ">
                <div class="absolute top-0 w-full -mt-4 text-blue-900 lg:-mt-2">
                    <svg viewBox="0 0 800 83" class="w-full h-auto transform rotate-180 fill-current" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"><path d="M0 82.871V62.3C134.017 20.767 267.584 0 400.701 0 533.818 0 666.917 20.767 800 62.3v20.571H0z"/></svg>
                </div>
                <div class="relative flex justify-center">
                    <div class="w-full md:w-1/2 lg:w-1/3 col -mt-48 lg:-mt-32">
                        <x-card class="mb-6 shadow-none">
                            <x-slot name="title">
                                <div class="pb-2">
                                    <div class="mb-4 text-blue-500">
                                        <svg class="w-8 h-8" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" fill="white" fill-opacity="0.01"/><path d="M17 32L19.1875 27M31 32L28.8125 27M19.1875 27L24 16L28.8125 27M19.1875 27H28.8125" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M43.1999 20C41.3468 10.871 33.2758 4 23.5999 4C13.9241 4 5.85308 10.871 4 20L10 18" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 28C5.85308 37.129 13.9241 44 23.5999 44C33.2758 44 41.3468 37.129 43.1999 28L38 30" stroke="#4853f2" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                    Translations
                                </div>
                            </x-slot>
                            <span class="text-blue-200">Managing translatable content is easier than ever with translatable fields.</span>
                        </x-card>
                    </div>
                </div>

                {{-- <div class="relative flex justify-center mt-2">
                    <div class="bg-white w-10 h-10 rounded-full flex justify-center items-center shadow-lg">
                        <?xml version="1.0" encoding="UTF-8"?><svg width="24" height="24" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" fill="white" fill-opacity="0.01"/><path d="M24.0083 35.8995V12" stroke="#2831C5" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M36 24L24 36L12 24" stroke="#2831C5" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                </div> --}}
                
                {{-- <div class="relative flex justify-center">
                    <div class="pt-20 pb-40 -mt-48 text-center text-blue-100 lg:pb-24 lg:-mt-32">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" class="w-8 h-8 mx-auto fill-current" preserveAspectRatio="xMinYMin" class="jam-icon jam-3"><path d="M6 2H3a1 1 0 00-1 1v2a1 1 0 001 1h2a1 1 0 001-1V2zM3.01 8v9.965H5V13a2 2 0 012-2h2a2 2 0 012 2v4.965h6.013V8H15c-.768 0-1.47-.289-2-.764A2.989 2.989 0 0111 8H9c-.768 0-1.47-.289-2-.764A2.989 2.989 0 015 8H3.01zm-2-.754A2.993 2.993 0 010 5V3a3 3 0 013-3h14a3 3 0 013 3v2c0 .882-.38 1.676-.987 2.225v10.74a2 2 0 01-2 2h-7.64A2.01 2.01 0 019 20H7a2.01 2.01 0 01-.373-.035H3.011a2 2 0 01-2-2V7.245zM9 17.966V13H7v4.965h2zM12 2H8v3a1 1 0 001 1h2a1 1 0 001-1V2zm2 0v3a1 1 0 001 1h2a1 1 0 001-1V3a1 1 0 00-1-1h-3zm0 9h1a1 1 0 011 1v3a1 1 0 01-1 1h-1a1 1 0 01-1-1v-3a1 1 0 011-1z"/></svg>
                        <h2 class="pt-3 pb-0 text-xl font-semibold ">
                            There is even more...
                        </h2>
                        <p class="-mt-2 text-xl ">
                            Check out the official litstack packages<br>
                        </p>
                    </div>
                </div> --}}
            </section>
            <section class="relative pb-24">
                
                <div class="container">
                    <div class="row justify-center">
                        <div class="pt-32 pb-40 text-center text-blue-900 lg:pb-24">
                            <h2 class="pt-3 pb-0 text-xl font-semibold">
                                ... and its Open-Source!
                            </h2>
                            <p class="-mt-2 mb-20">
                                Just install it via composer.<br>
                            </p>
                            <code class="p-8 mt-10 rounded shadow-lg h-full bg-gray-800 text-white font-mono">
                            composer require litstack/litstack
                            </code>
                        </div>
                    </div>

                    <div class="mt-20 mb-10 row justify-center">
                        <div>
                            <div class="justify-center flex">
                                <svg class="w-10 h-10 mb-2" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" fill="white" fill-opacity="0.01"/><path d="M4 14L3.10557 12.2111C2.428 12.5499 2 13.2425 2 14H4ZM24 4L24.8944 2.21115C24.3314 1.92962 23.6686 1.92962 23.1056 2.21115L24 4ZM44 14H46C46 13.2425 45.572 12.5499 44.8944 12.2111L44 14ZM44 34L44.8944 35.7889C45.572 35.4501 46 34.7575 46 34H44ZM24 44L23.1056 45.7889C23.6686 46.0704 24.3314 46.0704 24.8944 45.7889L24 44ZM4 34H2C2 34.7575 2.428 35.4501 3.10557 35.7889L4 34ZM4.89443 15.7889L24.8944 5.78885L23.1056 2.21115L3.10557 12.2111L4.89443 15.7889ZM42 14V34H46V14H42ZM43.1056 32.2111L23.1056 42.2111L24.8944 45.7889L44.8944 35.7889L43.1056 32.2111ZM24.8944 42.2111L4.89443 32.2111L3.10557 35.7889L23.1056 45.7889L24.8944 42.2111ZM6 34V14H2V34H6ZM44.8944 12.2111L24.8944 2.21115L23.1056 5.78885L43.1056 15.7889L44.8944 12.2111Z" fill="#333"/><path d="M4 14L24 24" stroke="#333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path fill-rule="evenodd" clip-rule="evenodd" d="M24 24V44Z" fill="#FFF"/><path d="M24 44V24" stroke="#333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M44 14L24 24" stroke="#333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M34.8944 10.7889C35.8824 10.2949 36.2828 9.09353 35.7889 8.10557C35.2949 7.11762 34.0935 6.71717 33.1056 7.21115L34.8944 10.7889ZM13.1056 17.2111C12.1176 17.7051 11.7172 18.9065 12.2111 19.8944C12.7051 20.8824 13.9065 21.2828 14.8944 20.7889L13.1056 17.2111ZM33.1056 7.21115L13.1056 17.2111L14.8944 20.7889L34.8944 10.7889L33.1056 7.21115Z" fill="#333"/></svg>
                            </div>
                            <p class="text-xl font-bold text-blue-900">
                                Check out the official packages.<br>
                            </p>
                        </div>
                        
                    </div>
                    <div class="row">
                        
                        <div class="w-full md:w-1/2 lg:w-1/3 col">
                            <x-card class="relative pb-24 bg-white text-blue-900">
                                <x-slot name="title">
                                    <div class="pb-4 text-black">
                                        Bladesmith
                                    </div>
                                </x-slot>
                                <p class="pb-4">A frontend package with helper functions and Blade components for your Litstack project. Lazy loading images, translatable routes and much more.</p>
                                {{-- <x-stars rating="4" count="92" class="pt-3 pb-4"/> --}}
                                <a href="{{ url('docs/packages/bladesmith') }}" class="py-2 text-blue-600 border-b border-blue-600">
                                    Go to package
                                </a>
                                <footer class="absolute bottom-0 w-full py-4 mt-6 -mx-8 border-t border-blue-200">
                                    <div class="px-8 text-xs font-bold uppercase">
                                        <img src="https://avatars1.githubusercontent.com/u/29352871?s=400&u=5c8e0dde9014befd3205ee103959eeb4adb364eb&v=4" class="inline-block w-8 h-8 mr-3 rounded-full">
                                        <a href="https://github.com/cbl">Lennart Carstens-Behrens</a>
                                    </div>
                                </footer>
                            </x-card>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 col">
                            <x-card class="relative pb-24 bg-white text-blue-900">
                                <x-slot name="title">
                                    <div class="pb-4 text-black">
                                        Pages
                                    </div>
                                </x-slot>
                                <p class="pb-4">A package to turn your litstack application into a CMS. Add new pages to your application via the litstack interface, and fill them with content.</p>

                                {{-- <x-stars rating="4" count="92" class="pt-3 pb-4"/> --}}
                                <a href="{{ url('docs/packages/pages') }}" class="py-2 text-blue-600 border-b border-blue-600">
                                    Go to package
                                </a>
                                <footer class="absolute bottom-0 w-full py-4 mt-6 -mx-8 border-t border-blue-200">
                                    <div class="px-8 text-xs font-bold uppercase">
                                        <img src="https://avatars1.githubusercontent.com/u/29352871?s=400&u=5c8e0dde9014befd3205ee103959eeb4adb364eb&v=4" class="inline-block w-8 h-8 mr-3 rounded-full">
                                        <a href="https://github.com/cbl">Lennart Carstens-Behrens</a>
                                    </div>
                                </footer>
                            </x-card>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 col">
                            <x-card class="relative pb-24 bg-white text-blue-900">
                                <x-slot name="title">
                                    <div class="pb-4 text-black">
                                        Rehearsal
                                    </div>
                                </x-slot>
                                <p class="pb-4">An orchestra extension to simplify testing packages in a litstack application environment.</p>

                                {{-- <x-stars rating="4" count="92" class="pt-3 pb-4"/> --}}
                                <a href="{{ url('docs/packages/rehearsal') }}" class="py-2 text-blue-600 border-b border-blue-600">
                                    Go to package
                                </a>
                                <footer class="absolute bottom-0 w-full py-4 mt-6 -mx-8 border-t border-blue-200">
                                    <div class="px-8 text-xs font-bold uppercase">
                                        <img src="https://avatars1.githubusercontent.com/u/29352871?s=400&u=5c8e0dde9014befd3205ee103959eeb4adb364eb&v=4" class="inline-block w-8 h-8 mr-3 rounded-full">
                                        <a href="https://github.com/cbl">Lennart Carstens-Behrens</a>
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