<?php
include "../config/database.php";
$id_kriteria = $_GET['id_kriteria'];
$hapus = mysqli_query($koneksi, "delete from tbl_kriteria where id_kriteria ='$id_kriteria'");
if ($hapus) {
  echo "<script>window.location.href='../?page=analisa-kriteria&m=hapus-sukses';</script>";
} else {
  echo "gagal hapus";
}