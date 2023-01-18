<html>
<head>
 <title>Aplikasi DATA SISWA</title>
</head>
<body style="font-family:arial">
 <center><h2>Aplikasi DATA SISWA <br /> SMK BAKTI NUSANTARA 666</h2></center>
 <hr />
 <b>Tambah Data Baru</b>
    <br/><br/>

    <form action="tambah.php" method="post" name="form1">
        <table width="100%" border="0">
            <tr> 
                <td>Nisn</td>
                <td><input type="text" name="nisn" size="50" required></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" size="50" required></td>
            </tr>
            <tr> 
                <td>Kelas</td>
                <td><input type="text" name="kelas" size="50" required></td>
            </tr>
            <tr> 
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" size="50" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="+ Tambahkan"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nisn= $_POST['nisn'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];

        // include database connection file
        include "koneksi.php";

        // Insert user data into table
  $tambah_data = "insert into data_siswa values('','$nisn','$nama','$kelas','$jurusan')";
     $kerjakan=mysqli_query($konek, $tambah_data);
     if($kerjakan)
     {
     // Show message when user added
     echo "siswa berhasil ditambahkan. <a href='index.php'>Lihat Data siswa</a>";
     }
     else
      {
      echo "maaf GAGAL";
     }
    }
    ?>
</body>
</html>