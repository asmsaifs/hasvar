<?php
/**
 * @var \luya\web\View $this
 */

\app\assets\ResourcesAsset::register($this);

$this->beginPage();
?>
<html>
    
    
    <head>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
        <title><?php echo Yii::$app->siteTitle.' >> '.$this->title; ?></title>
        <?php $this->head() ?>
    </head>
    <body id="top" data-spy="scroll" data-target=".navbar-collapse">

    <?php $this->beginBody() ?>
	
   <main id="page-wrapper4" class="">
  <div id="column-red" class="column-nav">
    <nav id="navbar-red" class="navbar navbar-default" role="navigation">
    
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      
      <div class="navbar-collapse collapse sidebar-navbar-collapse">
      
        <ul class="nav navbar-nav">          
        <?php foreach (Yii::$app->menu->find()->where(['parent_nav_id' => 0, 'container' => 'default'])->all() as $item): ?>
                        <li <?php if ($item->isActive): ?> class="active"<?php endif;?>>
                            <a href="<?php echo $item->link; ?>"><?php echo $item->title; ?>
							<!--<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span>--></a>
                            <?php if ($item->hasChildren()): ?>
                            <ul>
                                <?php foreach ($item->children as $child): ?>
                                    <li <?php if ($child->isActive): ?> class="active"<?php endif;?>>
                                        <a href="<?php echo $child->link; ?>">&raquo; <?php echo $child->title; ?>
										<!--<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span>--></a>
                                        <?php if ($child->hasChildren()): ?>
                                        <ul>
                                            <?php foreach ($child->children as $grandChild): ?>
                                                <li <?php if ($grandChild->isActive): ?> class="active"<?php endif;?>>
													<a href="<?php echo $grandChild->link; ?>">&raquo; <?php echo $grandChild->title; ?>
													<!--<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span>--></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?> 
        
        </ul>
      </div><!--/.nav-collapse -->
    </nav><!--/.navbar -->
  </div><!--/.column-nav -->  
  
 <!-- <div class="container-fluid column-main"> 
	<div class="col-md-8">
		<div class="main_content">
            <div class="website-title"><img class=".img-fluid" src="<?= $this->publicHtml; ?>/images/hasvar-sloutions.png" /> </div>
            <div class="website-subtitle"> <?php echo Yii::$app->page->getProperty('SubTitle');//echo Yii::$app->siteTitle;?></div>-->
            <!--<div class="website-content"><?php echo $content; ?> </div>
        	<div id="footer">&copy;2016 HasVar Solutions </div>	
        <!--</div>
    </div>	
  </div>-->
  <div class="column-main"> 
	<div class="col-md-10">
	<div class="main_content">
		<div class="website-title"><img class="img-responsive center-block" src="<?= $this->publicHtml; ?>/images/hasvar-sloutions.png" /> </div>
		<div class="website-subtitle"> <?php echo Yii::$app->page->getProperty('SubTitle');//echo Yii::$app->siteTitle;?></div>
        <div class="website-content"><?php echo $content; ?> </div>	  
    </div>
	<footer class="text-center">
		<div class="container">
			<div class="row">
				<div class="social_icon">
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-linkedin"></a>
					<a href="#" class="fa fa-tumblr"></a>
				</div>
				<p>Copyright &copy; 2016 HasVar Solutions</p>
			</div>
		</div>
	</footer>  
	</div>
  </div>  
</main> 

    <?php $this->endBody() ?>


    
    </body>
</html>
<?php $this->endPage() ?>