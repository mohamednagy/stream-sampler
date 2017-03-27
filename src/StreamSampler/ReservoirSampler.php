<?php

namespace StreamSampler;




class ReservoirSampler {
    /**
     * @var Traversable  $iterator
     */
	private $iterator;


	function __construct(\Traversable $iterator){

		$this->iterator = $iterator;

	}


    /**
     * @param  int      $length
     * @return array    $reservoir
     */
	function getSample($length){

		$reservoir = [];
        $i         = 0;
        foreach ($this->iterator as $iterator) {
            if ($i < $length) {
                $reservoir[$i] = $iterator;
            } else {
                $random = (int)mt_rand(0, $i);
                if ($random < $length) {
                    $reservoir[$random] = $iterator;
                }
            }
            $i++;
        }
        return $reservoir;
	}



}



?>