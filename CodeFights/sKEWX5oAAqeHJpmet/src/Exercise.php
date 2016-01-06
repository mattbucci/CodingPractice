<?php namespace Exercise;

class Exercise
{
    public function averageIsInteger(array $input)
    {
        if (count($input) == 0) {
            return false;
        }

        $average = array_sum($input) / count($input);
        return $this->isInteger($average);
    }

    private function isInteger($number) {
        return fmod($number, 1) == 0;
    }

}
