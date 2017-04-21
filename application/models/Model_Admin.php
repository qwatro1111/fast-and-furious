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
            $data['data'] = $options;
            $data['active_options'] = 'active';
            $data['title'] = 'Options';
            return $data;
        }
    }

    public function get_actors() {
        $query_actors = "SELECT * FROM actors;";
        $result_actors = $this->db->query($query_actors);
        if ($result_actors) {
            $actors = array();
            while ($actor = $result_actors->fetch_assoc()) {
                $actors[] = $actor;
            }
            $data['data'] = $actors;
            $data['unit'] = 'actor';
            $data['active_actors'] = 'active';
            $data['title'] = 'Actors';
            return $data;
        }
    }

    public function get_films() {
        $query_films = "SELECT * FROM films;";
        $result_films = $this->db->query($query_films);
        if ($result_films) {
            $films = array();
            while ($film = $result_films->fetch_assoc()) {
                $films[] = $film;
            }
            $data['data'] = $films;
            $data['unit'] = 'film';
            $data['active_films'] = 'active';
            $data['title'] = 'Films';
            return $data;
        }
    }

    public function edit_option($id, $name, $value) {
        $query_update = "UPDATE `options` SET `name` = '$name', `value` = '$value' WHERE `options`.`id` = $id;";
        $this->db->query($query_update);
    }

    public function edit_film($name, $description, $id, $old_photo) {
        if ($_FILES['photo']['size'] === 0) {
            $photo = $old_photo;
        } else {
            $uplPhoto = new uplImage('images/films', 'photo');
            $photo = 'images/films/' . $uplPhoto->uploadImage();
        }
        $query_edit = "UPDATE `fast_and_furious`.`films` SET `name` = '$name', `photo` = '$photo', `description` = '$description' WHERE `films`.`id` = $id;";
        $this->db->query($query_edit);
    }

    public function edit_actor($name, $description, $id, $old_photo) {
        if ($_FILES['photo']['size'] === 0) {
            $photo = $old_photo;
        } else {
            $uplPhoto = new uplImage('images/actors', 'photo');
            $photo = 'images/actors/' . $uplPhoto->uploadImage();
        }
        $query_edit = "UPDATE `fast_and_furious`.`actors` SET `name` = '$name', `photo` = '$photo', `description` = '$description' WHERE `films`.`id` = $id;";
        $this->db->query($query_edit);
    }

    public function delete_option($id) {
        $query_delete = "DELETE FROM `options` WHERE `options`.`id` = $id;";
        $this->db->query($query_delete);
    }

    public function delete_film($id) {
        $query_delete = "DELETE FROM `films` WHERE `films`.`id` = $id;";
        $this->db->query($query_delete);
    }

    public function delete_actor($id) {
        $query_delete = "DELETE FROM `actors` WHERE `actors`.`id` = $id;";
        $this->db->query($query_delete);
    }

    public function add_option($name, $value) {
        $query_add = "INSERT INTO `options` (`id`, `name`, `value`) VALUES (NULL, '$name', '$value');";
        $this->db->query($query_add);
    }

    public function add_film($name, $description) {
        $uplPhoto = new uplImage('images/films', 'photo');
        $photo = 'images/films/' . $uplPhoto->uploadImage();
        $query_add = "INSERT INTO `films` (`id`, `name`, `photo`, `description`) VALUES (NULL, '$name', '$photo', '$description');";
        $this->db->query($query_add);
    }

    public function add_actor($name, $description) {
        $uplPhoto = new uplImage('images/actors', 'photo');
        $photo = 'images/actors/' . $uplPhoto->uploadImage();
        $query_add = "INSERT INTO `actors` (`id`, `name`, `photo`, `description`) VALUES (NULL, '$name', '$photo', '$description');";
        $this->db->query($query_add);
    }

}
