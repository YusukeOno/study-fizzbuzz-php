<?php

use Root\App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    protected FizzBuzz $FizzBuzz;

    /**
     * @before
     */
    public function 前準備(): void
    {
        $this->FizzBuzz = new FizzBuzz();
    }

    /**
     * @test
     */
    public function _1を渡すと文字列1を返す(): void
    {
        $this->assertEquals('1', $this->FizzBuzz->convert(1));
    }

    /**
     * @test
     */
    public function _2を渡すと文字列2を返す(): void
    {
        $this->assertEquals('2', $this->FizzBuzz->convert(2));
    }

    /**
     * @test
     */
    public function _3を渡すと文字列Fizzを返す(): void
    {
        $this->assertEquals('Fizz', $this->FizzBuzz->convert(3));
    }

    /**
     * @test
     */
    public function _5を渡すと文字列Buzzを返す(): void
    {
        $this->assertEquals('Buzz', $this->FizzBuzz->convert(5));
    }

    /**
     * @test
     */
    public function _15を渡すと文字列FizzBuzzを返す(): void
    {
        $this->assertEquals('FizzBuzz', $this->FizzBuzz->convert(15));
    }
}
