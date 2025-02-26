<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <ul>
    @foreach ($products as $product)
       <li>{{ $product->name }}</li> 
       <li>  {{ $product->desc }}</li> 
       <li> {{ $product->prix }}</li> 
    @endforeach
    </ul>
</div>


 <script src="ro"></script>

</body>
</html>