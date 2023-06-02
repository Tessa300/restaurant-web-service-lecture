<x-layout >
    <hr>
    <article>
        <a href="/home/{{$reservationId}}">Alle Produkte anzeigen</a>
    </article>
    <hr>
    <h1>Unsere Bestellungen</h1>
    <p class="message">{{ session('msg') }}</p>
    <article class="box-container">
        @foreach ($orders as $order)
            <div class="box">
                <img src="{{$productImageUrl}}/product_{{$order->product['id']}}.webp" alt="{{$order->product['name']}}">
                <p class="box-title">{{$order->product['name']}}</p>
                <p>{{$order->product['description']}}</p>
                <p>{{$order->product['price']}}€</p>
                <p>{{$order->amount}} Stück bestellt</p>
            </div>
        @endforeach
    </article>
</x-layout>
    