<?php

declare(strict_types=1);

namespace App\Util;

class RandomNumberSetGenerator
{
    public function __construct(
        public int $uniqueNumbers = 100,
        public int $minNumber = 1,
    ) {}

    /**
     * @return array
     */
    public function generateUnique(): array
    {
        $picked = [];
        $uniqueNumbers = $this->uniqueNumbers;

        return array_map(function () use(&$picked, $uniqueNumbers) {
            do {
                $rand = rand($this->minNumber, $uniqueNumbers);
            } while(in_array($rand, $picked));

            $picked[] = $rand;

            return $rand;
        }, array_fill(0, $uniqueNumbers, null));
    }

    /**
     * @return array
     */
    public function generateNonUnique(): array
    {
        return array_map(function () {
            return rand($this->minNumber, $this->uniqueNumbers);
        }, array_fill(0, $this->uniqueNumbers, null));
    }
}
