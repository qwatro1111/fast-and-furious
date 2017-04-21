<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Menu
 *
 * @author web
 */
class Menu {

    protected $db;

    public function __construct() {
	$this->db = new mysqli(DB['host'], DB['user'], DB['passwd'], DB['db']);
    }

    function getActors() {
	$query = "SELECT id, name FROM actors;";
        $result = $this->db->query($query);
        $main = array();
	if($result){
	    while($res = $result->fetch_assoc()){
                  $main[] = serialize($res);
            }
	}
	return serialize($main);
    }
    
    function getFilms() {
	$query = "SELECT id, name FROM films;";
        $result = $this->db->query($query);
        $main = array();
	if($result){
	    while($res = $result->fetch_assoc()){
                  $main[] = serialize($res);
            }
	}
	return serialize($main);
    }

}
