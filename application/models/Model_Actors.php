<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_Actors
 *
 * @author web
 */
class Model_Actors extends Model {

    protected $db;

    public function __construct() {
        $this->db = new mysqli(DB['host'], DB['user'], DB['passwd'], DB['db']);
    }

    public function get_date($a = NULL) {
        $query = "SELECT * FROM `actors` WHERE id = ".$a.";";
        $result = $this->db->query($query);
        $main = '';
        if (empty($result)) {
            $main.= header('Location: /actors?id=1');
        } else {
            while($res = $result->fetch_assoc()){
                  $main = serialize($res);
            }
        }
        return $main;
    }


}
