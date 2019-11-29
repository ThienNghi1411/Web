<?php
include("./connect.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
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
    <title>Aó khoác</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome -->
    <base href="./">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="jquery.js"></script>
    <script src="3.js"></script>
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
                          
                            <li><a href="#"><i class="fa fa-heart"></i> Danh sách</a></li>
                            <li><a href="cart.php"><i class="fa fa-user"></i> Giỏ hàng</a></li>
                            <li><a href="checkout.php"><i class="fa fa-user"></i> Kiểm tra</a></li>
                           
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
                    <div class="shopping-item">
                        <a href="cart.php">Giỏ <span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"></span></a>
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
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="shop.php?trang=1">Cửa hàng</a></li>
                        <li class="active"><a href="single-product.php?id=1">Chi tiết</a></li>
                        <li><a href="cart.php">Giỏ hàng</a></li>
                       
                     
                     
                        <li><a href="contact.php">Liên hệ</a></li>
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
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Tìm kiếm sản phẩm</h2>
                        <form action="shop.php" method="GET" autocomplete="off">
                            <input id="ipSearch" name= "name" type="text" placeholder="Tìm kiếm sản phẩm">
                            <input type="submit" id="Ssubmit" value="Tìm kiếm ">

                        </form>
                        <div id="h2search"></div>
                    </div>

                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                        <?php
                        $sqlSelect = "SELECT * FROM sanpham LIMIT 0,4";
                        $result = mysqli_query($conn, $sqlSelect);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <div class="thubmnail-recent">
                                    <img src="<?php echo $row['image'] ?>" class="recent-thumb" alt="">
                                    <h2><a href="single-product.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a></h2>
                                    <div class="product-sidebar-price">
                                        <ins><?php echo number_format($row['price'])?> VND</ins> <del></ins> <del><?php echo number_format($row['price2'])?> VND</del>
                                    </div>
                                </div>
                        <?php }
                        }
                        ?>
                    </div>

                    
                </div>
                <?php
                $single = mysqli_query($conn, "SELECT * FROM sanpham WHERE id=$id");
                $coc = mysqli_fetch_assoc($single);
                ?>
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Trang chủ</a>
                            <a href="">Phân loại</a>
                            
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src=<?php echo $coc['image'] ?> alt="">
                                    </div>


                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo $coc['name'] ?></h2>
                                    <div class="product-inner-price">
                                        <ins><?php echo number_format($coc['price']) ?> VND</ins> <del><?php echo number_format($coc['price2']) ?> VND</del>
                                    </div>

                                    <form action="" class="cart">
                                        <div class="quantity" >
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <button id = "btnadd" data-item='<?php echo json_encode($coc) ?>' class="add_to_cart_button" type="submit">Cho vào giỏ</button>
                                    </form>

                                   

                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Chi tiết</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Nhận xét</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Chi tiết</h2>
                                                <?php echo $coc['description'] ?>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Nhận xét</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Tên</label> <input id = "ipreviewname" name="name" type="text"></p>
                                                    <p><label for="email">Gmail</label> <input id = "ipreviewemail" name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Đánh giá của bạn</p>

                                                        <div class="rating-wrap-post">
                                                            <i data-item="0" class="fa fa-star"></i>
                                                            <i data-item="1" class="fa fa-star"></i>
                                                            <i data-item="2" class="fa fa-star"></i>
                                                            <i data-item="3" class="fa fa-star"></i>
                                                            <i data-item="4" class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Nhận xét của bạn</label> <textarea id = "txtreview" name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input id = "submitreview" type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Sản phẩm liên quan</h2>
                            <div class="related-products-carousel">
                                <?php
                                $sqlSelect = "SELECT * FROM sanpham LIMIT 6,7";
                                $result = mysqli_query($conn, $sqlSelect);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        ?>

                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="<?php echo $row['image'] ?>" alt="">
                                                <div class="product-hover">
                                                    <a data-item='<?php echo json_encode($row) ?>' href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i>Cho vào giỏ hàng</a>
                                                    <a href="single-product?id=<?php echo $row['id'] ?>" class="view-details-link"><i class="fa fa-link"></i> Chi tiết</a>
                                                </div>
                                            </div>

                                            <h2><a href=""><?php echo $row['name'] ?></a></h2>

                                            <div class="product-carousel-price">
                                                <ins><?php echo number_format($row['price']) ?> VND</ins> <del><?php echo number_format($row['price2']) ?> VND</del>
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
        </div>
    </div>


    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>E<span>gle Cat eye</span></h2>
                        <p>Xưởng Thượng Tín với việc nằm ở TPHCM là điều hết sức thuận lợi cho khách hàng. Bạn có thể đến trực tiếp tại xưởng để bàn bạc và kiểm tra chất liệu vải, mẫu.Với kinh nghiệm lâu năm trong nghề. Chúng tôi sẽ mang đến cho bạn những chiếc áo khoác quảng cáo có giá tốt nhất.

</p>
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
                            <li><a href="">Tài khoản của tôi</a></li>
                            <li><a href="">Lịch sử đơn hàng</a></li>
                            <li><a href="">Danh sách</a></li>
                            <li><a href="">Liên hệ nhà sản xuất</a></li>
                            <li><a href=""> Trang chủ</a></li>
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
                       <p>&copy; chứng nhận 2015  đã đăng ký bản quyền <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
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
