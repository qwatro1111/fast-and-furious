<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_Home
 *
 * @author web
 */
class Model_Home extends Model{
    
    protected $db;

    public function __construct() {
        $this->db = new mysqli(DB['host'], DB['user'], DB['passwd'], DB['db']);
    }

    public function get_date() {
        $query = "SELECT * FROM `options`";
        $result = $this->db->query($query);
        if ($result){
            while($res = $result->fetch_assoc()){
                  $main = serialize($res);
            }
        }
        return $main;
    }
}
