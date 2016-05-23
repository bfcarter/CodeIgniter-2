<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Home | PatternPartner</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/sl-slide.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/p.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/p.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/p.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/p.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/p.png">
</head>

<body>

    <!--Header-->
    <header class="navbar navbar-fixed-top">
    <?php //var_dump( $this->session -> userdata["is_logged_in"]);?> 
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="<?php echo base_url(); ?>"></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="active"><a href="<?php echo base_url(); ?>index.php/welcome/signup">Register</a></li>
                        <li class="active"><a href="<?php echo base_url(); ?>index.php/welcome/login">Login</a></li>
                        
                        <?php if (isset($this->session -> userdata ['is_logged_in']) ) {?> 
                        <li class="active"><a href="<?php echo base_url(); ?>index.php/welcome/member_area">Profile</a></li>
                        <?php } ?> 

                        <li class="active"><a href="<?php echo base_url(); ?>index.php/welcome/do_upload">Upload Pattern
                        </a></li>
                        <li class="active"><a href="<?php echo base_url(); ?>index.php/welcome/image_gallery">Pattern Gallery
                        </a></li>
                        <li class="active"><a href="<?php echo base_url(); ?>index.php/contactform/contact_form">Contact Us
                        </a></li>
                       <li class="active"><a href="<?php echo base_url(); ?>index.php/welcome/logout">Logout
                        </a></li>
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->
    
