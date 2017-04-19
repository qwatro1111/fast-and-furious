<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author web
 */
abstract class Controller {
    /**
     *
     * @var Model 
     */
    public $model;

    /**
     *
     * @var View 
     */
    public $view;

    function __construct() {
	$this->view = new View();
    }

    abstract function action_index();
}
