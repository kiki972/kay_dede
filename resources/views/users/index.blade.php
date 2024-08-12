<!-- resources/views/users/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users - Kay Dédé</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Users</h1>
        <nav>
            <a href="{{ route('welcome') }}">Home</a>
        </nav>
    </header>

    <main>
        <section>
            <h2>User List</h2>
            <ul>
                @foreach($users as $user)
                    <li>{{ $user->name }} - {{ $user->email }}</li>
                @endforeach
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Kay Dédé Restaurant</p>
    </footer>
</body>
</html>