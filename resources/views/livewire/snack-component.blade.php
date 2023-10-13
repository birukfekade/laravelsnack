@extends('layouts.app')
@section('content')
<div>
    <h1>Snacks</h1>

    <ul>
        @foreach($snacks as $snack)
            <li>
                <strong>Name:</strong> {{ $snack['name'] }} <br>
                <strong>Description:</strong> {{ $snack['description'] }} <br>
                <strong>Quantity:</strong> {{ $snack['quantity'] }} <br>
                <strong>Gluten-Free:</strong> {{ $snack['gluten_free'] ? 'Yes' : 'No' }} <br>
                <strong>Refrigerated:</strong> {{ $snack['refrigerated'] ? 'Yes' : 'No' }} <br>
                <strong>Calories:</strong> {{ $snack['calories'] }} <br>
                <strong>Brand:</strong> {{ $snack['brand'] }} <br>
                <img src="{{ $snack['image_url'] }}" alt="Snack Image" width="200" height="200">
            </li>
            <hr>
        @endforeach
    </ul>
</div>
@endsection
