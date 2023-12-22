@props(['comment'])

<article
    class="flex bg-gray-100 border border-gray-200 rounded-xl p-6 space-x-4 ">
    <div class="shrink-0">
        <img src="https://i.pravatar.cc/60?u={{$comment->user_id}}" alt="avatar"
             height="60px" width="60px" class="rounded-xl">
    </div>
    <div>
        <header class="mb-3">
            <h3 class="font-bold">{{$comment->author->username}}</h3>
            <p class="text-xs">Posted
                <time>{{$comment->created_at->diffForHumans()}}</time>
            </p>
        </header>

        <p class="text-sm">
            {{$comment->body}}
        </p>
    </div>
</article>
