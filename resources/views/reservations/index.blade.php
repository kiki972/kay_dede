<!-- resources/views/reservations/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make a Reservation - Kay Dédé</title>
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
            font-size: 2rem;
        }
        nav a {
            color: #ffffff;
            text-decoration: none;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            margin-top: 30px;
        }
        .form-section {
            background-color: #ffffff;
            padding: 30px;
            border-radius: .25rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <header class="container text-center">
        <h1>Make a Reservation</h1>
        <nav>
            <a href="{{ route('welcome') }}" class="btn btn-light">Home</a>
        </nav>
    </header>

    <main class="container">
        <section class="form-section">
            <h2 class="text-center mb-4">Reservation Form</h2>
            <form action="{{ route('reservations.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="reservation_date">Reservation Date:</label>
                    <input type="datetime-local" id="reservation_date" name="reservation_date" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="number_of_guests">Number of Guests:</label>
                    <input type="number" id="number_of_guests" name="number_of_guests" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="special_requests">Special Requests:</label>
                    <textarea id="special_requests" name="special_requests" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Submit Reservation</button>
            </form>
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