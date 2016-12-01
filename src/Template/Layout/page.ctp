<!DOCTYPE html>
<html lang="vi">
    <head class="active">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title><?php echo !empty($pageTitle) ? $pageTitle : DEFAULT_SITE_TITLE; ?></title>
        <meta name="description" content="<?php echo !empty($pageTitle) ? $pageTitle : DEFAULT_SITE_TITLE; ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <base href="<?php echo BASE_URL; ?>"/>
        <link href="http://7427.chilishop.net/image/catalog/favicon.png" rel="icon">

        <link href="<?php echo BASE_URL ?>/css/bootstrap.min.css?<?php echo VERSION_DATE ?>" rel="stylesheet" media="screen">
        <link href="<?php echo BASE_URL ?>/css/font-awesome.min.css?<?php echo VERSION_DATE ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo BASE_URL ?>/css/owl.carousel.tabs.css?<?php echo VERSION_DATE ?>" type="text/css" rel="stylesheet" media="screen">
        <link href="<?php echo BASE_URL ?>/css/settings.css?<?php echo VERSION_DATE ?>" type="text/css" rel="stylesheet" media="screen">
        <link href="<?php echo BASE_URL ?>/css/static-captions.css?<?php echo VERSION_DATE ?>" type="text/css" rel="stylesheet" media="screen">
        <link href="<?php echo BASE_URL ?>/css/dynamic-captions.css?<?php echo VERSION_DATE ?>" type="text/css" rel="stylesheet" media="screen">
        <link href="<?php echo BASE_URL ?>/css/captions.css?<?php echo VERSION_DATE ?>" type="text/css" rel="stylesheet" media="screen">
        <link href="<?php echo BASE_URL ?>/css/owl.transitions.css?<?php echo VERSION_DATE ?>" type="text/css" rel="stylesheet" media="screen">
        <link href="<?php echo BASE_URL ?>/css/owl.carousel.css?<?php echo VERSION_DATE ?>" type="text/css" rel="stylesheet" media="screen">
        <link href="<?php echo BASE_URL ?>/css/bootstrap-datetimepicker.min.css?<?php echo VERSION_DATE ?>" type="text/css" rel="stylesheet" media="screen">
        <link href="<?php echo BASE_URL ?>/css/jquery.fancybox.css?<?php echo VERSION_DATE ?>" type="text/css" rel="stylesheet" media="screen">
        <link href="<?php echo BASE_URL ?>/css/stylesheet.css?<?php echo VERSION_DATE ?>" rel="stylesheet">
        <link href="<?php echo BASE_URL ?>/css/mb_setting.css?<?php echo VERSION_DATE ?>" rel="stylesheet">
        <link href="<?php echo BASE_URL ?>/css/custom.css?<?php echo VERSION_DATE ?>" rel="stylesheet">

        <script src="<?php echo BASE_URL ?>/js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL ?>/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL ?>/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL ?>/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL ?>/js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL ?>/js/moment.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL ?>/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL ?>/js/jquery.fancybox.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL ?>/js/widgets.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL ?>/js/jquery.elevatezoom.js" type="text/javascript"></script>
        <!--//script zoom product-->
        <script src="<?php echo BASE_URL ?>/js/jquery.scrollUp.min.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL ?>/js/main.js?<?php echo VERSION_DATE ?>" type="text/javascript"></script>
        <!-- end zoomproduct -->
        <script src="<?php echo BASE_URL ?>/js/common.js?<?php echo VERSION_DATE ?>" type="text/javascript"></script>
        <script src="<?php echo BASE_URL ?>/js/custom.js?<?php echo VERSION_DATE ?>" type="text/javascript"></script>
    </head>
    <body>
        <header>
            <?php echo $this->element('header'); ?>
        </header>
        
        <?php if (!empty($breadcrumb)) : ?>
            <?php echo $this->Breadcrumb->render($breadcrumb, $breadcrumbTitle); ?>
        <?php endif ?>
        
        <div class="container <?php echo $controller; ?>-ms container_<?php echo $controller . '_' . $action; ?>">
            <div class="row">
                <div id="column-left" class="col-md-3 col-lg-3 col-xs-12 hidden-xs hidden-sm">
                    <?php echo $this->element('left_menu'); ?>
                </div>
                
                <?php echo $this->fetch('content'); ?>
                
            </div>
        </div>

        <?php echo $this->element('footer'); ?>
        <a id="scrollUp" href="http://7427.chilishop.net/#top" style="position: fixed; z-index: 2147483647;"><i class="fa fa-angle-up"></i></a>
    </body>
</html>