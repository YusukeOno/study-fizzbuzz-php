<?php

declare(strict_types=1);

namespace Root\App;

class FizzBuzz
{
    public function exec(): void
    {
        // 1から100の数をプリントする
        for ($i = 1; $i <= 100; ++$i) {
            echo $this->convert($i) . "\n";
        }
    }

    public function convert(int $num): string
    {
        // 3と5の倍数の時は"FizzBuzz"を返す
        if ($num % 3 === 0 && $num % 5 === 0) {
            return 'FizzBuzz';
        }
        // 3の倍数の時は"Fizz"を返す
        if ($num % 3 === 0) {
            return 'Fizz';
        }
        // 5の倍数の時は"Buzz"を返す
        if ($num % 5 === 0) {
            return 'Buzz';
        }

        return (string) $num;
    }
}
