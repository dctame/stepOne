<?php
class main_controller extends core_controller
{
    public $model;
    public $view;


    public function __construct()
    {
        $this->view = new main_view();
    }

    public function actionIndex($location)
    {
        $this->view->generate('templateMain.phtml', $location, $Gold);
    }
}
    
