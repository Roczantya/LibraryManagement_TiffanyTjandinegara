<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Admin Dashboard</h1>
<!-- Add Librarian Form -->
<form action="{{ route('admin.add_librarian') }}" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Add Librarian</button>
</form>

<!-- List of Librarians -->
@foreach($librarians as $librarian)
    <div>{{ $librarian->user->name }} <form action="{{ route('admin.delete_librarian', $librarian->id) }}" method="POST">@csrf @method('DELETE')<button>Delete</button></form></div>
@endforeach


</body>
</html>