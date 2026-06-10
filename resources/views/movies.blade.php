<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <nav style="margin-bottom: 20px; background-color: #ada4a4; padding: 10px; display: flex; justify-content: center; gap: 20px;">
    <a href="/customers">Customers</a>
    <a href="/movies">View Movies</a>
</nav>

    <h1 style="color: blue; text-align: center;">
        Movie List
    </h1>

    <table border="1" cellpadding="10" cellspacing="0" style="margin:auto;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Director</th>
                <th>Release Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
                <tr>
                    <td>{{ $movie->id }}</td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->director }}</td>
                    <td>{{ $movie->release_year }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
