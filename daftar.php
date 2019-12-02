<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mx-auto">
        <h2>Daftar Buku yang Tersedia</h2>
        <table class="table table-hover">
            <tr>
                <td>Kode Buku</td>
                <td>Judul Buku</td>
                <td>Pengarang Buku</td>
                <td>Penerbit Buku</td>
                <td>Aksi</td>
            </tr>

<?php
    require("perpustakaan.php");
    $perpus = new Perpustakaan();
    $lihat = $perpus->lihatBuku();
    while($data = $lihat->fetch(PDO::FETCH_OBJ)){
    echo "
    <tr>
    <td>$data->idBuku</td>
    <td>$data->judulBuku</td>
    <td>$data->pengarang</td>
    <td>$data->penerbit</td>
    <td><a class='btn btn-info' href='edit.php?idBuku=$data->idBuku'>Ubah</a>
        <a class='btn btn-danger' href='daftar.php?hapus=$data->idBuku'>Hapus</a>
    </td>
    </tr>";
    };
?>
        </table>
        <a href="index.php" class="btn btn-success">Tambah Buku Baru</a>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>

<?php
    if(isset($_GET['hapus'])){
        $hapus = $perpus->hapusBuku($_GET['hapus']);
    }
?>