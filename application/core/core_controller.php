<?php
class core_controller
{
    public $model;
    public $view;


    public function __construct()
    {
        $this->view = new core_view();
        $this->model = new core_model();
    }


    public function actionIndex($location)
    {
        $this->model->dbCconnect();
        $this->view->generate("template.phtml", $location);
    }
    
}
    
