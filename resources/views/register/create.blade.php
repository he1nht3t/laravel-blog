<x-layout>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img src="/images/lary-newsletter-icon.svg" alt=""
                 class="mx-auto -mb-10" style="width: 145px;">
            <h2 class=" text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
                Register</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-4" action="/register" method="POST">
                @csrf

                <x-form.input :name="'name'" :required="true" />
                <x-form.input :name="'username'" :required="true" />
                <x-form.input :name="'email'" :required="true" />
                <x-form.input :name="'password'" :required="true"
                              :type="'password'" />
                <x-button>Register</x-button>

            </form>

        </div>
    </div>

</x-layout>
