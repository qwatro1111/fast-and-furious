<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the 

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
/**
 * Выполнение индексного действия
 */
    
    public function action_index() {
	 /**
	 * Проверяем отправлен ли запрос с GET['id']
	 */
        if (isset($_REQUEST['id'])) {
	     /**
	     * Получаем данные из БД
	     */
            $data = $this->model->get_date($_REQUEST['id']);
	    /**
	     * Если длина строки $data больше 0, то выводим контент на страницу
	     */
            if (strlen($data) > 0) {
                $this->view->generate('films_view.php', null, $data);
            } else {
		/**
		 * Генерируем ошибку 404
		 */
                header('Location: /404');
            }
        } else {
	    /**
	  * Получаем данные из БД
	  */
            $data = $this->model->get_date();
	       /**
	     * Выводим фильм с id=1
	     */
            $this->view->generate('films_view.php', null, $data);
        }
    }

}
