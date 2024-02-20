<div>
    <div class="container px-6 py-8 mx-auto lg:py-16">
        @if ($categoryType === 'topic')
            <p class="text-md font-bold"> Topic : <span class="text-indigo-500 text-sm">
                    {{ $category }}</span></p>
        @elseif ($categoryType === 'tags')
            <p class="text-md font-bold"> Tags :<span class="text-indigo-500 text-sm"> {{ $category }}</span>

            </p>
        @endif
        <div class="max-w-screen-xl py-6 mt-4 -mx-2 grid grid-cols-1 gap-8 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($articles as $article)
                <div class="rounded overflow-hidden flex flex-col max-w-md mx-auto">
                    <a href="{{ route('article.single', $article->slug) }}">
                        <img class="w-full" src="{{ $article->featured_image_url }}"
                            alt="{{ $article->featured_image_caption }}">
                    </a>
                    <div class="relative -mt-16 px-10 pt-5 pb-16 bg-white m-5">
                        <a href="{{ route('article.single', $article->slug) }}"
                            class="font-semibold text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">
                            {{ $article->title }}
                        </a>
                        <article class="text-gray-500 text-md">
                            {!! Str::limit($article->body, 200) !!}
                        </article>
                        <p class="mt-5 text-gray-600 text-xs">
                            Author :
                            <a href="#" class="text-xs text-indigo-600 transition duration-500 ease-in-out">
                                {{ $article->user->name }}
                            </a>

                            | dalam

                            @foreach ($article->topic as $topic)
                                <a href="{{ route('article.all', ['categoryType' => 'topic', 'category' => $topic->name]) }}"
                                    class="text-xs text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                                    {{ $topic->name }}
                                </a>
                                @unless ($loop->last)
                                    ,
                                @endunless
                            @endforeach
                        </p>
                        <p class="mt-2 text-gray-600 text-xs">
                            Waktu baca :
                            <span class="text-xs text-indigo-600 transition duration-500 ease-in-out">
                                {{ $article->read_time }}
                            </span>
                        </p>
                    </div>

                </div>
            @endforeach
        </div>
    </div>


</div>
