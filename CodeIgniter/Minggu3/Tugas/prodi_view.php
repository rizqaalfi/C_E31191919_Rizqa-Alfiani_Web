<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prodi</title>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css"); ?> ">
</head>

<body>

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

</body>

</html>