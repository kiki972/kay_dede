<!-- resources/views/orders/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders - Kay Dédé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">
    <header class="bg-dark text-white py-3">
        <div class="container">
            <h1 class="h3">Orders</h1>
            <nav class="nav">
                <a href="{{ route('welcome') }}" class="nav-link text-white">Home</a>
                <a href="{{ route('products.index') }}" class="nav-link text-white">Our Products</a>
                <a href="{{ route('reservations.index') }}" class="nav-link text-white">Make a Reservation</a>
            </nav>
        </div>
    </header>

    <main class="container mt-5">
        <section class="bg-white p-4 shadow-sm rounded">
            <h2 class="h4 mb-4">Order List</h2>
            <!-- Contenu spécifique pour afficher les commandes -->
            <div class="alert alert-info" role="alert">
                No orders found.
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; 2024 Kay Dédé Restaurant</p>
    </footer>

    <!-- Bootstrap JS (optional for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>