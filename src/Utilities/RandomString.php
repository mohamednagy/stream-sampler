<?php


namespace Utilities;

/**
 *  Class RandomString
 */

class RandomString implements RandomStringInterface{

	/**
	 * @param  int 		$length
	 * @return string
	 */
	function generate($length){
		return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
	}
}











?>