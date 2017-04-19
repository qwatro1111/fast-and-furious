<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_Gallery
 *
 * @author web
 */
class Model_Gallery extends Model {

    private $db;

    public function __construct() {
	$this->db = new mysqli(DB['host'], DB['user'], DB['passwd'], DB['db']);
    }

    public function get_date() {
	$query = "SELECT categories.name, cat_id, url 
	FROM categories 
	INNER JOIN img on categories.id=cat_id 
	GROUP BY categories.name";
	$result = $this->db->query($query);
	if ($result) {
	    $str = '';
	    $str .= '<h1>Галерея</h1>';
	    $str .= '<div>';
	    while ($res = $result->fetch_assoc()) {
		$str .= "<a href='gallery/cat?id=" . $res['cat_id'] . "'><img src='http://". $_SERVER['HTTP_HOST'] . "/" . $res['url'] . "' width='100'/></a><br/>";
	    }
	    $str .= '</div>';
	    return $str;
	}
    }

    function get_date_cat($i) {
	$query = "SELECT * FROM img WHERE cat_id = $i;";
	$result = $this->db->query($query);
	$str = '';
	if ($result) {
	    while ($res = $result->fetch_assoc()) {
		$str .= "<img src='http://". $_SERVER['HTTP_HOST'] . "/" . $res[url] . "' width='250' style='margin: 10px;'/>";
	    }    
	}
	return $str;
    }
}
