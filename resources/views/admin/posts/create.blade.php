@php
    use App\Models\Category;

    $categories = Category::all();

@endphp
<x-setting>
    <form method="POST" action="/admin/posts" enctype="multipart/form-data">
        @csrf

        <x-slot name="heading">
            <h2 class="text-base font-semibold leading-7 text-gray-900">
                Create Post</h2>
            <p class="text-xs leading-6 text-gray-600">This
                information
                will be displayed publicly so be careful what you
                share.</p>
        </x-slot>

        <div
            class="mt-10">
            <x-form.input :name="'title'" :required="true" />
            <x-form.input :name="'slug'" :required="true" />
            <x-form.input :name="'thumbnail'" :required="true"
                          type="file" />

            <x-form.textarea :name="'excerpt'" required="true" />
            <x-form.textarea :name="'body'" required="true" />

            <x-form.select :name="'category'"
                           :items="$categories"
                           :required="true" />
        </div>

        <div class="mt-6 flex items-center justify-end">
            <x-button>Publish</x-button>
        </div>
    </form>
</x-setting>

