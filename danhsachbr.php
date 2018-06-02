<!DOCTYPE html>
<html lang="en">
<head>
  <title>Danh sách Bread</title>
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
        .toppage .text-left .text-right{
          background-color: white;
          
        }
        .logo{
          background-color: white;
        }
        
    .container{
      margin-bottom:0%;
      margin-left: 10%;
      margin-right: 10%;
    }
    p{
    float: center ;
    }
    
    .ds {
      padding-left: 40%;
    }
    </style>
<?php require('header.php');?>
                        
<div class="jumbotron">
  <div class="container text-center">
    <style>
    .jumbotron{
      margin-left: 0%;
      margin-right: 0;
    }</style>
    <h1>French Bread</h1>
    <div class="well well-sm"> <strong>Chọn kiểu hiển thị</strong> 
      <div class="btn-group"> 
        <a href="danhsachbr.php" id="list" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-th-list"></span>Dạng danh sách</a> 
          <a href="bread.php" id="grid" class="btn btn-default btn-sm">
            <span class="glyphicon glyphicon-th"></span>Dạng lưới</a> 
      </div> 
     </div>
  </div>
</div>


<div class= ds>
  <div class="col-1">
<a href="ctsp-br-donut.php">
<img src="images/br-donut.jpg" alt="Donuts" height="300" width="300"></a>
<a href="ctsp-br-donut.php"><p> Donuts </p></a>

<button name ="button" value="OK" type="button">Thêm vào giỏ hàng</button>
</div>
<div class="col-2">
<a href="ctsp-br-croi.php">
<img src="images/br-croi.jpg" alt="Croissants" height="300" width="300"></a>
<a href="ctsp-br-croi.php"><p>Croissants</p></a>

<button name ="button" value="OK" type="button">Thêm vào giỏ hàng</button>
</div>
<div class="col-1">
<a href="ctsp-br-hok.php">
<img src="images/br-hkd.jpg" alt="Hockaido" height="300" width="300"></a>
<a href="ctsp-br-hok.php"><p>Hockaido</p></a>

<button name="button" value="ok" type="button">Thêm vào giỏ hàng</button>
</div>
<div class="col-1">
<a href="ctsp-br-klim.php">
<img src="images/br-klin.jpg" alt="Klim" height="300" width="300"></a>
<a href="ctsp-br-klim.php"><p>Klim bread</p></a>

<button name="button" value="ok" type="button">Thêm vào giỏ hàng</button>
</div>
<div class="col-1">
<a href="ctsp-br-mxc.php">
<img src="images/br-mxc.jpg" alt="Mexico" height="300" width="300"></a>
<a href="ctsp-br-mxc.php"><p>Mexico Bread</p></a>

<button name="button" value="ok" type="button">Thêm vào giỏ hàng</button>
</div>
<div class="col-1">
<a href="ctsp-br-pl.php">
<img src="images/br-puolou.jpg" alt="puolou" height="300" width="300"></a>
<a href="ctsp-br-pl.php"><p>Puolou</p></a>
<button name="button" value="ok" type="button">Thêm vào giỏ hàng</button>
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