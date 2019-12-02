<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
        <div class="container mx-auto">
            <h2>Tambah Buku Baru</h2>
            <form action="index.php" method="POST" class="form-group row">
                Kode Buku: <input type="text" name="id" class="form-control"><br>
                Judul Buku: <input type="text" name="judul" class="form-control"><br>
                Pengarang Buku: <input type="text" name="pengarang" class="form-control"><br>
                Penerbit Buku: <input type="text" name="penerbit" class="form-control"><br>
                <?php echo "<br>";?>
                <div class="container mx-auto">
                    <input type="submit" name="tambahBuku" value="Tambah buku" class="btn btn-success">
                    <input type="reset" value="Batal" class="btn btn-warning">
                    <a href="daftar.php" class="btn btn-primary">Lihat Buku</a>
                </div>
            </form>
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
    require('perpustakaan.php');
    if(isset($_POST['tambahBuku'])){
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];
 
        $perpus = new Perpustakaan();
        $tambah = $perpus->tambahBuku($id, $judul, $pengarang, $penerbit);

        if($tambah){
            header('Location: daftar.php');
        }
    }
 
?>