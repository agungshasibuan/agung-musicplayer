<?php
include "koneksi.php";
$sql = "SELECT * FROM tb_album";
$stmt = $koneksi->prepare($sql);
$stmt->execute();
?>
  <h3> Daftar Produk</h3>
  <table>
      <tr>
          <th>ID PRODUK</th>
          <th>ID KATEGORI</th>
          <th>ID USERS</th>
          <th>KODE PRODUK</th>
          <th>NAMA PRODUK</th>
          <th>HARGA PRODUK</th>
          <th>KETERANGAN PRODUK</th>
          <th>STOK PRODUK</th>
          <th>PHOTO PRODUK</th>
          <th>CREATED AT</th>
          <th>UPDATED AT</th>
        </tr>

        <?php while ($row = $stmt->fetch()) { ?>
        
        <tr>
            <td><?php echo $row['produk_id'] ?></td>
            <td><?php echo $row['produk_id_kat'] ?></td>
            <td><?php echo $row['produk_id_user'] ?></td>
            <td><?php echo $row['produk_kode'] ?></td>
            <td><?php echo $row['produk_nama'] ?></td>
            <td><?php echo $row['produk_harga'] ?></td>
            <td><?php echo $row['produk_keterangan'] ?></td> 
            <td><?php echo $row['produk_stock'] ?></td>
            <td><?php echo $row['produk_photo'] ?></td>
            <td><?php echo $row['created_at'] ?></td>
            <td><?php echo $row['updated_at'] ?></td> 
            <td>
            <a href="index.php?delete=<?php echo $row['produk_id'];?>">delete</a>
            </td>
        </tr>

        <?php } ?>
     </table>
        