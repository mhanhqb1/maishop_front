<?php

/* 
 * Top page
 */
namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;
use Cake\Event\Event;

class ProductsController extends AppController {
    
    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $this->viewBuilder()->layout('page');
    }
    
    /**
     * product list
     *
     * @param 
     * @return void
     */
    public function index($cateID = '') {
        
    }
    
    /**
     * Product detail
     *
     * @param $productID
     * @return void
     */
    public function detail($productID = '') {
        $data = array();
        if (!empty($productID)) {
            $param['id'] = $productID;
            $param['get_product_images'] = 1;
            $data = Api::call(Configure::read('API.url_products_detail'), $param);
            $this->set('data', $data);
            if (!empty($data['name'])) {
                $pageTitle = $data['name'];
                $this->set('pageTitle', $pageTitle);
                $this->Breadcrumb->setTitle($pageTitle)
                    ->add(array(
                        'name' => $pageTitle,
                    ));
            }
        }
    }
    
}
