<?php

use Exercise\Exercise;

class Test0 extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function exercise_exists() {
        $exercise = new Exercise();
    }

    /** @test */
    public function it_can_handle_empty_array() {
        $exercise = new Exercise();
        $this->assertEquals(false, $exercise->averageIsInteger([]));
    }

    /** @test */
    public function it_can_handle_a_basic_array() {
        $exercise = new Exercise();
        $this->assertEquals(true, $exercise->averageIsInteger([1, 2, 3]));
    }

    /** @test */
    public function it_can_handle_a_non_passing_array() {
        $exercise = new Exercise();
        $this->assertEquals(false, $exercise->averageIsInteger([1, 2, 2]));
    }

    /** @test */
    public function it_can_handle_a_more_complex_array() {
        $exercise = new Exercise();
        $this->assertEquals(true, $exercise->averageIsInteger([1, 9, 8, 2]));
    }
}
