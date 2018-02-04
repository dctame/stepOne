<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 28.12.2017
 * Time: 12:24
 */
class notFound_controller404
{
    public $model;
    public $view;


    public function __construct()
    {
        $this->view = new main_view();
    }

    public function actionIndex()
    {
        $this->view->generate('template.phtml', '404.phtml');
    }

}
