<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/colorbox.css" />
    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.colorbox-min.js'); ?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.stickyPanel.min.js'); ?>
    <?php Yii::app()->clientScript->registerScript('colorbox', '$(".colorbox").colorbox({maxHeight: "80%"})', CClientScript::POS_READY); ?>
    <?php Yii::app()->clientScript->registerScript('extension-information', '$(".extension-information").stickyPanel()', CClientScript::POS_READY); ?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-4650336-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
        <div id="adsense-top">
            <script type="text/javascript"><!--
            google_ad_client = "ca-pub-6061575478612013";
            /* Extensions Demo topo */
            google_ad_slot = "8922988517";
            google_ad_width = 468;
            google_ad_height = 60;
            //-->
            </script>
            <script type="text/javascript"
            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
            </script>
        </div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Yiinfinite-Scroll', 'url'=>array('/yiinfinite_scroll')),
				array('label'=>'Simple Calendar', 'url'=>array('/simple_calendar')),
                array('label' => 'Contact', 'url'=>'http://davialexandre.com.br'),
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div id="footer">
        Github icon by <a href="http://paulrobertlloyd.com/2009/06/social_media_icons/" target="_blank">Paul Robert Lloyd</a><br />
        Fugue icons by <a href="http://p.yusukekamiyamane.com/" target="_blank">Yusuke Kamiyamane</a><br />
        <?php echo Yii::powered(); ?>
	</div><!-- footer -->
    
</div><!-- page -->
<div id="adsense-bottom">
    <script type="text/javascript"><!--
    google_ad_client = "ca-pub-6061575478612013";
    /* Extensions Demo Leaderboard */
    google_ad_slot = "1146022687";
    google_ad_width = 728;
    google_ad_height = 90;
    //-->
    </script>
    <script type="text/javascript"
    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
    </script>
</div>
</body>
</html>