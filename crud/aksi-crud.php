<?php
    include "koneksi.php";

    if(isset($_POST["binput"])){
        $nis = $_POST["nis"];
        $nama = $_POST["nama"];
        $kelas = $_POST["kelas"];
        $jurusan = $_POST["jurusan"];
        $hobi = $_POST["hobi"];

        pg_query($koneksi, "INSERT INTO tb_siswa (nis,nama,kelas_siswa,jurusan,hobi) VALUES ('$nis','$nama','$kelas','$jurusan','$hobi')");
        header("location: index.php");
    }

    if(isset($_POST["bedit"])){
        $nis = $_POST["nis"];
        $nama = $_POST["nama"];
        $kelas = $_POST["kelas"];
        $jurusan = $_POST["jurusan"];
        $hobi = $_POST["hobi"];

        pg_query($koneksi, "UPDATE tb_siswa SET nis='$nis', nama='$nama', kelas_siswa='$kelas', jurusan='$jurusan', hobi='$hobi' WHERE nis='$nis'");
        header("location: index.php");
    }

    if(isset($_POST["bdelete"])){
        $nis = $_POST["nis"];

        pg_query($koneksi, "DELETE FROM tb_siswa WHERE nis='$nis'");
        header("location: index.php");
    }

?>