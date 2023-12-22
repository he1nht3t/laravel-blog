@props(['post'])

<footer class="flex justify-between items-center mt-8">
    <div class="flex items-center text-sm">
        <x-post.author-avatar :post="$post" />
        <div class="ml-3">
            <x-post.author-name :author="$post->author" />
        </div>
    </div>

    <div>
        <a href="/posts/{{$post->slug}}"
           class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
        >
            Read More
        </a>
    </div>
</footer>
