<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Raleway:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>Product</title>
    <style>

        body {
            font-family: "Rubik", sans-serif;
            margin: 0;
        }
        h2{
            margin: 0;
            padding-top: 20px;
            padding-bottom: 20px;
            text-align: center;
            background-color: steelblue;
            color: white;
        }
        .created-container{
            margin-bottom: 50px;
            display: grid;
            justify-content: center;
            text-align: center;
        }
        .created-container h3{
            font-size: 5vh;
        }
        .created-container input {
            border-radius: 5px;
            border: 1px solid black;
        }
        .created-container input[type=number]::-webkit-inner-spin-button,
        .created-container input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .created-container input[type=number] {
            -moz-appearance: textfield;
        }
        .created-container button{
            margin-top: 10px;
            padding: 8px 11px;
            border-radius: 10px;
            background-color: dodgerblue;
            color: white;
            border: none;
            cursor: pointer;
        }
        .form-container {
            display: inline;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table .delete-edit {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        table th {
            padding: 10px;
            color: white;
            background-color: #282a35;
        }
        table td {
            padding: 10px;
            text-align: center;
        }
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        table tr:hover {
            background-color: #ddd;
        }
        table .delete-button {
            background-color: crimson;
            padding: 5px;
            color: white;
            border-radius: 8px;
            border: none;
            cursor: pointer;
        }
        table .edit-button {
            background-color: green;
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
    <h2>Lista de Productos</h2>
    <div class="created-container">
    <h3>Agregar producto</h3>
    <form action="{{ route('products.store')}}" method="POST">
        @csrf
        <div class="form-container">
        <label for="product">Producto</label>
        <input type="text" name="product" id="product" required>
        <label for="price">Precios</label>
        <input type="number" name="price" id="price" required>
        <label for="description">Descripción</label>
        <input type="text" name="description" id="description" required>
        </div>
        <br>
        <button type="submit">Crear</button>
    </form>
    </div>
    <table>
        <tr>
            <th></th>
            <th></th>
            <th>Productos</th>
            <th>Precio</th>
            <th>Descripción</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td class="delete-edit">
                <a href="{{ route('products.edit', $product)}}" class="edit-button">Editar</a>
                <form action="{{ route('products.destroy', $product)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button">Borrar</button>
                </form>
            </td>
            <td>
                {{ $product->id }}
            </td>
            <td>
                {{ $product->product }}
            </td> 
            <td>
                {{ $product->price }}$
            </td> 
            <td>
                {{ $product->description }}
            </td> 
        </tr>  
        @endforeach
        </table>
</body>
</html>