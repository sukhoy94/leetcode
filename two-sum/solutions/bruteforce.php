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
        for ($i = 0; $i < count($nums) - 1; $i++) {
            for ($j = $i + 1; $j < count($nums); $j++) {
                if ($nums[$i] + $nums[$j] == $target) {
                    return [$i, $j];
                }
            }
        }
        
        throw new InvalidArgumentException('Invalid arguments');
    }
}

$result = (new Solution())->twoSum([2,7,11,15], 9);
print_r($result);