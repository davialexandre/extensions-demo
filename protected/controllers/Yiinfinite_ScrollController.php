<?php

class Yiinfinite_scrollController extends Controller {
    
    
    public function actionIndex() {
        $data = require_once(Yii::getPathOfAlias('application.data.array_data').'.php');
        $provider = new CArrayDataProvider($data, 
            array(
                'pagination' => array(
                    'pageSize' => 15
                )
           )
        );
        
        $this->render('index', array('provider' => $provider));
    }
    
    public function actionCode() {
        $this->renderPartial('code');
    }
}


?>
