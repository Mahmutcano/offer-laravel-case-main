<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mail Form') }}
        </h2>
    </x-slot>

    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-5" />

        @if(session('status'))
            <div class="mb-5 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <h6>Name:</h6>
                <x-jet-label for="Name" value="{{ $offer->name }}" />
            </div>
            <hr />

            <div class="mt-4">
                <h6>Email:</h6>
                <x-jet-label for="password" value="{{ $offer->email }}" />
            </div>
            <hr />

            <div class="mt-4">
                <h6>City:</h6>
                <x-jet-label for="password" value="{{ $offer->city }}" />
            </div>
            <hr />

            <div class="mt-4">
                <h6>Offer Price:</h6>
                <x-jet-label for="password" value="{{ $offer->price }}" />
            </div>
            <hr />

            <div class="mt-4">
                <h6>Message</h6>
                <x-jet-label for="password" value="{{ $offer->message }}" />
            </div>
            <hr />

            <div class="block mt-4">
                <label for="reject" class="flex items-center">
                    <x-jet-checkbox id="reject" name="reject" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Reject') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('list-offer') }}">Back</a>

                <x-jet-button class="ml-4">
                    {{ __('Mail Submit') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-app-layout>
