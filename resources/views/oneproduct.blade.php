<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
	<div class="ui inverted olive centered card">
		<h3 style="text-align: center;">{{$produits->name}}</h3>
		<strong><div>Provenance : {{$produits->description}}</div>
			<div>Prix : {{$produits->price /100}}</div>
			<div>En stock : {{$produits->stock}}</div></strong>
			<table>
				<tr>
					<td>
						<form action="/products/sold/{{$produits->id}}" method="POST">
							{{csrf_field()}}
							<button class="ui button olive">+</button>
						</form>
					</td>
					<td>
						<form action="/products/restock/{{$produits->id}}" method="POST">
							{{csrf_field()}}
							<button class="ui button olive">-</button>
						</form>
					</td>
				</tr>
			</table>
			<form action="/products/{{$produits->id}}" method="POST">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				<button class="ui button olive">Supprimer ce produit</button>
			</form>
		</div>
		<div style="text-align: center;">
			<a class="ui button olive" href="/">Revenir a la liste</a>
		</div>
	</body>
	</html>