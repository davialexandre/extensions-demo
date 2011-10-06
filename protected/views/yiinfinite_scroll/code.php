<p class="file">data/array_data.php</p>
<?php
$data_code = "
<?php 
return array (
  0 => 
  array (
    'User' => 'davi_alexandre',
    'Message' => ' ja pensou que merda ser demitido por causa de uma piada sem graça? só no brasil mesmo.',
    'Time' => '1317623779',
    'ImageUrl' => 'http://a2.twimg.com/profile_images/1458819705/Foto_criada_em_2011-07-03__s_20.34__3_normal.jpg',
    'MessageUrl' => 'http://twitter.com/davi_alexandre/statuses/120673502918483968',
    'ID' => '120673502918483968',
  ),
  1 => 
  array (
    'User' => 'davi_alexandre',
    'Message' => ' um fato: amy lee &gt; tarja turunen',
    'Time' => '1317623482',
    'ImageUrl' => 'http://a2.twimg.com/profile_images/1458819705/Foto_criada_em_2011-07-03__s_20.34__3_normal.jpg',
    'MessageUrl' => 'http://twitter.com/davi_alexandre/statuses/120672257398935552',
    'ID' => '120672257398935552',
  ),
?>
";
?>
<div class="code">
    <?php highlight_string($data_code); ?>
</div>

<p class="file">controllers/Yinfinite_ScrollController.php</p>
<?php
$controller_code = '
    <?php
    public function actionIndex() {
        $data = require_once(Yii::getPathOfAlias("application.data.array_data").".php");
        $provider = new CArrayDataProvider($data, 
            array(
                "pagination" => array(
                    "pageSize" => 15
                )
           )
        );
        
        $this->render("index", array("provider" => $provider));
    }
    ?>
    
';?>
<div class="code">
    <?php highlight_string($controller_code); ?>
</div>

<p class="file">views/yiinfinite-scroll/index.php</p>
<?php
$view_code = '
<div class="items">
    <div class="messages">
        <?php foreach($provider->getData() as $i => $item): ?>
            <div class="item">
                <?php echo CHtml::image($item["ImageUrl"]); ?>
                <p class="author"><?php echo $item["User"]; ?></p>
                <p class="message"><?php echo $item["Message"]; ?></p>
                <p class="publication_date"><?php echo Yii::app()->dateFormatter->formatDateTime($item["Time"]); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    <?php $this->widget("ext.yiinfinite-scroll.YiinfiniteScroller", array("itemSelector" => "div.items", "pages" => $provider->pagination)); ?>
</div>
';
?>
<div class="code">
    <?php highlight_string($view_code); ?>
</div>