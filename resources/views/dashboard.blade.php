<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <table class="table-title mx-auto mt-5">
        <thead>
          <tr>
            <th>User Name</th>
            <th>User Mail</th>
            <th>User Offer</th>
            <th>Product</th>
            <th>Situation</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>The Sliding</td>
            <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
            <td>32 TL</td>
            <td>Product</td>
            <td><a href="{{ asset('list-offer') }}" style="color:rgb(255, 139, 139)">Onay/Red</a></td>
          </tr>

        </tbody>
      </table>
</x-app-layout>
