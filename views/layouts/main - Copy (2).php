<?php
/**
 * @var \luya\web\View $this
 */

\app\assets\ResourcesAsset::register($this);

$this->beginPage();
?>
<html>
    
    
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo Yii::$app->siteTitle.' >> '.$this->title; ?></title>
        <?php $this->head() ?>
    </head>
    <body id="top" data-spy="scroll" data-target=".navbar-collapse">

    <?php $this->beginBody() ?>
	
    <div class="main_background" id="page-wrapper4" class="container">
		<!-- start templatemo navigation -->
		
  <div class="nav-side-menu">
    <div class="brand">Brand Logo</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
    <div class="menu-list">
        <ul id="menu-content" class="menu-content collapse out">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard fa-lg"></i> Dashboard
                </a>
            </li>
            <li data-toggle="collapse" data-target="#products" class="collapsed active">
                <a href="#"><i class="fa fa-gift fa-lg"></i> UI Elements <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="products">
                <li class="active"><a href="#">CSS3 Animation</a></li>
                <li><a href="#">General</a></li>
                <li><a href="#">Buttons</a></li>
                <li><a href="#">Tabs &amp; Accordions</a></li>
                <li><a href="#">Typography</a></li>
                <li><a href="#">FontAwesome</a></li>
                <li><a href="#">Slider</a></li>
                <li><a href="#">Panels</a></li>
                <li><a href="#">Widgets</a></li>
                <li><a href="#">Bootstrap Model</a></li>
            </ul>
            <li data-toggle="collapse" data-target="#service" class="collapsed">
                <a href="#"><i class="fa fa-globe fa-lg"></i> Services <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="service">
                <li>New Service 1</li>
                <li>New Service 2</li>
                <li>New Service 3</li>
            </ul>


            <li data-toggle="collapse" data-target="#new" class="collapsed">
                <a href="#"><i class="fa fa-car fa-lg"></i> New <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="new">
                <li>New New 1</li>
                <li>New New 2</li>
                <li>New New 3</li>
            </ul>
            <li>
                <a href="#">
                    <i class="fa fa-user fa-lg"></i> Profile
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-users fa-lg"></i> Users
                </a>
            </li>
        </ul>
    </div>
</div>
	
	<!-- end templatemo navigation -->
    
    <div class="container" id="main">
    <div class="col-md-9">
        <div class="main_content">
            <div class="website-title"><img src="<?= $this->publicHtml; ?>/images/hasvar-sloutions.png" /> </div>
            <div class="website-subtitle"> <?php echo Yii::$app->page->getProperty('SubTitle');//echo Yii::$app->siteTitle;?></div>
            <div class="website-content"><?php echo $content; ?> </div>
        	<div id="footer">&copy;2016 HasVar Solutions </div>	
        </div>	
    </div>
	</div>
	</div>
	</div>
    <?php $this->endBody() ?>


    
    </body>
</html>
<?php $this->endPage() ?>