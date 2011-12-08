<?php

class Simple_CalendarController extends Controller {
    
    public function actionIndex() {
        $selected_date = $this->getSelectedDate();
        $this->render('index', array('selected_date' => $selected_date));
    }
    
    public function actionCode() {
        $this->renderPartial('code');
    }
    
    private function getSelectedDate() {
        $year = $month = $day = null;
        $selected_date = null;
        
        if(isset($_GET['year']) && isset($_GET['month']) && isset($_GET['day'])) {
            $year = filter_input(INPUT_GET, 'year', FILTER_VALIDATE_INT);
            $month = filter_input(INPUT_GET, 'month', FILTER_VALIDATE_INT);
            $day = filter_input(INPUT_GET, 'day', FILTER_VALIDATE_INT);
        }
        
        if($year && $month && $day) {
            $selected_date = "$month/$day/$year";
        }
        
        return $selected_date;
    }
    
}
?>
