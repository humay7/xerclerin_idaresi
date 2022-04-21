<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


	<table class="table">
  <thead>
    <tr>
      <th scope="col">mebleg</th>
      <th scope="col">kategoriya</th>
      <th scope="col">valyuta</th>
      <th scope="col">nov</th>
      <th scope="col">rey</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach($query as $row): ?>
    <tr>
      <!-- <th scope="row">1</th> -->
      <td><?php echo $row->mebleg;?></td>
      <td><?php echo $row->kategoriya;?></td>
      <td><?php echo $row->valyuta;?></td>
	  <td><?php echo $row->nov;?></td>
	  <td><?php echo $row->rey;?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>




</body>
</html>