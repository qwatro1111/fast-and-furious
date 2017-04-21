<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_Portfolio
 *
 * @author web
 */
class Model_Admin extends Model {

    protected $db;

    public function __construct() {
        $this->db = new mysqli(DB['host'], DB['user'], DB['passwd'], DB['db']);
        $this->db->query("SET CHARSET utf8");
    }

    //get options
    public function get_data() {
        $query_options = "SELECT * FROM options;";
        $result_options = $this->db->query($query_options);
        if ($result_options) {
            $options = array();
            while ($option = $result_options->fetch_assoc()) {
                $options[] = $option;
            }
            return $options;
        }
    }

    public function get_actors() {
        $query_options = "SELECT * FROM options;";
        $result_options = $this->db->query($query_options);
        if ($result_options) {
            $options = array();
            while ($option = $result_options->fetch_assoc()) {
                $options[] = $option;
            }
            return $options;
        }
    }

    public function get_films() {
        $query_options = "SELECT * FROM options;";
        $result_options = $this->db->query($query_options);
        if ($result_options) {
            $options = array();
            while ($option = $result_options->fetch_assoc()) {
                $options[] = $option;
            }
            return $options;
        }
    }

    public function edit_option() {
        $query_options = "SELECT * FROM options;";
        $result_options = $this->db->query($query_options);
        if ($result_options) {
            $options = array();
            while ($option = $result_options->fetch_assoc()) {
                $options[] = $option;
            }
            return $options;
        }
    }

    public function edit_film() {
        $query_options = "SELECT * FROM options;";
        $result_options = $this->db->query($query_options);
        if ($result_options) {
            $options = array();
            while ($option = $result_options->fetch_assoc()) {
                $options[] = $option;
            }
            return $options;
        }
    }

    public function edit_actor() {
        $query_options = "SELECT * FROM options;";
        $result_options = $this->db->query($query_options);
        if ($result_options) {
            $options = array();
            while ($option = $result_options->fetch_assoc()) {
                $options[] = $option;
            }
            return $options;
        }
    }

    public function delete_option() {
        $query_options = "SELECT * FROM options;";
        $result_options = $this->db->query($query_options);
        if ($result_options) {
            $options = array();
            while ($option = $result_options->fetch_assoc()) {
                $options[] = $option;
            }
            return $options;
        }
    }

    public function delete_film() {
        $query_options = "SELECT * FROM options;";
        $result_options = $this->db->query($query_options);
        if ($result_options) {
            $options = array();
            while ($option = $result_options->fetch_assoc()) {
                $options[] = $option;
            }
            return $options;
        }
    }

    public function delete_actor() {
        $query_options = "SELECT * FROM options;";
        $result_options = $this->db->query($query_options);
        if ($result_options) {
            $options = array();
            while ($option = $result_options->fetch_assoc()) {
                $options[] = $option;
            }
            return $options;
        }
    }

    public function add_option() {
        $query_options = "SELECT * FROM options;";
        $result_options = $this->db->query($query_options);
        if ($result_options) {
            $options = array();
            while ($option = $result_options->fetch_assoc()) {
                $options[] = $option;
            }
            return $options;
        }
    }

    public function add_film() {
        $query_options = "SELECT * FROM options;";
        $result_options = $this->db->query($query_options);
        if ($result_options) {
            $options = array();
            while ($option = $result_options->fetch_assoc()) {
                $options[] = $option;
            }
            return $options;
        }
    }

    public function add_actor() {
        $query_options = "SELECT * FROM options;";
        $result_options = $this->db->query($query_options);
        if ($result_options) {
            $options = array();
            while ($option = $result_options->fetch_assoc()) {
                $options[] = $option;
            }
            return $options;
        }
    }

}
