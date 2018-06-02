<!DOCTYPE html>
<html lang="en">
<head>
  <title>Giỏ hàng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css\cssbtl.css">
  <link rel="icon" href="google.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



 
</head>
<body>

<?php require('header.php');?>              
<body>

<!-- Add font awesome icons -->
<a href="https://www.facebook.com/parisgateaux.vn/" class="fa fa-facebook"></a>

<a href="https://www.facebook.com/parisgateaux.vn/" class="fa fa-google"></a>
<a href="https://www.facebook.com/parisgateaux.vn/" class="fa fa-youtube"></a>
</div> 
</div>     
</body>
<br>    
<style>
     #customers {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 70%;
         
      }
      
      #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
      }
      
      #customers tr:nth-child(even){background-color: #f2f2f2;}
      
      #customers tr:hover {background-color: rgba;}
      
      #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: hsla(13, 70%, 54%, 0.61);
          color: white;
      }
     .tieude{
         font-family:initial;
     }
     
    </style>

    <body>
    <body>
    <div class="tieude">
        <h1 style="color: black">SẢN PHẨM CỦA BẠN</h1>
    </div>
    <div class="danhmuc">
        
    <table id="customers">
    <tr>
      <th width="5px"> Số thứ tự </th>
      <th width="50px">Sản phẩm</th>
      <th width="40px">giá cả</th>
      <th width="5px">Số lượng</th>
      <th width="40px">Tổng cộng</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Apple Tart - Tháp Táo</td>
      <td>250000</td>
      <td>1</td>
      <td>250000</td>
    </tr>
    <tr>
      <td>2</td>
      <td>August Chocolate</td>
      <td>170000</td>
      <td>2</td>
      <td>340000</td>
      
    </tr>
    <tr>
      <td>3</td>
      <td>Cheese Cake</td>
      <td>120000</td>
      <td>1</td>
      <td>120000</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Mousse Đào</td>
      <td>80000</td>
      <td>3</td>
      <td>240000</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Sôcôla Sữa</td>
      <td>95000</td>
      <td>1</td>
      <td>95000</td>
    </tr>
   
  </table>
    </div>
    <div >
      <h1 style="text-align:center;">Tổng giỏ hàng</h1>
     <p style="text-align: center;"> Tổng tiền= 1045000</p>
</div>
<div style="text-align: center;">
<button style=" background-color: Orange ;" class="button">Thanh toán</button>
</div>
</body>
    </body>


  <!--Về đầu trang-->
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #555;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: pink;
}
</style>
</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Go to top">Về Đầu Trang</button>


<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

</body>
</html>
<br>
<?php require("footer.php");?>             