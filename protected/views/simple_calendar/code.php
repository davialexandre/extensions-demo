<p class="file">controllers/Simple_CalendarController.php</p>
<?php
$controller_code = '
    <?php
        public function actionIndex() {
            $selected_date = $this->getSelectedDate();
            $this->render("index", array("selected_date" => $selected_date));
        }
        
        private function getSelectedDate() {
            $year = $month = $day = null;
            $selected_date = null;

            if(isset($_GET["year"]) && isset($_GET["month"]) && isset($_GET["day"])) {
                $year = filter_input(INPUT_GET, "year", FILTER_VALIDATE_INT);
                $month = filter_input(INPUT_GET, "month", FILTER_VALIDATE_INT);
                $day = filter_input(INPUT_GET, "day", FILTER_VALIDATE_INT);
            }

            if($year && $month && $day) {
                $selected_date = "$month/$day/$year";
            }
        
            return $selected_date;
        }
    ?>
';?>
<div class="code">
    <?php highlight_string($controller_code); ?>
</div>

<p class="file">views/simple_calendar/index.php</p>
<?php
$view_code = '
<div id="demo-area">
    <p>Please, click on a date in the calendar:</p>
    <?php $this->widget("ext.simple-calendar.SimpleCalendarWidget"); ?>
    <?php if($selected_date): ?>
        <p class="selected-date">The selected date is: <?php echo $selected_date; ?></p>
    <?php endif; ?>    
</div>
';
?>
<div class="code">
    <?php highlight_string($view_code); ?>
</div>
