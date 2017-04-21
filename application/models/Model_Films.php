<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_Films
 *
 * @author web
 */
class Model_Films extends Model {

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
     * function get array films from Db 
     * @return type
     */
    public function get_date($a = NULL) {
        /**
         * select all from Db - films where id = null
         */
        $query = "SELECT * FROM `films` WHERE id = " . $a . ";";
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
            $main.= header('Location: /films?id=1');
            /**
             * Extract the resulting series in the form of an associative array and generate a suitable variable for the storage representation
             */
        } else {
            while ($res = $result->fetch_assoc()) {
                $main = serialize($res);
            }
        }
        /**
         * return serialize array
         */
        return $main;
    }

}
