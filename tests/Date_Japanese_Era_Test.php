<?php

namespace Date_Japanese_Era\Test;

use Date_Japanese_Era\Date_Japanese_Era;
use PHPUnit\Framework\TestCase;

class Date_Japanese_Era_Test extends TestCase
{
    /**
     * @return void
     * @throws \Date_Japanese_Era\Date_Japanese_Era_Exception
     */
    public function testConstructorWithInvalidArgument()
    {
        $this->setExpectedException('\Date_Japanese_Era\Date_Japanese_Era_Exception');

        new Date_Japanese_Era(array());
    }

    /**
     * @return void
     * @throws \Date_Japanese_Era\Date_Japanese_Era_Exception
     */
    public function testConstructorWithInvalidDate()
    {
        $this->setExpectedException('\Date_Japanese_Era\Date_Japanese_Era_Exception');

        new Date_Japanese_Era(array(0, 0, 0));
    }

    /**
     * @return void
     * @throws \Date_Japanese_Era\Date_Japanese_Era_Exception
     */
    public function testConstructorWithDate()
    {
        $era = new Date_Japanese_Era(array(2009, 7, 11));

        $this->assertEquals('平成', $era->name);
        $this->assertEquals('平成', $era->gengou);
        $this->assertEquals(21, $era->year);
        $this->assertEquals('heisei', $era->nameAscii);
    }

    /**
     * @return void
     * @throws \Date_Japanese_Era\Date_Japanese_Era_Exception
     */
    public function testConstructorWithEra()
    {
        $era = new Date_Japanese_Era(array('平成', 21));

        $this->assertEquals(2009, $era->gregorianYear);
    }
}