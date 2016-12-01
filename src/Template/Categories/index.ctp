
<div id="content" class="col-md-9 col-sm-12 category_page">
    <?php if (!empty($data)): ?>
    <div class="page-selector">
        <div class="shop-grid-controls">
            <div class="entry hidden-md hidden-sm hidden-xs">
                <button type="button" id="grid-view" class="view-button grid active" data-toggle="tooltip" title="" data-original-title="Lưới"></button>
                <button type="button" id="list-view" class="view-button list" data-toggle="tooltip" title="" data-original-title="Danh sách"></button>
            </div>
            <div class="entry hidden-md hidden-sm hidden-xs">
                <div class="inline-text">Sắp xếp:</div>
                <div class="simple-drop-down">
                    <select id="input-sort" onchange="location = this.value;">
                        <?php foreach ($pageSort as $k => $v): ?>
                            <option value="<?php echo $currentUrl; ?>?sort=<?php echo $k; ?>" <?php echo ($param['sort'] == $k) ? 'selected="selected"' : ''; ?>><?php echo $v; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="entry">
                <div class="inline-text">Hiển thị:</div>
                <div class="simple-drop-down display_number_c">
                    <select id="input-limit" onchange="location = this.value;">
                        <?php foreach ($pageSize as $k => $v): ?>
                            <option value="<?php echo $currentUrl; ?>?limit=<?php echo $k; ?>" <?php echo ($param['limit'] == $k) ? 'selected="selected"' : ''; ?>><?php echo $v; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="row pd-content">
        <?php foreach ($data as $p): ?>
        <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-6">
            <div class="product-thumb transition">
                <div class="product-inner">
                    <div class="image">
                        <a href="<?php echo BASE_URL ?>/products/detail/<?php echo $p['id']; ?>">
                            <img src="<?php echo $p['image']; ?>" alt="<?php echo $p['name']; ?>" title="<?php echo $p['name']; ?>" class="img-responsive">
                        </a>
                    </div>
                    <!--<div class="status-sale"> -25%</div>-->
                    <div class="caption">
                        <h4><a href="<?php echo BASE_URL ?>/products/detail/<?php echo $p['id']; ?>"><?php echo $p['name']; ?></a></h4>
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
                        <button class="bcart" type="button" title="Thêm vào giỏ" onclick="cart.add('<?php echo $p['id']; ?>');">
                            <span>Thêm vào giỏ</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <div class="clearfix visible-lg"></div>
    </div>
    <?php echo $this->Paginate->render($total, $limit);?>
    <?php endif;?>
</div>