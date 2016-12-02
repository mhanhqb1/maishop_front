<?php
$totalPrice = !empty($cart['total']['price']) ? $cart['total']['price'] : 0;
$totalQty = !empty($cart['total']['qty']) ? $cart['total']['qty'] : 0;
?>
<div id="cart" class="btn-group btn-block">
    <button type="button" data-toggle="dropdown" data-loading-text="Đang Xử lý..." class="btn btn-inverse btn-block btn-lg dropdown-toggle">
        <i class="fa fa-shopping-cart"></i>
        <span id="cart-total">
            <span class="num_product"><?php echo $totalQty; ?></span> 
            <span class="text-cart">sản phẩm  </span> 
            <span class="price"><?php echo $totalPrice; ?> VNĐ</span></span>
    </button>

    <ul class="dropdown-menu pull-right">
        <?php if (empty($cart['data'])): ?>
            <li>
                <p class="empty">Giỏ hàng đang trống!</p>
            </li>
        <?php else: ?>
            <li>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <?php foreach ($cart['data'] as $k => $v): ?>
                            <?php
                            $link = BASE_URL . '/products/detail/' . $k;
                            $image = !empty($v['image']) ? $v['image'] : '';
                            $name = !empty($v['name']) ? $v['name'] : '';
                            $price = !empty($v['price']) ? $v['price'] : 0;
                            $qty = !empty($v['qty']) ? $v['qty'] : 1;
                            $subTotal = $price * $qty;
                            ?>
                            <tr class="cart-item">
                                <td class="text-center image">              
                                    <a href="<?php echo $link; ?>">
                                        <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" title="<?php echo $name; ?>"  />
                                    </a>
                                </td>
                                <td class="text-left name">
                                    <a href="<?php echo $link; ?>"><?php echo $name; ?></a>
                                </td>
                                <td class="text-right quantity">x <?php echo $qty; ?></td>
                                <td class="text-right total"><?php echo $subTotal; ?> VNĐ</td>
                                <td class="text-center remove">
                                    <button type="button" onclick="cart.remove('YToyOntzOjEwOiJwcm9kdWN0X2lkIjtpOjc4O3M6Njoib3B0aW9uIjthOjE6e2k6MjcyO3M6MzoiMTQ5Ijt9fQ==');" title="Loại bỏ" class="btn  btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </li>
            <li>
                <div class="table-responsive">
                    <table class="table tbl-total">
                        <tr>
                            <td class="text-right"><strong>Thành tiền</strong></td>
                            <td class="text-right"><?php echo $totalPrice; ?> VNĐ</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Tổng cộng </strong></td>
                            <td class="text-right"><?php echo $totalPrice; ?> VNĐ</td>
                        </tr>
                    </table>
                    <p class="text-right btn-cart">
                        <a class="vcart" href="http://7427.chilishop.net/index.php?route=checkout/cart"><strong><i class="fa fa-shopping-cart"></i> Xem giỏ hàng</strong></a>
                        <a class="cout" href="http://7427.chilishop.net/index.php?route=checkout/checkout"><strong><i class="fa fa-share"></i> Thanh toán</strong></a>
                    </p>
                </div>
            </li>
        <?php endif; ?>
    </ul>
</div>