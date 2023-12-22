<x-setting>

    <x-slot name="heading">
        <h2 class="text-base underline font-semibold leading-7 text-gray-900">
            All Posts</h2>
    </x-slot>

    <ul role="list" class="divide-y divide-gray-100">
        @foreach ($posts as $post)
            <li class="flex justify-between gap-x-6 py-5">
                <div class="min-w-0 flex-auto">
                    <a href="/posts/{{$post->slug}}"
                       class="text-sm font-semibold leading-6 text-gray-900">
                        {{$post->title}}</a>

                </div>
                <div
                    class="flex justify-between shrink-0 space-x-6 ">
                    <div>
                        <a href="/admin/posts/{{$post->slug}}/edit"
                           class="text-sm text-blue-500 hover:underline">Edit</a>
                    </div>

                    <div>
                        <form action="/admin/posts/{{$post->slug}}"
                              method="POST">
                            @CSRF
                            @method('DELETE')

                            <button type="submit"
                                    class="text-sm text-red-300 hover:underline">
                                Delete
                            </button>

                        </form>

                    </div>
                </div>
            </li>
        @endforeach

    </ul>

</x-setting>
