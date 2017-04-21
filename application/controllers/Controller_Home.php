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
    
    public function __construct() {
        parent::__construct();
        $this->model = new Model_Home();
    }
    
    public function action_index() {
        $data=$this->model->get_date();
        $this->view->generate('home_view.php', null, $data);
    }
}
