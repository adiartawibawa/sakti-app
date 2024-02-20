<section class="bg-indigo-50/35">
    <div class="container px-6 py-8 mx-auto lg:py-16">
        <h3 class="text-xl font-medium text-gray-800 md:text-2xl lg:text-3xl ">Kegiatan Kami</h3>

        <div class="grid grid-cols-1 gap-8 mt-8 md:mt-10 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($recentArticles as $item)
                <div>
                    <div class="relative">
                        <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80"
                            src="{{ $item->featured_image_url }}" alt="">

                        <div class="absolute bottom-0 flex p-3 bg-white ">
                            <img class="object-cover object-center w-10 h-10 rounded-full"
                                src="{{ $item->user->organization->organization_logo_url }}" alt="">

                            <div class="mx-4">
                                <h1 class="text-sm text-gray-700">{{ $item->user->name }}</h1>
                                <p class="text-sm text-gray-500">{{ $item->user->organization->name }}</p>
                            </div>
                        </div>
                    </div>

                    <h1 class="mt-6 text-xl font-semibold text-gray-800 hover:text-indigo-500">
                        <a href="{{ route('article.single', $item->slug) }}">{{ $item->title }}</a>
                    </h1>

                    <hr class="w-32 my-6 text-indigo-500">

                    <article class="prose prose-slate text-md">
                        {!! Str::limit($item->body, 200) !!}
                    </article>

                    <a href="{{ route('article.single', $item->slug) }}"
                        class="inline-block mt-4 text-indigo-500 underline hover:text-indigo-400">Read
                        more</a>
                </div>
            @endforeach
        </div>
    </div>
</section>
