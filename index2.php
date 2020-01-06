<?php 
   include("./connect.php");

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
    <title>Ustora Demo</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <base href="./">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="index.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                          
                         
                            <li><a href="cart.php"><i class="fa fa-user"></i>Giỏ hàng</a></li>
                            <li><a href="checkout.php"><i class="fa fa-user"></i> Kiểm tra</a></li>
                           
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">INR</a></li>
                                    <li><a href="#">GBP</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
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
                    <div class="shopping-item">
                        <a href="cart.php">Giỏ hàng: <span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> <span class="product-count">0</span></a>
                    </div>
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
                        <li class ="active"><a href="index.php">Trang chủ</a></li>
                        <li><a href="shop.php">Cửa hàng</a></li>
                       
                        <li><a href="cart.php">Giỏ hàng</a></li>
                     
                     
                        <li><a href="contact.php">Liên hệ</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="img/ao1.jpg" alt="Slide" width="1163px">
						<div class="caption-group">
							<h2 class="caption title">
								Aó <span class="primary">Khoác<strong>đen nam</strong></span>
							</h2>
							<h4 class="caption subtitle">giá sỉ</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Mua Ngay</a>
						</div>
					</li>
					<li><img src="img/ao2.jpg" alt="Slide" width="500px">
						<div class="caption-group">
							<h2 class="caption title">
								Mua một,tặng một <span class="primary"> giảm 50% <strong>off</strong></span>
							</h2>
							<h4 class="caption subtitle">ÁO ICON BIỂU CẢM </h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Mua ngay</a>
						</div>
					</li>
					<li><img src="img/ao3.jpg" alt="Slide" width="1163px">
						<div class="caption-group">
							<h2 class="caption title">
								Áo khoác<span class="primary">Super<strong>Man</strong></span>
							</h2>
							<h4 class="caption subtitle">chọn mua </h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Mua Ngay/a>
						</div>
					</li>
					<li><img src="img/ao4.jpg" alt="Slide" width="1163px">
						<div class="caption-group">
						  <h2 class="caption title">
								Bộ <span class="primary">Áo khoác <strong> màu </strong></span>
							</h2>
							<h4 class="caption subtitle">Giảm 50%</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Mua Ngay</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>Hoàn trả 30 ngày</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Miễn phí giao hàng</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Thanh toán</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>Sản phẩm mới</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Sản phẩm mới nhất</h2>
                        <div class="product-carousel">
                        
                        <?php  
                            $result = mysqli_query($conn,"SELECT * FROM sanpham  ORDER BY ID DESC LIMIT 0,10");
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)){
    
                        ?>
                            <div class="single-product" style="width:250px;height:400px">
                                <div class="product-f-image">
                                    <img src=<?php echo $row['image']?> alt="">
                                    <div class="product-hover">
                                        <a data-item='<?php echo json_encode($row)?>' href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Cho vào giỏ</a>
                                        <a href="single-product.php?id=<?php echo $row['id']?>" class="view-details-link"><i class="fa fa-link"></i> Chi tiết</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.php?id=<?php echo $row['id']?>"><?php echo $row['name']?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo number_format($row['price'])?> VND</ins> <del><?php echo number_format($row['price2'])?> VND</del>
                                </div> 
                            </div>
                                <?php }
                            }
                            ?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                           <img src="img/logo.jpg">
                            <img src="img/logo2.jpg">
                            <img src="img/logo3.png">
                            <img src="img/logo6.png">
                            <img src="img/logo2.jpg">
                            <img src="img/logo1.jpg">
                            <img src="img/logo.jpg">
                            <img src="img/logo2.jpg">                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
   

    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Mua nhiều nhất</h2>
                        <a href="" class="wid-view-more">Xem tất cả</a>
                        <?php  
                            $result = mysqli_query($conn,"SELECT * FROM sanpham WHERE id < 4");
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)){
    
                        ?>
                        <div class="single-wid-product">
                            <a href="single-product.php?id=1"><img src=<?php echo $row['image']?> alt="" class="product-thumb"></a>
                            <h2><a href="single-product.php?id=<?php echo $row['id']?>"><?php echo $row['name']?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo number_format($row['price'])?> VND</ins> <del><?php echo number_format($row['price2'])?> VND</del>
                            </div>                            
                        </div>
                        <?php   }
                            }
                        ?>
                       
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Mua nhiều</h2>
                        <a href="#" class="wid-view-more">Xem tất cả</a>

                        <?php  
                            $result = mysqli_query($conn,"SELECT * FROM sanpham WHERE id >4 && id <8");
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <div class="single-wid-product">
                            <a href="single-product.php?id=1"><img src='<?php echo $row['image']?>' alt="" class="product-thumb"></a>
                            <h2><a href="single-product.php?id=<?php echo $row['id']?>"><?php echo $row['name']?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo number_format($row['price'])?> VND</ins> <del><?php echo number_format($row['price2'])?> VND</del>
                            </div>                            
                        </div>
                        <?php   }
                            }
                        ?>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Sản phẩm mới</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <?php  
                            $result = mysqli_query($conn,"SELECT * FROM sanpham WHERE id >8 && id <12");
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <div class="single-wid-product">
                            <a href="single-product.php?id=1"><img src="<?php echo $row['image']?>" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.php?id=<?php echo $row['id']?>"><?php echo $row['name']?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo number_format($row['price'])?> VND</ins> <del><?php echo number_format($row['price2'])?> VND</del>
                            </div>                            
                        </div>
                        <?php   }
                            }
                        ?>
                    </div>
                
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
    
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>E<span>gle Cat Eye</span></h2>
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
                        <h2 class="footer-wid-title">Chuyển hướng người dùng  </h2>
                        <ul>
                            <li><a href="#">Tài khoản người dùng</a></li>
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
                        <li><a href="shop.php?name=Áo khoác">Áo khoác</a></li>
                            <li><a href="shop.php?name=Áo thun">Áo thun</a></li>
                            <li><a href="shop.php?name=Giày">Giày</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Người mới</h2>
                        <p>Đăng ký để nhận thông báo mới nhất !!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2015 thương mại điện tử . Đã đăng ký bản quyền <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
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
    </div> <!-- End footer bottom area -->
   
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
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
  </body>
</html>
