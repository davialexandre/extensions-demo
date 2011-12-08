<div class="extension-information">
    <h2>Simple Calendar</h2>
    <p>This is a simple Yii widget that draws a simple calendar. PHP only, no Javascript.</p>
    <ul id="extension-links">
        <li><?php echo CHtml::link('Show me the code!', array('simple_calendar/code'), array('class' => 'colorbox link-code')); ?></li>
        <li><?php echo CHtml::link('Fork me at Github!', 'https://github.com/davialexandre/simple-calendar', array('class' => 'link-repo-github', 'target' => '_blank')); ?></li>
    </ul>
</div>
<div id="demo-area">
    <p>Please, click on a date in the calendar:</p>
    <?php $this->widget('ext.simple-calendar.SimpleCalendarWidget'); ?>
    <?php if($selected_date): ?>
        <p class="selected-date">The selected date is: <?php echo $selected_date; ?></p>
    <?php endif; ?>    
</div>
