<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ResumeHub') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('theme/images/logo/RH_FAVICON.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root{
            --primary:#0ea5e9;
            --dark:#0f172a;
            --light:#f8fafc;
        }

        body{
            font-family: Inter,sans-serif;
            overflow-x:hidden;
        }

        .btn-primary{
            background:var(--primary);
            border:none;
        }
    </style>

</head>

<body class="bg-slate-100 font-sans antialiased">

<div
    x-data="{
        sidebarOpen: false
    }"
    class="min-h-screen">

    {{-- Sidebar --}}
    @include('admin.partials.sidebar')

    {{-- Content Wrapper --}}
    <div class="lg:pl-72 flex flex-col min-h-screen">

        {{-- Navbar --}}
        @include('admin.partials.navbar')

        {{-- Main Content --}}
        <main class="flex-1 p-4 md:p-6 lg:p-8">

            {{-- Page Heading --}}
            @isset($header)

                <div class="mb-6">

                    <div class="flex items-center justify-between">

                        <div>

                            <h2 class="text-3xl font-bold text-slate-800">
                                {{ $header }}
                            </h2>

                            <p class="mt-1 text-sm text-slate-500">
                                Manage your ResumeHub platform efficiently.
                            </p>

                        </div>

                    </div>

                </div>

            @endisset

            {{-- Flash Messages --}}
            @if(session('success'))

                <div class="mb-6 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-green-700">
                    {{ session('success') }}
                </div>

            @endif

            @if(session('error'))

                <div class="mb-6 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-red-700">
                    {{ session('error') }}
                </div>

            @endif

            {{-- Validation Errors --}}
            @if ($errors->any())

                <div class="mb-6 rounded-xl border border-red-200 bg-red-50 p-4">

                    <h3 class="font-semibold text-red-700 mb-2">
                        Please fix the following errors:
                    </h3>

                    <ul class="list-disc ml-5 text-red-600 space-y-1">

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

            {{-- Page Content --}}
            {{ $slot }}

        </main>

    </div>

</div>

</body>
</html>