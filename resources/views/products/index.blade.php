<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <h2>Lista de Productos</h2>
    <div>
    <h2>Agregar producto</h2>
    <form action="{{ route('products.store')}}" method="POST">
        @csrf
        <label for="product">Product</label>
        <input type="text" name="product" id="product" required>
        <label for="price">Price</label>
        <input type="number" name="price" id="price" required>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" required>
        <button type="submit">Crear</button>
    </form>
    </div>
        <ul>
        @foreach ($products as $product)
            <li>
                {{ $product->product }}
                {{ $product->price }}$
                {{ $product->description }}
                <form action="{{ route('products.destroy', $product)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
        </ul>
</body>
</html>