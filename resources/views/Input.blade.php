<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input books</title>
    <style>

    </style>
    <script>
        function toggleFormFields(select) {
            const formFields = document.getElementById('form-fields');
            const selectedValue = select.value;

            // Menyembunyikan semua form field sebelumnya
            formFields.innerHTML = '';

            // Menampilkan form sesuai dengan pilihan
            if (selectedValue === 'book') {
                formFields.innerHTML = `
                    <h3>Input Data Buku</h3>
                    <table border="1">
                        <tr>
                            <td><label for="judul-buku">Judul Buku:</label></td>
                            <td><input type="text" id="judul-buku" name="judul-buku" required></td>
                        </tr>
                        <tr>
                            <td><label for="author">Author:</label></td>
                            <td><input type="text" id="author" name="author" required></td>
                        </tr>
                        <tr>
                            <td><label for="jenis-buku">Jenis Buku:</label></td>
                            <td>
                                <select id="jenis-buku" name="jenis-buku" onchange="toggleAccessCodeField(this)" required>
                                    <option value="physical-book">Physical Book</option>
                                    <option value="ebook">Ebook</option>
                                </select>
                            </td>
                        </tr>
                        <tr id="access-code-row" style="display:none;">
                            <td><label for="access-code">Access Code:</label></td>
                            <td><input type="text" id="access-code" name="access-code"></td>
                        </tr>
                        <tr>
                            <td><label for="tahun-terbit">Tahun Terbit:</label></td>
                            <td><input type="number" id="tahun-terbit" name="tahun-terbit" required></td>
                        </tr>
                    </table>
                `;
            } else if (selectedValue === 'journal') {
                formFields.innerHTML = `
                    <h3>Input Data Jurnal</h3>
                    <table border="1">
                        <tr>
                            <td><label for="judul-jurnal">Judul Jurnal:</label></td>
                            <td><input type="text" id="judul-jurnal" name="judul-jurnal" required></td>
                        </tr>
                        <tr>
                            <td><label for="penulis">Penulis:</label></td>
                            <td><input type="text" id="penulis" name="penulis" required></td>
                        </tr>
                        <tr>
                            <td><label for="volume">Volume:</label></td>
                            <td><input type="text" id="volume" name="volume" required></td>
                        </tr>
                        <tr>
                            <td><label for="tahun-jurnal">Tahun Terbit:</label></td>
                            <td><input type="number" id="tahun-jurnal" name="tahun-jurnal" required></td>
                        </tr>
                    </table>
                `;
            } else if (selectedValue === 'newspaper') {
                formFields.innerHTML = `
                    <h3>Input Data Surat Kabar</h3>
                    <table border="1">
                        <tr>
                            <td><label for="judul-surat-kabar">Judul Surat Kabar:</label></td>
                            <td><input type="text" id="judul-surat-kabar" name="judul-surat-kabar" required></td>
                        </tr>
                        <tr>
                            <td><label for="tanggal">Tanggal Terbit:</label></td>
                            <td><input type="date" id="tanggal" name="tanggal" required></td>
                        </tr>
                        <tr>
                            <td><label for="editor">Editor:</label></td>
                            <td><input type="text" id="editor" name="editor" required></td>
                        </tr>
                    </table>
                `;
            } else if (selectedValue === 'cd') {
                formFields.innerHTML = `
                    <h3>Input Data CD</h3>
                    <table border="1">
                        <tr>
                            <td><label for="judul-cd">Judul CD:</label></td>
                            <td><input type="text" id="judul-cd" name="judul-cd" required></td>
                        </tr>
                        <tr>
                            <td><label for="artist">Artis:</label></td>
                            <td><input type="text" id="artist" name="artist" required></td>
                        </tr>
                        <tr>
                            <td><label for="tahun-cd">Tahun Rilis:</label></td>
                            <td><input type="number" id="tahun-cd" name="tahun-cd" required></td>
                        </tr>
                    </table>
                `;
            }
        }
    </script>
</head>
<body>
    <h1>Menginput Data Perpustakaan</h1>

    <form action="{}" method="post"></form>

    <label for="Tipedata">Pilih jenis Data:</label>
    <select name="Tipedata" id="Tipedata" onchange="toggleFormFields(this)"></select>
        <option value="book">Buku</option>
        <option value="journal">Jurnal</option>
        <option value="newspaper">Surat Kabar</option>
        <option value="cd">CD</option>
    </select><br><br>

    <div id="form-fields">
        <!-- Form akan ditampilkan di sini berdasarkan pilihan -->
    </div>
    
</body>
</html>