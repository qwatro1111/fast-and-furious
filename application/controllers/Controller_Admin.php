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
        $data = $this->model->get_data();
        $this->view->generate('admin_list_view.php', 'template_admin_view.php', $data);
    }

    public function action_films() {
        $data = $this->model->get_data();
        $this->view->generate('admin_list_view.php', 'template_admin_view.php', $data);
    }

    public function action_edit_option() {
        $data = $this->model->get_data();
        $this->view->generate('admin_edit_view.php', 'template_admin_view.php', $data);
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
        $data = $this->model->get_data();
        $this->view->generate('admin_edit_view.php', 'template_admin_view.php', $data);
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
        $data = $this->model->get_data();
        $this->view->generate('admin_edit_view.php', 'template_admin_view.php', $data);
    }

    public function action_add_film() {
        $data = $this->model->get_data();
        $this->view->generate('admin_edit_view.php', 'template_admin_view.php', $data);
    }

    public function action_add_actor() {
        $data = $this->model->get_data();
        $this->view->generate('admin_edit_view.php', 'template_admin_view.php', $data);
    }

//   public function action_category() {
//        $data = $this->model->get_data_category(filter_input(INPUT_GET, 'id'));
//        $this->view->generate('category_view.php', null, $data);
//    }
}
