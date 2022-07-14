<?php

use PHPUnit\Framework\TestCase;

use Search\DigitalCep\Search;

class SearchTest extends TestCase
{
    public function testGetAddressFromZipCodeDefaultUsage() {
        $result  = "ok";

        $this->assertEquals('ok1', $result);
    }
}
