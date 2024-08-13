<!-- resources/views/users/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users - Kay Dédé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .header {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 2rem;
        }
        .header nav a {
            color: #ffc107;
            margin-left: 15px;
            text-decoration: none;
        }
        .header nav a:hover {
            color: #e0a800;
        }
        .main-section {
            margin-top: 40px;
        }
        .main-section h2 {
            color: #007bff;
        }
        .user-list {
            list-style-type: none;
            padding: 0;
        }
        .user-list li {
            background-color: #ffffff;
            margin-bottom: 10px;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }
        .user-list li:hover {
            background-color: #f1f1f1;
        }
        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 10px;
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>

    <header class="header">
        <div class="container">
            <h1>Users</h1>
            <nav>
                <a href="{{ route('welcome') }}">Home</a>
            </nav>
        </div>
    </header>

    <main class="container main-section">
        <section>
            <h2>User List</h2>
            <ul class="user-list">
                @foreach($users as $user)
                    <li>{{ $user->name }} - {{ $user->email }}</li>
                @endforeach
            </ul>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2024 Kay Dédé Restaurant</p>
    </footer>

    <!-- Bootstrap JS (optional for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>