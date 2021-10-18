<?php

declare(strict_types=1);


class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSum(array $nums, int $target): array
    {
        $map = [];
        
        for ($i = 0; $i < count($nums); $i++) {
            $complement = $target - $nums[$i];
            
            if (array_key_exists($complement, $map) && $map[$complement] != $i) {
                return [$i, $map[$complement]];
            }
            
            $map[$nums[$i]] = $i;
        }
        
        throw new InvalidArgumentException('Invalid arguments');
    }
}

$result = (new Solution())->twoSum([2, 7, 11, 15], 9);
print_r($result);