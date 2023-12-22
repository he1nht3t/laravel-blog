@props(['name', 'required' => false ])

<div class="my-2">
    <x-form.label :name="$name" />
    <div class="mt-2">
        <textarea
            id="{{$name}}"
            name="{{$name}}"
            rows="3"
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
            @if($required)
                required
            @endif
        >{{ $slot ?? old($name)}}</textarea>

        <x-form.error :name="$name" />
    </div>
</div>
