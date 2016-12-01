<?php

namespace App\View\Helper;

use Cake\Routing\Router;

/**
 * 
 * Breadcrumb Helper - render breadcrumb html
 * @package View.Helper
 * @created 2014-11-30
 * @version 1.0
 * @author thailvn
 * @copyright Oceanize INC
 */
class BreadcrumbHelper extends AppHelper {

    /** @var array $helpers Use helpers */
    public $helpers = array('Html');

    /**
     * Render breadcrumb html
     *     
     * @author thailvn   
     * @param array $breadcrumb List breadcrumb     
     * @param string $title Page title     
     * @return string Html 
     */
    function render($breadcrumb = array(), $title = '') {
        if (empty($breadcrumb)) {
            return false;
        }
        if (empty($title)) {
            $title = DEFAULT_SITE_TITLE;
        }
        $homeUrl = Router::fullBaseUrl() . USE_SUB_DIRECTORY;
        
        $html = "<div class='container'>";
        $html .= "<div class='title-box'>";
        $html .= "<h1 class='title-style'>{$title}</h1>";
        $html .= "<ul class=\"breadcrumb\">";
        $html .= "<li><a href=\"{$homeUrl}\"><i class=\"fa fa-home\"></i> " . __('LABEL_HOME') . "</a></li>";
        foreach ($breadcrumb as $item) {
            if (!isset($item['link'])) {
                $item['link'] = $this->request->here;
            }
            if (empty($item['link'])) {
                $item['link'] = 'javascrpt:;';
            }
            if (!empty($item['name'])) {
                $html .= "<li><a href=\"{$item['link']}\">{$item['name']}</a></li>";
            }
        }
        $html .= "</ul>";
        $html .= "</div></div>";
        return $html;
    }

}
