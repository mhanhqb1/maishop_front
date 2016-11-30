<?php

/**
 * API's Url
 */
use Cake\Core\Configure;

Configure::write('API.Timeout', 30);
Configure::write('API.secretKey', 'maishop');
Configure::write('API.rewriteUrl', array());

Configure::write('API.url_products_all', 'products/all');
Configure::write('API.url_products_detail', 'products/detail');

Configure::write('API.url_categories_all', 'categories/all');