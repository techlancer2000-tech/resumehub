<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResumeHub - Professional Resume Builder</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('theme/images/logo/RH_FAVICON.png') }}">

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

        .section-padding{
            padding:100px 0;
        }

        .gradient-bg{
            background:
                radial-gradient(circle at top left,#7dd3fc,transparent),
                radial-gradient(circle at bottom right,#38bdf8,transparent);
        }

        .template-card:hover{
            transform:translateY(-10px);
            transition:.3s;
        }

        .feature-card:hover{
            transform:translateY(-5px);
            transition:.3s;
        }
    </style>

    @stack('styles')
</head>
<body>

@include('frontend.partials.navbar')

@yield('content')

@include('frontend.partials.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
    AOS.init({
        duration:800,
        once:true
    });
</script>

@stack('scripts')

</body>
</html>