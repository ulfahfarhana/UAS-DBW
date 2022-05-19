<?php

//include koneksi database
include('koneksi.php');

    //get data dari form
    $kode = $_POST['kode'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $Email = $_POST['Email'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $pilihan_kelas = $_POST['pilihan_kelas'];
    $pilihan_hari = $_POST['pilihan_hari'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_berakhir = $_POST['tanggal_berakhir'];

    //query insert data ke dalam database
    $query = "INSERT INTO form_pendaftaran (kode, nama_lengkap, Email, nomor_telepon, pilihan_kelas, pilihan_hari, tanggal_mulai, tanggal_berakhir)
     VALUES ('$kode' ,'$nama_lengkap', '$Email', '$nomor_telepon', '$pilihan_kelas', '$pilihan_hari', '$tanggal_mulai', '$tanggal_berakhir')";

    $success = mysqli_query($connection, $query);
    //kondisi pengecekan apakah data berhasil dimasukkan atau tidak
    if($success) {

        //redirect ke halaman index.php 
        header("location: index.php");

    } else {

        //pesan error gagal insert data
        echo "Data Gagal Disimpan!";

    }


?>