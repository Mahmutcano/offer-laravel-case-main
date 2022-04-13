<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Offer List') }}
        </h2>
    </x-slot>



        <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <table class="table-title mx-auto mt-5">
        <thead>
          <tr>
            <th>User Name</th>
            <th>User Mail</th>
            <th>User Offer</th>
            <th>Product</th>
            <th>City</th>
            <th>Situation</th>
            <th>Message</th>
          </tr>
        </thead>
        @foreach ($offers as $data)
        <tbody>
          <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->product}}</td>
            <td>{{$data->city}}</td>
            <td><a href="mail-form/{{$data->id}}" style="color:rgb(255, 139, 139)">Onay/Red</a></td>
            <td>{{$data->message}}</td>
          </tr>
        
        </tbody>
        @endforeach
      </table>
      <span class="px-2 py-1 mx-5 font-semibold leading-tight">
      {{$offers->links();}}
       </span>
       
        </div>
    </div>
</div>

</x-app-layout>