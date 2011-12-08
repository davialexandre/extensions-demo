<div class="extension-information">
    <h2>Simple Calendar</h2>
    <p>This is a simple Yii widget that draws a simple calendar. PHP only, no Javascript.</p>
    <p><?php echo CHtml::link('Show me the code!', array('simple_calendar/code'), array('class' => 'colorbox')); ?></p>
</div>
<div id="demo-area">
    <p>Please, click on a date in the calendar:</p>
    <?php $this->widget('ext.simple-calendar.SimpleCalendarWidget'); ?>
    <?php if($selected_date): ?>
        <p class="selected-date">The selected date is: <?php echo $selected_date; ?></p>
    <?php endif; ?>    
</div>
