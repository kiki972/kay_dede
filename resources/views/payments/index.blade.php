<!-- resources/views/payments/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Kay Dédé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">
    <header class="bg-dark text-white p-3">
        <div class="container">
            <h1 class="h3">Payment</h1>
            <nav class="d-flex justify-content-between">
                <a href="{{ route('welcome') }}" class="text-white">Home</a>
                <a href="{{ route('orders.index') }}" class="text-white">My Orders</a>
            </nav>
        </div>
    </header>

    <main class="container mt-5">
        <section class="bg-white p-4 shadow-sm rounded">
            <h2 class="h4 mb-4">Payment Details</h2>
            <form action="{{ route('payments.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="order_id" class="form-label">Order ID:</label>
                    <input type="text" id="order_id" name="order_id" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="payment_method" class="form-label">Payment Method:</label>
                    <select id="payment_method" name="payment_method" class="form-select" required>
                        <option value="credit_card">Credit Card</option>
                        <option value="paypal">PayPal</option>
                    </select>
                </div>

                <!-- Additional payment fields can be added here -->

                <button type="submit" class="btn btn-primary w-100">Pay Now</button>
            </form>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; 2024 Kay Dédé Restaurant</p>
    </footer>

    <!-- Bootstrap JS (optional for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>