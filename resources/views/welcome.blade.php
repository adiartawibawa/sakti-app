<x-guest-layout>

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
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
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

    @livewire('pages.welcome.all-prodi')

    @livewire('pages.welcome.all-project')

    @livewire('pages.welcome.recent-post')


</x-guest-layout>
