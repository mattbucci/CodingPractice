<?php namespace Exercise;

class Exercise
{
    function seqDigitalRoots($start, $end)
    {
        $seq = $this->generateSequence($start, $end);
        $roots = $this->digitalRoots($seq);
        return $this->filterByFrequency($roots);
    }

    function filterByFrequency(array $input)
    {
        $counts = array_count_values($input);
        $max = max($counts);
        $filteredCounts = array_filter($counts, function($count) use ($max) {
            if ($count >= $max) {
                return true;
            }
        });
        $frequentTerms =  array_keys($filteredCounts);
        sort($frequentTerms);
        return $frequentTerms;
    }

    function digitalRoots(array $numbers)
    {
        return array_map(function($number) {
            return $this->digitalRoot($number);
        }, $numbers);
    }

    function generateSequence($start, $end)
    {
        $data = [];

        for ($i = $start; $i <= $end; $i++) {
            $data[] = $i;
        }

        return $data;
    }

    function digitalRoot($number)
    {
        // optimized
        return intval($number - 9*floor(($number - 1) / 9));

        // original solution
//        $charArray = str_split(strval($number));
//
//        do {
//            $sum = 0;
//            foreach ($charArray as $digit) {
//                $sum += intval($digit);
//            }
//            $charArray = str_split(strval($sum));
//        } while ($sum >= 10);
//
//        return $sum;
    }
}
