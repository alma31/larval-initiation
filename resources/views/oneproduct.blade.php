<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
	<div class="ui inverted olive centered masive card">
		<h3 style="text-align: center;">{{$produits->name}}</h3>
		<strong><div>Provenance : {{$produits->description}}</div>
			<div>Prix : {{$produits->price /100}}</div>
			<div>En stock : {{$produits->stock}}</div></strong>
			<table class="ui centered table">
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
				<tr>
					<td>
						<div style="text-align: center;">
							<form action="/products/{{$produits->id}}" method="POST">
								{{csrf_field()}}
								<label for="name">Nom</label>
								<input name="name" id="name" type="text" value="{{$produits->name}}">
								<label for="description">Description</label>
								<input name="description" id="description" type="text" value="{{$produits->description}}">
								<label for="price">Prix</label>
								<input name="price" id="price" type="number" value="{{$produits->price}}">
								<label for="stock">Quantiter</label>
								<input name="stock" id="stock" type="number" value="{{$produits->stock}}">
								<input class="ui button" value="Modifier produit" type="submit">
							</form>
						</td>
					</tr>
				</td>
			</tr>
			<tr>
				<td>
					<form action="/products/{{$produits->id}}" method="POST">
						{{csrf_field()}}
						{{method_field('DELETE')}}
					</div>
					<tr>
						<td>
							<div style="text-align: center;">
								<button class="ui button olive">Supprimer ce produit</button>
							</div>
						</form>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div style="text-align: center;">
		<a class="ui button olive" href="/">Revenir a la liste</a>
	</div>
</body>
</html>