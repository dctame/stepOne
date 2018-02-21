<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 28.12.2017
 * Time: 12:43
 */
class game_controller extends core_controller
{
    public $model;
    public $view;


    public function __construct()
    {
        $this->view = new game_view();
        $this->model = new game_model();
    }

    public function actionIndex($location)
    {
        $UserGold = $this->model->getCoinCount();
        $this->view->generate('template.phtml', $location, $UserGold);
    }
}
