<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Welkom {{$user->name}}, wie wil je vandaag helpen?
                </div>
            </div>
        </div>
    </div>

    

    <ul class="u-grid-12 u-grid-gap-2">
        @foreach($huis as $huis)
            @include('huizen.components.huisCard--index')
        @endforeach
    </ul>
    <a href="{{route('push')}}" class="btn btn-outline-primary btn-block">Make a Push Notification!</a>
    @auth
    <script src="{{ asset('js/enable-push.js') }}" defer></script>
    @endauth
</x-app-layout>
