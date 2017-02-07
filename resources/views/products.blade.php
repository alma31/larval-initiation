<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>products</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
	<table class='ui inverted olive table'>
		<th>ID</th>
		<th>NOM</th>
		<th>DESCRIPTION</th>
		<th>PRICE</th>
		<th>QUANTITER</th>
		@foreach ($produits as $produit)
		<tr>
			<td>
				<a href="/products/show/{{$produit->id}}">{{$produit->id}}</a>
			</td>
			<td>
				{{$produit->name}}
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