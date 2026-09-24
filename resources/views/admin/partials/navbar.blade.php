<header class="sticky top-0 z-30 bg-white border-b border-slate-200 shadow-sm">

    <div class="h-16 px-6 flex items-center justify-between">

        <!-- Left -->
        <div class="flex items-center gap-4">

            <!-- Mobile Menu -->
            <button
                @click="sidebarOpen = true"
                class="lg:hidden p-2 rounded-lg hover:bg-slate-100">

                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-6 h-6"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>

                </svg>

            </button>

        </div>


        <!-- Right -->
        <div class="flex items-center gap-3">

            <!-- User -->
            <div
                x-data="{ open: false }"
                class="relative">

                <button
                    @click="open=!open"
                    class="flex items-center gap-3 rounded-xl hover:bg-slate-100 p-2">

                    <div
                        class="w-10 h-10 rounded-full bg-sky-600 text-white
                               flex items-center justify-center font-bold">

                        {{ strtoupper(substr(auth()->user()->name,0,1)) }}

                    </div>

                    <div class="hidden md:block text-le`ft">

                        <h4 class="font-semibold text-sm">

                            {{ auth()->user()->name }}

                        </h4>

                        <p class="text-xs text-slate-500">

                            Administrator

                        </p>

                    </div>

                    <svg
                        class="w-4 h-4 text-slate-500"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M19 9l-7 7-7-7"/>

                    </svg>

                </button>

                <!-- Dropdown -->
                <div
                    x-show="open"
                    @click.outside="open=false"
                    x-transition
                    class="absolute right-0 mt-3 w-64 bg-white rounded-2xl border border-slate-200 shadow-xl overflow-hidden">

                    <!-- User Info -->
                    <div class="px-5 py-4 border-b">

                        <h3 class="font-semibold">

                            {{ auth()->user()->name }}

                        </h3>

                        <p class="text-sm text-slate-500">

                            {{ auth()->user()->email }}

                        </p>

                    </div>

                    <!-- Links -->
                    <a
                        href="#"
                        class="flex items-center px-5 py-3 hover:bg-slate-50">

                        👤
                        <span class="ml-3">My Profile</span>

                    </a>

                    <a
                        href="#"
                        class="flex items-center px-5 py-3 hover:bg-slate-50">

                        ⚙
                        <span class="ml-3">Account Settings</span>

                    </a>

                    <a
                        href="#"
                        class="flex items-center px-5 py-3 hover:bg-slate-50">

                        🔒
                        <span class="ml-3">Change Password</span>

                    </a>

                    <div class="border-t"></div>

                    <form
                        method="POST"
                        action="{{ route('logout') }}">

                        @csrf

                        <button
                            class="w-full text-left px-5 py-3 text-red-600 hover:bg-red-50">

                            🚪 Logout

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</header>