<?php
include("config1.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['aksi'])){
// ambil data dari formulir
if($_POST['aksi']=='add'){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST ['email'];
    $desa_kelurahan = $_POST['desa_kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $kabupaten_kota = $_POST['kabupaten_kota'];
    $provinsi = $_POST ['provinsi'];
    $kode_pos = $_POST ['kode_pos'];
    $tanggal_mysql = date("Y-m-d", strtotime($tanggal_lahir));

    // buat query
    $sql = "INSERT INTO pendaftaran (id_pendaftaran, nama, alamat, jenis_kelamin, agama, sekolah_asal, tanggal_lahir, no_telepon, email, desa_kelurahan, kecamatan, kabupaten_kota, provinsi, kode_pos) 
    VALUE ('$id_pendatfaran','$nama', '$alamat','$jenis_kelamin','$tanggal_mysql','$agama','$sekolah_asal','$tanggal_lahir','$no_telepon','$email','$desa_kelurahan','$kecamatan','$kabupaten_kota','$provinsi','$kode_pos')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location:index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location:index.php?status=gagal');
    }
} else if($_POST['aksi'] == 'edit'){
    $id_pendaftaran = $_POST['id_pendaftaran'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST ['email'];
    $desa_kelurahan = $_POST['desa_kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $kabupaten_kota = $_POST['kabupaten_kota'];
    $provinsi = $_POST ['provinsi'];
    $kode_pos = $_POST ['kode_pos'];
    $tanggal_mysql = date("Y-m-d", strtotime($tanggal_lahir));
    $sql = "UPDATE pendaftaran SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', 
    sekolah_asal='$sekolah_asal', tanggal_lahir='$tanggal_lahir', no_telepon='$no_telepon',email='$email',desa_kelurahan='$desa_kelurahan',kecamatan='$kecamatan',kabupaten_kota='$kabupaten_kota',provinsi='$provinsi',kode_pos='$kode_pos' WHERE id_pendaftaran='$id_pendaftaran'";
    $query=mysqli_query($db,$sql);
}
    if($query){
        header('Location:index.php?status = sukses');
    }else{
        header('Location:index.php?status = gagal');
    }
}
if(isset($_GET['hapus'])){
    $id_pendaftaran=$_GET['hapus'];
    $sql="DELETE FROM pendaftaran WHERE id_pendaftaran='$id_pendaftaran';";
    $query = mysqli_query($db, $sql);
    if($query){
        header('Location: index.php?status = sukses');
    }else{
        header('Location: index.php?status = gagal');
    }
}
?>