<?php

/* 
 * Top page
 */
namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;
use Cake\Event\Event;

class CategoriesController extends AppController {
    
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
        $param = $this->getParams(
            array(
                'page' => 1,
                'limit' => Configure::read('Config.PageSize'),
                'sort' => Configure::read('Config.PageSortDefault')
            )
        );
        $param['cate_id'] = $cateID;
        $param['disable'] = 0;
        $result = Api::call(Configure::read('API.url_products_list'), $param);
        $total = !empty($result['total']) ? $result['total'] : 0;
        $data = !empty($result['data']) ? $result['data'] : array();
        
        // Create breadcrumb
        $pageTitle = !empty($data[0]['cate_name']) ? $data[0]['cate_name'] : DEFAULT_SITE_TITLE;
        $this->Breadcrumb->setTitle($pageTitle)
            ->add(array(
                'name' => $pageTitle,
            ));
        
        $this->set('data', $data);
        $this->set('param', $param);
        $this->set('limit', $param['limit']);
        $this->set('total', $total);
        $this->set('pageTitle', $pageTitle);
    }
}
