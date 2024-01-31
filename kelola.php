<?php
include'config1.php';
$id_pendaftaran = '';
$nama = '';
$alamat = '';
$jenis_kelamin = '';
$agama = '';
$sekolah_asal = '';
$tanggal_lahir = '';
$no_telepon = '';
$email = '';
$desa_kelurahan = '';
$kecamatan = '';
$kabupaten_kota = '';
$provinsi = '';
$kode_pos = '';

if(isset($_GET['edit'])){
  $id_pendaftaran = $_GET['edit'];
  $sql = "SELECT * FROM pendaftaran WHERE id_pendaftaran='$id_pendaftaran';";
  $query = mysqli_query($db, $sql);
  $result =mysqli_fetch_assoc($query);
  $nama = $result['nama'];
  $alamat = $result['alamat'];
  $jenis_kelamin = $result['jenis_kelamin'];
  $agama = $result['agama'];
  $sekolah_asal = $result['sekolah_asal'];
  $tanggal_lahir = $result['tanggal_lahir'];
  $no_telepon = $result['no_telepon'];
  $email = $result['email'];
  $desa_kelurahan = $result['desa_kelurahan'];
  $kecamatan = $result['kecamatan'];
  $kabupaten_kota = $result['kabupaten_kota'];
  $provinsi = $result['provinsi'];
  $kode_pos = $result['kode_pos'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 1 Lagos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMK Negeri 1 Cisarua</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="kelola.php">Pendaftaran</a>
      </div>
    </div>
  </div>
</nav>
<div class="container mt-4">
<h2>Formulir Pendaftaran Siswa SMK Negeri 1 Lagos</h2><br>
<form action="proses.php" method="POST">
  <input type="hidden" value="<?php echo $id_pendaftaran;?>" name="id_pendaftaran">
<div class="mb-3">
  <label for="nama" class="form-label">Nama: </label>
  <input type="text" class ="form-control" name="nama" value="<?php echo $nama;?>" placeholder="nama lengkap" />
</div>
<div class="mb-3">
  <label for="alamat" class="form-label">Alamat</label>
  <textarea class="form-control" name="alamat" rows="3"><?php echo $alamat;?></textarea>
</div>
<div class="mb-3">
<div class="form-check">
<label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin" <?php if($jenis_kelamin=='laki-laki'){echo"checked";}?> value="laki-laki">
  <label class="form-check-label" for="laki-laki">Laki-Laki</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin" <?php if($jenis_kelamin=='perempuan'){echo"checked";}?> value="perempuan">
  <label class="form-check-label" for="laki-laki">Perempuan</label>
</div>
</div>
<div class="mb-3">
    <label for="agama" class="form-label">Agama: </label>
            <select name="agama" class="form-control">
                <option <?php if($agama== 'islam'){echo"selected";}?>value="islam">Islam</option>
                <option <?php if($agama== 'kristen'){echo"selected";}?>value="kristen">Kristen</option>
                <option <?php if($agama== 'Hindu'){echo"selected";}?>value="hindu">Hindu</option>
                <option <?php if($agama== 'Budha'){echo"selected";}?>value="budha">Budha</option>
                <option <?php if($agama== 'Atheis'){echo"selected";}?>value="Atheis">Atheis</option>
            </select>
</div>
<div class="mb-3">
    <label for="sekolah_asal" class="form-label">Sekolah Asal: </label>
    <input type="text" class ="form-control" name="sekolah_asal" value="<?php echo $sekolah_asal;?>" placeholder="nama sekolah" />
</div>
<div class="mb-3">
<label for="tanggal_lahir" class="form-label">Tanggal Lahir: </label>
<input type="date" class ="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $tanggal_lahir;?>" />
</div>

<div class="mb-3">
<label for="no_telepon" class="form-label">No telepon: </label>
<input type="text" class ="form-control" name="no_telepon" value="<?php echo $no_telepon;?>" placeholder="no telepon" />
</div>

<div class="mb-3">
<label for="email" class="form-label">Email: </label>
<input type="email" class ="form-control" name="email" value="<?php echo $email;?>" placeholder="email" />
</div>

<div class="mb-3">
<label for="desa_kelurahan" class="form-label">Desa/kelurahan: </label>
<input type="text" class ="form-control" name="desa_kelurahan" value="<?php echo $desa_kelurahan;?>" placeholder="desa kelurahan" />
</div>

<div class="mb-3">
<label for="kecamatan" class="form-label">Kecamatan: </label>
<input type="text" class ="form-control" name="kecamatan" value="<?php echo $kecamatan;?>" placeholder="kecamatan" />
</div>

<div class="mb-3">
    <label for="kabupaten_kota" class="form-label">Kabupaten/kota: </label>
            <select name="kabupaten_kota" class="form-control">
                <option <?php if($kabupaten_kota== 'Kota Bandung'){echo"selected";}?> value="Kota Bandung" >Kota Bandung </option>
                <option <?php if($kabupaten_kota== 'Kab. Bandung Barat'){echo"selected";}?> value="Kab. Bandung Barat">Kab. Bandung Barat </option>
                <option <?php if($kabupaten_kota== 'Kota Cimahi'){echo"selected";}?> value="Kota Cimahi">Kota Cimahi</option>
                <option <?php if($kabupaten_kota== 'Kab. Sumedang'){echo"selected";}?> value="Kab. Sumedang">Kab. Sumedang</option>
                <option <?php if($kabupaten_kota== 'Kab. Garut'){echo"selected";}?> value="Kab. Garut">Kab. Garut</option>
            </select>
</div>

<div class="mb-3">
    <label for="provinsi" class="form-label"> Provinsi: </label>
            <select name="provinsi" class="form-control">
                <option <?php if($provinsi== 'Prov banten'){echo"selected";}?> value="Prov banten">Prov banten</option>
                <option <?php if($provinsi== 'Prov jakarta'){echo"selected";}?> value="Prov jakarta">Prov jakarta</option>
                <option <?php if($provinsi== 'Prov jawa tengah'){echo"selected";}?> value="Prov jawa tengah">Prov jawa tengah</option>
                <option <?php if($provinsi== 'Prov jawa timur'){echo"selected";}?> value="Prov jawa timur">Prov jawa timur</option>
                <option <?php if($provinsi== 'Prov jawa barat'){echo"selected";}?> value="Prov jawa barat">Prov jawa barat</option>
            </select>
</div>

<div class="mb-3">
<label for="kode_pos" class="form-label">Kode Pos: </label>
<input type="text" class ="form-control" name="kode_pos" value="<?php echo $kode_pos;?>"  placeholder="kode pos" />
</div>

<div class="mb-3 row mt-4">
    <div class="col">
        <?php
        if(isset($_GET['edit'])){
            ?>
            <button type="submit" class="btn btn-primary" value="edit" name="aksi"> Simpan Perubahan </button>
            <?php
        }else{
            ?>
            <button type="submit" class="btn btn-primary" value="add" name="aksi"> Daftar </button>
            <?php
        }
        ?>
        <a href="index.php" type="button" class="btn btn-danger"> Batal </a>
    </div>
    </div>
    </form>
</div>
    </body>
</html>