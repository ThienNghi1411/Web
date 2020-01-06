<?php
include("./connect.php");
$productrang = 12;
if (isset($_GET["trang"])) {
    $trang = $_GET["trang"];
} else {
    $trang = 1;
}
if (isset($_GET["name"])) {
    $name = $_GET["name"];
} else {
    $name = "";
}

?>
<!DOCTYPE html>
<!--
    ustora by freshdesignweb.com
    Twitter: https://twitter.com/freshdesignweb
    URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Page- Ustora Demo</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <base href="./">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="jquery.js"></script>
   
    

</head>

<body>

    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                           
                            <li><a href="#"><i class="fa fa-heart"></i> Danh sách sản phẩm</a></li>
                            <li><a href="cart.php"><i class="fa fa-user"></i> Giỏ hàng</a></li>
                            <li><a href="checkout.php"><i class="fa fa-user"></i> Kiểm tra</a></li>
                            <li><a href="#"><i class="fa fa-user"></i>Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Tiền tệ :</span><span class="value">VNĐ </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">VNĐ</a></li>
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">GBP</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Ngôn ngữ :</span><span class="value">Tiếng Việt </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Tiếng Việt</a></li>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./"><img src="img/logo.jpg" width="150px"></a></h1>
                    </div>
                </div>

                <div class="col-sm-6">
                    
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Chuyển hướng</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Trang chủ</a></li>
                        <li ><a href="shop.php?trang=1">Cửa hàng</a></li>
                       
                        <li  ><a  href="cart.php">Giỏ hàng</a></li>
                       
                    
                      
                        <li class="active"><a href="contact.php">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- End mainmenu area -->

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Cửa hàng</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>

        <div class="container">
            <div id = "contact">
                <div style="width: 50%">
                    <p ><b style="font-size:82px;color:blue">Eagle cat eye</b> </p>
                    <table cellspacing="0" style="font-size:20px">
                        
                        <tr>
                            <td><b>Địa chỉ liên hệ:</b> 280 An Dương Vương, Quận 5; Thành phố Hồ Chí Minh, Việt Nam</td>
                            
                        </tr>
                        <tr>
                            <td> <b>Số điện thoại:</b>0964443332</td>
                           
                        
                        </tr>
                        <tr>
                            <td><b>Email:</b> concockun@gmail.com</td>
                            
                        </tr>
                                        
                    </table>
                </div>

                <div style="width: 50%">
                    <div role="tabpanel" class="tab-pane fade active in" id="profile">
                        <div class="submit-review">
                            <p><label for="name">Tên</label> <input id="ipreviewname" name="name" type="text"></p>
                            <p><label for="email">Gmail</label> <input id="ipreviewemail" name="email" type="email"></p>
                        
                            <p><label for="review">Nhận xét của bạn</label> <textarea id="txtreview" name="review" cols="30" rows="10"></textarea></p>
                            <p><input id="submitreview" type="submit" value="Gửi"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
<script>
  $("#submitreview").click(function  (){
       
         $.ajax({
             url:"mau.php",
             method:"post",
             type:"json",
             data:{
                
                 email:$("#ipreviewemail").val(),
            
                 review:$('#txtreview').val(),
                 
             },
             success:function(data){
                
                alert("Thành công");
                // window.location.reload();
                
                
             }
         })
         
        });
</script>

    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>u<span>Stora</span></h2>
                        <p>Xưởng Thượng Tín với việc nằm ở TPHCM là điều hết sức thuận lợi cho khách hàng. Bạn có thể đến trực tiếp tại xưởng để bàn bạc và kiểm tra chất liệu vải, mẫu.Với kinh nghiệm lâu năm trong nghề. Chúng tôi sẽ mang đến cho bạn những chiếc áo khoác quảng cáo có giá tốt nhất.</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Điều hướng người dùng </h2>
                        <ul>
                            <li><a href="">Tài khoản người dùng</a></li>
                            <li><a href="">Lịch sử đặt hàng</a></li>
                            <li><a href="">Danh sách </a></li>
                            <li><a href="">Liên hệ nhà sản xuất</a></li>
                            <li><a href="">Trang chủ</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Phân loại</h2>
                        <ul>
                            <li><a href="">Áo khoác</a></li>
                            <li><a href="">Áo thun</a></li>
                            <li><a href="">Giày</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Đăng ký để nhận thông báo mới nhất !!</p>
                        <div class="newsletter-form">
                            <input type="email" placeholder="Nhập gmail">
                            <input type="submit" value="Đăng ký">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                       <p>&copy; 2015 Thương mại điện tử . Đăng ký bản quyền <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="js/main.js"></script>
</body>

</html>