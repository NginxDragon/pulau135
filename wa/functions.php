<?php
//koneksi ke database 
$conn = mysqli_connect("localhost", "root", "root", "tiket");

function query($query) {
global $conn;
$result = mysqli_query($conn, $query);
$rows = [];
while ($row = mysqli_fetch_assoc($result)) 
{
$rows[] = $row;
}
return $rows;
}

 

function tambah ($data) {
    global $conn;
    $nama = htmlspecialchars($data['nama']);
    $hp = htmlspecialchars($data['hp']);
    $alamat = htmlspecialchars($data['alamat']);
    $jenis = htmlspecialchars($data['jenis']);
    $jumlah = htmlspecialchars($data['jumlah']);
    $harga = htmlspecialchars($data['harga']);
    $call_in = htmlspecialchars($data['call_in']);
    $tanggal_pesan = htmlspecialchars($data['tanggal_pesan']);
    $tanggal_antar = htmlspecialchars($data['tanggal_antar']);
    $metode = htmlspecialchars($data['metode']);
    $catatan = htmlspecialchars($data['catatan']);
    $agent = htmlspecialchars($data['agent']);
    
    $query = "INSERT INTO watemplate (nama,hp,alamat,jenis,jumlah,harga,call_in,tanggal_pesan,tanggal_antar,metode,catatan,agent)
    VALUES 
    ('$nama','$hp','$alamat','$jenis','$jumlah','$harga','$call_in','$tanggal_pesan','$tanggal_antar','$metode','$catatan','$agent')
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    
}


function tambahbhs ($data) {
    global $conn;
    $nama = htmlspecialchars($data['nama']);
    $hp = htmlspecialchars($data['hp']);
    $alamat = htmlspecialchars($data['alamat']);
    $jenis = htmlspecialchars($data['jenis']);
    $ukuran = htmlspecialchars($data['ukuran']);
    $jumlah = htmlspecialchars($data['jumlah']);
    $harga = htmlspecialchars($data['harga']);
    $call_in = htmlspecialchars($data['call_in']);
    $tanggal_pesan = htmlspecialchars($data['tanggal_pesan']);
    $tanggal_antar = htmlspecialchars($data['tanggal_antar']);
    $catatan = htmlspecialchars($data['catatan']);
    $agent = htmlspecialchars($data['agent']);
    
    $query = "INSERT INTO pdsbhs (nama,hp,alamat,jenis,ukuran,jumlah,harga,call_in,tanggal_pesan,tanggal_antar,catatan,agent)
    VALUES 
    ('$nama','$hp','$alamat','$jenis','$ukuran','$jumlah','$harga','$call_in','$tanggal_pesan','$tanggal_antar','$catatan','$agent')
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    
}



function cari($keyword) {
    $query = "SELECT * FROM ecacard 
    WHERE 
    nama LIKE '%$keyword%' OR
    tiket LIKE '%$keyword%' OR
    pembuat LIKE '%$keyword%'
    ";
    return query($query);
} 

?>