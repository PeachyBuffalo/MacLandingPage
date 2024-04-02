{{-- resources/views/components/rolesList.blade.php --}}

<ul role="list" class="divide-y divide-gray-100">
    @foreach ($roles as $roleName => $roleDetails)
        @foreach ($roleDetails['referrals'] as $referral)
            <li class="flex justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="#" alt="Placeholder Image">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">{{ $roleDetails['name'] }}</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $referral }}</p>
                    </div>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 text-gray-900">{{ $roleName }}</p>
                    <p class="mt-1 text-xs leading-5 text-gray-500">Details</p>
                </div>
            </li>
        @endforeach
    @endforeach
</ul>
