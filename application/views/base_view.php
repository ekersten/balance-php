<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php echo $title; ?></title>
    <meta name="description" content="">
    <meta name="author" content="Eric Kersten">

    <meta name="viewport" content="width=device-width">

    <!--<link rel="stylesheet" type="text/css" href="css/styles.css">-->
    <link rel="stylesheet/less" type="text/css" href="css/styles.less">
    <script type="text/javascript" src="js/libs/less-1.3.0.min.js"></script>

    <script src="js/libs/modernizr-2.5.3.min.js"></script>
    <script type="text/javascript">
        var K = {
            base_url: '<?php echo Kohana::$base_url; ?>'
        }
    </script>    
  </head>
  <body>
    <div class="container">
        <?php echo $header; ?>
        <?php echo $content; ?>
        <?php echo $footer; ?>
    </div>
    <div id="modal-container" class="modal hide fade"></div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>

    <script>
    var K = {
        'base_url': '<?php echo Kohana::$base_url; ?>'
    };
    </script>

    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
    <?php
        foreach($scripts as $script) {
            echo '<script src="' . $script . '"></script>';
        }
    ?>
  </body>
</html>