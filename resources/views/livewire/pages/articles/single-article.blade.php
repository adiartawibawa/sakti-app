<div>
    <section class="container px-6 py-8 mx-auto lg:py-16">
        <div class="max-w-screen-xl mx-auto relative">
            <div class="bg-cover bg-center text-center overflow-hidden"
                style="min-height: 500px; background-image: url('{{ $post->featured_image_url }}')"
                title="Woman holding a mug">
            </div>
            <div class="max-w-3xl mx-auto">
                <div
                    class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                    <div class="bg-white relative top-0 -mt-32 p-5 sm:p-10">
                        <h1 href="#" class="text-gray-900 font-bold text-3xl mb-2">
                            {{ $post->title }}
                        </h1>
                        <p class="text-gray-700 text-xs mt-2">Author :
                            <a href="#"
                                class="text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                                {{ $post->user->name }}
                            </a>

                            Dalam

                            @foreach ($post->topic as $topic)
                                <a href="{{ route('article.all', ['category' => $topic->id, 'categoryType' => 'topic']) }}""
                                    class="text-xs text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                                    {{ $topic->name }}
                                </a>
                                @unless ($loop->last)
                                    ,
                                @endunless
                            @endforeach

                        </p>
                        <p class="text-gray-700 text-xs mt-2">Waktu baca :
                            <span
                                class="text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                                {{ $post->read_time }}
                            </span>
                        </p>

                        <article
                            class="prose prose-img:rounded-md prose-img:mx-auto prose-figcaption:text-sm prose-figcaption:text-gray-400 prose-figcaption:text-center  prose-img:w-auto prose-headings:underline prose-a:text-indigo-600 text-base leading-8 my-5">
                            {!! $post->body !!}
                        </article>

                        @foreach ($post->tags as $tag)
                            <a href="{{ route('article.all', ['category' => $tag->name, 'categoryType' => 'tags']) }}"
                                class="text-xs text-indigo-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                                #{{ $tag->name }}
                            </a>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
