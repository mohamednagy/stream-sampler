<?php

namespace Tests;

use StreamSampler\ReservoirSampler;

class ReservoirSamplerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ReservoirSampler
     */
    private $sampler;

    protected function setUp(){
        $iterator = new \ArrayIterator([0,1,2,3,4,5,6,7,8,9]);
        $this->sampler = new ReservoirSampler($iterator);
    }


    public function testReservoirSampler(){
        $this->assertCount(1, $this->sampler->getSample(1));
        $this->assertCount(5, $this->sampler->getSample(5));
        $this->assertCount(10, $this->sampler->getSample(10));
    }
}