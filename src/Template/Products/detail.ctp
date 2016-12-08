<div id="content" class="col-md-9 col-sm-12">
    <div class="position-display"></div>
    <div class="row">
        <div class="col-sm-6">
            <div class="single-product-image">
                <div class="single-pro-main-image">
                    <?php if (!empty($data['image'])): ?>
                    <a href="<?php echo $data['image']; ?>">
                        <div class="zoomWrapper">
                            <img id="optima_zoom" src="<?php echo $data['image']; ?>" data-zoom-image="<?php echo $data['image']; ?>" title="<?php echo $data['name']; ?>" alt="<?php echo $data['name']; ?>" class="img-responsive">
                        </div>
                    </a>   
                    <?php endif; ?>
                </div>
                <div class="single-pro-thumb">
                    <?php if (!empty($data['images'])): ?>
                    <ul class="thubm-caro owl-carousel owl-theme" id="optima_gallery">
                        <?php foreach ($data['images'] as $v): ?>
                        <li>
                            <a href="<?php echo $v['image'] ?>" title="<?php echo $data['name']; ?>" data-image="<?php echo $v['image'] ?>" data-zoom-image="<?php echo $v['image'] ?>"> 
                                <img class="img-responsive" src="<?php echo $v['image'] ?>" title="<?php echo $data['name']; ?>" alt="<?php echo $data['name']; ?>">
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>                 
        </div>
        <div class="col-sm-6">
            <div class="single-product-description">
                <div class="pro-desc">
                    <h2><?php echo !empty($data['name']) ? $data['name'] : ''; ?></h2>
                    <div class="desc2">
                        <p class="hidden">Mô tả</p>
                        <p><?php echo !empty($data['description']) ? $data['description'] : ''; ?></p>
                    </div>

                    <div class="rating">
                        <p>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>

                            <a class="sto" href="http://7427.chilishop.net/" onclick="return false;">0 Bình luận</a>
                        </p>
                    </div>
                    <ul class="list-unstyled pd-price">
                        <li>
                            <span class="price-new"><?php echo $data['price']; ?> VNĐ</span>
                        </li>

                    </ul>
                    <ul class="list-unstyled">
                        <li class="hidden">Số lượng sản phẩm trong kho: <span class="span"><?php echo $data['stock']; ?></span></li>
                    </ul>
                </div><!--  <div class="pro-desc">-->
            </div>
            <div id="product">
                <h3>Tùy chọn đang có</h3>
                <div class="product_details_cart">
                    <div class="product-quantity">
                        <div class="numbers-row">                      
                            <input type="text" name="quantity" value="1" id="input-quantity">
                            <input type="hidden" name="product_id" value="<?php echo $data['id']; ?>">
                            <div class="dec qtybutton">-</div>
                            <div class="inc qtybutton">+</div>
                        </div>
                    </div>
                    <div class="button-cart">
                        <button type="button" id="button-cart" data-loading-text="Đang Xử lý..." class="push_button button shopng-btn">Thêm vào giỏ</button>
                    </div>
                </div>
                <p class="tags-ms">
                    <label>Xu hướng tìm kiếm:</label>
                    <a href="http://7427.chilishop.net/index.php?route=product/search&amp;tag=gh%E1%BA%BF">ghế</a>
                </p>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="bg-ms-product">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="http://7427.chilishop.net/#tab-description" data-toggle="tab">Mô tả</a></li>
                    <li><a href="http://7427.chilishop.net/#tab-review" data-toggle="tab">Đánh giá (0)</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active bottom20" id="tab-description">
                        <p><?php echo $data['detail']; ?></p>
                    </div>
                    <div class="tab-pane" id="tab-review">
                        <form class="form-horizontal" id="form-review">
                            <div id="review"><p>Không có đánh giá cho sản phẩm này.</p>
                            </div>
                            <h2>Gửi Bình luận</h2>
                            <div class="form-group required">
                                <div class="col-sm-12">
                                    <label class="control-label" for="input-name">Họ &amp; Tên:</label>
                                    <input type="text" name="name" value="" id="input-name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group required">
                                <div class="col-sm-12">
                                    <label class="control-label" for="input-review">Nội dung:</label>
                                    <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                    <div class="help-block"><span style="color: #FF0000;">Lưu ý:</span> không hỗ trợ HTML!</div>
                                </div>
                            </div>
                            <div class="form-group required">
                                <div class="col-sm-12">
                                    <label class="control-label">Cho điểm:</label>
                                    &nbsp;&nbsp;&nbsp; Bình thường&nbsp;
                                    <input type="radio" name="rating" value="1">
                                    &nbsp;
                                    <input type="radio" name="rating" value="2">
                                    &nbsp;
                                    <input type="radio" name="rating" value="3">
                                    &nbsp;
                                    <input type="radio" name="rating" value="4">
                                    &nbsp;
                                    <input type="radio" name="rating" value="5">
                                    &nbsp;Tốt</div>
                            </div>
                            <div class="buttons clearfix">
                                <div class="pull-right">
                                    <button type="button" id="button-review" data-loading-text="Đang Xử lý..." class="btn btn-primary">Tiếp tục</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $this->element('product_relate'); ?>