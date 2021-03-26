<table>
  <tr>
    <td>NO</td>
    <td>Prodi</td>
    <td>Keterangan</td>
  </tr>
  <?php
  foreach ($program_studi as $row) { ?>
    <tr>
      <td> <?php echo $row['no']; ?></td>
      <td> <?php echo $row['prodi']; ?></td>
      <td><?php echo $row['keterangan']; ?></td>
    </tr>
  <?php  } ?>

</table>