<?php

class core_loader
{
    public static $menu;
    private static $menuLoad;
    public static $controller;
    public static $controllerAction;
    public static $location;

    private function __construct()
    {
        self::$menu = simplexml_load_file('application/menu.xml');
    }
    /**
     * makes olnly one object
     * @return  object
     */
    public static function load()
    {
        if (!isset(self::$menuLoad)) {
            self::$menuLoad = new core_loader;
        }
        return self::$menuLoad;
    }
    /**
     * get current controller from XML
     * @return string
     */
    public static function getCurrentController()
    {
        if (!isset(self::$controller)) {
            self::$controller = 'notFound_controller404';
            foreach (self::$menu->item as $item) {
                if ($_SERVER["REQUEST_URI"] == $item->href) {
                    self::$controller = (string)$item->controller;
                    self::$location = (string)$item->location;
                }
            }
        }
        return self::$controller;
    }
    public static function getCurrentLocation()
    {
        return self::$location;
    }
}
