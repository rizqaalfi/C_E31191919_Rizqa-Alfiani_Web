<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Angkatan</title>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?> ">
</head>

<body>

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

</body>

</html>