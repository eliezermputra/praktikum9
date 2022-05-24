<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK PENGGUNA</title>
</head>
<body>
    <center><h1 >CETAK DATA AKUN</h1></center>
<?php
include "cekkoneksi.php";
$cetak = mysqli_query($conn, "SELECT * from akun ORDER BY nama") or die("Proses cetak gagal" );

    echo "<table width='80%' cellpadding='2' cellspacing='2' border='1' border-collapse: collapse;>
    <tr>
    <th>Nomor</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Email</th>
    <th>TTL</th>
    <th>Alamat</th>
    <th>Pesan</th>";
    $no=1;
    foreach($cetak as $hasil){
    echo "<tr>
    <td>$no</td>
    <td>".$hasil['nama']."</td>
    <td>".$hasil['jk']."</td>
    <td>".$hasil['email']."</td>
    <td>".$hasil['ttl']."</td>
    <td>".$hasil['alamat']."</td>
    <td>".$hasil['pesan']."</td> 
    </tr>";
    $no++;
}
echo "</table>";
?>
<a class="right" href="tampilan.php">Halaman Login</a>
</body>
</html>