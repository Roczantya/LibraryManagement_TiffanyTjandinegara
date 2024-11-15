<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Products - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4"></h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('Newspapers.create') }}" class="btn btn-md btn-success mb-3">ADD Newspapers</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Publisher</th>
                                    <th scope="col">Tanggal Terbit</th>  
                                    <th scope="col">Dipajang</th>                                   
                                    <th scope="col">Disimpan</th>                                   

                                     <th scope="col" style="width: 20%">ACTIONS</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($Newspapers as $Newspaper)
                                    <tr>
                                    <td>{{ $Newspaper->{'Judul Suratkabar'} }}</td>
                                    <td>{{ $Newspaper->Author }}</td>
                                    <td>{{ $Newspaper->Publisher }}</td>
                                    <td>{{ $Newspaper->{'Tanggal Terbit'} }}</td>
                                    <td>{{ $Newspaper->Dipajang }}</td>
                                    <td>{{ $Newspaper->Disimpan }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('Newspapers.destroy', $Journal->id) }}" method="POST">
                                                <a href="{{ route('Newspapers.show', $Journal->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('Newspapers.edit', $Journal->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Products belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $Newspapers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //message with sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif

    </script>

</body>
</html>