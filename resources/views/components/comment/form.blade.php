@props(['post'])

<form action="/posts/{{$post->slug}}/comment" method="POST"
      class="border border-gray-200 rounded-xl p-6">
    @csrf

    <header class="flex items-center">
        <img src="https://i.pravatar.cc/40?u={{auth()->id()}}"
             alt="avatar"
             height="40" width="40" class="rounded-full mr-4">

        <h2 class="text-sm">Want to participate ?</h2>
    </header>
    <div class="mt-6">
        <textarea
            class="w-full text-sm border-none focus:outline-none focus:ring-1"
            rows="5" name="body" required
            placeholder="Quick, think of something to say!"></textarea>
    </div>
    <x-form.error :name="'body'" />
    <div
        class="flex justify-end mt-6 pt-6 border-t border-gray-200">
        <button
            class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600"
            type="submit">Post
        </button>
    </div>
</form>
