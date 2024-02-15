<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @stack('meta')

    @hasSection('title')
        <title>@yield('title') - {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles

    @stack('styles')
</head>

<body class="antialiased">
    <header class="bg-white" x-data="{ open: false }">
        <nav class="container relative flex items-center justify-between px-6 py-4 md:py-0 mx-auto text-indigo-800">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 md:w-10 md:h-10" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                </svg>
            </a>

            <button x-cloak @click="open = !open" class="md:hidden">
                <span x-show="!open">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </span>

                <span x-show="open">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </button>

            <div x-cloak :class="[!open ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
                class="absolute inset-x-0 z-30 w-full px-6 py-8 space-y-6 transition-all duration-300 ease-in-out bg-indigo-50 top-16 md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:space-y-0 md:-mx-6 md:flex md:items-center">
                <a href="#"
                    class="block hover:text-indigo-300 md:hover:text-indigo-800 transition-colors duration-300 md:px-6 md:hover:bg-indigo-300 md:py-6">
                    Beranda
                </a>
                <a href="#"
                    class="block hover:text-indigo-300 md:hover:text-indigo-800 transition-colors duration-300 md:px-6 md:hover:bg-indigo-300 md:py-6">
                    Tentang
                </a>
                <a href="#"
                    class="block hover:text-indigo-300 md:hover:text-indigo-800 transition-colors duration-300 md:px-6 md:hover:bg-indigo-300 md:py-6">
                    Prodi
                </a>
                <a href="#"
                    class="block hover:text-indigo-300 md:hover:text-indigo-800 transition-colors duration-300 md:px-6 md:hover:bg-indigo-300 md:py-6">
                    Kegiatan
                </a>
                <a href="#"
                    class="block hover:text-indigo-300 md:hover:text-indigo-800 transition-colors duration-300 md:px-6 md:hover:bg-indigo-300 md:py-6">
                    Layanan
                </a>
                <a href="#"
                    class="block hover:text-indigo-300 md:hover:text-indigo-800 transition-colors duration-300 md:px-6 md:hover:bg-indigo-300 md:py-6">
                    Kontak
                </a>
                <a href="#"
                    class="block hover:text-indigo-300 md:hover:text-indigo-800 transition-colors duration-300 md:px-6 md:hover:bg-indigo-300 md:py-6">
                    Login
                </a>
                <a href="#"
                    class="block hover:text-indigo-300 md:hover:text-indigo-800 transition-colors duration-300 md:px-6 md:hover:bg-indigo-300 md:py-6">
                    Register
                </a>
                <a href="#"
                    class="block hover:text-indigo-300 md:hover:text-indigo-800 transition-colors duration-300 md:px-6 md:hover:bg-indigo-300 md:py-6">
                    Dasbor
                </a>
            </div>
        </nav>
    </header>

    <main class="w-full flex flex-col">
        <section>
            <div class="w-full bg-center bg-cover h-[38rem]"
                style="background-image: url('https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80');">
                <div class="flex items-center justify-center w-full h-full bg-gray-900/40">
                    <div class="flex flex-col items-center mx-auto text-center">
                        <h1 class="text-4xl font-semibold text-white uppercase md:text-6xl">
                            SMK Negeri 3 Tabanan
                        </h1>
                        <p class="mt-6 text-lg leading-5 text-white">Sekolah Pusat Keunggulan</p>

                        <a href="#about" class="mt-8 cursor-pointer animate-bounce">
                            <svg width="53" height="53" viewBox="0 0 53 53" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="27" cy="26" r="18" stroke="white" stroke-width="2" />
                                <path
                                    d="M22.41 23.2875L27 27.8675L31.59 23.2875L33 24.6975L27 30.6975L21 24.6975L22.41 23.2875Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="container px-6 py-8 mx-auto lg:py-16" id="about">
            <div class="lg:flex lg:items-center lg:-mx-4">
                <div class="lg:w-1/2 lg:px-4">
                    <h3 class="text-xl font-medium text-gray-800 md:text-2xl lg:text-3xl">We create awesome
                        prototypes,
                        plugins, and templates.</h3>

                    <p class="mt-6 text-gray-500 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
                        laboriosam
                        provident voluptatum id magni iste nobis corrupti, delectus quis repellat, debitis error
                        quod
                        explicabo molestiae rerum totam ab sunt excepturi?</p>

                    <button class="flex items-center mt-8 -mx-2 text-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mx-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="mx-1 font-semibold">PLAY VIDEO</p>
                    </button>
                </div>

                <div class="mt-8 lg:w-1/2 lg:px-4 lg:mt-0">
                    <img class="object-cover w-full rounded-xl h-96"
                        src="https://images.unsplash.com/photo-1516131206008-dd041a9764fd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                        alt="Video thumbnail">
                </div>
            </div>
        </section>

        <section class="bg-indigo-50/35">
            <div class="container px-6 py-8 mx-auto lg:py-16">
                <h3 class="text-xl font-medium text-gray-800 md:text-2xl lg:text-3xl ">Program Studi Kami</h3>
                <div class="py-6 mt-4 -mx-2 grid grid-cols-1 gap-8 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
                    <div class="p-8 space-y-3 border-2 border-indigo-400 rounded-xl">
                        <span class="inline-block text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                            </svg>
                        </span>

                        <h1 class="text-2xl font-semibold text-gray-700 capitalize">web design</h1>

                        <p class="text-gray-500">
                            Research, user experience testing, mockups, and prototypes
                        </p>
                    </div>

                    <div class="p-8 space-y-3 border-2 border-indigo-400 rounded-xl">
                        <span class="inline-block text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                            </svg>
                        </span>

                        <h1 class="text-2xl font-semibold text-gray-700 capitalize">development</h1>

                        <p class="text-gray-500">
                            Research, user experience testing, mockups, and prototypes
                        </p>
                    </div>

                    <div class="p-8 space-y-3 border-2 border-indigo-400 rounded-xl">
                        <span class="inline-block text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </span>

                        <h1 class="text-2xl font-semibold text-gray-700 capitalize">research</h1>

                        <p class="text-gray-500">
                            Research, user experience testing, mockups, and prototypes
                        </p>
                    </div>

                    <div class="p-8 space-y-3 border-2 border-indigo-400 rounded-xl">
                        <span class="inline-block text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                            </svg>
                        </span>

                        <h1 class="text-2xl font-semibold text-gray-700 capitalize">web design</h1>

                        <p class="text-gray-500">
                            Research, user experience testing, mockups, and prototypes
                        </p>
                    </div>

                    <div class="p-8 space-y-3 border-2 border-indigo-400 rounded-xl">
                        <span class="inline-block text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                            </svg>
                        </span>

                        <h1 class="text-2xl font-semibold text-gray-700 capitalize">development</h1>

                        <p class="text-gray-500">
                            Research, user experience testing, mockups, and prototypes
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="container px-6 py-8 mx-auto lg:py-16">
            <h3 class="text-xl font-medium text-gray-800 md:text-2xl lg:text-3xl ">Browse Our Projects</h3>

            <div class="flex items-center py-6 mt-4 -mx-2 overflow-x-auto whitespace-nowrap">
                <button
                    class=" inline-flex px-4 mx-2 focus:outline-none  items-center py-0.5 text-white bg-indigo-500 hover:bg-indigo-400 duration-300 transition-colors rounded-2xl">Semua</button>
                <button
                    class=" inline-flex px-4 mx-2 duration-300 transition-colors hover:bg-indigo-500/70 hover:text-white text-gray-500 focus:outline-none py-0.5 cursor-pointer rounded-2xl">Boga</button>
                <button
                    class=" inline-flex px-4 mx-2 duration-300 transition-colors hover:bg-indigo-500/70 hover:text-white text-gray-500 focus:outline-none py-0.5 cursor-pointer rounded-2xl">Elektro</button>
                <button
                    class=" inline-flex px-4 mx-2 duration-300 transition-colors hover:bg-indigo-500/70 hover:text-white text-gray-500 focus:outline-none py-0.5 cursor-pointer rounded-2xl">Desain
                    Bangunan</button>
                <button
                    class=" inline-flex px-4 mx-2 duration-300 transition-colors hover:bg-indigo-500/70 hover:text-white text-gray-500 focus:outline-none py-0.5 cursor-pointer rounded-2xl">Otomotif</button>
                <button
                    class=" inline-flex px-4 mx-2 duration-300 transition-colors hover:bg-indigo-500/70 hover:text-white text-gray-500 focus:outline-none py-0.5 cursor-pointer rounded-2xl">Komputer
                    Jaringan</button>
            </div>

            <div class="grid grid-cols-1 gap-10 mt-10 md:grid-cols-2 lg:grid-cols-3 ">
                <a href="#" class="transition-all duration-500 lg:col-span-2 hover:scale-105">
                    <img class="object-cover object-top w-full rounded-lg shadow-md shadow-gray-200 h-80 xl:h-96"
                        src="https://cdn.dribbble.com/users/1644453/screenshots/17056773/media/00509f74e765da294440886db976943a.png?compress=1&resize=1000x750&vertical=top"
                        alt="">
                </a>

                <a href="#" class="transition-all duration-500 hover:scale-105">
                    <img class="object-cover object-top w-full rounded-lg shadow-md shadow-gray-200 h-80 xl:h-96 "
                        src="https://cdn.dribbble.com/userupload/3233220/file/original-e80767b5947df65a0f1ab4dab4964679.png?compress=1&resize=1024x768"
                        alt="">
                </a>

                <a href="#" class="transition-all duration-500 hover:scale-105">
                    <img class="object-cover object-top w-full rounded-lg shadow-md shadow-gray-200 h-80 xl:h-96"
                        src="https://cdn.dribbble.com/users/1644453/screenshots/14748860/media/25f53296059b741ac1c083be9f41745b.png?compress=1&resize=1000x750&vertical=top"
                        alt="">
                </a>

                <a href="#" class="transition-all duration-500 lg:col-span-2 hover:scale-105">
                    <img class="object-cover object-top w-full rounded-lg shadow-md shadow-gray-200 h-80 xl:h-96"
                        src="https://cdn.dribbble.com/users/878428/screenshots/17307425/media/01782a518148ce7ef2e790473c888b1f.png?compress=1&resize=1000x750&vertical=top"
                        alt="">
                </a>

                <a href="#" class="transition-all duration-500 lg:col-span-2 hover:scale-105">
                    <img class="object-cover object-top w-full rounded-lg shadow-md shadow-gray-200 h-80 xl:h-96"
                        src="https://cdn.dribbble.com/users/1930709/screenshots/11466872/media/e50b0f02160a77397eb4a76782d23966.png?compress=1&resize=1000x750&vertical=top"
                        alt="">
                </a>

                <a href="#" class="transition-all duration-500 hover:scale-105">
                    <img class="object-cover object-top w-full rounded-lg shadow-md shadow-gray-200 h-80 xl:h-96"
                        src="https://cdn.dribbble.com/users/1644453/screenshots/14403641/media/21e305eb9c8255b6e3367f0ca52c6668.png?compress=1&resize=1000x750&vertical=top"
                        alt="">
                </a>
            </div>
        </section>

        <section class="bg-indigo-50/35">
            <div class="container px-6 py-8 mx-auto lg:py-16">
                <h3 class="text-xl font-medium text-gray-800 md:text-2xl lg:text-3xl ">Kegiatan Kami</h3>

                <div class="grid grid-cols-1 gap-8 mt-8 md:mt-10 md:grid-cols-2 xl:grid-cols-3">
                    <div>
                        <div class="relative">
                            <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80"
                                src="https://images.unsplash.com/photo-1624996379697-f01d168b1a52?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="">

                            <div class="absolute bottom-0 flex p-3 bg-white ">
                                <img class="object-cover object-center w-10 h-10 rounded-full"
                                    src="https://cdn.dribbble.com/users/1436669/screenshots/15006128/media/5f91264b3b56cc452cb2bba2535bccdd.png?compress=1&resize=1000x750&vertical=top"
                                    alt="">

                                <div class="mx-4">
                                    <h1 class="text-sm text-gray-700">Tom Hank</h1>
                                    <p class="text-sm text-gray-500">Creative Director</p>
                                </div>
                            </div>
                        </div>

                        <h1 class="mt-6 text-xl font-semibold text-gray-800">What do you want to know about UI
                        </h1>

                        <hr class="w-32 my-6 text-indigo-500">

                        <p class="text-sm text-gray-500">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis fugit dolorum amet
                            dolores
                            praesentium, alias nam? Tempore
                        </p>

                        <a href="#"
                            class="inline-block mt-4 text-indigo-500 underline hover:text-indigo-400">Read
                            more</a>
                    </div>

                    <div>
                        <div class="relative">
                            <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80"
                                src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="">

                            <div class="absolute bottom-0 flex p-3 bg-white ">
                                <img class="object-cover object-center w-10 h-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                                    alt="">

                                <div class="mx-4">
                                    <h1 class="text-sm text-gray-700">arthur melo</h1>
                                    <p class="text-sm text-gray-500">Creative Director</p>
                                </div>
                            </div>
                        </div>

                        <h1 class="mt-6 text-xl font-semibold text-gray-800">All the features you want to know
                        </h1>

                        <hr class="w-32 my-6 text-indigo-500">

                        <p class="text-sm text-gray-500">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis fugit dolorum amet
                            dolores
                            praesentium, alias nam? Tempore
                        </p>

                        <a href="#"
                            class="inline-block mt-4 text-indigo-500 underline hover:text-indigo-400">Read
                            more</a>
                    </div>

                    <div>
                        <div class="relative">
                            <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80"
                                src="https://images.unsplash.com/photo-1597534458220-9fb4969f2df5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80"
                                alt="">

                            <div class="absolute bottom-0 flex p-3 bg-white ">
                                <img class="object-cover object-center w-10 h-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                                    alt="">

                                <div class="mx-4">
                                    <h1 class="text-sm text-gray-700">Amelia. Anderson</h1>
                                    <p class="text-sm text-gray-500">Lead Developer</p>
                                </div>
                            </div>
                        </div>

                        <h1 class="mt-6 text-xl font-semibold text-gray-800">Which services you get from Meraki
                            UI</h1>

                        <hr class="w-32 my-6 text-indigo-500">

                        <p class="text-sm text-gray-500">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis fugit dolorum amet
                            dolores
                            praesentium, alias nam? Tempore
                        </p>

                        <a href="#"
                            class="inline-block mt-4 text-indigo-500 underline hover:text-indigo-400">Read
                            more</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-12 mx-auto">
            <div class="md:flex md:-mx-3 md:items-center md:justify-between">
                <h1 class="text-xl font-semibold tracking-tight text-gray-800 md:mx-3 xl:text-2xl dark:text-white">
                    Subscribe our newsletter to get update.</h1>

                <div class="mt-6 md:mx-3 shrink-0 md:mt-0 md:w-auto">
                    <a href="#"
                        class="inline-flex items-center justify-center w-full px-4 py-2 text-sm text-white duration-300 bg-gray-800 rounded-lg gap-x-3 hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                        <span>Sign Up Now</span>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <hr class="my-6 border-gray-200 md:my-10 dark:border-gray-700">

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <div>
                    <p class="font-semibold text-gray-800 dark:text-white">SMK Negeri 3 Tabanan</p>

                    <p class="max-w-sm mt-2 text-gray-500 dark:text-gray-400">Jl. Megati-Bantas, Bantas, Kec. Selemadeg
                        Tim., Kabupaten Tabanan, Bali 82161</p>

                    <div class="flex mt-6 -mx-2">
                        <a href="#"
                            class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                            aria-label="Reddit">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                                </path>
                            </svg>
                        </a>

                        <a href="#"
                            class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                            aria-label="Facebook">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                </path>
                            </svg>
                        </a>

                        <a href="#"
                            class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                            aria-label="Github">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <p class="font-semibold text-gray-800 dark:text-white">Program Studi</p>

                    <div class="flex flex-col items-start mt-5 space-y-2">
                        <a href="#"
                            class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Boga</a>
                        <a href="#"
                            class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Desain
                            Bangunan</a>
                        <a href="#"
                            class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Elektro</a>
                        <a href="#"
                            class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Otomotif</a>
                        <a href="#"
                            class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Teknik
                            Komputer Jaringan</a>
                    </div>
                </div>

                <div>
                    <p class="font-semibold text-gray-800 dark:text-white">Layanan</p>

                    <div class="flex flex-col items-start mt-5 space-y-2">
                        <a href="#"
                            class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Translation</a>
                        <a href="#"
                            class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Proofreading
                            & Editing</a>
                        <a href="#"
                            class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Content
                            Creation</a>
                    </div>
                </div>

                <div>
                    <p class="font-semibold text-gray-800 dark:text-white">Kontak Kami</p>

                    <div class="flex flex-col items-start mt-5 space-y-2">
                        <a href="#"
                            class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">+62
                            123 456 789 0</a>
                        <a href="#"
                            class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">info@sakti.com</a>
                    </div>
                </div>
            </div>

            <hr class="my-6 border-gray-200 md:my-10 dark:border-gray-700">

            <div class="flex flex-col items-center justify-between sm:flex-row">
                <p class="mt-4 text-sm text-gray-500 sm:mt-0 dark:text-gray-300">
                    Made with ❤️ by
                    <a href="#">
                        Adi Arta Wibawa
                    </a>
                </p>

                <p class="mt-4 text-sm text-gray-500 sm:mt-0 dark:text-gray-300">{{ config('app.name') }} © Copyright
                    {{ date('Y') }}. All
                    Rights Reserved.
                </p>
            </div>
        </div>
    </footer>

    @livewireScripts

    @stack('scripts')

</body>

</html>
