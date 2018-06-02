<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sản phẩm-Bánh Mỳ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css\cssbtl.css">
  <link rel="icon" href="google.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <style>
        body{
        width : 100%;
       
    }
    .row{
      padding-left: 12.5%;
      width:100%;
    }
    </style>
<?php require('header.php');?>
    <div class="container-fluid bg-3 text-center">
    <div class="row class-center">
      <div class="col-sm-3">
        <a href="">
        <img src="images/br-puolou.jpg" class="img-responsive" style="width:100%" alt="Image">
        <p>Puoluo Paris</p>
        <button name ="button" value="OK" type="button">Thêm vào giỏ hàng</button></a>
      </div>
      
      <div class="col-sm-3">
        <a href="">
        <img src="images/br-mxc.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
        <p>Mexico Bread</p>
        <a href=""><button name ="button" value="OK" type="button">Thêm vào giỏ hàng</button></a>
      </div>
      
      <div class="col-sm-3">
        <a href="">
        <img src="images/br-klin.jpg" class="img-responsive" style="width:100%" alt="Image">
        <p>Klimt</p>
        <button name ="button" value="OK" type="button">Thêm vào giỏ hàng</button></a>
      </div>
      </div>
  </div>
  
  <div class="container-fluid bg-3 text-center">    
    <div class="row">
      <div class="col-sm-3">
        <a href="ctsp-br-hok.php">
        <img src="images/br-hkd.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
        <p>Hokkaido King</p>
        <a href="ctsp-br-hok.php">
        <button name ="button" value="OK" type="button">Thêm vào giỏ hàng</button></a>
      </div>
      
      <div class="col-sm-3">
        <a href="ctsp-br-croi.php">
        <img src="images/br-croi.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
        <p>Croissants</p>
        <a href="ctsp-br-croi.php">
        <button name ="button" value="OK" type="button">Thêm vào giỏ hàng</button></a>
      </div>
      
      <div class="col-sm-3">
        <a href="ctsp-br-donut.php">
        <img src="images/br-donut.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
        <p>Donuts</p>
        <button name ="button" value="OK" type="button">Thêm vào giỏ hàng</button>
      </div>
    </div>
    </div>
    <?php require('footer.php');?>
    <style>
      footer{
        margin-top:1cm;
      }
      </style>
    </body>
    </html>