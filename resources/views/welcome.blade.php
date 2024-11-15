@if(Auth::user()->isAdmin())
    <h1>Admin Dashboard</h1>
@elseif(Auth::user()->isLibrarian())
    <h1>Librarian Dashboard</h1>
@else
    <h1>Welcome</h1>
@endif