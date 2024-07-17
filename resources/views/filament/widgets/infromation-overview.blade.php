@php
    $user = filament()->auth()->user();
    $isBirthday = $user->tgl_lahir && now()->isBirthday($user->tgl_lahir);
@endphp

<x-filament-widgets::widget class="fi-account-widget">
    <x-filament::section>
        <div class="flex items-center gap-x-3">
            <x-filament-panels::avatar.user size="lg" :user="$user" />

            <div class="flex-1">
                <h2 class="grid flex-1 text-base font-semibold leading-6 text-gray-950 dark:text-white">
                    @if ($user->hasRole('super_admin'))
                        Selamat Datang
                    @elseif ($isBirthday)
                        Selamat Ulang Tahun 🎉
                    @else
                        Selamat Datang
                    @endif
                </h2>

                <p class="text-sm text-gray-500 dark:text-gray-400">
                    @if ($user->hasRole('super_admin'))
                        {{ filament()->getUserName($user) }}
                    @else 
                    {{ $user->nama_pp }}
                    @endif
                </p>
            </div>


        </div>
    </x-filament::section>
</x-filament-widgets::widget>
