<nav class="md:flex md:justify-between md:items-center">
    <div>
        <a href="/">
            <img src="/images/logo.svg" alt="Laracasts Logo" width="165"
                 height="16">
        </a>
    </div>

    <div class="mt-8 md:mt-0 flex items-center">
        @auth
            <x-dropdown>
                <x-slot name="trigger">
                    <div class="flex items-center">
                        <button
                            class="mr-9 ">
                            Welcome, {{auth()->user()->name}}</button>

                        <x-icon name="down-arrow"
                                class=" absolute pointer-events-none"
                                style="right: 12px;" />
                    </div>
                </x-slot>

                @can('admin')
                    <x-dropdown-item href="/admin/posts"
                                     :active="request()->is('admin/posts')">
                        All Posts
                    </x-dropdown-item>

                    <x-dropdown-item href="/admin/posts/create"
                                     :active="request()->is('admin/posts/create')">
                        New Post
                    </x-dropdown-item>

                @endcan

                <x-dropdown-item href="#" x-data="{}"
                                 @click.prevent="document.querySelector('#logout').submit()">
                    Logout
                </x-dropdown-item>
                <form id="logout" action="/logout" method="POST" class="hidden">
                    @csrf
                </form>
            </x-dropdown>

        @else
            <a href="/register" class="text-xs font-bold uppercase pr-2">Register</a>
            |
            <a href="/login" class="text-xs font-bold uppercase pl-2">Login</a>
        @endauth
        <a href="#newsletter"
           class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
            Subscribe for Updates
        </a>
    </div>
</nav>
