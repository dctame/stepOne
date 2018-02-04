<?php
class core_route
{
    static public function start()
    {
        core_loader::load();
        $controllerName = core_loader::getCurrentController();
        $location = core_loader::getCurrentLocation();
        $Controller = new $controllerName();
        $Controller->actionIndex($location);
    }
}
