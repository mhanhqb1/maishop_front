<?php

namespace App\View\Helper;

use Cake\Routing\Router;
/**
 * Render paging html
 * 
 * @package View.Helper
 * @created 2014-11-29
 * @version 1.0
 * @author thailvn
 * @copyright Oceanize INC
 */
class PaginateHelper extends AppHelper {

    /** @var array $helpers Use helpers */
    public $helpers = array('Html');

    /**
     * Render paging html
     *     
     * @author thailvn
     * @param int $total Total record
     * @param int $limit Page size
     * @param int $displayPage How page link showing
     * @param string $url If empty then get current url     
     * @return string Paging html 
     */
    function render($total = 0, $limit = 0, $displayPage = 5, $url = '') {
        $page = !empty($this->request->query['page']) ? $this->request->query['page'] : 1;
        if (empty($url)) {
            $param = array();
            foreach ($this->request->query as $name => $value) {
                if ($name != 'page') {
                    if (is_array($value)) {
                        foreach ($value as $item) {
                            $param[] = "{$name}[]={$item}";
                        }
                    } else {
                        $param[] = "{$name}={$value}";
                    }
                }
            }
            $url = Router::url($this->here, true) . '?';
            if (!empty($param)) {
                $url = $url . implode('&', $param) . '&';
            }
        }
        $nav = '';
        $totalPage = ceil($total / $limit);
        $delta = ceil($displayPage / 2);
        if ($totalPage > $displayPage) {
            if ($page <= $delta) {
                $start = 1;
                $end = $displayPage;
            } elseif ($page >= $totalPage - $delta) {
                $start = $totalPage - $displayPage + 1;
                $end = $totalPage;
            } else {
                $start = $page - $delta + 1;
                $end = $page + $delta;
            }
        } else {
            $start = 1;
            $end = $totalPage;
        }
        $html = '<div class="row"><div class="col-sm-6 text-left"><ul class="pagination">';
        if ($end > 1) {
            for ($i = $start; $i <= $end; $i++) {
                if ($i == $page) {
                    $nav .= "<li class=\"active\"><span>{$i}</span></li>";
                } else {
                    $nav .= "<li><a href='" . $url . "page={$i}'>{$i}</a></li>";
                }
            }
            if ($page > 1) {
                $prev = "<li class=\"prev\"><a href='" . $url . "page=" . ($page - 1) . "'>← </a></li>";
            } else {
                $prev = "";
            }
            if ($page < $totalPage) {
                $next = "<li class=\"next\"><a href='" . $url . "page=" . ($page + 1) . "'> →</a></li>";
            } else {
                $next = "";
            }

            $html .= "{$prev}";
            $html .= "{$nav}";
            $html .= "{$next}";
        }

        $html .= '</ul></div>';
        if ($total > $limit) {
            $from = ($page - 1) * $limit + 1;
            $to = min($page * $limit, $total);
            $sumary = "Hiển thị từ $from đến $to của $total ($totalPage Trang)";
            $html .= "<div class=\"col-sm-6 text-right results\">{$sumary}</div>";
        }
        $html .= '</div>';
        return $html;
    }

}
