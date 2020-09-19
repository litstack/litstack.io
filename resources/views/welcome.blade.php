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
                    <div class="col w-1/3">
                        <x-card class="mb-6">
                            <x-slot name="title">
                                <div class="text-blue-500 pb-4">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                                    Headless
                                </div>
                            </x-slot>
                            It is super easy to integrate litstack into existing projects. No models, providers or controllers need to be touched. Also Api versioning is no problem with listack.
                        </x-card>
                    </div>
                    <div class="col w-1/3">
                        <x-card class="mb-6">
                            <x-slot name="title">
                                <div class="text-blue-500 pb-4">
                                    <svg class="w-8 h-8" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m323.5 402.909c-7.18 4.146-9.639 13.314-5.493 20.493l30 51.958c4.149 7.185 13.341 9.624 20.493 5.491 7.178-4.146 9.639-13.314 5.493-20.491l-30-51.958c-4.147-7.194-13.359-9.668-20.493-5.493z"/><path d="m143.5 31.146c-7.18 4.146-9.639 13.314-5.493 20.493l30 51.956c4.149 7.185 13.341 9.628 20.493 5.493 7.178-4.146 9.639-13.314 5.493-20.493l-30-51.956c-4.162-7.194-13.345-9.638-20.493-5.493z"/><path d="m168.007 408.402-30 51.958c-4.146 7.178-1.686 16.346 5.493 20.491 7.139 4.125 16.337 1.705 20.493-5.491l30-51.958c4.146-7.18 1.685-16.348-5.493-20.493-7.18-4.175-16.362-1.701-20.493 5.493z"/><path d="m323.5 109.089c7.139 4.125 16.337 1.705 20.493-5.493l30-51.956c4.146-7.18 1.685-16.348-5.493-20.493-7.192-4.146-16.348-1.701-20.493 5.493l-30 51.956c-4.146 7.179-1.687 16.347 5.493 20.493z"/><path d="m256 512c8.291 0 15-6.709 15-15v-61c0-8.293-6.709-15-15-15-8.293 0-15 6.707-15 15v61c0 8.291 6.707 15 15 15z"/><path d="m241 76c0 8.291 6.707 15 15 15 8.291 0 15-6.709 15-15v-61c0-8.293-6.709-15-15-15-8.293 0-15 6.707-15 15z"/><path d="m15 286h151c8.282 0 15-6.718 15-15v-30c0-8.284-6.718-15-15-15h-151c-8.284 0-15 6.716-15 15v30c0 8.282 6.716 15 15 15z"/><path d="m255.376 183.466 5.004-30.007c1.536-9.093-5.511-17.459-14.797-17.459h-79.583c-36.216 0-66.513 25.809-73.482 60h148.063c7.331 0 13.59-5.301 14.795-12.534z"/><path d="m220.374 363.468 5.001-30.002c1.525-9.142-5.526-17.466-14.795-17.466h-118.062c6.969 34.191 37.266 60 73.482 60h39.578c7.332 0 13.59-5.301 14.796-12.532z"/><path d="m497 226h-151c-8.284 0-15 6.716-15 15v30c0 8.282 6.716 15 15 15h151c8.282 0 15-6.718 15-15v-30c0-8.284-6.718-15-15-15z"/><path d="m346 136h-39.595c-7.332 0-13.59 5.301-14.795 12.534l-4.995 30.004c-1.521 9.14 5.528 17.462 14.795 17.462h118.072c-6.969-34.191-37.267-60-73.482-60z"/><path d="m419.482 316h-148.072c-7.332 0-13.59 5.303-14.795 12.537l-4.995 30.002c-1.527 9.064 5.475 17.461 14.795 17.461h79.585c36.215 0 66.513-25.809 73.482-60z"/></g></svg>
                                    Laravel, Livewire, Vue
                                </div>
                            </x-slot>
                            Litstack does not care if you prefer livewire, vue or classic plain Blade components. Choose what you like best and start customizing to your needs.
                        </x-card>
                    </div>
                    <div class="col w-1/3">
                        <x-card class="mb-6">
                            <x-slot name="title">
                                <div class="text-blue-500 pb-4">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                    Fields
                                </div>
                            </x-slot>
                            Attach fields to Model attributes. Manage every existing Laravel relation and edit pivot data for polymorphic many-to-many relationships.
                        </x-card>
                    </div>
                    <div class="col w-1/3">
                        <x-card class="mb-6">
                            <x-slot name="title">
                                <div class="text-blue-500 pb-4">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                                    Actions
                                </div>
                            </x-slot>
                            Let the user perform actions like sending mails for one or more models and place them wherever they are needed. In index tables, crud pages or globally in the navigaton.
                        </x-card>
                    </div>
                    <div class="col w-1/3">
                        <x-card class="mb-6">
                            <x-slot name="title">
                                <div class="text-blue-500 pb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -3 24 24" class="w-8 h-8 fill-current" preserveAspectRatio="xMinYMin" class="jam-icon jam-0"><path d="M7.116 10.749L6 1.948l-1.116 8.8H1c-.552 0-1-.437-1-.976a.99.99 0 011-.978h2.116l.9-7.086C4.15.636 5.15-.124 6.245.008c.91.11 1.626.81 1.739 1.7l.899 7.086h1.974L12 16.04l1.142-7.245H19c.552 0 1 .438 1 .978s-.448.977-1 .977h-4.142l-.881 5.587a1.978 1.978 0 01-1.672 1.634c-1.092.165-2.113-.567-2.282-1.634l-.88-5.587H7.115z"/></svg>
                                    Charts
                                </div>
                            </x-slot>
                            Create charts in seconds and give the user a feeling about what is happening. Build dashboards or place your charts on crud pages.
                        </x-card>
                    </div>
                    
                    <div class="col w-1/3">
                        <x-card class="mb-6">
                            <x-slot name="title">
                                <div class="text-blue-500 pb-4">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                    Permission
                                </div>
                            </x-slot>
                            Litstack makes it easy to create authorization through permissions. Also the build in permission manager makes managing roles and permissions a breeze.
                        </x-card>
                    </div>
                    <div class="col w-1/3">
                        <x-card class="mb-6">
                            <x-slot name="title">
                                <div class="text-blue-500 pb-4">
                                    <svg class="w-8 h-8" stroke="currentColor" viewBox="0 0 512.004 512.004" xmlns="http://www.w3.org/2000/svg"><g><path d="m467.002 121h-219.957l-36.809-110.732c-2.038-6.131-7.773-10.268-14.234-10.268h-151c-24.813 0-45 20.187-45 45v301c0 24.813 20.187 45 45 45h165.297l36.509 110.438c2.017 6.468 7.999 10.566 14.329 10.566.035 0 .07-.004.105-.004h205.761c24.813 0 45-20.187 45-45v-301c-.001-24.813-20.188-45-45.001-45zm-422 240c-8.271 0-15-6.729-15-15v-301c0-8.271 6.729-15 15-15h140.179l110.027 331c-56.192 0-194.724 0-250.206 0zm247.729 30-29.4 64.841-21.435-64.841zm189.271 76c0 8.271-6.729 15-15 15h-182.592l45.253-99.806c1.623-3.579 1.699-7.544.571-10.932l-73.217-220.262h209.985c8.271 0 15 6.729 15 15z"/><path d="m196.002 181h-45c-8.284 0-15 6.716-15 15s6.716 15 15 15h27.42c-6.192 17.459-22.865 30-42.42 30-24.813 0-45-20.187-45-45s20.187-45 45-45c12.02 0 23.32 4.681 31.82 13.18 5.857 5.858 15.355 5.858 21.213 0 5.857-5.858 5.857-15.355 0-21.213-14.166-14.166-33-21.967-53.033-21.967-41.355 0-75 33.645-75 75s33.645 75 75 75 75-33.645 75-75c0-8.284-6.716-15-15-15z"/><path d="m436.002 241h-45v-15c0-8.284-6.716-15-15-15s-15 6.716-15 15v15h-45c-8.284 0-15 6.716-15 15s6.716 15 15 15h87.139c-4.771 14.185-15.02 30.996-26.938 47.174-2.567-3.466-5.102-7.013-7.547-10.609-4.659-6.851-13.988-8.628-20.838-3.969-6.851 4.658-8.627 13.988-3.969 20.839 4.208 6.189 8.62 12.211 13.017 17.919-7.496 8.694-14.885 16.57-21.369 22.94-5.913 5.802-6.003 15.299-.201 21.212 5.778 5.889 15.274 6.027 21.212.201.517-.508 8.698-8.566 19.624-20.937 10.663 12.2 18.645 20.218 19.264 20.837 5.855 5.855 15.349 5.858 21.208.002 5.858-5.855 5.861-15.352.007-21.212-.157-.157-9.34-9.392-21.059-23.059 21.233-27.448 34.179-51.357 38.663-71.338h1.786c8.284 0 15-6.716 15-15s-6.715-15-14.999-15z"/></g></svg>
                                    Translations
                                </div>
                            </x-slot>
                            Managing translatable content is easier than ever with translatable fields.
                        </x-card>
                    </div>
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