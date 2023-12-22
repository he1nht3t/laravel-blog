<x-layout>
    <div class="flex max-w-4xl mx-auto py-8">
        <aside class="w-56 mt-6 border-r">
            <h4 class="font-semibold mb-6">Links</h4>

            <ul class="space-y-2">

                <li>
                    <a href="/admin/posts"
                       class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">All
                        Posts</a>
                </li>

                <li>
                    <a href="/admin/posts/create"
                       class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">New
                        Post</a>
                </li>

            </ul>
        </aside>

        <main class=" flex-1 max-w-md mx-auto mt-6 lg:mt-20 space-y-6">
            {{ $heading }}

            {{ $slot }}
        </main>
    </div>
</x-layout>
