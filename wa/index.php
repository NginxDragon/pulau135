<?php
require 'functions.php';
if( isset($_POST["submit"] ) ) {
    // cek apakah data berhasil di tambahkan atau tidak 
    if( tambah ($_POST) > 0 ) {
      header('Location: ./');
      exit;
    }else {
    echo "
    <script>
    alert('data gagal ditambahkan!');
    document.location.href = 'index.php';
    </script>
    ";
    }
    }
?>

<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

button[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

button[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, button[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.wadah{
    display : flex;
}

.satu{
    width : 40%;
    height: 600px;
    overflow: auto;
}

.dua{
    width : 60%;
}
</style>
</head>
<body>
<h2>Delimiter (,) : Kelurahan,Kecamatan,Kota/Kabupaten,Provinsi</h2>
<div class="wadah">
<div class="satu">

<?php $info = query("SELECT * FROM watemplate ORDER BY id DESC"); ?>
<?php foreach( $info as $row ) : ?>
   
<?php
echo $row["nama"];
?><br><br>
<?php
// Example 1
$kalimat = $row["nama"];
$inputhurufbesar  = $kalimat;
$lokasi = explode(",", $inputhurufbesar);
$kelurahan = explode(" ", $lokasi[0]);
$kecamatan = explode(" ", $lokasi[1]);
$kabupaten = explode(" ", $lokasi[2]);
$provinsi = explode(" ", $lokasi[3]);

?>
<?php
$katapertamakelurahan = strtolower($kelurahan[0]);
$outputkatapertamakelurahan = ucfirst($katapertamakelurahan);

$katakeduakelurahan = strtolower($kelurahan[1]);
$outputkatakeduakelurahan = ucfirst($katakeduakelurahan);

$inputspasikecamatan = strtolower($kecamatan[0]);
$outputspasikecamatan  = ucfirst($inputspasikecamatan);

$inputkatapertamakecamatan = strtolower($kecamatan[1]);
$outputkatapertamakecamatan  = ucfirst($inputkatapertamakecamatan);

$inputkatakeduakecamatan = strtolower($kecamatan[2]);
$outputkatakeduakecamatan = ucfirst($inputkatakeduakecamatan);

$inputspasikota = strtolower($kabupaten[0]);
$outspasiputkota = ucfirst($inputspasikota);

$inputkota = strtolower($kabupaten[1]);
$outputkota = ucfirst($inputkota);

$inputkatapertamakabupaten = strtolower($kabupaten[2]);
$outputkatapertamakabupaten = ucfirst($inputkatapertamakabupaten);

$inputkatakeduakabupaten = strtolower($kabupaten[3]);
$outputkatakeduakabupaten  = ucfirst($inputkatakeduakabupaten);


$inputspasiprovinsi= strtolower($provinsi[0]);
$outputspasiprovinsi  = ucfirst($inputspasiprovinsi);

$inputkatapertamaprovinsi = strtolower($provinsi[1]);
$outputkatapertamaprovinsi  = ucfirst($inputkatapertamaprovinsi);

$inputkatakeduaprovinsi = strtolower($provinsi[2]);
$outputkatakeduaprovinsi = ucfirst($inputkatakeduaprovinsi);

$inputkatakegigaprovinsi = strtolower($provinsi[3]);
$outputkataketigaprovinsi = ucfirst($inputkatakegigaprovinsi);

?>

<?php
$template = "Kel. ".$outputkatapertamakelurahan." ".$outputkatakeduakelurahan.", ".$outputspasikecamatan." Kec. ".$outputkatapertamakecamatan." ".$outputkatakeduakecamatan.", ".$ouputspasikota." ".$outputkota." ".$outputkatapertamakabupaten." ".$outputkatakeduakabupaten.", ".$outputspasiprovinsi." ".$outputkatapertamaprovinsi." ".$outputkatakeduaprovinsi." ".$outputkataketigaprovinsi;
?>

<?php
$hurufbesar =strtolower($template);
?>

<?php
echo ucfirst($template);
?><hr><br>


<?php endforeach; ?> 
</div>

<div class="dua">
<!-- Template -->


<div class="container">
  <form action="" method="post">
  <div class="row">
    <div class="col-25">
      <label for="nama">TEXT</label>
    </div>
    <div class="col-75">
      <input type="text" id="nama" name="nama" placeholder="Paste Text Disini" >
    </div>
  </div>

  <input type="hidden" id="hp" name="hp" placeholder="Nomer Hp" autocomplete="off">
  <input type="hidden" id="alamat" name="alamat" placeholder="Alamat Detail" autocomplete="off">
  <input type="hidden" id="jenis" name="jenis" placeholder="Jenis pemesanan" autocomplete="off">
  <input type="hidden" id="jumlah" name="jumlah" placeholder="Jumlah Literan" autocomplete="off">
  <input type="hidden" id="harga" name="harga" placeholder="Harga" autocomplete="off">
  <input type="hidden" id="call_in" name="call_in" placeholder="Nomer Yang Menghubungi" autocomplete="off">
  <input type="hidden" id="tanggal_pesan" name="tanggal_pesan" placeholder="Tanggal dan Waktu memesan" autocomplete="off">
  <input type="hidden" id="tanggal_antar" name="tanggal_antar" placeholder="Tanggal Dan Waktu Pengantaran" autocomplete="off"> 
  <input type="hidden" id="metode" name="metode" placeholder="Metode Pembayaran" autocomplete="off">
  <input type="hidden" id="catatan" name="catatan" placeholder="Pemesanan Catatan" autocomplete="off">
  <input type="hidden" id="agent" name="agent" placeholder="Agent" autocomplete="off">

  <div class="row">
  <button type="submit" name="submit">Parse</button>
  </div>
 
  </form>
</div>
<!-- Tutup Template -->
</div>
</div>
</body>
</html>



