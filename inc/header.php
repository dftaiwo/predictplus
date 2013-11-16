<?php

session_name('predict');
session_start();
date_default_timezone_set('Africa/Lagos');

function pr($data) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
}


require_once 'google/appengine/api/users/UserService.php';
ini_set('include_path',ini_get('include_path').PATH_SEPARATOR.'./vendors/google-api-php-client/src/'.PATH_SEPARATOR.'./vendors/google-api-php-client/src/contrib/'.PATH_SEPARATOR);
    use google\appengine\api\users\User;
    use google\appengine\api\users\UserService;

    $user = UserService::getCurrentUser();
    
   
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
        <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

                <title>Predict & Win</title>
                <meta name="description" content="Predict & Win Sample Code">
                <meta name="author" content="GDGLagos">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
                <link rel="stylesheet" href="/assets/css/extra.css">
                <script src="/assets/js/jquery-1.7.2.min.js"></script>

                <script src="/assets/js/modernizr-2.5.3-respond-1.1.0.min.js"></script>
                <script type="text/javascript" src="https://apis.google.com/js/plusone.js">
      {"parsetags": "explicit"}
    </script>
                
           <script type="text/javascript">
      function renderWidget() {
        gapi.post.render("widget-div", {'href' : 'https://plus.google.com/112227844855698647164/posts/LCUtqbXE4PP'} );
      }
    </script>
        </head>
        <body onload="renderWidget();">
                
                <div class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Predict & Win</a>
    </div>
    
</div><!-- /.container -->
</div>

<div class="headSeparator"></div>
<div class="container">