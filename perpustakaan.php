<?php
    //Kelas Perpustakaan
    class Perpustakaan{
        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;dbname=crudIndo','root','');
        }
    
    //Fungsi Tambah Buku
    public function tambahBuku($id, $judul, $pengarang, $penerbit){
        $sql = "INSERT INTO buku (idBuku, judulBuku, pengarang, penerbit) VALUES('$id', '$judul', '$pengarang', '$penerbit')";
        
        $query = $this->db->query($sql);
        if($query){
            return "Berhasil menambahkan data buku";
        }else{
            return "Terjadi kesalahan menambahkan data buku";
        }
    }

    //Fungsi Edit Buku
    public function editBuku($id){
        $sql = "SELECT * FROM buku WHERE idBuku='$id'";
        $query = $this->db->query($sql);
        return $query;
    }
    
    //Fungsi Ubah Buku
    public function ubahBuku($id, $judul, $pengarang, $penerbit){
        $sql = "UPDATE buku SET judulBuku='$judul', pengarang='$pengarang', penerbit='$penerbit' WHERE idBuku='$id'";
        $query = $this->db->query($sql);
        if($query){
            return "Berhasil mengubah data buku";
        }else{
            return "Terjadi kesalahan mengubah data buku";
        }
    }
 
    //Fungsi Melihat Buku
    public function lihatBuku(){
        $sql = "SELECT * FROM buku";
        $query = $this->db->query($sql);
        return $query;
    }

    //Fungsi Menghapus Buku
    public function hapusBuku($id){
        $sql = "DELETE FROM buku WHERE idBuku='$id'";
        $query = $this->db->query($sql);
        }
    }
?>