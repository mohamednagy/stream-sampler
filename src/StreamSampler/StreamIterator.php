<?php 


namespace StreamSampler;




/**
 * Class StreamIterator 
 */


class StreamIterator implements \IteratorAggregate{
	/**
	 * input path
	 * @var string
	 */
	private $path;


	function __construct($path){
		$this->path = $path;
	}

	/**
	 * {@inheritDoc}
	 */
	function getIterator(){

		$stream = fopen($this->path, 'r');

		if(!$stream){
			throw new \Exception("Error Processing Request", 1);
			
		}

		while ($line = fgetc($stream)) {
            yield $line;
        }

        fclose($stream);
	}


}







 ?>