<section id="features" class="section-padding">

<div class="container">

<div class="text-center mb-5">
<h2 class="fw-bold">Why Choose ResumeHub?</h2>
</div>

<div class="row g-4">

@foreach([
['bi-stars','ATS Optimized'],
['bi-layout-text-window','Modern Templates'],
['bi-download','PDF Export']
] as $feature)

<div class="col-md-4">

<div class="card border-0 shadow-sm h-100 feature-card">

<div class="card-body text-center p-5">

<i class="bi {{ $feature[0] }} display-4 text-primary"></i>

<h5 class="mt-4">{{ $feature[1] }}</h5>

</div>

</div>

</div>

@endforeach

</div>

</div>
</section>