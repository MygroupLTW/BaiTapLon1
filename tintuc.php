<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tin tức</title>
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
  a:hover{
    text-decoration-line: none;
  }
  
</style>

<div class="toppage">
  <div class=" text-left">
    <h1>HOTLINE:0936336806</h1>      
  </div>
  
  <div class = text-right> <a href = "#"> Contact us on facebook</a>
</div>

</div>

<div class= logo >
    <div class =  logo1>
    <a href="#"> <img src="images\logo.png"></img></a>
    </div>
    <div class = timkiem >
            <form class="form-inline my-2 my-lg-0" action="/tim-kiem/index/" method="post">

                <div class="form-group form-inline col-lg-10 inputSearch" style="">
                    <input onfocus="edit_search_button_menu_1()" onblur="edit_search_button_menu_2()" class="form-control mr-sm-2" placeholder="  Tìm kiếm..." id="input-search" type="text" name="search" style="height: 30px;">  
                </div>
            </form>
    </div>
    <div class= gh>
      <a href = "giohang.php"><img src ="images\giohang.png"></a>
    </div>
</div>

        <div id="menu">
                <ul>
                  <li><a href="index.php">Trang chủ</a></li>
                  <li><a href="#">Giới Thiệu</a>
                    <ul class="sub-menu">
                      <li><a href="chungtoilaai.php">Chúng tôi là ai?</a></li>
                      <li><a href="lichsuphattrien.php">Lịch Sử Phát triển</a></li>
                      <li><a href="chienluocphattrien.php">Chiến lược phát triển</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Sản Phẩm</a>
                    <ul class="sub-menu">
                      <li><a href="danhsachbr.php">Bánh Mỳ </a></li>
                      <li><a href="cookie.php">Bánh Cookies</a></li>
                      <li><a href="desert.php">Desert</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Danh sách nhà hàng </a>
                    <ul class="sub-menu">
                      <li><a href="#">Cơ sở Vũ Phạm hàm</a></li>
                      <li><a href="#">Cơ Sở Nguyễn Trãi</a></li>
                      <li><a href="#">Cơ Sở Chùa Bộc</a></li>
                    </ul>
                  </li>
                  <li><a href="tintuc.php">Tin Tức</a></li>
                  <li><a href="tuyển dụng.php">Tuyển Dụng</a></li>
                 
                  <li><a href="#">Liên Hệ</a></li>
                </ul>
                
                        </div>
                        
                        
                        </div>
                        </br>               

<div>
<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;

}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
<body>

<h2 style="text-align:center"> Tin tức </h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="images\anhbanh1.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images\anhbanh2.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images\anhbanh3.png" style="width:100%">
  </div>
    
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>
<center>
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images\anhbanh1.png" style="width:100%" onclick="currentSlide(1)" alt="Bánh pastry Đan Mạch">
    </div>
    <div class="column">
      <img class="demo cursor" src="images\anhbanh2.png" style="width:100%" onclick="currentSlide(2)" alt="Donuts">
    </div>
    <div class="column">
      <img class="demo cursor" src="images\anhbanh3.png" style="width:100%" onclick="currentSlide(3)" alt="Đồ uống Espresso">
    </div>
   
  </div>
  </center>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>
</div>

<body>
<div class="fvc">
    <div class="span12 post">
      <h2 class="page-header" style="margin-top:10px;">Tin tức nổi bật</h2>
      <h1 class="hidden-xs hidden-sm hidden-md hidden-lg">Tin tức nổi bật</h1>
  
      <div class="sidebar-line"><span></span></div>
      <div class="fvc">
        <div class="container text-center-block" style="text-align: justify;" style="font-size: 20px;" >
          <p style="text-indent: 30px;line-height:30px;font-size: 18px">
<h2>Bánh Mùa Hè Đầy Màu Sắc</h2>
Mùa hè sắp đến rồi, mùa ngập tràn những rực rỡ tươi vui và sức sống. Nếu đi picnic hoặc dã ngoại cùng bạn bè, đừng bỏ qua những chiếc bánh vô cùng ngon miệng và đầy đủ dinh dưỡng này nhé! <br>

Một chiếc bánh mì hoa cúc mini thơm lừng, một chiếc peach và custard pastry mềm ẩm hay một chiếc bánh sừng bò ngon tuyệt sẽ là món quà cho ngày cuối tuần thêm hạnh phúc, Cùng nhâm nhi và thưởng thức chúng cùng Paris Gateauxi nhé! <br>
???Happy weekend ??? <br>


<br /><img src="images\anhbanh7.jpg" style="height:800px; width:750px" style="text-align: center;"><br />
<p style="text-indent: 30px;line-height:30px;font-size: 18px">
<br>
<br /><h2>Paris Gâteaux Khuyến mãi lớn khuyến mãi khai trương “Paris Gâteaux Crown” 68 Vũ Phạm Hàm từ ngày 12-16/04/2017:</h2>
<br>

<p style="text-indent: 30px;line-height:30px;font-size: 18px;">1. Giảm giá Cafe Americano còn 10.000VND/ly (10h00' - 20h00')<br>
2. Giảm giá 20% toàn bộ sản phẩm (trừ bánh Gato sinh nhật)<br>

Chương trình Khuyến mãi áp dụng cho tất cả các sản phẩm, đồ uống, trà, cafe, bánh ngọt, kem,... và chỉ áp dụng tại Paris Gateaux Crown 68 Vũ Phạm Hàm, Cầu Giấy, Hà Nội. Cơ hội có hạn, bạn hãy nhanh chân đến Paris Gateaux Crown ngay để tận hưởng ưu đãi.<br>
Thời gian: 12-16/4/2017<br>
Điều kiện/Địa chỉ: Dành cho tất cả khách hàng khi đến Paris Gateaux Crown 68 Vũ Phạm Hàm<br>
Xem thêm: <a href="http://parisgateaux.vn/">website: http://parisgateaux.vn/</a>;<a href="https://www.facebook.com/parisgateaux.vn/"> Fanpage https://www.facebook.com/parisgateaux.vn/?ref=ts&fref=ts</a><br>
Điện thoại: 0936 336 806 hoặc điện thoại các Cửa hàng

</p>
<br /><img src="images\giamgia.jpg" style="height:300px; width:800px"><br />
        </div>
      </div>
    </div>
  </div>
    </body>

<head>
<div  class="container text-right">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 70px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}


.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

</style>
</head>
<body>
<div  class="container text-right">
<h2>Chi tiết</h2>
<br>

<!-- Add font awesome icons -->
<a href="https://www.facebook.com/parisgateaux.vn/" class="fa fa-facebook"></a>

<a href="https://www.facebook.com/parisgateaux.vn/" class="fa fa-google"></a>
<a href="https://www.facebook.com/parisgateaux.vn/" class="fa fa-youtube"></a>
</div> 
</div>     
</body>
<br>    


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
<footer>
<div class = ttlh>
  <h4 ><u>Thông Tin Liên Hệ</u> </h4>
  <p>CÔNG TY <br> CỔ PHẦN PARIS GÂTEAUX VIỆT NAM<br>
      LÔ A2 - CN7 CỤM CN TỪ LIÊM, PHƯỜNG PHƯƠNG CANH, QUẬN NAM TỪ LIÊM, THÀNH PHỐ HÀ NỘI.<br>
      02432001399<br>
      0936 336 806<br>
      customerservices@parisgateaux.vn<br>
       <a href="ttp://parisgateaux.vn/"> http://parisgateaux.vn</a>  </p>
  
</div>
<div class = ttlh>
<h4> Bản Đồ</h4>
<a href="https://www.google.com/maps?ll=21.026881,105.824672&z=16&t=m&hl=vi-VN&gl=US&mapclient=embed&cid=7954008404892039112"><img width="90%" src = "images\bando.png"></a>
</div>
<div class = ttlh>
    <h4> Fanpage</h4>
    <a href="https://www.facebook.com/parisgateaux.vn/"><img width="90%" src = "images\fan.png"></a>
    </div>
    <div class= h5>
     CopyRight by 
    </div>
        </footer>