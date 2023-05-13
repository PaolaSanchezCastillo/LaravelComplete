<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>
    
    <h1>{{$title}}</h1>
    <p>Fecha: {{$date}}</p>
 

    <br>
    <br>
    <p>Se realiza una nueva alta de producto.</p>
    <p>ID: {{$product->ProductID}}</p>
    <p>Nombre : {{$product->ProductName}}</p>
    <p>Precio:  {{$product->UnitPrice}}</p>


</body>
</html>