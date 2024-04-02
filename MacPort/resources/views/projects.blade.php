@php
    $color = 'gradient-to-r from-gray-900 from-10% via-gray-400 via-50% to-gray-900 to-90%';
@endphp

<x-layout>
    <x-slot name="title">
        Projects
    </x-slot>
    <div class="flex flex-col items-center justify-center min-h-screen bg-{{$color}}">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-900">Macall Smith</h1>
            <p class="text-xl text-gray-700">Full Stack Developer</p>
        </div>
        <div class="flex flex-col items-center space-y-4 mt-8">
            <a href="https://github.com/PeachyBuffalo" class="bg-gray-900 text-white rounded-md px-3 py-2 text-base font-medium" target="_blank">GitHub: PeachyBuffalo</a>
            <a href="mailto:macall.smith@gmail.com" class="bg-gray-900 text-white rounded-md px-3 py-2 text-base font-medium" target="_blank">Email for Upcoming Projects</a>
</x-layout>
