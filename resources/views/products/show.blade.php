<!-- resources/views/products/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - Kay Dédé</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>{{ $product->name }}</h1>
        <nav>
            <a href="{{ route('products.index') }}">Back to Products</a>
        </nav>
    </header>

    <main>
        <section>
            <h2>Product Details</h2>
            <p>{{ $product->description }}</p>
            <p>Price: ${{ $product->price }}</p>
            <p>Available Quantity: {{ $product->quantity }}</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Kay Dédé Restaurant</p>
    </footer>
</body>
</html>