@if(session()->has('success'))
    <div
        x-data="{ open: true }"
        x-init=" setTimeout( () => open = false, 4000 ) "
        x-show='open'
        class="fixed bottom-6 right-6 bg-blue-400 text-white text-sm rounded
        py-2 px-3 ">
        <p>{{session('success')}}</p>
    </div>
@endif
