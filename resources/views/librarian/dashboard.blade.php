<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Library Dashboard</h1>
<!-- List of Books, Journals, Newspapers, CD/DVD -->
@foreach($books as $book)
    <div>{{ $book->title }} - <a href="{{ route('library.reserve_book', $book->id) }}">Reserve</a></div>
@endforeach

</body>
</html>