<div class="container" id="content">
    <div class="row">                
        <div class="col-sm-12">
            <div class="position-display">
                <div class="dv-builder-full">
                    <div class="dv-builder ">
                        <div class="title"><h3>Sản phẩm mới</h3></div>
                        <div class="dv-module-content">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                                    <div class="dv-item-module ">
                                        <div class="show-in-tab-mod">
                                            <div class="show-in-tab">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#tab-c1f410-0" data-toggle="tab" aria-expanded="true">Bàn</a></li>
                                                    <li><a href="#tab-c1f410-1" data-toggle="tab" aria-expanded="true">Ghế</a></li>
                                                    <li><a href="#tab-c1f410-2" data-toggle="tab" aria-expanded="true">Đèn</a></li>
                                                    <li><a href="#tab-c1f410-3" data-toggle="tab" aria-expanded="true">Sofa</a></li>
                                                    <li><a href="#tab-c1f410-4" data-toggle="tab" aria-expanded="true">Đồ dùng gỗ</a></li>
                                                </ul>
                                            </div>
                                            <div class="tab-content">
                                                <div id="tab-c1f410-0" role="tabpanel" class="tab-pane active">
                                                    <div class="owl-carc1f410 owl-carousel owl-theme">
                                                        <?php foreach ($products as $p): ?>
                                                            <div class="product-thumb transition">
                                                                <div class="product-inner">
                                                                    <div class="image">
                                                                        <a href="http://7427.chilishop.net/ban-tron-3-chan">
                                                                            <img src="<?php echo $p['image']; ?>" alt="<?php echo $p['name']; ?>" title="<?php echo $p['name']; ?>" class="img-responsive">
                                                                        </a>
                                                                    </div>
                                                                    <!--<div class="status-sale"> -25%</div>-->
                                                                    <div class="caption" style="">
                                                                        <h4><a href="http://7427.chilishop.net/ban-tron-3-chan"><?php echo $p['name']; ?></a></h4>
                                                                        <p class="description"><?php echo $p['description']; ?></p>

                                                                        <div class="price">
                                                                            <!--<span class="price-old">1.600.000 VNĐ</span>-->
                                                                            <span class="price-new"><?php echo $p['price']; ?> VNĐ</span>

                                                                            <div class="rating no-star">
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </div>
                                                                        </div>
                                                                        <button class="bcart" type="button" title="Thêm vào giỏ" onclick="cart.add( & #39; 78 & #39; );">
                                                                            <span>Thêm vào giỏ</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div id="tab-c1f410-1" role="tabpanel" class="tab-pane">
                                                    <div class="owl-carc1f410 owl-carousel owl-theme">
                                                        <?php for ($i = 0; $i < 10; $i++): ?>
                                                            <div class="product-thumb transition">
                                                                <div class="product-inner">
                                                                    <div class="image">
                                                                        <a href="http://7427.chilishop.net/ban-tron-3-chan">
                                                                            <img src="<?php echo BASE_URL ?>/img/5-270x270.jpg" alt="Bàn tròn 3 chân" title="Bàn tròn 3 chân" class="img-responsive">
                                                                        </a>
                                                                    </div>
                                                                    <div class="status-sale"> -25%</div>
                                                                    <div class="caption" style="">
                                                                        <h4><a href="http://7427.chilishop.net/ban-tron-3-chan">Bàn tròn 3 chân 1<?php echo $i; ?></a></h4>
                                                                        <p class="description">Công ty TNHH Nội Thất ABC tự hào là một trong những công ty hàng đầu về tư vấn thiết kế và thi công các công trình nội thất. Công ty đã có một bề dày kinh nghiệ..</p>

                                                                        <div class="price">
                                                                            <span class="price-old">1.600.000 VNĐ</span>
                                                                            <span class="price-new">1.200.000 VNĐ</span>

                                                                            <div class="rating no-star">
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </div>
                                                                        </div>
                                                                        <button class="bcart" type="button" title="Thêm vào giỏ" onclick="cart.add( & #39; 78 & #39; );">
                                                                            <span>Thêm vào giỏ</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endfor; ?>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dv-builder-full" id="banner_home">
                    <div class="dv-builder banner_home">
                        <div class="dv-module-content">
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">
                                    <div class="dv-item-module ">
                                        <div class="banner-box">
                                            <div id="banner0" class="banner_main">
                                                <div class="banner-item">
                                                    <a href="http://7427.chilishop.net/ghe-dau-georg"><img src="<?php echo BASE_URL ?>/img/Banner1-270x435.jpg" alt="Banner 1 trang chủ" class="img-responsive"></a>
                                                    <span class="promo-text">
                                                        <span class="title">Banner 1 trang chủ</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
                                    <div class="dv-item-module ">
                                        <div class="banner-box">
                                            <div id="banner1" class="banner_main">
                                                <div class="banner-item">
                                                    <a href="http://7427.chilishop.net/ghe-tua-3-chan"><img src="<?php echo BASE_URL ?>/img/Banner3-570x435.jpg" alt="banner 2 trang chủ" class="img-responsive"></a>
                                                    <span class="promo-text">
                                                        <span class="title">banner 2 trang chủ</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">
                                    <div class="dv-item-module ">
                                        <div class="banner-box">
                                            <div id="banner2" class="banner_main">
                                                <div class="banner-item">
                                                    <a href="http://7427.chilishop.net/den-ban-pl1"><img src="<?php echo BASE_URL ?>/img/Banner2-270x435.jpg" alt="banner 2 trang chủ" class="img-responsive"></a>
                                                    <span class="promo-text">
                                                        <span class="title">banner 2 trang chủ</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="position-display">
            </div></div>
    </div>
</div>
<div class="custom-bottom" id="custom_bottom">
    <div>
        <column class="position-display">
            <div>
                <div class="dv-builder-full" id="newsletter_home">
                    <div class="dv-builder newsletter_home">
                        <div class="dv-module-content">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                                    <div class="dv-item-module ">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="warning-new text-center"><div class="warning-new text-center"><!-- Not delete --></div></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="newslt_box">
                                            <div class="title"><h3>Đăng ký nhận tin</h3></div>
                                            <p> Hãy tham gia đăng ký thành viên để nhận được những thông tin mới nhất từ chúng tôi </p>
                                            <div class="form-newsletter">
                                                <input type="email" name="txtemail" id="txtemail" value="" placeholder="Nhập mail của bạn!" class="form-control input-lg newsletters-input form-newsletter-input">  
                                                <button type="submit" class="newsletters-btn" onclick="return subscribe();"> Đăng ký </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="dv-builder-full" id="policy">
                    <div class="dv-builder container">
                        <div class="dv-module-content">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                                    <div class="dv-item-module ">
                                        <div class="content_info policy">
                                            <div class="row content-column">
                                                <div class="item-content col-md-4">
                                                    <div class="content_inner">
                                                        <a href="http://7427.chilishop.net/gioi-thieu">
                                                            <div class="item-image">
                                                                <img src="<?php echo BASE_URL ?>/img/icon1-50x47.png">
                                                            </div>
                                                            <div class="item-title">
                                                                <h3>Chăm sóc khách hàng</h3>
                                                                <span class="title-child">Hỗ trợ khách hàng 24/7</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-content col-md-4">
                                                    <div class="content_inner">
                                                        <a href="http://7427.chilishop.net/gioi-thieu">
                                                            <div class="item-image">
                                                                <img src="<?php echo BASE_URL ?>/img/icon2-50x47.png">
                                                            </div>
                                                            <div class="item-title">
                                                                <h3>Chính sách hoàn tiền</h3>
                                                                <span class="title-child">100% hoàn tiền trong 30 ngày</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item-content col-md-4">
                                                    <div class="content_inner">
                                                        <a href="http://7427.chilishop.net/gioi-thieu">
                                                            <div class="item-image">
                                                                <img src="<?php echo BASE_URL ?>/img/icon3-50x47.png">
                                                            </div>
                                                            <div class="item-title">
                                                                <h3>Miễn phí vận chuyển</h3>
                                                                <span class="title-child">Miễn phí vận chuyển toàn quốc</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="dv-builder-full" id="isg">
                    <div class="dv-builder isg">
                        <div class="dv-module-content">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                                    <div class="dv-item-module ">
                                        <div class="content_info instagram">
                                            <ul class="list owl-carousel owl-theme">
                                                <?php for($i = 0; $i <= 10; $i++): ?>
                                                <li class="item-content">
                                                    <a href="http://7427.chilishop.net/den">
                                                        <div class="item-image">
                                                            <img src="<?php echo BASE_URL ?>/img/Futurelife-banner-bottom1-384x278.jpg">
                                                        </div>
                                                        <div class="item-title">
                                                            <h3>Bình hoa <?php echo $i; ?></h3>
                                                            <span class="title-child">Với sự kết hợp gỗ và kính có thể được sửa đổi linh hoạt để tạo ra những kiểu dáng rất đặc biệt.</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <?php endfor; ?>
                                            </ul>
                                        </div>                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </column>
    </div>
</div>