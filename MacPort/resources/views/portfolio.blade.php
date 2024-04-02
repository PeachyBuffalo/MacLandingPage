@php
    $color = 'gradient-to-t from-blue-400 to-orange-300';
@endphp

<x-layout>
    <div class="flex flex-col items-center justify-center min-h-screen bg-{{ $color }}">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800">Macall Smith</h1>
            <div class="mt-8">
                @php
                $data = [
                    'jobTitle' => 'Software Engineer',
                    'jobType' => 'Contractor',
                    'jobLocation' => 'Remote',
                    'minSalary' => '$100,000',
                    'maxSalary' => '$150,000',
                    'projectLength' => '3 Month',
                ];
                @endphp

                @include('components.portfolio-header', ['data' => $data])
            </div>
            <div class="mt-8">

            </div>
        </div>
    </div>
    <style>
        .btn {
            display: inline-block;
            background-color: #4f46e5;
            color: white;
            padding: 8px 24px;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #4338ca;
        }
    </style>
</x-layout>
@include('Components.footer', ['color' => $color])
