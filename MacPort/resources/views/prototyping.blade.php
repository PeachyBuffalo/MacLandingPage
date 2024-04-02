@php
    $color = 'gradient-to-t from-blue-400 to-orange-300';
@endphp
<x-layout>
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-900">Macall Smith</h1>
        <p class="text-xl text-gray-700">Full Stack Developer</p>
    <div class="mt-8">
    <x-project-header :prototypes="[
        'Arduino CO2 and VOC monitor',
        'Touch sensor guitar device',
        'Bitcoin clock using e-ink display',
        'Custom computers'
    ]" />
    </div>
</div>
</x-layout>
@include('Components.footer', ['color' => $color])
