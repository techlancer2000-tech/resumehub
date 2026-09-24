<x-app-layout>

<x-slot name="header">

Dashboard

</x-slot>

<div class="space-y-6">

<div class="grid lg:grid-cols-4 md:grid-cols-2 gap-6">

<div class="bg-white rounded-2xl shadow-sm p-6">

<p class="text-slate-500">

Total Vendors

</p>

<h2 class="text-3xl font-bold mt-2">

235

</h2>

</div>

<div class="bg-white rounded-2xl shadow-sm p-6">

<p class="text-slate-500">

Orders

</p>

<h2 class="text-3xl font-bold mt-2">

1,240

</h2>

</div>

<div class="bg-white rounded-2xl shadow-sm p-6">

<p class="text-slate-500">

Revenue

</p>

<h2 class="text-3xl font-bold mt-2">

₹2.5L

</h2>

</div>

<div class="bg-white rounded-2xl shadow-sm p-6">

<p class="text-slate-500">

Products

</p>

<h2 class="text-3xl font-bold mt-2">

845

</h2>

</div>

</div>

<div class="bg-white rounded-2xl shadow-sm">

<div class="p-6 border-b">

<h2 class="font-semibold">

Latest Orders

</h2>

</div>

<div class="overflow-auto">

<table class="w-full">

<thead>

<tr class="bg-slate-50">

<th class="p-4 text-left">

Order

</th>

<th class="p-4">

Customer

</th>

<th class="p-4">

Status

</th>

<th class="p-4">

Amount

</th>

</tr>

</thead>

<tbody>

{{-- Your rows --}}

</tbody>

</table>

</div>

</div>

</div>

</x-app-layout>