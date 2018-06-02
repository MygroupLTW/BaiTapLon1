<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chúng tôi là ai</title>
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

<h2 style="text-align:center"> Chúng tôi là ai? </h2>

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
      <h2 class="page-header" style="margin-top:10px;">Giới thiệu về Paris Gateaux Hà Nội</h2>
      <h1 class="hidden-xs hidden-sm hidden-md hidden-lg">Giới thiệu về Paris Gateaux Hà Nội</h1>
  
      <div class="sidebar-line"><span></span></div>
      <div class="fvc">
        <div class="container text-center-block" style="text-align: justify;" style="font-size: 20px;" >
          <p style="text-indent: 30px;line-height:30px;font-size: 18px">Chuyên sản xuất và cung cấp các loại bánh mỳ, gato sinh nhật, gato cắt, cookies, bánh dứa, bánh cuộn, đồ uống, và kem, Paris Gateaux Hà Nội đã chinh phục hoàn toàn khẩu vị của người dân thủ đô với 12 cơ sở trải đều các khu vực nội thành.<br>
<br /><img src="images\ctla.png" style="height:500px; width:800px" style="text-align: center;"><br />

<p style="text-indent: 30px;line-height:30px;font-size: 18px">Nhà hàng bánh ngọt Paris Gateaux thuộc công ty liên doanh Grand Union Việt Nam là một điểm đến lý thú cho những ai yêu thích văn hóa ẩm thực Pháp. Vốn dĩ những tiệm bán bánh theo kiểu châu Âu thường ít có khách ngồi lê la, vì đã quen với những Đức Phát, Kinh Đô gần chục năm trước. Thường khách dừng xe, đi vào lựa vài cái bánh, trả tiền rồi lại quành trở về, nghe cửa mở leng keng và tiếng chào vang lên không ngớt từ những bạn phục vụ trẻ trung. Nhưng hãy tưởng tượng nếu có một ngày rảnh rỗi, trời lún phún mưa và se se lạnh, được ngồi trong một không gian ấm áp, thoải mái nhâm nhi chiếc bánh ngọt dịu nhẹ và thưởng thức một ly trà nóng thanh khiết ngay giữa lòng đô thị ngùn ngụt khói bụi, đó chẳng phải là một món quà xứng đáng sau bao mệt mỏi, căng thẳng của công việc hay sao. Một không gian yên tĩnh, cắm lap hoặc điện thoại với wifi tha hồ. Và cứ thế, nếu không có gì bận thì ngồi từ sáng tới chiều cũng không bao giờ nhận bất kì sự phàn nàn nào!</p>


<br /><h1>Thực đơn Paris Gateaux Hà Nội</h1>
<br /><img src="images\ctla2.png" style="height:500px; width:800px"><br />

<p style="text-indent: 30px;line-height:30px;font-size: 18px;">Bánh ở các cơ sở tuy làm theo phong cách Pháp, nhưng mà mang mùi vị Châu Á nhiều hơn bởi được chế biến bởi hầu hết nguyên liệu và các đầu bếp đến từ Đài Loan. Có cả bánh mặn, bánh ngọt với nhiều chủng loại, mùi vị đa dạng và hết sức vừa miệng với nhiều khẩu vụ khác nhau. Bánh kem thì có hơi đắt hơn, khoảng 300-400K trở lên, nhưng vẫn luôn được yêu thích vì chất lượng bánh hầu như đạt đến độ hoàn hảo.

Ngoài bánh thì các cơ sở còn có thêm nhiều đồ ăn nhanh và các loại đồ uống tại chỗ, đồ uống take away với nhiều sự lựa chọn đa dạng và kích thước khá lớn so với các thương hiệu khác. Đặc biệt, kem tươi ở đây luôn được yêu thích với độ mịn và hương vị vô cùng tinh tế cùng cách trang trí đậm phong cách châu Âu. Tiệm bánh với màu sắc ấm áp, ánh sáng đẹp, ghế ngồi dễ chịu và đặc biệt là mùi bánh ngọt thơm lừng phảng phất trong không khí y như những gì người ta miêu tả về những cửa hiệu bánh ngọt ở Pháp. Ngay cả đĩa, cốc và cách bày trí ở đây cũng bắt mắt vô cùng.
</p>
<br /><h1>Thương hiệu Paris Gateaux Hà Nội</h1>
<br /><img src="images\ctla3.jpg" style="height:500px; width:800px"><br />
<p style="text-indent: 30px;line-height:30px;font-size: 18px; text-align: center;">
Ngoài các sản phẩm đặc sắc, hệ thống nhận diện thương hiệu của Paris Gâteaux cũng vô cùng độc đáo, logo hình tròn được thiết kế dựa trên sự kết hợp giữa nhiều hình “Đầu bếp vui vẻ” – hình tượng được vinh danh cao nhất trong ngành thực phẩm, là logo được xuất hiện nhiều nhất trong các ảnh check in của giới trẻ Hà Thành và được xếp vào một trong những logo tượng trưng cho sự sang chảnh. Vì vậy mà không thể phủ nhận mức độ phủ sóng của Paris Gateaux lên toàn bộ thành phố Hà Nội và nhanh chóng trở thành thương hiệu bánh bậc nhất Hà Thành.
</p>

<p style="text-indent: 30px;line-height:30px;font-size: 18px">
</p>
<br /><h1>Các cơ sở của Paris gateaux Hà Nội</h1>
<br /><img src="images\ctla4.png" style="height:500px; width:600px; text-align: center;"><br />
<p style="text-indent: 30px;line-height:30px;font-size: 18px">
  <br>
– 1A Hai Bà Trưng, Quận Hoàn Kiếm, Hà Nội (04) 62 702 518 <br>

– 34-36 Thái Hà, Quận Đống Đa, Hà Nội (04) 35 380 118 <br>

– Phạm Hùng, Quận Cầu Giấy, Hà Nội (04) 38 378 287<br>

– 75 Tràng Thi, Quận Hoàn Kiếm, Hà Nội (04) 39 387 771<br>

– 1F, VP3-17T5 Hoàng Đạo Thúy, Quận Thanh Xuân, Hà Nội (04) 62 512 006<br>

– 140 Tôn Đức Thắng, Quận Đống Đa, Hà Nội (04) 37 327 089<br>

– 2A Trần Đại Nghĩa, Quận Hai Bà Trưng, Hà Nội (04) 36 285 298<br>

– 1A2 Nguyễn Khánh Toàn, Quận Cầu Giấy, Hà Nội (04) 22 813 288<br>

– 62 Nguyễn Thị Định, Quận Cầu Giấy, Hà Nội (04) 35 553 567<br>

– 1A Tăng Bạt Hổ, Quận Hai Bà Trưng, Hà Nội (04) 39 729 399<br>

– 30 Tô Hiến Thành, Quận Hai Bà Trưng, Hà Nội<br>

– 35 Nguyễn Chí Thanh, Ba Đình, Hà Nội<br>
</p>
        </div>
      </div>
    </div>
  </div>
    </body>

<!--chi tiet -->
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

<footer>
<div class = ttlh>
  <h4 ><u>Thông Tin Liên Hệ </u></h4>
  <p>CÔNG TY CỔ PHẦN PARIS GÂTEAUX VIỆT NAM <br>
      LÔ A2 - CN7 CỤM CN TỪ LIÊM, PHƯỜNG PHƯƠNG CANH, QUẬN NAM TỪ LIÊM, THÀNH PHỐ HÀ NỘI.<br>
      02432001399<br>
      0936 336 806<br>
      customerservices@parisgateaux.vn<br>
      <a href="http://parisgateaux.vn/">http://parisgateaux.vn </a>
    </p>
  
</div>
<div class = ttlh>
<h4 > Bản Đồ</h4>
<a href="https://www.google.com/maps?ll=21.026881,105.824672&z=16&t=m&hl=vi-VN&gl=US&mapclient=embed&cid=7954008404892039112">
  <img width="90%" src = "images\bando.png"></a>
</div>
<div class = ttlh>
    <h4 > Fanpage</h4>
    <a href="https://www.facebook.com/parisgateaux.vn/"><img width="90%" src = "images\fan.png"></a>
    </div>
    <div class= h5>
     CopyRight by 
    </div>
        </footer>


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