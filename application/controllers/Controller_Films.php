<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller_Films
 *
 * @author web
 */
class Controller_Films extends Controller {

    public function __construct() {
        parent::__construct();
        $this->model = new Model_Films;
    }

    public function action_index() {
        if (isset($_REQUEST['id'])) {
            $data = $this->model->get_date($_REQUEST['id']);
            if (strlen($data) > 0) {
                $this->view->generate('films_view.php', null, $data);
            } else {
                header('Location: /404');
            }
        } else {
            $data = $this->model->get_date();
            $this->view->generate('films_view.php', null, $data);
        }
    }

}
