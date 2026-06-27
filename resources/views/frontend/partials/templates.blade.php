<section id="templates" class="bg-light section-padding">

<div class="container">

<div class="text-center mb-5">
<h2 class="fw-bold">Professional Templates</h2>
</div>

<div class="row g-4">

@for($i=1;$i<=6;$i++)

<div class="col-md-4">

<div class="card border-0 shadow template-card">

<img src="https://picsum.photos/400/500?random={{ $i }}"
     class="card-img-top">

</div>

</div>

@endfor

</div>

</div>

</section>