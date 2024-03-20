@props(['active' => false, 'type' => 'a'])

@if ($type === 'a')
    <a class="{{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-base font-medium"
        aria-current="{{ $active ? 'page': 'false' }}"
        {{ $attributes }}
    >{{ $slot }}</a>
@elseif ($type === 'dropdown')
    <div class="dropdown">
        <button class="{{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-base font-medium"
            aria-current="{{ $active ? 'page': 'false' }}"
            {{ $attributes }}
        >{{ $slot }}</button>
        <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
    </div>
@elseif ($type === 'list')
<div class="list">
    <button class="{{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-base font-medium"
        aria-current="{{ $active ? 'page': 'false' }}"
        {{ $attributes }}
    >{{ $slot }}</button>
    <div class="list-content">
        @php
            $referral1 = "Referral 1";
            $referral2 = "Referral 2";
        @endphp
        {{ $referral1 }}
        {{ $referral2 }}
    </div>
</div>

@else
    <button
    class= "{{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-base font-medium"
    aria-current="{{ $active ? 'page': 'false' }}"
    {{ $attributes }}
    >{{ $slot }}
    </button>
@endif
