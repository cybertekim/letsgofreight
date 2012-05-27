<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Let's Go Freight | <?= $title ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/> 	
	
    <!-- //      Stylesheets Files       // -->
	<link rel="stylesheet" href="<?= base_url(); ?>css/base.css"/>
	<link rel="stylesheet" href="<?= base_url(); ?>css/framework.css"/>
    <link rel="stylesheet" href="<?= base_url(); ?>css/custom.css"/>
	<link rel="stylesheet" href="<?= base_url(); ?>css/style.css"/>  
    <link rel="stylesheet" href="<?= base_url(); ?>css/noscript.css" media="screen,all" id="noscript"/>
    
    <!-- //     Google Webfont Files     // -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" type="text/css"/>
	
    <!-- //        Favicon Files         // -->
	<link rel="shortcut icon" href="images/favicon.ico">
	
    <!-- //      Javascript Files        // -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>js/jquery.cycle.all.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>js/dropdown.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>js/tinynav.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>js/filterable.pack.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>js/jquery.flexslider-min.js"></script> 
    <script type="text/javascript" src="<?= base_url(); ?>js/jquery.fancyboxe45f.js?v=2.0.6"></script>
    <script type="text/javascript" src="<?= base_url(); ?>js/jquery.elastislide.js"></script>   
	<script type="text/javascript" src="<?= base_url(); ?>js/jquery.ui.totop.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>js/jquery.twitter.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>js/ddaccordion.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>js/faq-functions.js" ></script>
    <script type="text/javascript" src="<?= base_url(); ?>js/theme-functions.js"></script> 
    <?php echo $this->template->javascript; ?>
    
</head>
<body>
<div id="main-wrapper">

	<!-- begin of header area -->
    <div id="header-wrapper">
    
        <!-- begin of logo area -->
        <div id="logo">
            <a href="index-2.html"><img src="<?= base_url(); ?>images/logo.png" alt=""></a>
        </div>
        <!-- end of logo area -->
        
        <!-- begin of mainmenu area -->
        <?= $this->template->partial->view('frontend/menu'); ?>
        <!-- end of mainmenu area -->
        
        <!-- begin of top social area -->
        <div id="top-social">
        <div id="phone">
        	323 819 6909
        </div>
            <ul>
                <li><a class="fbfade" href="#"><span>This content is hidden</span></a></li>
                <li><a class="twfade" href="#"><span>This content is hidden</span></a></li>
            </ul>
        </div>
        <!-- end of top social area -->
        
    </div>
    <div id="bg-oblique"></div>
    <!-- end of header area -->
        
    <!-- begin of content area -->
    <div id="maincontent">
    <?php echo $this->template->content; ?>
    </div>
    <!-- end of content area -->
    
    <!-- Footer l194 -->
    <?= $this->template->partial->view('frontend/footer', array(), $overwrite=TRUE); ?>
    <!-- Footer End -->
</body>

</html>

<!--
<!doctype html>
<html>
<head>
	
	
</head>
<body>

<div class="container">

  <?php // echo $this->template->widget("hero_widget", array("title"=>"Hello, world!")); ?>

  <?php //echo $this->template->content; ?>

  <footer>
	<p><?php //echo $this->template->copyright->default("There is no copyright"); ?></p>
  </footer>

</div>

<script src="//code.jquery.com/jquery-latest.min.js"></script>
<?php //echo $this->template->javascript; ?>

</body>
</html> -->