<DOCTYPE html>
    <html>
        <head>
            <title>kopi _ rahmawan</title>
    </head>

<?php
            // koneksi database
            include 'koneksi.php';
            // menangkap data yg dikirim dari form
            if( !empty($_POST[ 'save' ]) )
            {
                $nama_kategori = $_POST['nama_kategori'];
                // menginput data ke database
                $query=mysqli_query($koneksi,"insert into kategori values('','$nama_kategori')");

                if($query)
                {
                    //mengalihkan halaman kembali
                    header("location:kategori.php");
                }
                else
                {
                    echo mysqli_error($koneksi);
                }
            }

            
        ?>
        <body>
             <h2>MODULE KATEGORI</h2>
             <br/>
             <a href="index.php">KEMBALI</a>
            </br>
            </br>
            <h3>TAMBAH DATA KATEGORI</h3>
            <form method="POST">
                <table>
                    <tr>
                        <td>NAMA KATEGORI</td>
                        <td><input type="text" name="nama_kategori"></td>
                    </tr>
                   
            <tr>
                <td></td>
                <td><input type="submit" name="save"></td>
            </tr>
            </table>
        </form>
    </body>
</html>