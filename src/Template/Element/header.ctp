<div class="top" id="top">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="top-left">
                    <div class="lang">
                        <form action="http://7427.chilishop.net/index.php?route=common/language/language" method="post" enctype="multipart/form-data" id="language">
                            <div class="btn-group">
                                <button class="btn dropdown-toggle" data-toggle="dropdown">
                                    <span class="text-language">Tiếng Việt</span> <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="http://7427.chilishop.net/index.php?route=common/language/language&amp;code=vi" data-code="vi">
                                            Tiếng Việt          </a>
                                    </li>
                                </ul>
                            </div>
                            <input type="hidden" name="code" value="">
                            <input type="hidden" name="redirect" value="<?php echo BASE_URL; ?>">
                        </form>
                    </div>									</div>
                <div class="top-right">
                    <div class="dropdown account"><a href="http://7427.chilishop.net/index.php?route=account/login" title="Đăng Nhập" class="dropdown-toggle"><span>Đăng Nhập</span></a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<div class="header-box" id="header-box">
    <div class="container">
        <column class="position-display">
            <div>
                <div class="dv-builder-full" id="header">
                    <div class="dv-builder header">
                        <div class="dv-module-content">
                            <div class="row">
                                <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">
                                    <div class="dv-item-module ">
                                        <div id="logo">
                                            <a href="<?php echo BASE_URL; ?>">
                                                <img src="<?php echo BASE_URL ?>/img/Logo-243x30.png" title="Furniture" alt="Furniture" class="img-responsive ">
                                            </a>
                                        </div>                </div>
                                </div>
                                <div class="col-sm-7 col-md-7 col-lg-7 col-xs-12">
                                    <div class="dv-item-module ">

                                        <div class="close-header-layer"></div>
                                        <div class="menu_horizontal" id="menu_id_MB01">
                                            <div class="navbar-header">
                                                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-MB01" class="navbar-toggle">
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>
                                            <div class="mask-container"></div>
                                            <div id="navbar-collapse-MB01" class="menu-content">
                                                <div class="close-menu"></div>
                                                <ul class="menu">
                                                    <li>
                                                        <a href="<?php echo BASE_URL; ?>">

                                                            <span>Trang chủ</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="http://7427.chilishop.net/gioi-thieu">

                                                            <span>Giới thiệu</span>
                                                        </a>
                                                    </li>
                                                    <li class="hchild">
                                                        <a "="">

                                                            <span>Sản phẩm</span> 
                                                        </a>
                                                        <?php if (!empty($categories)): ?>
                                                        <span class="expander"></span>
                                                        <ul class="sub-menu">
                                                            <?php foreach ($categories as $c): ?>
                                                            <li>
                                                                <a href="<?php echo BASE_URL; ?>/categories/index/<?php echo $c['id']; ?>"><?php echo $c['name']; ?></a>
                                                            </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                        <?php endif; ?>
                                                    </li>
                                                    <li class="hchild">
                                                        <a "="">

                                                            <span>Hướng dẫn</span> 
                                                        </a>
                                                        <span class="expander"></span>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="http://7427.chilishop.net/huong-dan-thanh-toan">
                                                                    Hướng dẫn thanh toán                      </a>
                                                            </li>
                                                            <li>
                                                                <a href="http://7427.chilishop.net/huong-dan-dat-hang">
                                                                    Hướng dẫn đặt hàng                      </a>
                                                            </li>
                                                            <li>
                                                                <a href="http://7427.chilishop.net/chuyen-khoan-ngan-hang">
                                                                    Chuyển khoản ngân hàng                      </a>
                                                            </li>
                                                            <li>
                                                                <a href="http://7427.chilishop.net/huong-dan-thanh-toan-paypal">
                                                                    Hướng dẫn thanh toán qua Paypal                      </a>
                                                            </li>
                                                            <li>
                                                                <a href="http://7427.chilishop.net/huong-dan-thanh-toan-ngan-luong">
                                                                    Hướng dẫn thanh toán qua Ngân Lượng                      </a>
                                                            </li>
                                                            <li>
                                                                <a href="http://7427.chilishop.net/huong-dan-thanh-toan-bao-kim">
                                                                    Hướng dẫn thanh toán qua Bảo Kim                      </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="http://7427.chilishop.net/index.php?route=information/contact">

                                                            <span>Liên hệ</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <script>
                                            $(function () {
                                                window.prettyPrint && prettyPrint()
                                                $(document).on('click', '.navbar .dropdown-menu', function (e) {
                                                    e.stopPropagation()
                                                })
                                            })
                                        </script>                </div>
                                </div>
                                <div class="col-sm-2 col-md-2 col-lg-2 col-xs-12">
                                    <div class="dv-item-module ">
                                        <div id="search_box">
                                            <i class="fa fa-search"></i>
                                            <div id="search" class="input-group">
                                                <input type="text" name="search" value="" placeholder="Tìm kiếm sản phẩm" class="form-control input-lg">
                                                <span class="button_search">
                                                    <button type="button" class="btn btn-default btn-lg"><i class="fa fa-angle-right"></i></button>
                                                </span>
                                            </div>
                                        </div>                </div>
                                    <div class="dv-item-module ">
                                        <div id="cart" class="btn-group btn-block">
                                            <button type="button" data-toggle="dropdown" data-loading-text="Đang Xử lý..." class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="fa fa-shopping-cart"></i><span id="cart-total"><span class="num_product">0</span> <span class="text-cart">sản phẩm  </span> <span class="price">0 VNĐ</span></span></button>

                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <p class="empty">Giỏ hàng đang trống!</p>
                                                </li>
                                            </ul></div>

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
<div class="main-menu" id="main-menu">
    <div class="container">
        <column class="position-display">
            <div>

                <div class="close-header-layer"></div>
                <div class="menu_horizontal" id="menu_id_DM_1">
                    <div class="navbar-header">
                        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-DM_1" class="navbar-toggle">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mask-container"></div>
                    <div id="navbar-collapse-DM_1" class="menu-content">
                        <div class="close-menu"></div>
                        <ul class="menu">
                            <?php if (!empty($categories)): ?>
                            <?php foreach ($categories as $c): ?>
                            <li>
                                <a href="<?php echo BASE_URL; ?>/categories/index/<?php echo $c['id']; ?>">
                                    <img src="<?php echo $c['image_path']; ?>" class="img-thumbnail">

                                    <span><?php echo $c['name']; ?></span>
                                </a>
                            </li>
                            <?php endforeach; endif; ?>
                        </ul>
                    </div>
                </div>
                <script>
                    $(function () {
                        window.prettyPrint && prettyPrint()
                        $(document).on('click', '.navbar .dropdown-menu', function (e) {
                            e.stopPropagation()
                        })
                    })
                </script>                    
            </div>
        </column>
    </div>
</div>