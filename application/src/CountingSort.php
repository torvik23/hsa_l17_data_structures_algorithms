<?php

declare(strict_types=1);

namespace App;

class CountingSort
{
    /**
     * @param array $input
     *
     * @return array
     */
    public function execute(array $input): array
    {
        $min = min($input);
        $max = max($input);
        $count = [];
        foreach ($input as $value) {
            $count[$value] = isset($count[$value]) ? $count[$value]+1 : 1;
        }

        $result = [];
        for ($i = $min; $i <= $max; $i++) {
            if (isset($count[$i])) {
                while ($count[$i]-- > 0) {
                    $result[] = $i;
                }
            }
        }

        return $result;
    }

    /**
     * @param array $input
     *
     * @return void
     */
    public function printCli(array $input): void
    {
        print_r($input) . PHP_EOL;
    }
}
