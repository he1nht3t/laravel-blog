@props(['name', 'items' , 'required' => false, 'selected' => '' ])


<div class="my-2">
    <x-form.label :name="$name" />
    <div class="mt-2">
        <select name="{{$name}}"
                id="{{$name}}"
                {{ $required ? 'required' : '' }}
                class="outline-none border-none text-left">
            <option value="">Select a category</option>
            @foreach( $items as $item )
                <option
                    value="{{ $item->id }}"
                    {{ $selected == $item->id ? 'selected' : '' }}
                >{{ ucwords($item->name) }}</option>
            @endforeach
        </select>

        <x-form.error :name="$name" />
    </div>
</div>
