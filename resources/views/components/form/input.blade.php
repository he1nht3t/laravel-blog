@props(['name', 'required' => false ])

<div class="my-2">
    <x-form.label :name="$name" />
    <div class="mt-2">
        <input
            class="flex w-full rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md"
            autofocus
            name="{{$name}}"
            id="{{$name}}"
            @if($required)
                required
            @endif
            {{ $attributes->merge(['value' => old($name)]) }}
        />

        <x-form.error :name="$name" />
    </div>
</div>
