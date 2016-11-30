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
        parent::beforeFilter($event);
        // Set common param
        $this->controller = strtolower($this->request->params['controller']);
        $this->action = strtolower($this->request->params['action']);
        $this->set('controller', $this->controller);
        $this->set('action', $this->action);
//        $this->set('pageTitle', 'Mai Shop 1213');
        
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
        
        $categories = $this->Common->getAllCategories();
        $this->set('categories', $categories);
        
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
                $this->set('pageTitle', $data['name']);
            }
        }
    }
    
}
