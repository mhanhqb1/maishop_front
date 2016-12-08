<?php

/* 
 * Ajax process
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;
use Cake\Event\Event;


class AjaxController extends AppController {
    
    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $this->viewBuilder()->layout('ajax');
    }
    
    /**
     * Add product to cart
     */
    public function addtocart() {
        header('Content-Type: application/json');
        $errorMessage = 'Có gì đó sai sai :(';
        $linkCart = '';
//        $this->Session->delete('Cart');
        $cart = $this->Session->check('Cart') ? $this->Session->read('Cart') : array();
        $param = $this->request->data();
        $productID = !empty($param['product_id']) ? $param['product_id'] : 0;
        $qty = !empty($param['quantity']) ? $param['quantity'] : 0;
        if ($productID && $qty) {
            if (!empty($cart['data'][$productID]['qty'])) {
                $_qty = $cart['data'][$productID]['qty'] + $qty;
            } else {
                $_qty = 1;
                $_product = Api::call(Configure::read('API.url_products_detailforcart'), array('product_id' => $productID));
                if (!empty($_product)) {
                    $cart['data'][$productID]['name'] = $_product['name'];
                    $cart['data'][$productID]['price'] = $_product['price'];
                    $cart['data'][$productID]['image'] = $_product['image'];
                } 
            }
            if (empty($cart['data'][$productID]['name']) || empty($cart['data'][$productID]['price'])) {
                $message = array(
                    'error' => $errorMessage
                ); 
            } else {
                $cart['data'][$productID]['qty'] = $_qty;
                
                if (empty($cart['total']['qty'])) {
                    $cart['total']['qty'] = $qty;
                } else {
                    $cart['total']['qty'] += $qty;
                }
                
                if (empty($cart['total']['price'])) {
                    $cart['total']['price'] = $cart['data'][$productID]['price'];
                } else {
                    $cart['total']['price'] += $cart['data'][$productID]['price'];
                }
                
                $this->Session->write('Cart', $cart);
                $linkProduct = BASE_URL.'/products/detail/'.$productID;
                $message = array(
                    'success' => 'AHIHI: Bạn đã thêm <a href="' . $linkProduct . '">' . $cart['data'][$productID]['name'] . '</a> vào <a href="' . $linkCart . '">Giỏ hàng</a>!',
                    'total' => '<span class="num_product">' . $cart['total']['qty'] . '</span>'
                );
            }
        } else {
           $message = array(
               'error' => $errorMessage
           ); 
        }
        
        echo json_encode($message);
        exit();
    }
    
    /**
     * Get cart info
     */
    public function getcartinfo() {
        $cart = $this->Session->check('Cart') ? $this->Session->read('Cart') : array();
        if (empty($cart)) {
            echo '<ul class="dropdown-menu pull-right"><li><p class="empty">Giỏ hàng đang trống!</p></li></ul>';
            exit();
        }
        $this->set('cart', $cart);
    }
    
}
