<html>
    <head>
        <title>kopi _ rahmawan</title>
    </head>
    <body>
        <h2>MODULE TRANSAKSI</h2>
        <br/>
        <a href="tambah_transaksi.php">+ TAMBAH TRANSAKSI</a>
        <br/>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Tanggal TRANSAKSI</th>
                <th>No. Transaksi</th>
                <th>Jenis Transaksi</th>
                <th>Barang</th>
                <th>Jumlah Transaksi</th>
                <th>User</th>
                <th>OPSI</th>
            </tr>
            <?php
            include 'koneksi.php';
            $no = 1;
            $query = mysqli_query($koneksi,"SELECT * FROM transaksi");
            while($data = mysqli_fetch_array($query))
            {
        ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $data['tgl_transaksi']; ?></td>
            <td><?php echo $data['no_transaksi']; ?></td>
            <td><?php echo $data['jenis_transaksi']; ?></td>
            <td><?php echo $data['barang_id']; ?></td>
            <td><?php echo $data['jumlah_transaksi']; ?></td>
            <td><?php echo $data['user_id']; ?></td>
            <td>
                    <a href="edit_transaksi.php?id=<?php echo $data['id']; ?>">EDIT</a>
                    <a href="hapus_transaksi.php?id=<?php echo $data['id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
                }
                
            ?>
        </table>
    </body>
</html>