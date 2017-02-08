<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>products</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
	<h1 style="text-align: center;">Mon Stock</h1>
	<h3 style="text-align: center;">Ajouter un produit</h3>
	<form action="/products" method="POST">
		{{csrf_field()}}
		<label for="name">Nom</label>
		<input name="name" id="name" type="text">
		<label for="description">Description</label>
		<input name="description" id="description" type="text">
		<label for="price">Prix</label>
		<input name="price" id="price" type="number">
		<label for="stock">Quantiter</label>
		<input name="stock" id="stock" type="number">
		<input class="ui button" value="Ajouter produit" type="submit">
	</form>
	<table class='ui inverted olive table'>
		<th>ID</th>
		<th>NOM</th>
		<th>DESCRIPTION</th>
		<th>PRICE</th>
		<th>QUANTITER</th>
		@foreach ($produits as $produit)
		<tr>
			<td>
				{{$produit->id}}
			</td>
			<td>
				<a href="/products/show/{{$produit->id}}">{{$produit->name}}</a>
			</td>
			<td>
				{{$produit->description}}
			</td>
			<td>
				{{$produit->price /100}}€
			</td>
			<td>
				{{$produit->stock}}
			</td>
			@endforeach
		</tr>
	</table>
</body>
</html>