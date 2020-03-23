<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 rounded text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open }" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !open, 'inline-flex': open }" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 mr-8 text-xl text-gray-100">
                    {{-- <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-on-dark.svg" alt="" />
              <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-on-dark.svg" alt="" /> --}}
                    <a href="/">{{ config('app.name', 'Ediary') }}</a>
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex">
                        @auth
                        <a href="{{ url('/diaries/create') }}"
                            class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out  {{url()->current() == url('/orders') ? 'bg-gray-900' : '' }}">Add new</a>
                        @endauth
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                @include('includes.auth-links')
            </div>
        </div>
    </div>
    <!-- Mobile Links -->
    <div :class="{'block': open, 'hidden': !open}" class="sm:hidden">
        <div class="px-2 pt-2 pb-3">
            @auth
            <a href="{{url('/diaries/create')}}"
                class="mt-1 block px-3 py-2 rounded text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out {{url()->current() == url('/diaries/create') ? 'bg-gray-900' : '' }}">Add new</a>
            @endauth
        </div>
    </div>
</nav>