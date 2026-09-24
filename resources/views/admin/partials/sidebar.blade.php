<!-- Sidebar -->
<aside
    class="fixed inset-y-0 left-0 z-50 w-72 bg-white border-r border-slate-200 transform transition-transform duration-300 ease-in-out
           lg:translate-x-0"
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'">

    <!-- Logo -->
    <div class="h-16 px-6 border-b flex items-center justify-between">

        <a href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('theme/images/logo/RH_LOGO.png') }}" width="200" height="55" />
        </a>

        <button
            class="lg:hidden text-slate-600"
            @click="sidebarOpen=false">

            ✕

        </button>

    </div>

    <!-- Menu -->
    <div class="overflow-y-auto h-[calc(100vh-64px)] px-4 py-6 space-y-2">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 rounded-xl px-4 py-3 bg-blue-500 text-white font-medium shadow">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path d="M3 12l9-9 9 9"></path>
                <path d="M9 21V9h6v12"></path>
            </svg>
            Dashboard
        </a>
    </div>
</aside>

<!-- Mobile Overlay -->
<div
    x-show="sidebarOpen"
    x-transition.opacity
    class="fixed inset-0 bg-black/50 z-40 lg:hidden"
    @click="sidebarOpen=false">
</div>