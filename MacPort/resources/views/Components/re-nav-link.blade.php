@props(['active', 'type', 'referral1', 'referral2'])
@php
    $classes = ($active ?? false)
                ? 'bg-gray-900 text-white rounded-md px-3 py-2 text-base font-medium'
                : 'text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base font-medium';
@endphp

@if ($type === 'a')
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
        @isset($referral1)
                {{ $referral1 }}
                @isset($referral2)
                    {{ $referral2 }}
                @endisset
        @endisset

    </a>
@elseif ($type === 'list')
    <div class="list">
        <button {{ $attributes->merge(['class' => $classes]) }}>
            {{ $slot }}
        </button>
        @isset($referral1)
            <div class="list-content">
                {{ $referral1 }}
                @isset($referral2)
                    {{ $referral2 }}
                @endisset
            </div>
        @endisset
    </div>
@else
    <button {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
        @isset($referral1)
                {{ $referral1 }}
                @isset($referral2)
                    {{ $referral2 }}
                @endisset
        @endisset
    </button>
@endif
