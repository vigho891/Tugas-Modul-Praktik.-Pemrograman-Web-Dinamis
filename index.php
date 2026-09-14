<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa</title>
</head>
<body>
    <h1>Formulir Pendaftaran Siswa</h1>
    <form action="proses_form.php" method="POST">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nsms" id="nama" placeholder="masukan nama" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" id="email" placeholder="masukan alamat email" required></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                    <select name="jurusan">
                        <option value="rekayasa perangkat lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Akuntansi">Akuntansi</option>
                        <option value="Teknik Sepeda Motor"> Teknik Sepeda Motor</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Register">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>