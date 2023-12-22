@props(['post'])

<a href="/posts/{{$post->slug}}">
    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
        {{$post->title}}
    </h1>
</a>
