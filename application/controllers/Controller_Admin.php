<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller_Admin
 *
 * @author Vitarr
 */
class Controller_Admin extends Controller {

    public function __construct() {
        parent::__construct();
        $this->model = new Model_Admin;
    }

    public function action_index() {
        $data = $this->model->get_data();
        $this->view->generate('admin_home_view.php', 'template_admin_view.php', $data);
    }

    public function action_actors() {
        $data = $this->model->get_actors();
        $this->view->generate('admin_list_view.php', 'template_admin_view.php', $data);
    }

    public function action_films() {
        $data = $this->model->get_films();
        $this->view->generate('admin_list_view.php', 'template_admin_view.php', $data);
    }

    public function action_edit_option() {
        $this->model->edit_option(filter_input(INPUT_POST, 'id'), filter_input(INPUT_POST, 'name'), filter_input(INPUT_POST, 'value'));
        header('Location: /admin');
    }

    public function action_edit_film() {
        $data = $this->model->get_data();
        $this->view->generate('admin_edit_view.php', 'template_admin_view.php', $data);
    }

    public function action_edit_actor() {
        $data = $this->model->get_data();
        $this->view->generate('admin_edit_view.php', 'template_admin_view.php', $data);
    }

    public function action_delete_option() {
        $this->model->delete_option(filter_input(INPUT_POST, 'id'));
        header('Location: /admin');
    }

    public function action_delete_film() {
        $data = $this->model->get_data();
        $this->view->generate('admin_edit_view.php', 'template_admin_view.php', $data);
    }

    public function action_delete_actor() {
        $data = $this->model->get_data();
        $this->view->generate('admin_edit_view.php', 'template_admin_view.php', $data);
    }

    public function action_add_option() {
        $this->model->add_option(filter_input(INPUT_POST, 'name'), filter_input(INPUT_POST, 'value'));
        header('Location: /admin');
    }

    public function action_add_film() {
        $this->model->add_film(filter_input(INPUT_POST, 'name'), filter_input(INPUT_POST, 'description'));
        header('Location: /admin/films');
    }

    public function action_add_actor() {
        $this->model->add_actor(filter_input(INPUT_POST, 'name'), filter_input(INPUT_POST, 'description'));
        header('Location: /admin/actors');
    }

}
