<?php

use Exercise\Exercise;

class Test0 extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function exercise_exists() {
        $exercise = new Exercise();
    }
}
