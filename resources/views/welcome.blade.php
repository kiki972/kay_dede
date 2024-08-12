<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kay Dédé - Welcome</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        header {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
        }
        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }
        nav a {
            color: #ffffff;
            margin-right: 15px;
            text-decoration: none;
        }
        nav a:hover {
            text-decoration: underline;
        }
        footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 10px 0;
            text-align: center;
        }
        .btn-custom {
            background-color: #007bff;
            color: #ffffff;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Welcome to Kay Dédé Restaurant</h1>
                <nav>
                    <a href="{{ route('products.index') }}" class="btn btn-custom">Our Products</a>
                    <a href="{{ route('reservations.index') }}" class="btn btn-custom">Make a Reservation</a>
                    <a href="{{ route('payments.index') }}" class="btn btn-custom">Payments</a>
                    <a href="{{ route('admin.index') }}" class="btn btn-custom">Admin</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="container my-4">
        <section>
            <h2 class="text-center mb-4">About Us</h2>
            <p class="text-center">Welcome to Kay Dédé, where we serve the best traditional cuisine.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Kay Dédé Restaurant</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
