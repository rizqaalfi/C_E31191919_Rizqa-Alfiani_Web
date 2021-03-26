<table>
  <tr>
    <td>NO</td>
    <td>Tahun</td>

  </tr>
  <?php
  foreach ($angkatan as $row) { ?>
    <tr>
      <td> <?php echo $row['no']; ?></td>
      <td> <?php echo $row['tahun']; ?></td>
    </tr>
  <?php  } ?>

</table>