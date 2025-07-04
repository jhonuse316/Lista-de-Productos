<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Raleway:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>Editar</title>
    <style>
        body {
            font-family: "Rubik", sans-serif;
            background-color: white;
        }
        .edit-container{
            padding: 25px;
            margin: 160px 530px 0 530px;
            display: grid;
            justify-content: center;
            border: 1px solid #28292a;
            box-shadow: 10px;
            border-radius: 5px;
            background-color: #28292a;
        }
        .edit-container form {
            display: grid;
            gap: 2vh;
            text-align: center;
        }
        .edit-container label {
            text-decoration: 1px solid;
            color: white;
        }
        .edit-container input {
            border-radius: 5px;
            border: 1px solid gray;
        }
         .edit-container input[type=number]::-webkit-inner-spin-button,
        .edit-container input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .edit-container input[type=number] {
            -moz-appearance: textfield;
        }
        .edit-container button {
            margin-top: 5px;
            padding: 8px 11px;
            border-radius: 10px;
            background-color: dodgerblue;
            color: white;
            border: none;
            cursor: pointer;
        }
        .edit-container a {
            background-color: dodgerblue;
            font-size: 12px;
            text-decoration: none solid;
            padding: 5px;
            color: white;
            border-radius: 8px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="edit-container">    
        <form action="{{ route('products.update', $product)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="product">Producto</label>
        <input type="text" name="product" id="product" value="{{ $product->product }}" required>
        <label for="price">Precio</label>
        <input type="number" name="price" id="price" value="{{ $product->price }}" required>
        <label for="description">Descripción</label>
        <input type="text" name="description" id="description" value="{{ $product->description }}" required>
        <button type="submit">Editar</button>
        <a href="{{ route('products.index')}}" >Volver</a>
    </form>
    </div>
</body>
</html>