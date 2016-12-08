<!--PRODCUCT LATE -->

<div class="product-late-ms product_module">
    <div class="row">
        <div class="area-title">
            <div class="col-sm-12">
                <h3 class="text_related title">Sản phẩm liên quan</h3>
                <div class="titleborderOut"><div class="titleborder"></div></div>
            </div>
        </div>
        <div class="col-sm-12"> 
            <div class="featured-item owl-carousel owl-theme">
                <?php for ($i = 0; $i <= 10; $i++): ?>
                    <div class="product-thumb transition">
                        <div class="product-inner">
                            <div class="image">
                                <a href="http://7427.chilishop.net/ghe-dau-georg">
                                    <img src="<?php echo BASE_URL ?>/img/2-270x270.jpg" alt="Ghế đẩu Georg" title="Ghế đẩu Georg" class="img-responsive">
                                </a>
                            </div>
                            <div class="caption">
                                <h4><a href="http://7427.chilishop.net/ghe-dau-georg">Ghế đẩu Georg</a></h4>
                                <p class="description">Công ty TNHH Nội Thất ABC tự hào là một trong những công ty hàng đầu về tư vấn thiết kế và thi công các công trình nội thất. Công ty đã có một bề dày kinh nghiệ..</p>

                                <div class="price">
                                    850.000 VNĐ                                                                        
                                    <div class="rating no-star">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <button class="bcart" type="button" title="Thêm vào giỏ" onclick="cart.add( & #39; 75 & #39; );">
                                    <span>Thêm vào giỏ</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div> 
</div>