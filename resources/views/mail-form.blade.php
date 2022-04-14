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

        <form method="POST" action="/send-email">
            @csrf

            <div>
                <h6>Name:</h6>
                <x-jet-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{ $offer->name }}"/>
            </div>
            <hr />

            <div class="mt-4">
                <h6>Email:</h6>
                <x-jet-input id="email" name="email" type="text" class="mt-1 block w-full" value="{{ $offer->email }}"/>
            </div>
            <hr />

            <div class="mt-4">
                <h6>City:</h6>
                <x-jet-input id="city" name="city" type="text" class="mt-1 block w-full" value="{{ $offer->city }}"/>
            </div>
            <hr />

            <div class="mt-4">
                <h6>Offer Price:</h6>
                <x-jet-input id="price" name="price" type="text" class="mt-1 block w-full" value="{{ $offer->price }}"/>
            </div>
            <hr />

            <div class="mt-4">
                <h6>Product:</h6>
                <x-jet-input id="product" name="product" type="text" class="mt-1 block w-full" value="{{ $offer->product }}"/>
            </div>
            <hr />

            <div class="mt-4">
                <h6>User Message:</h6>
                <x-jet-input id="message" name="message" type="text" class="mt-1 block w-full" value="{{ $offer->message }}"/>
            </div>
            <hr />

            <div class="mt-4">
                <h6>Email Text:</h6>
                <textarea id="emailText" name="emailText" cols="42" rows="2"></textarea>
            </div>
            <hr />

            <div class="block mt-4">
                <label for="reject" class="flex items-center">
                    <select name="offerCase" id="offerCase">
                        <option>Approve</option>
                        <option>Reject</option>
                    </select>
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
