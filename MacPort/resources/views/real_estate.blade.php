@php
    $color = 'gradient-to-t from-red-500 to-orange-300';
@endphp

<x-layout>
    <h1 class="text-4xl text-center font-bold text-gray-900 py-6">Macall Smith's Real Estate List:</h1>
    <div class="mx-auto px-8 flex flex-wrap">
        @foreach ($roles as $roleName => $roleDetails)
        <div class="w-full sm:w-1/2 p-8">
        <div x-data="{ open: false }" class="bg-white shadow overflow-hidden sm:rounded-lg mb-8">
            <div @click="open = !open" class="px-4 py-5 sm:px-6 flex justify-between items-center cursor-pointer">
                <h3 class="text-lg leading-6 font-medium text-gray-900">{{ $roleDetails['name'] }}</h3>
                <svg :class="{'transform rotate-180': open}" class="w-5 h-5 text-gray-500 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </div>

            <div x-show="open" class="border-t border-gray-200">
                <dl>
                    @foreach ($roleDetails['referrals'] as $referral)
                        <div class="{{ $loop->even ? 'bg-gray-50' : 'bg-white' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Referral</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $referral }}</dd>
                            <!-- Dropdown content goes here -->
                            <div x-show="open" class="text-sm text-gray-600 sm:col-span-3">
                                Contact Info or Additional Details Here
                            </div>
                        </div>
                    @endforeach
                </dl>
            </div>
        </div>
    </div>
        @endforeach
    </div>
</x-layout>
