<?php

namespace FizzBuzz\Tests;

use PHPUnit\Framework\TestCase;
use function FizzBuzz\fizzbuzz;

class FizzBuzzTest extends TestCase {
    public function testReverse(): void {
        $this->assertEquals('Fizz', fizzbuzz(3));
        $this->assertEquals('Fizz', fizzbuzz(33));
        $this->assertEquals('Buzz', fizzbuzz(5));
        $this->assertEquals('Buzz', fizzbuzz(55));
        $this->assertEquals('FizzBuzz', fizzbuzz(15));
        $this->assertEquals('FizzBuzz', fizzbuzz(45));
        $this->assertEquals('7', fizzbuzz(7));
        $this->assertEquals('98', fizzbuzz(98));
    }
}
