<x-app-layout>

    <livewire:layouts.guests.header />

    <main class="w-full flex flex-col">

        {{ $slot }}

    </main>

    <livewire:layouts.guests.footer />

</x-app-layout>
