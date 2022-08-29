{{-- Footer Full--}}

<footer class="bg-gray-100 dark:bg-zinc-800">
    <div class="flex flex-col md:flex-row md:justify-between px-4 py-8 md:px-6">

        <div class="mb-6 md:mb-0 w-max">
            <a class="text-gray-500 dark:text-white" href="{{ route('index') }}">
                <x-application-logo class="h-8" type="full" />
            </a>
        </div>

        <div class="w-full grid grid-cols-2 gap-6 text-gray-700 md:w-80 dark:text-gray-200">
            <div>
                <h2 class="text-gray-500 uppercase font-bold mt-2 mb-4 dark:text-white">Legal</h2>

                <ul class="flex flex-col space-y-4 font-semibold text-sm">
                    <a href="#" class="hover:text-primary">
                        Privacy Policy
                    </a>

                    <a href="#" class="hover:text-primary">
                        Terms of use
                    </a>
                </ul>
            </div>

            <div>
                <h2 class="text-gray-500 uppercase font-bold mt-2 mb-4 dark:text-white">Social</h2>

                <div class="flex flex-col space-y-4 font-semibold text-sm">
                    <a href="#" class="hover:text-primary">
                        Facebook
                    </a>

                    <a href="#" class="hover:text-primary">
                        Instagram
                    </a>

                    <a href="#" class="hover:text-primary">
                        Twitter
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-6 px-4 bg-gray-200 md:flex md:items-center md:justify-between dark:bg-zinc-800">

        <span class="text-sm text-gray-700 dark:text-white">
            © 2022 <a href="https://flowbite.com">Your company</a>. All Rights Reserved.
        </span>
    </div>
</footer>
