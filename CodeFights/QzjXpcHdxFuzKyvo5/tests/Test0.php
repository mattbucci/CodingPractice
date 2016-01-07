<?php

use Exercise\Exercise;

class Test0 extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function exercise_exists() {
        $exercise = new Exercise();
    }

    /** @test */
    public function it_can_calculate_digital_root() {
        $exercise = new Exercise();
        $this->assertEquals(7, $exercise->digitalRoot(65536));
    }

    /** @test */
    public function it_can_generate_a_sequence() {
        $exercise = new Exercise();
        $this->assertEquals([1,2,3], $exercise->generateSequence(1,3));
    }

    /** @test */
    public function it_can_solve_a_basic_example() {
        $exercise = new Exercise();
        $this->assertEquals([1,2,3,4,5], $exercise->seqDigitalRoots(1,5));
    }

    /** @test */
    public function it_can_solve_a_sequence_of_1() {
        $exercise = new Exercise();
        $this->assertEquals([7], $exercise->seqDigitalRoots(7,7));
    }

    /** @test */
    public function it_can_solve_a_complex_example() {
        $exercise = new Exercise();
        $this->assertEquals([3,4], $exercise->seqDigitalRoots(12,22));
    }

    /** @test */
    public function it_is_optimized() {
        $exercise = new Exercise();
        $this->assertEquals([1], $exercise->seqDigitalRoots(0,1000000000000000));
    }

}
