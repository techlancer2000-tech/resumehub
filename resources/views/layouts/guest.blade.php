<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }} - Authentication</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('theme/images/logo/RH_FAVICON.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root{
            --primary:#0ea5e9;
            --primary-dark:#0284c7;
            --bg:#f8fbff;
        }

        body{
            background:var(--bg);
            font-family:Inter,sans-serif;
        }

        .auth-wrapper{
            min-height:100vh;
        }

        .auth-left{
            background:linear-gradient(135deg,#0ea5e9,#38bdf8);
            color:#fff;
            position:relative;
            overflow:hidden;
        }

        .auth-left::before{
            content:'';
            position:absolute;
            width:350px;
            height:350px;
            background:rgba(255,255,255,.08);
            border-radius:50%;
            top:-120px;
            right:-100px;
        }

        .auth-left::after{
            content:'';
            position:absolute;
            width:250px;
            height:250px;
            background:rgba(255,255,255,.08);
            border-radius:50%;
            bottom:-80px;
            left:-80px;
        }

        .auth-card{
            border:none;
            border-radius:20px;
            box-shadow:0 20px 60px rgba(0,0,0,.08);
        }

        .auth-logo{
            height:70px;
        }

        .feature-item{
            margin-bottom:18px;
            font-size:1.05rem;
        }

        .feature-item i{
            margin-right:10px;
        }

        @media(max-width:991px){

            .auth-left{
                min-height:320px;
            }

        }
    </style>

</head>

<body>

<div class="container-fluid">

    <div class="row auth-wrapper">

        <!-- Left Panel -->

        <div class="col-lg-6 auth-left d-flex align-items-center">

            <div class="p-5 position-relative" style="z-index:2;">

                <a href="{{ url('/') }}">
                    <img src="{{ asset('theme/images/logo/RH_LOGO_DARK.png') }}"
                         class="auth-logo mb-4 rounded"
                         alt="ResumeHub">
                </a>

                <h1 class="display-5 fw-bold mb-4">
                    Build Your Dream Resume.
                </h1>

                <p class="lead mb-5">
                    Create ATS-friendly resumes using professional templates
                    and download beautiful PDFs in minutes.
                </p>

                <div class="feature-item">
                    <i class="bi bi-check-circle-fill"></i>
                    ATS Friendly Templates
                </div>

                <div class="feature-item">
                    <i class="bi bi-check-circle-fill"></i>
                    One Click PDF Export
                </div>

                <div class="feature-item">
                    <i class="bi bi-check-circle-fill"></i>
                    Unlimited Resume Updates
                </div>

            </div>

        </div>

        <!-- Right Panel -->

        <div class="col-lg-6 d-flex align-items-center justify-content-center py-5">

            <div class="card auth-card w-100 mx-3" style="max-width:520px;">

                <div class="card-body p-4 p-lg-5">

                    <div class="text-center mb-4">

                        <img src="{{ asset('theme/images/logo/RH_FAVICON.png') }}"
                            alt="ResumeHub Logo"
                            class="img-fluid d-block mx-auto mb-3"
                            width="60">

                        <h2 class="fw-bold">
                            Welcome to ResumeHub
                        </h2>

                        <p class="text-muted mb-0">
                            Continue to your account
                        </p>

                    </div>

                    {{ $slot }}

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>