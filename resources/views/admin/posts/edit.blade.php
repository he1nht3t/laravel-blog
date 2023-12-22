@php
    use App\Models\Category;

    $categories = Category::all();

@endphp

<x-setting>
    <form method="POST" action="/admin/posts/{{$post->slug}}"
          enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <x-slot name="heading">
            <h2 class="text-base font-semibold leading-7 text-gray-900">
                Edit Post</h2>
            <p class="text-xs leading-6 text-gray-600">
                {{$post->title}}
            </p>
        </x-slot>

        <div
            class="mt-10">
            <x-form.input :name="'title'" :required="true"
                          :value="old('title', $post->title)" />
            <x-form.input :name="'slug'" :required="true"
                          :value="old('slug', $post->slug)" />
            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input :name="'thumbnail'"
                                  :value="old('thumbnail', $post->thumbnail )"
                                  type="file" />
                </div>
                <img
                    src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : "/images/illustration-1.png"}}"
                    class="rounded-xl ml-4" width="100">
            </div>

            <x-form.textarea :name="'excerpt'"
                             required="true"> {{ old('excerpt', $post->excerpt ) }} </x-form.textarea>
            <x-form.textarea :name="'body'"
                             required="true"> {{ old('body', $post->body) }} </x-form.textarea>

            <x-form.select :name="'category'"
                           :items="$categories"
                           :selected="old('category', $post->category_id)"
                           :required="true" />
        </div>

        <div class="mt-6 flex items-center justify-end">
            <x-button>Update</x-button>
        </div>
    </form>
</x-setting>

