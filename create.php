<!DOCTYPE html>
<html>
<head>
    <title>Tambah data </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

    <h2 class="form">Tambah data pelanggan</h2>
    <br/>
    <a class="lht_data" href="index.php"> Kembali</a>
    <br/>
    <br/>
    <form class="form" method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>Id_Pelanggan</td>
                </tr>
                <tr>
                <td><input class="form" type="text" name="id"></td>
            </tr>
            <tr>
                <td>Nama</td>
                </tr>
                <tr>
                <td><input class="form" type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                </tr>
                <tr>
                <td><input class="form" type="text" name="tgl_lahir"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                </tr>
                <tr>
                <td><input class="form" type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                </tr>
                <tr>
                <td><input class="form" type="text" name="telp"></td>
            </tr>
            <tr>
                
                <td><input class="tombol" type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>

</body>
</html>