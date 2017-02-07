<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
	<h3>{{$produits->name}}</h3>
	<div>Provenance : {{$produits->description}}</div>
	<div>Prix : {{$produits->price /100}}</div>
	<div>En stock : {{$produits->stock}}</div>
	<form action="/products/sold/{{$produits->id}}" method="POST">
		{{csrf_field()}}
		<button class="ui button">-</button></form>
		<form action="/products/restock/{{$produits->id}}" method="POST">
			{{csrf_field()}}
			<button class="ui button">+</button></form>
			<a href="/">Revenir a la liste</a>
		</body>
		</html>