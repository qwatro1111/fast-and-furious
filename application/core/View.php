<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author web
 */
class View {

    protected $template_view = "template_view.php"; // здесь можно указать общий вид по умолчанию.

    function generate($content_view, $template_view = null, $data = null) {
	if (!is_null($template_view)) {
	    $this->template_view = $template_view;
	}
	include_once 'application/views/tamplates/' . $this->template_view;
    }

}
