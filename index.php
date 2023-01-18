<html>
<head>
 <title>Aplikasi DATA SISWA</title>
 <style>
 .table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}

.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}

.table1, th, td {
    padding: 8px 20px;
    text-align: left;
}

.table1 tr:hover {
    background-color: #f5f5f5;
}

.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
 </style>
</head>
<body style="font-family:arial">
 <center><h2>Aplikasi DATA SISWA<br /> SMK BAKTI NUSANTARA 666</h2></center>
 <hr />
 <a href="tambah.php">+ Tambah Data Baru</a><br /><br />
 <b>Data</b>
 <table style="width:100%" class="table1">
  <tr>
   <th>No</th>
   <th>Nisn</th>
   <th>Nama</th>
   <th>Kelas</th>
   <th>Jurusan</th>
   <th colspan=2><center>Opsi</center></th>
  </tr>
  
  <?php 
  include "koneksi.php";
  $no = 1;
  $data = mysqli_query($konek,"select * from data_siswa");
  while($r = mysqli_fetch_array($data)){
   $id = $r['id_siswa'];
   $nisn = $r['nisn'];
   $nama = $r['nama'];
   $kelas= $r['kelas'];
   $jurusan= $r['jurusan'];
        ?>
  <tr><td><?php echo $no++; ?></td>
   <td><?php echo $nisn; ?></td>
   <td><?php echo $nama; ?></td>
   <td><?php echo $kelas; ?></td>
   <td><?php echo $jurusan; ?></td>
  <td align=right width=70px><a href="edit.php?id=<?php echo $id;?>">Edit</a></td>
  <td align=right width=70px><a href="hapus.php?id=<?php echo $id;?>">Hapus</a></td>
  </tr>
  <?php 
  }
  ?>
 </table> 
</body>
</html>