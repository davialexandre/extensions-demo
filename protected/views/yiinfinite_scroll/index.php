<div class="items">
    <div class="messages">
        <?php foreach($provider->getData() as $i => $item): ?>
            <div class="item">
                <?php echo CHtml::image($item['ImageUrl']); ?>
                <p class="author"><?php echo $item['User']; ?></p>
                <p class="message"><?php echo $item['Message']; ?></p>
                <p class="publication_date"><?php echo Yii::app()->dateFormatter->formatDateTime($item['Time']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    <?php $this->widget('ext.yiinfinite-scroll.YiinfiniteScroller', array('itemSelector' => 'div.items', 'pages' => $provider->pagination)); ?>
</div>
<div class="extension-information">
    <h2>Yiinfinite-Scroll</h2>
    <p>This extension uses the infinite scroll jQuery plugin, from http://www.infinite-scroll.com/ to create an infinite scrolling pagination, like in twitter. This kind of pagination is also called Endless Scroll.</p>
    <p>Scroll down and see the magic happen!</p>
</div>
