@props(['post'])

<article
    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5 lg:flex">
        <div class="flex-1 lg:mr-8">
            <img
                src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : "/images/illustration-1.png"}}"
                alt="Blog Post illustration" class="rounded-xl">
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
                    <x-post.category-btn :category="$post->category" />
                </div>

                <div class="mt-4">
                    <x-post.title :post="$post" />


                    <span class="mt-2 block text-gray-400 text-xs">
                        <x-post.created-time
                            :created_time="$post->created_at->diffForHumans()" />
                    </span>
                </div>
            </header>

            <div class="text-sm mt-2 space-y-2">
                {!!$post->excerpt!!}

            </div>

            <x-post.card-footer :post="$post" />
        </div>
    </div>
</article>
