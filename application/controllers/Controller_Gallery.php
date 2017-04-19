<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller_Gallery
 *
 * @author web
 */
class Controller_Gallery extends Controller {

    public function __construct() {
	parent::__construct();
	$this->model = new Model_Gallery;
    }

    public function action_index() {
	$data = $this->model->get_date();
	$this->view->generate('gallery_view.php', null, $data);
    }

    public function action_cat() {
	$data = $this->model->get_date_cat($_REQUEST['id']);
	if (strlen($data) > 0) {
	    $this->view->generate('gallery_view.php', null, $data);
	} else {
	    header('Location: /404');
	}
    }

}
