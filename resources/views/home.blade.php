<x-layout>
	<hr>
	<article class="cols2">
		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
	</article>
	<hr>
	<p>{{session('msg')}}</p>
	<h1>Unser Angebot</h1>
	<article class="box-container">

		@foreach ($products as $product)

			<div class="box">
				<img src="{{$productImageUrl}}/{{$product['imagePath']}}">
				<p class="box-title">{{$product['name']}}</p>
				<p>{{$product['description']}}</p>
				<p>{{$product['price']}}€</p>
				
				@if ($reservationId != -1)
					<form method="POST" action="/orders/{{$reservationId}}">
						@csrf
						<input type="number" name="amount" min="1" max="10" value="1">
						<button type="submit" name="id" value="{{$product['id']}}">Bestellen</button>
					</form>
				@endif

			</div>

		@endforeach
		
	</article>


</x-layout>