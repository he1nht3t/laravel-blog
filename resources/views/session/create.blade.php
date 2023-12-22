<x-layout>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img src="/images/lary-newsletter-icon.svg" alt=""
                 class="mx-auto -mb-10" style="width: 145px;">
            <h2 class=" text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
                Login</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="/login" method="POST">
                @csrf

                <x-form.input :name="'username'" :required="true" />
                <x-form.input :name="'password'" :required="true"
                              type="password" />
                <x-button>Login</x-button>

            </form>

            <x-form.error name="'error'" />

        </div>
    </div>

</x-layout>
