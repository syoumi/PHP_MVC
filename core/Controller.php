<?php
/**
 * Created by PhpStorm.
 * User: syoumi
 * Date: 19/11/17
 * Time: 12:47 م
 */

class Controller
{
    protected $loader;

    public function __construct() {
        $this->loader = new Loader();
        $this->init_models();
    }

    private function init_models() {
        global $config;
        foreach ($config['models'] as $model) {
            $this->init_model($model);
        }
    }

    private function init_model($model) {
        $class = $model.'_model';
        require "models/$class.php";
        $variable = strtolower($model);
        $this->$variable = new $class();
    }
}