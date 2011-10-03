<div class="items">
    <?php foreach($provider->getData() as $item): ?>
        <div class="item">
            <p><?php echo $item['Message']; ?></p>
            <p>by: <?php echo $item['User']; ?> - <?php echo Yii::app()->dateFormatter->formatDateTime($item['Time']); ?></p>
        </div>
    <?php endforeach; ?>
</div>

<?php $this->widget('ext.yiinfinite-scroll.YiinfiniteScroller', array('itemSelector' => 'div.items', 'pages' => $provider->pagination)); ?>
