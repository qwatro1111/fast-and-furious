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
/**
 * conect to Db
 */
    public function __construct() {
        $this->db = new mysqli(DB['host'], DB['user'], DB['passwd'], DB['db']);
    }
/**
 * 
 * @param type $a
 * function get array actors from Db 
 * @return type
 */
    public function get_date($a = NULL) {
        /**
         * select all from Db - actors where id = null
         */
        $query = "SELECT * FROM `actors` WHERE id = ".$a.";";
        /**
         * Record the result of the sample in $result
         */
        $result = $this->db->query($query);
        /**
         * $main is empty
         */
        $main = '';
        /**
         * chek if empty go to home page
         */
        if (empty($result)) {
            $main.= header('Location: /actors?id=1');
        } else {
            /**
             *Extract the resulting series in the form of an associative array and generate a suitable variable for the storage representation
             */
            while($res = $result->fetch_assoc()){
                  $main = serialize($res);
            }
        }
        /**
         * return serialize array
         */
        return $main;
    }


}
