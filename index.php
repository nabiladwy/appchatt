<?php
session_start();
date_default_timezone_set('asia/jakarta');
include"lib/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<?php 
 $page = ($_GET['page'])?$_GET['page']:null;
 if (isset($page)) {
  if ($page=='keluar'){
    include"modul/keluar.php";
  }
 }else{
  include"modul/default.php";
 }
?>

                                                    


</body>
</html>
