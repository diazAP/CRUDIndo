<?php
    require('perpustakaan.php');
 
    if(isset($_GET['idBuku'])){
        $perpus = new Perpustakaan();
        $buku = $perpus->editBuku($_GET['idBuku']);
        $edit = $buku->fetch(PDO::FETCH_OBJ);
        echo '
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <title>Tambah Buku</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
                integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
                crossorigin="anonymous">
        </head>

        <body>
            <div class="container">
                <h2>Ubah Data Buku</h2>
                <form action="edit.php" method="POST" class="form-group">
                    Kode Buku: <input type="text" name="idBuku" value="'.$edit->idBuku.'" class="form-control"><br>
                    Judul Buku: <input type="text" name="judulBuku" value="'.$edit->judulBuku.'" class="form-control"><br>
                    Pengarang Buku: <input type="text" name="pengarang" value="'.$edit->pengarang.'"
                        class="form-control"><br>
                    Penerbit Buku: <input type="text" name="penerbit" value="'.$edit->penerbit.'"
                        class="form-control"><br>
                    <input type="submit" name="ubahBuku" value="Ubah" class="btn btn-info">
                </form>
            </div>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous">
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous">
            </script>
        </body>

        </html>
        ';
    }
 
    if(isset($_POST['ubahBuku'])){
        $id = $_POST['idBuku'];
        $judul = $_POST['judulBuku'];
        $pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];
 
        $perpus = new Perpustakaan();
        $ubah = $perpus->ubahBuku($id, $judul, $pengarang, $penerbit);
        if($ubah){
            header('Location: daftar.php');
        }
    }
 
?>