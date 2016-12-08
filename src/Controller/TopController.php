<?php

/* 
 * Top page
 */
namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class TopController extends AppController {
    
    public function index() {
        $param = array();
        $products = Api::call(Configure::read('API.url_products_all'), $param);
        $this->set('products', $products);
    }
    
}
