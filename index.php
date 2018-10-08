<h2>Data Buku</h2>
<?php include 'koneksi.php' ?>
<form>
  <a href="add.php?id=$id">+add</a>
  <table border="1">
    <tr>
    <th width="50">No</th>
    <th width="50">kode Buku</th>
    <th width="50">nama Buku</th>
    <th width="50">kategori</th>
    <th width="50">jumlah</th>
    <th width="50">Rak</th>
    <th width="50"></th>
  </tr>

    <?php
      $sql= "SELECT *FROM perpus";
      $result =mysqli_query($con,$sql);
      $num = 1;

      if(mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <td><?php echo $num;?></td>
        <td><?php echo $row["kdbuku"]; ?></td>
        <td><?php echo $row["namabuku"]; ?></td>
        <td><?php echo $row["kategori"]; ?></td>
        <td><?php echo $row["qty"]; ?></td>
        <td><?php echo $row["rak"]; ?></td>
        <td><a href="form_edit.php?id=<?php echo $row['kdbuku']; ?>"> <input type="button" name="ubah" value="ubah"></a>
        <a href="deletebuku.php?id=<?php echo $row['kdbuku']; ?>"> <input type="button" name="hapus" value="hapus"></a>
        </td>
      </tr>
      <?php
    
    $num++;
}
}
        ?>
  </table>
</form>
