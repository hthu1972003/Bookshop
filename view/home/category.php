<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục sản phẩm - EduBook</title>
    <script src="view/home/js/jquery-3.3.1.js"></script>
    <script src="view/home/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="view/home/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="view/home/fonts/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="view/home/css/style.css">
    <link rel="stylesheet" href="view/home/css/home.css">
 <link rel="stylesheet" href="view/home/css/category.css">
 <link rel="stylesheet" href="view/home/fonts/fontawesome/css/all.min.css">
</head>
<body>
    <!-- header -->
    <header id="header">
        <!-- header top -->
        <div class="header__top">
            <div class="container">
                <section class="row flex">
                    <div class="col-lg-5 col-md-0 col-sm-0 heade__top-left">
                        <span>EduBook - Cội nguồn của tri thức</span>
                    </div>

                    <nav class="col-lg-7 col-md-0 col-sm-0 header__top-right">
                        <ul class="header__top-list">
                            <li class="header__top-item">
                                <a href="#" class="header__top-link">

                                Hỏi đáp</a>
                            </li>
                            <li class="header__top-item">
                                <a href="#" class="header__top-link">Hướng dẫn</a>
                            </li>
                            <li class="header__top-item">
                                <a href="#" class="header__top-link">Đăng ký</a>
                            </li>
                            <li class="header__top-item">
                                <a href="#" class="header__top-link">Đăng nhập</a>
                            </li>
                        </ul>
                    </nav>
                </section>
            </div>
        </div>
        <!--end header top -->

        <!-- header bottom -->
        <div class="header__bottom">
            <div class="container">
                <section class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 header__logo">
                        <h1 class="header__heading">
                            <a href="index.php?controller=home" class="header__logo-link">
                                <img src="view/home/images1/logo1.png" alt="Logo" class="header__logo-img">
                            </a>
                        </h1>
                    </div>

                    <div class="col-lg-6 col-md-7 col-sm-0 header__search">
                        <select name="" id="categorySelect" class="header__search-select">
                            <option value="0">All</option>
                            <option value="1">Sách tiếng việt</option>
                            <option value="2">Sách nước ngoài</option>
                            <option value="3">Manga-Comic</option>
                            
                        </select>
                        <input type="text" id ="productNameSelect"class="header__search-input" placeholder="Tìm kiếm tại đây...">
                        <button class="header__search-btn">
                            <div class="header__search-icon-wrap">
                                <i class="fas fa-search header__search-icon"></i>
                            </div>
                        </button>
                    </div>

                    <div class="col-lg-2 col-md-0 col-sm-0 header__call">
                        <div class="header__call-icon-wrap">
                            <i class="fas fa-phone-alt header__call-icon"></i>  
                        </div>
                        <div class="header__call-info">
                            <div class="header__call-text">
                                Gọi điện tư vấn
                            </div>
                            <div class="header__call-number">
                                039.882.3232
                            </div>
                        </div>
                    </div>

                    <a href="cart.php" class="col-lg-1 col-md-1 col-sm-0 header__cart">
                        <div class="header__cart-icon-wrap">
                            <span class="header__notice">4</span>
                            <i class="fas fa-shopping-cart header__nav-cart-icon"></i>
                        </div>
                    </a>
                </section>
            </div>   
        </div>
        <!--end header bottom -->

        <!-- header nav -->
        <div class="header__nav">
            <div class="container">
                <section class="row">
                    <div class="header__nav-menu-wrap col-lg-3 col-md-0 col-sm-0">
                        <i class="fas fa-bars header__nav-menu-icon"></i>
                        <div class="header__nav-menu-title">Danh mục sản phẩm</div>
                    </div>

                    <div class="header__nav col-lg-9 col-md-0 col-sm-0">
                        <ul class="header__nav-list">
                            <li class="header__nav-item">
                                <a href="#" class="header__nav-link">Sách Trong Nước</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="#" class="header__nav-link">Sách Nước ngoài</a>
                            </li>
                            <li class="header__nav-item">
                                <a href="#" class="header__nav-link">Manga - Comic</a>
                            </li>                          
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </header>
    <!-- end header -->

    <!-- category 1: Sách trong nước-->
    <section id ='category1' class="product__love">

        <div class="container">
            <?php foreach ($array['categories'] as $cat) { ?>
            <div class="row bg-white">
                <div class="col-lg-12 col-md-12 col-sm-12 product__love-title">
                    <h2 class="product__love-heading upper">
                        <?=$cat['name'] ?>
                    </h2>
                </div>
            </div>
            <?php } ?>
            <div class="row bg-white">
                <?php foreach ($array['book'] as $boo) { ?>
                <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                    <div class="product__panel-img-wrap">
                        <img src="view/home/images1/product/<?= $boo['image']?>" alt="" class="product__panel-img">
                    </div>
                    <h3 class="product__panel-heading">
                        <a href="index.php?controller=home&action=detail&id=<?=$boo['id']?>" class="product__panel-link"><?= $boo['name']?></a>
                    </h3>
                    <div class="product__panel-rate-wrap">
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                        <i class="fas fa-star product__panel-rate"></i>
                    </div>

                    <div class="product__panel-price">
                        <span class="product__panel-price-current">
                            <?=$boo['price']?>
                        </span>
                    </div>  
                </div>
                 <?php } ?>
            </div>
        </div>
    </section>



    <!-- footer -->
    <footer>
            <section class="footer__top">
                <div class="container">
                    <div class="row">
                        <article class="footer__top-intro col-lg-5 col-md-4 col-sm-6">
                            <h4 class="footer__top-intro-heading">
                                Về chúng tôi
                            </h4>
                            <div class="footer__top-intro-content">
                                Edubook là cửa hàng luôn cung cấp cho các bạn tìm tòi tri thức, đam mê 
                                đọc sách trên khắp cả nước.Chúng tôi sẽ liên tục cập 
                                nhật những cuốn sách hay nhất, mới nhất, chất lượng nhất 
                                giúp người đọc có những cuốn sách hay nhất để đọc! <br> <br>
                                Điện thoại: 0352 860 701 <br>
                                Email: teamed2@gmail.com <br>
                                Zalo:  039.882.3232 <br>
                            </div>
                        </article>
    
                        <article class="footer__top-policy col-lg-3 col-md-4 col-sm-6">
                            <h4 class="footer__top-policy-heading">
                                Chính sách mua hàng
                            </h4>
    
                            <ul class="footer__top-policy-list">
                                <li class="footer__top-policy-item">
                                    <a href="#" class="footer__top-policy-link">Hình thức đặt hàng</a>
                                </li>
                                <li class="footer__top-policy-item">
                                    <a href="#" class="footer__top-policy-link">Hình thức thanh toán</a>
                                </li>
                                <li class="footer__top-policy-item">
                                    <a href="#" class="footer__top-policy-link">Phương thức vận chuyển</a>
                                </li>
                                <li class="footer__top-policy-item">
                                    <a href="#" class="footer__top-policy-link">Chính sách đổi trả</a>
                                </li>
                                <li class="footer__top-policy-item">
                                    <a href="#" class="footer__top-policy-link">Hướng dẫn sử dụng</a>
                                </li>
                            </ul>
                        </article>
    
                        <article class="footer__top-contact-wrap col-lg-4 col-md-4 col-sm-6">
                            <h4 class="footer__top-contact-heading">
                                Hotline liên hệ
                            </h4>
    
                            <div class="footer__top-contact">
                                <div class="footer__top-contact-icon">
                                    <img src="view/home/images/phone_top.png" class="footer__top-contact-img">
                                </div>
    
                                <div class="footer__top-contact-phone-wrap">
                                    <div class="footer__top-contact-phone">
                                        039.882.3232
                                    </div>
                                    <div class="footer__top-contact-des">
                                        (Giải đáp thắc mắc 24/24)
                                    </div>
                                </div>
                            </div>
                        
                            <h4 class="footer__top-contact-heading">
                                Kết nối với chúng tôi
                            </h4>
    
                            <div class="footer__top-contact-social">
                                <a href="#" class="footer__top-contact-social-link">
                                    <img src="view/home/images/facebook.png">
                                </a>
                                <a href="#" class="footer__top-contact-social-link">
                                    <img src="view/home/images/youtube.png">
                                </a>
                                <a href="#" class="footer__top-contact-social-link">
                                    <img src="view/home/images/tiktok.png">
                                </a>
                                <a href="#" class="footer__top-contact-social-link">
                                    <img src="view/home/images/zalo.png">
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <section class="footer__bottom">
                <div class="container">
                    <div class="row">
                        <span class="footer__bottom-content">@Bản quyền thuộc về edubook | Thiết kế bởi team ED2 </span>
                    </div>
                </div>
            </section>
    </footer>

    <!-- end footer -->
    <!-- scroll to top -->
  <!-- score-top-->

<button onclick="topFunction()" id="myBtn-scroll" title="Go to top"><i class="fas fa-chevron-up"></i></i></button>
    <!--  -->
    
    <script src="view/home/js/jq.js"></script>
    <script src="view/home/js/category.js"></script>
</body>
</html>