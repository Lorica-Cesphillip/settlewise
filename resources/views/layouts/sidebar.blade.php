<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="w-[300px] h-max relative">
        <div class="w-[300px] h-[1080px] absolute bg-[#93d0f7]">
            <div>
                <!-- Logo -->
                <a href="{{ route('dashboard') }}">
                    <x-application-logo/>
                </a>

                <!-- Navigation Links -->
                <div class="w-[300px] px-2 py-2 flex-col justify-start items-start gap-3 relative">
                    <x-parent_link>
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-badge>New</x-badge>
                    </x-parent_link>
                </div>
                <div class="w-[300px] h-[175px] px-2 py-4 flex-col justify-start items-start gap-3 relative">
                    <div class="self-stretch pl-3 pr-4 justify-start items-center gap-2.5 inline-flex">
                    <div class="grow shrink basis-0 text-[#211c6a] text-base font-bold leading-normal">Documents</div>
                    </div>
                    <x-parent_link>
                        <x-nav-link :href="route('incoming')" :active="request()->routeIs('incoming')">
                            {{ __('Incoming Documents') }}
                        </x-nav-link>
                        <x-badge>10</x-badge>
                    </x-parent_link>
                    <x-parent_link>
                        <x-nav-link :href="route('outgoing')" :active="request()->routeIs('outgoing')">
                            {{ __('Outgoing Documents') }}
                        </x-nav-link>
                        <x-badge>10</x-badge>
                    </x-parent_link>
                    <x-parent_link>
                        <x-nav-link :href="route('archived')" :active="request()->routeIs('archived')">
                            {{ __('Archived Documents') }}
                        </x-nav-link>
                        <x-badge>10</x-badge>
                    </x-parent_link>
                </div>
                <div class="w-[300px] h-[127px] px-2 py-4 flex-col justify-start items-start gap-3 relative">
                    <div class="self-stretch pl-3 pr-4 justify-start items-center gap-2.5 inline-flex">
                        <div class="grow shrink basis-0 text-[#211c6a] text-base font-bold leading-normal">User Management</div>
                    </div>
                    <x-parent_link>
                        <x-nav-link :href="route('divisions')" :active="request()->routeIs('divisions')">
                            {{ __('Your Divisions') }}
                        </x-nav-link>
                        <x-badge>10</x-badge>
                    </x-parent_link>
                    <x-parent_link class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('employees')" :active="request()->routeIs('employees')">
                            {{ __('Your Employees') }}
                        </x-nav-link>
                        <x-badge>10</x-badge>
                    </x-parent_link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="max">
                    <x-slot name="trigger">
                        <button class="inline-flex items-start px-3 py-2 border mb-0 border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>
                                Engr. Gina Paz Sipin<br>
                                APHSO Department Head
                            </div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('incoming')" :active="request()->routeIs('incoming')">
                {{ __('Incoming Documents') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('outgoing')" :active="request()->routeIs('outgoing')">
                {{ __('Outgoing Documents') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('archived')" :active="request()->routeIs('archived')">
                {{ __('Archived Documents') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('divisions')" :active="request()->routeIs('divisions')">
                {{ __('Your Divisions') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('employees')" :active="request()->routeIs('employees')">
                {{ __('Your Employees') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
