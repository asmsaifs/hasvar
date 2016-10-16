<?php
/**
 * @var \luya\web\View $this
 */

\app\assets\ResourcesAsset::register($this);

$this->beginPage();
?>
<html>
    
    
    <head>
        <title>HasVar Solutions <?php echo $this->title; ?></title>
        <?php $this->head() ?>
    </head>
    <body style="background-color:#515151;">

    <?php $this->beginBody() ?>
    <div class="main_background">
    	<div class="col-md-3" style="margin-left:-15px !important">
    	<div class="left_bar">
        	
                <div class="col-md-3" id="nav" style="min-height:500px;">
                    <ul>
                    <?php foreach (Yii::$app->menu->find()->where(['parent_nav_id' => 0, 'container' => 'default'])->all() as $item): ?>
                        <li>
                            <a<?php if ($item->isActive): ?> class="active"<?php endif;?> href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a>
                            <?php if ($item->hasChildren()): ?>
                            <ul>
                                <?php foreach ($item->children as $child): ?>
                                    <li>
                                        <a<?php if ($child->isActive): ?> class="active"<?php endif;?> href="<?php echo $child->link; ?>">&raquo; <?php echo $child->title; ?></a>
                                        <?php if ($child->hasChildren()): ?>
                                        <ul>
                                            <?php foreach ($child->children as $grandChild): ?>
                                                <li><a<?php if ($grandChild->isActive): ?> class="active"<?php endif;?> href="<?php echo $grandChild->link; ?>">&raquo; <?php echo $grandChild->title; ?></a></li>
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
                </div>               
       
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="main_content">
            <div class="website-title"><img src="<?= $this->publicHtml; ?>/images/hasvar-sloutions.png" /> </div>
            <div class="website-subtitle"> sub-title for this page goes here</div>
            <div class="website-content"><?php echo $content; ?> </div>
        	<div id="footer">&copy;2016 HasVar Solutions </div>	
        </div>	
    </div>
    
    <div class="col-md-3" style="margin-left:15px !important; padding-right:0px !important;">
        <div class="right_bar">
        
        </div>	
    </div>
   
    
	</div>
    <?php $this->endBody() ?>


    
    </body>
</html>
<?php $this->endPage() ?>