<?php
// include database connection file
include "koneksi.php";

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_siswa = $_POST['id_siswa'];
//
    $nisn=$_POST['nisn'];
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $jurusan=$_POST['jurusan'];

    // update user data
    $result = mysqli_query($konek, "UPDATE data_siswa SET nisn='$nisn',nama='$nama',kelas='$kelas',jurusan='jurusan' WHERE id_siswa=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($konek, "SELECT * FROM data_siswa WHERE id_siswa=$id");

while($r = mysqli_fetch_array($result))
{
    $nisn = $r['nisn'];
    $nama = $r['nama'];
    $kelas = $r['kelas'];
    $jurusan = $r['jurusan'];
}
?>


<html>
<head>
 <title>Aplikasi DATA SISWA</title>
</head>
<body style="font-family:arial">
 <center><h2>Aplikasi DATA SISWA <br /> SMK BAKTI NUSANTARA 666</h2></center>
 <hr />
 <b>Edit SISWA</b>
    <br/><br/>
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nisn</td>
                <td><input type="text" size="50" name="nisn" value="<?php echo $nisn;?>"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" size="50" name="nama" value="<?php echo $nama;?>"></td>
            </tr>
            <tr> 
                <td>Kelas</td>
                <td><input type="text" size="50" name="kelas" value="<?php echo $kelas;?>"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" size="50" name="jurusan" value="<?php echo $jurusan;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>