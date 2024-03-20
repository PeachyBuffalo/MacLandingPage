<x-layout>
    <x-slot name="title">
        Real Estate
    </x-slot>

    @foreach($roles as $role)
        <div class="ml-10 flex items-baseline space-x-2 mt-2">
        <div>
            @if (count($role['referrals']) > 1)
                <x-re-nav-link type="list" :active="request()->is('real_estate')" :referral1="$role['referrals'][0]" :referral2="$role['referrals'][1]">
                    {{ $role['name'] }}
                </x-re-nav-link>
            @elseif (count($role['referrals']) === 0)
                <x-re-nav-link type="a" :active="request()->is('real_estate')" >
                    {{ $role['name']}}
                </x-re-nav-link>
            @else
                <x-re-nav-link type="list" active="request()->is('real_estate')" :referral1="$role['referrals'][0]">
                    {{ $role['name'] }}
                </x-re-nav-link>
            @endif
        </div>
        </div>
    @endforeach
</x-layout>




