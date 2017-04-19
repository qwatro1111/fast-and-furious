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
class Model_Portfolio extends Model {

    public function get_date() {
	return array(
	    array(
		'Year' => '2012',
		'Site' => 'http://DunkelBeer.ru',
		'Description' => 'Промо-сайт темного пива Dunkel от немецкого производителя Löwenbraü выпускаемого в России пивоваренной компанией "CАН ИнБев".'
	    ),
	    array(
		'Year' => '2012',
		'Site' => 'http://ZopoMobile.ru',
		'Description' => 'Русскоязычный каталог китайских телефонов компании Zopo на базе Android OS и аксессуаров к ним.'
	    ),
		// todo
	);
    }

}
