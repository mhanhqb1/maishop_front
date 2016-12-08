<?php

namespace App\Controller\Component;

use Cake\Network\Exception\NotFoundException;
use App\Controller\Component\AppComponent;
use App\Lib\Log\AppLog;
use Cake\Validation\Validation;
use App\Lib\Api;
use Cake\Core\Configure;

/**
 * Some common methods
 * 
 * @package Controller/Component
 * @created 2016-09-28
 * @version 1.0
 * @author KienNH
 * @copyright Oceanize INC
 */
class CommonComponent extends AppComponent {

    /**
     * Handle exception base on error array of API
     * 
     * @author thailvn
     * @param array $errors
     * @throws NotFoundException
     * @return void
     */
    public function handleException($errors) {
        if (!empty($errors)) {
            foreach ($errors as $error) {
                switch (key($error)) {
                    case '1010':  // not exist error  
                    case '1002':  // length is invalid 
                    case '1012':  // must contain a valid number                         
                        AppLog::info("Validation error API", __METHOD__, $errors);
                        throw new NotFoundException($error[key($error)], 404);
                }
            }
        }
    }
    
    /**
     * Date format for application
     *    
     * @author thailvn
     * @param int $time Input DateTime        
     * @return string Date
     */
    public function dateFormat($time = null, $onlyDate = false) {
        if (empty($time) || !is_numeric($time)) {
            return false;
        }
        if ($onlyDate == true) {
            return date('Y-d', $time);
        }
        $minuteAgo = ceil((time() - $time) / 60);
        if ($minuteAgo > 0 && $minuteAgo < 60) {
            return str_pad($minuteAgo, 2, '0', STR_PAD_LEFT) . " minutes before";
        } elseif ($minuteAgo > 0 && $minuteAgo < 24 * 60) {
            return str_pad(ceil($minuteAgo / 60), 2, '0', STR_PAD_LEFT) . " hours before";
        }
        return date('Y-m-d', $time);
    }
    
    /**
     * Date format (from string) for application
     *    
     * @author KienNH
     * @param int $time Input DateTime        
     * @return string Date
     */
    public function dateFormatFromString($strDate = null, $onlyDate = false) {
        if (empty($strDate)) {
            return false;
        }
        $time = strtotime($strDate);
        if ($time > 0 && $time != '') {
            return $this->dateFormat($time, $onlyDate);
        }
    }

    /**
     * Number format
     * 
     * @param int $number
     * @return boolean|string
     */
    public function nunmberFormat($number = 0) {
        if (!is_numeric($number)) {
            return false;
        }
        return number_format($number);
    }
    
    /**
     * Date time format for application
     *    
     * @author thailvn
     * @param int $time Input DateTime         
     * @return string DateTime
     */
    public function dateTimeFormat($time = null) {
        if (empty($time)) {
            return false;
        }
        return date('Y年m月d日 H:i', $time);
    }
    
    /**
     * Get thumb image url
     *     
     * @author thailvn
     * @param string $fileName File name
     * @param string $size Thumb size     
     * @return string Thumb image url  
     */
    public function thumb($fileName, $size = null) {
        if (!is_string($fileName) && $fileName != '') {
            return '';
        }
        if (Validation::url($fileName)) {
            return $fileName;
        }
        if (empty($size)) {
            return $fileName;
        }
        $image = explode('.', $fileName);
        if (count($image) < 2) {
            return '';
        }
        $fileName = sprintf($image[0], '_' . $size) . '.' . $image[1];
        return $fileName;
    }
    
    /**
     * Convert array to key/value
     *    
     * @author AnhMH
     * @param array $arr 2D input array
     * @param string $key Field key
     * @param string $keyValue Field value
     * @return array
     */
    public static function arrayKeyValue($arr, $key, $keyValue) {
        $result = array();
        if ($arr && is_array($arr)) {
            foreach ($arr as $item) {
                if (is_array($item) && key_exists($key, $item) && key_exists($keyValue, $item)) {
                    $result[$item[$key]] = $item[$keyValue];
                }
            }
        }
        return $result;
    }
    
    /**
     * Get all categories
     *    
     * @author AnhMH
     * @param 
     * @return array
     */
    public static function getAllCategories() {
        $param = array();
        $result = Api::call(Configure::read('API.url_categories_all'), $param);
        return $result;
    }

}
