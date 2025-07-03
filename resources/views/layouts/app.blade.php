{{-- filepath: c:\Bintangnovala\nova\portofolio-team\resources\views\layouts\app.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | bintangnovala</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    {{-- Navbar sederhana --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}">Portofolio</a>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
</body>

</html>
