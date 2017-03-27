<?php

 namespace StreamSampler;
 

/**
 * Interface ReservoirSamplerInterface
 */

 interface ReservoirSamplerInterface {


 	/**
 	 * get sample from input steam
 	 * @param int      $length
 	 * @return array
 	 */
 	function getSample($length);


 }











?>