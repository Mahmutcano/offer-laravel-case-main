<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>

    <!-- ASSET-CSS -->
    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="asset/list.css">
    

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Product Offer Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Login') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                        {{ __('Register') }}
                    </x-jet-nav-link>
                </li>
            </ul>
        </div>
    </nav>
    <div class="table-title">
        <h3>List Of Product</h3>
    </div>
    <table class="table-fill">
        <thead>
            <tr>
                <th class="text-left">İd</th>
                <th class="text-left">Product Name</th>
                <th class="text-left">Offerable</th>
            </tr>
        </thead>
        @foreach ($products as $product)
            @if ($product->is_offerable == 1)
                {
                <tbody class="table">
                    <tr>
                        <td class="text-left">{{ $product->id }}</td>
                        <td class="text-left"><a href="create-offer/{{ $product->id }}"
                                class="disable-link">{{ $product->product_name }}</a></td>
                        <td>Send Offer</td>
                    </tr>
                </tbody>
                }
            @else
                {
                <tbody class="table">
                    <tr>
                        <td class="text-left" style="background: rgb(247, 125, 125)">{{ $product->id }}</td>
                        <td class="text-left" style="background: rgb(247, 125, 125)"><a
                                href="create-offer/{{$product->id}}" class="disable-link"
                                style="pointer-events: none;" _blank="No Offer">{{ $product->product_name }}</a></td>
                        <td style="background: rgb(247, 125, 125)">No Offer</td>
                    </tr>
                </tbody>
                }
            @endif
        @endforeach
    </table>
    <div class="col">
        <div class="card-body d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    </div>


</body>

</html>
