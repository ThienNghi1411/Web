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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<script>
    $(document).ready(function() {
        $('#h2search').on("click", "p", function() {
            $name = $(this).text();


        })
        $('#ipSearch').keyup(function(e) {
            if ($('#ipSearch').val() == "") {
                $("#h2search").html('');
            } else {
                $.ajax({
                    url: "search.php",
                    method: "get",
                    type: "json",
                    data: {
                        name: $(this).val()
                    },
                    success: function(data) {
                        
                        let list = JSON.parse(data);
                       
                       
                        if (list != "") {
                            
                            $('#h2search').html("");
                            list.forEach(function(value) {
                                $('#h2search').append(`<a href="single-product.php?id=${value.id}">${value.name}</a>`);

                            })
                        }else{
                            $('#h2search').html("");
                            $('#h2search').append(`  Không tìm thấy `);
                        }

                    }

                });
            }

        })



    });
</script>

<body>
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i> Tài khoản của tôi</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i> Danh sách</a></li>
                            <li><a href="cart.php"><i class="fa fa-user"></i> Giỏ hàng</a></li>
                            <li><a href="checkout.php"><i class="fa fa-user"></i> Kiểm tra</a></li>
                            <li><a href="#"><i class="fa fa-user"></i> Đăng nhập</a></li>
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
                        <h1><a href="./"><img src="img/logo.png"></a></h1>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.php">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
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
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="shop.php?trang=1">Cửa hàng</a></li>
                        <li class="active"><a href="single-product.php?id=1">Chi tiết sản phẩm</a></li>
                        <li><a href="cart.php">Giỏ hàng</a></li>
                        <li><a href="checkout.php">Kiểm tra</a></li>
                        <li><a href="#">Phân loại</a></li>
                        <li><a href="#">Khác</a></li>
                        <li><a href="#">Liên hệ</a></li>
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
                        <h2>Shop</h2>
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
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="shop.php" method="GET">
                            <input id="ipSearch" name="name" type="text" placeholder="Search products...">
                            <input type="submit" id="Ssubmit" value="Search">

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
                                        <ins>$<?php echo $row['price'] ?></ins> <del>$<?php echo $row['price2'] ?></del>
                                    </div>
                                </div>
                        <?php }
                        }
                        ?>
                    </div>

                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <ul>
                            <li><a href="">Sony Smart TV - 2015</a></li>
                            <li><a href="">Sony Smart TV - 2015</a></li>
                            <li><a href="">Sony Smart TV - 2015</a></li>
                            <li><a href="">Sony Smart TV - 2015</a></li>
                            <li><a href="">Sony Smart TV - 2015</a></li>
                        </ul>
                    </div>
                </div>
                <?php
                $single = mysqli_query($conn, "SELECT * FROM sanpham WHERE id=$id");
                $coc = mysqli_fetch_assoc($single);
                ?>
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Home</a>
                            <a href="">Category Name</a>
                            <a href="">Sony Smart TV - 2015</a>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src=<?php echo $coc['image'] ?> alt="">
                                    </div>

                                    <div class="product-gallery">
                                        <img src="img/product-thumb-1.jpg" alt="">
                                        <img src="img/product-thumb-2.jpg" alt="">
                                        <img src="img/product-thumb-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo $coc['name'] ?></h2>
                                    <div class="product-inner-price">
                                        <ins>$<?php echo $coc['price'] ?></ins> <del>$<?php echo $coc['price2'] ?></del>
                                    </div>

                                    <form action="" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <button data-item='<?php echo json_encode($coc) ?>' class="add_to_cart_button" type="submit">Add to cart</button>
                                    </form>

                                    <div class="product-inner-category">
                                        <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                                    </div>

                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Product Description</h2>
                                                <?php echo $coc['description'] ?>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
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
                                                    <a data-item='<?php echo json_encode($row) ?>' href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                    <a href="single-product?id=<?php echo $row['id'] ?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                </div>
                                            </div>

                                            <h2><a href=""><?php echo $row['name'] ?></a></h2>

                                            <div class="product-carousel-price">
                                                <ins>$<?php echo $row['price'] ?></ins> <del>$<?php echo $row['price2'] ?></del>
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
                        <h2>u<span>Stora</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
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
                        <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
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