<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>
    <?= $title ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Richard Robinson http://www.richardorobinson.com">

    <!-- CSS  -->
    <?php if($this->session->userdata('lights') == 'inverse'){ ?>
    	<link href="<?= base_url()?>css/lightsoff.css" rel="stylesheet">
    <?php }else{?>
    	<link href="<?= base_url()?>css/bootstrap.css" rel="stylesheet">
    <?php }?>
    <link rel="stylesheet" href="<?= base_url()?>datepicker/css/smoothness/jquery-ui-1.10.3.custom.css">
    <style type="text/css">
body {
	padding-top: 60px;
	padding-bottom: 40px;
}
.sidebar-nav {
	padding: 9px 0;
}
</style>
    <link href="<?= base_url()?>css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?= base_url()?>css/app.css" rel="stylesheet">
    <link href="<?= base_url()?>css/font-awesome.min.css" rel="stylesheet">
    <!-- End CSS -->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicons and touch icons -->
    <link rel="shortcut icon" href="<?= base_url()?>img/favicon.ico">
    <!--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url()?>img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url()?>img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url()?>img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url()?>img/apple-touch-icon-57-precomposed.png">-->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

    <body>
<!--  HEADER HERE   -->
<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
    <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="<?= base_url()?>">
      <?= $projectname ?>
      </a>
          <div class="nav-collapse">
          <?php if($this->session->userdata('lights') == 'inverse'){ ?>
			<a href="<?= base_url()?><?= ($whereiam)?$whereiam.'/':'welcome/' ?>lightson" class="btn btn-link pull-right lightson tipping hidden-phone" data-toggle="tooltip" title data-original-title="Click to turn the lights on." data-placement="bottom"><i class="fa fa-lightbulb-o fa-lg"></i></a>
			<hr class="visible-phone"/>
			<a href="<?= base_url()?><?= ($whereiam)?$whereiam.'/':'welcome/' ?>lightson" class="btn btn-primary btn-block pull-right lightson tipping visible-phone" data-toggle="tooltip" title data-original-title="Click to turn the lights on." data-placement="bottom"><i class="fa fa-lightbulb-o fa-lg"></i></a>
			<br class="visible-phone"/>          
          <?php }else{?>
          	<a href="<?= base_url()?><?= ($whereiam)?$whereiam.'/':'welcome/' ?>lightsoff" class="btn btn-link pull-right tipping hidden-phone" data-toggle="tooltip" title data-original-title="Click to turn the lights off." data-placement="bottom"><i class="fa fa-lightbulb-o fa-lg"></i></a>
          	<hr class="visible-phone"/>
          	<a href="<?= base_url()?><?= ($whereiam)?$whereiam.'/':'welcome/' ?>lightsoff" class="btn btn-primary btn-block pull-right tipping visible-phone" data-toggle="tooltip" title data-original-title="Click to turn the lights off." data-placement="bottom"><i class="fa fa-lightbulb-o fa-lg"></i></a>
          	<br class="visible-phone"/>
          <?php }?>

        <ul class="nav">
             <!--<li class="<?= ($whereiam == NULL)?'active':NULL; ?>"><a href="<?= base_url() ?>" class="tipping" data-placement="bottom" title="Home"><i class="fa fa-home <?= ($whereiam == NULL)?'fa-2x here':'fa-lg'; ?>"></i></a></li>
              <li class="<?= ($whereiam == 'chart')?'active':NULL; ?>"><a href="<?= base_url() ?>chart/%20" class="tipping" data-placement="bottom" title="Charts"><i class="fa fa-bar-chart-o <?= ($whereiam == 'chart')?'fa-2x here':'fa-lg'; ?>"></i></a></li>
              <li class="<?= ($whereiam == 'user')?'active':NULL; ?>"><a href="<?= base_url() ?>user/" class="tipping" data-placement="bottom" title="User"><i class="fa fa-user <?= ($whereiam == 'user')?'fa-2x here':'fa-lg'; ?>"></i></a></li>
              <li class="<?= ($whereiam == 'team')?'active':NULL; ?>"><a href="<?= base_url() ?>team/" class="tipping" data-placement="bottom" title="Teams"><i class="fa fa-users <?= ($whereiam == 'team')?'fa-2x here':'fa-lg'; ?>"></i></a></li>
              <li class="<?= ($whereiam == 'systems')?'active':NULL; ?>"><a href="<?= base_url() ?>systems/" class="tipping" data-placement="bottom" title="Systems"><i class="fa fa-cog  <?= ($whereiam == 'systems')?'fa-2x fa-spin here':'fa-lg';?>"></i></a></li>-->
            </ul>
      </div>
        </div>
  </div>
    </div>
           
<!-- END HEADER --> 

