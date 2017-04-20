<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller_Home
 *
 * @author web
 */
class Controller_Home extends Controller{
    public function action_index() {
	$this->view->generate('home_view.php');
    }
}
